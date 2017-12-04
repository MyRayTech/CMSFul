<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CMS\Entity\Article;

/**
 * Description of NewsController
 */
class NewsController extends Controller
{

    public function indexAction(Request $request) {
        $news = $this->getDoctrine()->getManager()->getRepository('CMS:Article')->findByLang($request->getLocale());
        return new Response($this->renderView('@styles/news.html.twig', [
                    'active' => 'news',
                    'news'   => $news,
        ]));
    }

    public function articleAction(Request $request, $slug) {
        $article = $this->getDoctrine()->getManager()->getRepository('CMS:Article')->findOneBy([
            'slug' => $request->get('slug')]);
        if (!$article) {
            throw $this->createNotFoundException('Article "' . $slug . '" not found!');
        }
        return new Response($this->renderView('@styles/article.html.twig', [
                    'article'  => $article,
                    'active'   => 'news',
                    'redirect' => $request->getRequestUri(),
                    'type'     => Article::class,
        ]));
    }

}
