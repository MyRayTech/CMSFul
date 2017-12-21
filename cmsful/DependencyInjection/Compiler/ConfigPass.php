<?php

/**
	* RayTech Content Management System
	* @author Kevin Roy <royk@myraytech.net>
	* @link <https://myraytech.net>
	* @copyright (c) 2017, RayTech Hosting
	* @license MIT
	*/

namespace	CMS\DependencyInjection\Compiler;

use	Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use	Symfony\Component\DependencyInjection\ContainerBuilder;

/**
	* Configuration Compiler Pass
	*/
class	ConfigPass	implements	CompilerPassInterface	{

				public	function	process(ContainerBuilder	$container)	{
								$em	=	$container->get('doctrine.orm.default_entity_manager');
								$sm	=	$em->getConnection()->getSchemaManager();
								if	($sm->tablesExist(['cmsf_config']))	{
												$configs	=	$em->getRepository('CMS:Config')->findAll();
												foreach	($configs	as	$config)	{
																$array[$config->getKey()]	=	$config->getValue();
												}
												$container->setParameter('config',	$array);
												$container->setParameter('framework.assets.base_path', ['styles/'. $array['style']. '/assets/','assets/']);
								}
				}

}
