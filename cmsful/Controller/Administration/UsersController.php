<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use CMS\Form\Administration\UserType;
use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


/**
 * User Controller
 */
class UsersController extends Controller implements AdminControllerInterface
{

    public function indexAction() {
        $users      = $this->getDoctrine()
                ->getRepository('CMS:User')
                ->findAll();

        return new Response($this->renderView('@styles/backend/users/index.html.twig', [
                    'users'      => $users,
                    'title'      => 'users',
                    'active'     => 'users',
                    'sub_menu'   => 'user.list',
                    'sub_active' => 'users'
        ]));
    }

    public function addAction(Request $request) {
        $config = $this->get('cms.config');
        $userManager = $this->get('cms.user_manager');
        $user = $userManager->createUser();
        
        $form = $this->createForm(UserType::class)
                ->add('password', PasswordType::class)
                ->add('role', EntityType::class, [
                    'choice_label' => 'name',
                    'class'        => 'CMS:Role',
                ])
                ->add('save', SubmitType::class, ['label' => 'Create a User']);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
//            $userManager->createUser($user);
            dump($data);
            $user->setFirstName($data['firstName']);
            $user->setLastName($data['lastName']);
            $user->setUsername($data['username']);
            //$user->setUsernameCanonical(strtolower($data['username']));
            $user->setPlainPassword($data['password']);
            $user->setEmail($data['email']);
            if ($data->getAvatar() !== null) {
                /** @var \Symfony\Component\HttpFoundation\File\UploadedFile $file */
                $avatar = $data->getAvatar();
                
                // Generate a unique name for the file before saving it
                $fileName = md5(uniqid()) . '.' . $avatar->guessExtension();

                $avatar->move($config->get('avatar.path'), $fileName);

                $user->setAvatar($fileName);
            }
            //$user->setEmailCanonical(strtolower($data['email']));
            $user->setLocale($data['locale']);
            foreach($data['role'] as $role) {
                $user->addRole($role->getName());
            }
            $user->setEnabled(true);
            
            $userManager->updateUser($user);

            return $this->redirectToRoute('admin_users_manage');
        }
        return new Response($this->renderView('@styles/backend/users/add.html.twig', [
                    'form'       => $form->createView(),
                    'title'      => 'users',
                    'active'     => 'users',
                    'sub_menu'   => 'user.add',
                    'sub_active' => 'users',
                    'sub_header' => 'Create Account',
        ]));
    }

    public function deleteAction(Request $request) {
        $userManager = $this->get('cms.user_manager');
        $user        = $userManager->findUserBy(['id' => $request->get('id')]);
        if (!$user) {
            throw $this->createNotFoundException(
                    'No user found using this ID ' . $request->get('id')
            );
        }
        $em = $this->getDoctrine()->getManager();

        $em->remove($user);

        $em->flush();

        return $this->redirectToRoute('admin_users_manage');
    }

    public function editAction(Request $request) {
        $translator  = $this->get('translator');
        $userManager = $this->get('cms.user_manager');
        $user        = $userManager->findUserBy(['id' => $request->get('id')]);
        $config		 = $this->get('cms.config');
        $form = $this->createForm(UserType::class, $user)
                ->add('save', SubmitType::class, ['label' => 'update.user']);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
			$userManager->updateUser($data);

            return $this->redirectToRoute('admin_users_manage');
        }
        return new Response($this->renderView('@styles/backend/users/edit.html.twig', [
                    'form'       => $form->createView(),
                    'title'      => 'edit.user',
                    'active'     => 'users',
                    'sub_menu'   => 'user.list',
                    'sub_active' => 'users',
                    'sub_header' => 'edit.user'
        ]));
    }

    public function passAction(Request $request) {
        $userManager = $this->get('cms.user_manager');
        $user        = $userManager->findUserBy(['id' => $request->get('id')]);

        //$formFactory = $this->get('fos_user.change_password.form.factory');
        $form = $this->createFormBuilder()
                ->add('password', RepeatedType::class, [
                    'type'           => PasswordType::class,
                    'required'       => true,
                    'first_options'  => ['label' => 'password'],
                    'second_options' => ['label' => 'repeat.password'],
                ])
                ->add('save', SubmitType::class, ['label' => 'change.pass'])
                ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $data = $form->getData();
                $user->setPlainPassword($data['password']);
                $userManager->updateUser($user, true);

                return $this->redirectToRoute('admin_users_manage');
            }
        }
        return new Response($this->renderView('@styles/backend/users/pass-reset.html.twig', [
                    'form'       => $form->createView(),
                    'title'      => 'users',
                    'active'     => 'users',
                    'sub_menu'   => 'user.list',
                    'sub_active' => 'users',
                    'sub_header' => 'change.pass',
        ]));
    }

    public function roleAction(Request $request) {
        $userManager = $this->get('cms.user_manager');
        $user        = $userManager->findUserBy(['id' => $request->get('id')]);

        $form = $this->createForm(UserType::class, $user)
                ->add('save', SubmitType::class, ['label' => 'update.role']);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            foreach($data['role'] as $role) {
                $user->addRole($role->getName());
            }
            //$userManager->updateUser($user);
            //return $this->redirectToRoute('admin_users_manage');
        }
        return new Response($this->renderView('@styles/backend/users/role.html.twig', [
                    'form'       => $form->createView(),
                    'title'      => 'users',
                    'active'     => 'users',
                    'sub_menu'   => 'user.list',
                    'sub_active' => 'users',
                    'sub_header' => 'edit.role',
        ]));
    }

}
