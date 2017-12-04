<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use CMS\Entity\Navigation;
use CMS\Form\Content\NavigationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
 * NavigationController
 */
class NavigationController extends Controller implements AdminControllerInterface
{
    public function addAction(Request $request) {
        $nav = new Navigation();
        $form = $this->createForm(NavigationType::class)
                ->add('save', SubmitType::class, ['label' => 'add nav']);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            $nav->setName($data['name']);
            $nav->setUrl($data['url']);
            $nav->setParent($data['parent']);
            $nav->setWeight($data['weight']);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($nav);
            $em->flush();
            return $this->redirectToRoute('admin_navigation_manage');
        }
        return new Response($this->renderView('@styles/backend/navigation/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'navigation',
            'active' => 'nav',
            'sub_menu' => '',
            'sub_active' => 'nav.add',
            'sub_header' => 'add navigation'
        ]));
    }

    public function deleteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $nav = $em->getRepository('CMS:Navigation')->find($request->get('id'));
        
        $em->remove($nav);
        $em->flush();
        
        return $this->redirectToRoute('admin_navigation_manage');
    }

    public function editAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $nav = $em->getRepository('CMS:Navigation')->find($request->get('id'));
         
        $form = $this->createForm(NavigationType::class, $nav)
                ->add('save', SubmitType::class, ['label' => 'add nav']);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            
            $nav->setName($data->getName());
            $nav->setUrl($data->getUrl());
            $nav->setParent($data->getParent());
            $nav->setWeight($data->getWeight());
            $em->persist($nav);
            $em->flush();
            return $this->redirectToRoute('admin_navigation_manage');
        }
        return new Response($this->renderView('@styles/backend/navigation/form.html.twig', [
            'form' => $form->createView(),
            'title' => 'navigation',
            'active' => 'nav',
            'sub_menu' => '',
            'sub_active' => 'nav.add',
            'sub_header' => 'edit navigation'
        ]));
    }

    public function indexAction() {
        $navigation = $this->getDoctrine()->getManager()->getRepository('CMS:Navigation')->findAll();
        $navi = array_slice($navigation, 1);
        return new Response($this->renderView('@styles/backend/navigation/index.html.twig', [
            'title' => 'Navigation',
            'active' => 'nav',
            'sub_menu' => '',
            'sub_active' => 'nav.list',
            'navigation' => $navi,
        ]));
    }

}
