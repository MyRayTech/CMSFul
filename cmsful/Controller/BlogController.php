<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use CMS\Entity\Post;

/**
 * Blog Controller
 */
class BlogController extends Controller
{
    public function postAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository('CMS:Post')->findBySlug([$request->get('slug'), $request->get('_locale')]);
        
        return new Response($this->renderView('@styles/post.html.twig', [
            'post' => $post,
            'redirect'  => $request->getRequestUri(),
            'type'  => Post::class,
        ]));
    }
    
    public function authorAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $posts = $em->getRepository('CMS:Post')->findByAuthor($request->get('author'));
        
        return new Response('@styles/author.html.twig', [
            'posts' => $posts,
            'title' => $request->get('author'). "'s Posts",
            'active' => 'blog',
        ]);
    }
}
