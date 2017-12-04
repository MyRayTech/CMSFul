<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use CMS\Form\CommentType;
use CMS\Entity\Comment;

/**
 * CommentController
 */
class CommentController extends Controller
{
    protected $form;

    public function getCommentsAction(Request $request, $type, $id) {
        $form     = $this->createForm(CommentType::class, null, ['action' => $this->generateUrl('comment_save')])
                ->add('save', SubmitType::class, ['label' => 'comment']);
                
        $em       = $this->getDoctrine()->getManager();
        $comments = $em->getRepository('CMS:Comment')->findBy(['object_id'   => $id, 'object_type' => $type]);
        
        return new Response($this->renderView('@styles/comments.html.twig', [
            'comments' => $comments,
        ]));
    }
    
    public function getFormAction(Request $request, $type = null, $id = 0, $route = null) {
        
        
        $em       = $this->getDoctrine()->getManager();
        $form     = $this->createForm(CommentType::class, null, ['action' => $this->generateUrl('comment_save')])
                ->add('type', HiddenType::class, ['data' => $type])
                ->add('id', HiddenType::class, ['data' => $id])
                ->add('redirect', HiddenType::class, ['data' => $route])
                ->add('save', SubmitType::class, ['label' => 'comment']);
         
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            //dump($data);
            $comment = new Comment();
            $comment->setText($data['text']);
            $comment->setObjectType($data['type']);
            $comment->setObjectId($data['id']);
            $comment->setAuthor($this->getUser());
            $comment->setDate(new \DateTime());
            
            $em->persist($comment);
            $em->flush();
            return $this->redirect($data['redirect']);
        }
        return new Response($this->renderView('@styles/comment-form.html.twig', [
            'form'     => $form->createView(),
            
        ]));
    }

}
