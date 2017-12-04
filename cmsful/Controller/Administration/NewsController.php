<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use CMS\Entity\Article;
use CMS\Form\Content\ArticleType;
use CMS\Controller\Administration\AdminControllerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NewsController extends Controller implements AdminControllerInterface
{

    public function indexAction() {
        $news = $this->getDoctrine()
                ->getRepository('CMS:Article')
                ->findAll();

        return new Response($this->renderView('@styles/backend/news/index.html.twig', [
                    'news'       => $news,
                    'title'      => 'news',
                    'active'     => 'content',
                    'sub_menu'   => 'news.list',
                    'sub_active' => 'news'
        ]));
    }

    public function addAction(Request $request) {
        $user       = $this->getUser();
        $translator = $this->get('translator');
        $news       = new Article();
        $form       = $this->createForm(ArticleType::class, $news);
        $form->add('save', SubmitType::class, ['label' => $translator->trans('add news')]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $slug = $this->get('cms.slugger');
            $news->setSlug($slug->slugify($data->getName()));
            $news->setName($data->getName());
            $news->setContent($data->getContent());
            $news->setAuthor($user);
            $news->setCreatedDate(new \DateTime());
            $news->setLang($data->getLang());
            
            $em = $this->getDoctrine()->getManager();

            $em->persist($news);

            $em->flush();

            return $this->redirectToRoute('admin_news_manage');
        }
        return new Response($this->renderView('@styles/backend/news/form.html.twig', [
                    'form'       => $form->createView(),
                    'sub_header' => 'Create a News',
                    'title'      => 'News',
                    'active'     => 'content',
                    'sub_active' => 'news',
                    'sub_menu'   => 'news.add'
        ]));
    }

    public function deleteAction(Request $request) {
        $news = $this->getDoctrine()
                ->getRepository('CMS:Article')
                ->find($request->get('id'));
        if (!$news) {
            throw $this->createNotFoundException(
                    'No news article found using this ID ' . $request->get('id')
            );
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($news);
        $em->flush();
        return $this->redirectToRoute('admin_news_manage');
    }

    public function editAction(Request $request) {
        $news = $this->getDoctrine()
                ->getRepository('CMS:Article')
                ->find($request->get('id'));

        $user = $this->getUser();

        $form = $this->createForm(ArticleType::class, $news);
        $form->add('save', SubmitType::class, ['label' => 'Update News Article']);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $slug = $this->get('cms.slugger');
            $news->setSlug($slug->slugify($data->getName()));
            $news->setName($data->getName());
            $news->setUrl($data->getUrl());
            $news->setContent($data->getContent());
            $news->setLastEditor($user);
            $news->setEditTime(new \DateTime());
            $news->setLang($data->getLang());

            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            return $this->redirectToRoute('admin_news_manage');
        }
        return new Response($this->renderView('@styles/backend/news/form.html.twig', [
                    'form'       => $form->createView(),
                    'sub_header' => 'Create a News',
                    'title'      => 'News',
                    'active'     => 'content',
                    'sub_active' => 'news',
                    'sub_menu'   => 'news.list'
        ]));
    }

}
