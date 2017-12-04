<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * RoutingPass
 */
class RoutingPass implements CompilerPassInterface
{
	
	public function process(ContainerBuilder $container) {
		/**
		 * @var $config array
		 */
		$config = $container->getParameter('config');
		
		$container->setParameter('gallery_link',$config['gallery.link']);
		$container->setParameter('post_link', $config['post.link']);
		$container->setParameter('article_link', $config['article.link']);
		$container->setParameter('project_link', $config['project.link']);
	}

}
