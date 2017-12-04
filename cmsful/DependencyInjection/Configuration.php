<?php

/**
	* RayTech Content Management System
	* @author Kevin Roy <royk@myraytech.net>
	* @link <https://myraytech.net>
	* @copyright (c) 2017, RayTech Hosting
	* @license MIT
	*/

namespace	CMS\DependencyInjection;

use	Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use	Symfony\Component\Config\Definition\Builder\TreeBuilder;
use	Symfony\Component\Config\Definition\ConfigurationInterface;

/**
	* Configuration
	*
	* @author Kevin Roy <royk@myraytech.net>
	*/
class	Configuration	implements	ConfigurationInterface	{

				//put your code here
				public	function	getConfigTreeBuilder():	TreeBuilder	{
								$treeBuilder	=	new	TreeBuilder();
								$rootNode				=	$treeBuilder->root('cmsful');

								$rootNode
																->children()
																				->scalarNode('user_entity')->defaultValue('CMS\Entity\User')->end()
																				->scalarNode('news_entity')->defaultValue('CMS\Entity\Article')->end()
																				->scalarNode('page_entity')->defaultValue('CMS\Entity\Page')->end()
																				->scalarNode('post_entity')->defaultValue('CMS\Entity\Post')->end()
																				->scalarNode('project_entity')->defaultValue('CMS\Entity\Project')->end()
																				->scalarNode('db_driver')->defaultValue('orm')->end()
																->end()
								;

								$this->addServiceSection($rootNode);
								return	$treeBuilder;
				}

				private	function	addServiceSection(ArrayNodeDefinition	$node)	{
								$node
												->addDefaultsIfNotSet()
																->children()
																				->arrayNode('service')
																				->addDefaultsIfNotSet()
																				->children()
																								->scalarNode('email_canonicalizer')->defaultValue('cms.util.canonicalizer.default')->end()
																								->scalarNode('token_generator')->defaultValue('cms.util.token_generator.default')->end()
																								->scalarNode('username_canonicalizer')->defaultValue('cms.util.canonicalizer.default')->end()
																								->scalarNode('user_manager')->defaultValue('cms.user_manager.default')->end()
																								->scalarNode('news_manager')->defaultValue('cms.news_manager.default')->end()
																				->end()
																->end()
												->end()
								->end();
				}

}
