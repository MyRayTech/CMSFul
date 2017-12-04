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


/**
 * Portfolio
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class PortfolioController extends Controller
{

	public function indexAction($page = '1') {
		/**
		 * @var $config array
		 */
		$config = $this->getParameter('config');


		//$projects = $this->getDoctrine()->getManager()->getRepository('CMS:Project')->findAll();
		$dql	 = "SELECT p FROM CMS:Project p";
		$query	 = $this->getDoctrine()->getManager()->createQuery($dql);

		/**
		 * @var $paginator \Knp\Component\Pager\Paginator
		 */
		$paginator	 = $this->get('knp_paginator');
		$projects	 = $paginator->paginate($query, $page, $config['portfolio.max_per_page']);
		$projects->setUsedRoute('portfolio.page');
		return $this->render('@styles/portfolio/' . $config['portfolio.number_columns'] . '_col.html.twig', [
					'projects'	 => $projects,
					'title'		 => $config['portfolio.title'],
		]);
	}

	public function projectAction(Request $request) {
		$em		 = $this->getDoctrine()->getManager();

		/**
		 * @var $project \CMS\Entity\Project
		 */
		$project = $em->getRepository('CMS:Project')->findOneBy(['slug' => $request->get('slug')]);
		
		return $this->render('@styles/portfolio/project_details.html.twig', [
					'title'		 => $project->getName(),
					'project'	 => $project,
		]);
	}

}
