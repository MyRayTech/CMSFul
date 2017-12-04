<?php

namespace CMS\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * MainController
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class GalleryController extends Controller
{

    public function indexAction($page) {
		/**
		 * @var $config array
		 */
        $config = $this->getParameter('config');
		
		/**
		 * @var $dql string
		 */
        $dql = "SELECT a FROM CMS:Image a";
		/**
		 * @var $query string
		 */
        $query = $this->getDoctrine()->getManager()->createQuery($dql);
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $images = $paginator->paginate($query, $page, $config['gallery.max_per_page']);
        $images->setUsedRoute('gallery.page');

        return $this->render('@styles/gallery.html.twig', [
                    'active' => 'gallery',
                    'title'  => $config['gallery.title'],
                    'images' => $images
        ]);
    }

}
