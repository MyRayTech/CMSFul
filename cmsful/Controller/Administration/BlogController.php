<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMS\Controller\Administration\AdminControllerInterface;
use CMS\Form\Content\PostType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use CMS\Entity\Post;

/**
 * BlogController
 */
class BlogController extends Controller implements AdminControllerInterface
{
    public function indexAction() {
        $posts = $this->getDoctrine()->getManager()->getRepository('CMS:Post')->findAll();
        return new Response($this->renderView('@styles/backend/blog/index.html.twig', [
            'title' => 'blog list',
            'active' => 'content',
            'sub_active' => 'post',
            'sub_menu'  => 'post.list',
            'posts' => $posts
        ]));
    }

    public function addAction(Request $request) {
        
        $form = $this->createForm(PostType::class)
                ->add('save', SubmitType::class, ['label' => 'publish post', 'attr' => ['class' => 'btn btn-primary btn-sm']]);
        
        $form->handleRequest($request);
       
        if($form->isSubmitted() && $form->isValid()) {
            $post = new Post();
            $em = $this->getDoctrine()->getManager();
            $slug = $this->get('cms.slugger');
            $data = $form->getData();
            
            $post->setTitle($data->getTitle());
            $post->setSlug($slug->slugify($data->getTitle()));
            $post->setPost($data->getPost());
            $post->setAuthor($this->getUser());
            $post->setDate(new \DateTime());
            $post->setLang($data->getLang());
            
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('admin_blog_manage');
        }
        return new Response($this->renderView('@styles/backend/blog/form.html.twig', [
            'title' => 'create post',
            'active' => 'content',
            'sub_active' => 'post',
            'sub_menu'  => 'post.add',
            'sub_header' => 'create post',
            'form' => $form->createView()
        ]));
    }

    public function deleteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        
        $post = $em->getRepository('CMS:Post')->find($request->get('id'));
        
        $em->remove($post);
        $em->flush();
        return $this->redirectToRoute('admin_blog_manage');
    }

    public function editAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('CMS:Post')->find($request->get('id'));
        $form = $this->createForm(PostType::class, $post)
                ->add('save', SubmitType::class, ['label' => 'publish post']);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $slug = $this->get('cms.slugger');
            $post->setSlug($slug->slugify($data->getTitle()));
            
            $post->setTitle($data->getTitle());
            $post->setPost($data->getPost());
            $post->setAuthor($this->getUser());
            $post->setDate(new \DateTime());
            $post->setLang($data->getLang());
            
            $em->persist($post);
            $em->flush();
            return $this->redirectToRoute('admin_blog_manage');
        }
        return new Response($this->renderView('@styles/backend/blog/form.html.twig', [
            'title' => 'edit post',
            'active' => 'content',
            'sub_active' => 'post',
            'sub_menu'  => 'post.list',
            'sub_header' => 'edit post',
            'form' => $form->createView()
        ]));
    }

}
