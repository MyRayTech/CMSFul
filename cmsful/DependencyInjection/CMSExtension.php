<?php

/**
	* RayTech Content Management System
	* @author Kevin Roy <royk@myraytech.net>
	* @link <https://myraytech.net>
	* @copyright (c) 2017, RayTech Hosting
	* @license MIT
	*/

namespace	CMS\DependencyInjection;

use	Symfony\Component\DependencyInjection\Extension\Extension;
use	Symfony\Component\DependencyInjection\ContainerBuilder;
use	CMS\DependencyInjection\Configuration;
use	Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use	Symfony\Component\Config\Definition\Processor;
use	Symfony\Component\Config\FileLocator;
use	Symfony\Component\DependencyInjection\Alias;
use	Symfony\Component\DependencyInjection\Reference;

/**
	* CMSExtension
	*
	* @author Kevin Roy <royk@myraytech.net>
	*/
class	CMSExtension	extends	Extension	{

				/**
					* @var array
					*/
				private	static	$doctrineDrivers	=	array(
								'orm'					=>	array(
												'registry'	=>	'doctrine',
												'tag'						=>	'doctrine.event_subscriber',
								),
								'mongodb'	=>	array(
												'registry'	=>	'doctrine_mongodb',
												'tag'						=>	'doctrine_mongodb.odm.event_subscriber',
								),
								'couchdb'	=>	array(
												'registry'							=>	'doctrine_couchdb',
												'tag'												=>	'doctrine_couchdb.event_subscriber',
												'listener_class'	=>	'CMS\Doctrine\CouchDB\UserListener',
								),
				);

				/**
					* 
					* {@inheritdoc}
					*/
				public	function	load(array	$configs,	ContainerBuilder	$container)	{

								$processor					=	new	Processor();
								$configuration	=	new	Configuration();

								$loader	=	new	YamlFileLoader($container,	new	FileLocator(__DIR__	.	'/../Resources/config'));
								$loader->load('services.yml');

								$config	=	$processor->processConfiguration($configuration,	$configs);

								if	(isset(self::$doctrineDrivers[$config['db_driver']]))	{
												$container->setAlias('cms.doctrine_registry',	new	Alias(self::$doctrineDrivers[$config['db_driver']]['registry'],	false));
								}

								if	(isset(self::$doctrineDrivers[$config['db_driver']]))	{
												$definition	=	$container->getDefinition('cms.util.object_manager');
												$definition->setFactory(array(new	Reference('cms.doctrine_registry'),	'getManager'));
								}
								//var_dump($container->getParameterBag());
								//$style	=	$container->getParameter('config')['style'];
								//$container->setParameter('framework.assets.base_path',	'styles/'	.	$style	.	'/assets');
								$container->setParameter('cms.user_entity',	$config['user_entity']);
								$container->setParameter('cms.news_entity',	$config['news_entity']);
								$container->setAlias('cms.util.email_canonicalizer',	$config['service']['email_canonicalizer']);
								$container->setAlias('cms.util.username_canonicalizer',	$config['service']['username_canonicalizer']);
								$container->setAlias('cms.util.token_generator',	$config['service']['token_generator']);
								$container->setAlias('cms.user_manager',	$config['service']['user_manager']);
								//$this->getLangFiles($container);
				}

				protected	function	getLangFiles(ContainerBuilder	$container)	{
								$translator	=	$container->getServiceIds();
								$paths						=	$container->getParameter('kernel.root_dir')	.	'/../language/'	.	$translator->getLocale();
								$locator				=	new	FileLocator($paths);
								///$translator->addLoader('yaml', new YamlFileLoader());
								//$translator->addResource('yaml', $locator->locate('admin.yml'), $translator->getLocale());
				}

}
