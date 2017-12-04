<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMS\Form\RoleType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use CMS\Entity\Role;
/**
 * RoleController
 */
class RoleController extends Controller implements AdminControllerInterface
{
    public function addAction(Request $request) {
        $form = $this->createForm(RoleType::class)
                ->add('save', SubmitType::class, ['label' => 'create.role']);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $role = new Role();
            $data = $form->getData();
            
            $role->setName($data['name']);
            $role->setParent($data['parent']);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($role);
            $em->flush();
            
            return $this->redirectToRoute('admin_role_manage');
        }
        return new Response($this->renderView('@styles/backend/role/form.html.twig', [
                    'form'       => $form->createView(),
                    'title'      => 'users',
                    'active'     => 'users',
                    'sub_menu'   => 'add',
                    'sub_active' => 'role',
                    'sub_header'    => 'create.role',
        ]));
    }

    public function deleteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        
        $role = $em->getRepository('CMS:Role')->find($request->get('id'));
        $em->remove($role);
        $em->flush();
        
        return $this->redirectToRoute('admin_role_manage');
    }

    public function editAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $role = $em->getRepository('CMS:Role')->find($request->get('id'));
        $form = $this->createForm(RoleType::class, $role)
                ->add('save', SubmitType::class, ['label' => 'edit.role']);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            
            $data = $form->getData();
            
            $role->setName($data->getName());
            $role->setParent($data->getParent());
            
            $em->persist($role);
            $em->flush();
            
            return $this->redirectToRoute('admin_role_manage');
        }
        return new Response($this->renderView('@styles/backend/role/form.html.twig', [
                    'form'       => $form->createView(),
                    'title'      => 'users',
                    'active'     => 'users',
                    'sub_menu'   => 'add',
                    'sub_active' => 'role',
                    'sub_header'    => 'edit.role',
        ]));
    }

    public function indexAction() {
        $role = $this->getDoctrine()->getManager()->getRepository('CMS:Role')->findAll();
        $roles = array_slice($role, 4);
        return new Response($this->renderView('@styles/backend/role/index.html.twig', [
                    'roles'       => $roles,
                    'title'      => 'role',
                    'active'     => 'users',
                    'sub_menu'   => 'list',
                    'sub_active' => 'role',
                    'sub_header'    => 'role.list',
        ]));
    }

}
