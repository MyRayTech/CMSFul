<?php

namespace	CMS\Twig\Extension;

use	Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;
use	Doctrine\ORM\EntityManagerInterface;
use	Symfony\Component\DependencyInjection\ContainerInterface;
use	CMS\Controller\WidgetController;

/**
	* TwigExtension
	*
	* @author Kevin Roy <royk@myraytech.net>
	*/
class	CMSExtension	extends	\Twig_Extension	implements	\Twig_Extension_GlobalsInterface	
{

				protected	$container;
				protected	$em;
				protected	$loader;

				public	function	__construct(ContainerInterface	$container,	EntityManagerInterface	$em,	FilesystemLoader	$loader)	{
								$this->container	=	$container;
								$this->em								=	$em;
								$sm														=	$this->em->getConnection()->getSchemaManager();
								if	($sm->tablesExist(['cmsf_config']))	{
												$style								=	$this->container->getParameter('config')['style'];
												$this->loader	=	$loader;
												$this->loader->setPaths(['styles/'	.	$style,	'styles/default'],	'styles');
												$this->loader->setPaths(['styles/'	.	$style	.	'/assets', 'web/assets'],	'assets');
								}
				}

				public	function	getFunctions()	{
								return	[
												new	\Twig_SimpleFunction('config',	[$this,	'_getConfig'],	['needs_environment'	=>	true,	'is_safe'	=>	['html']]),
												new	\Twig_SimpleFunction('widget',	[$this,	'_getWidget'],	['needs_environment'	=>	true,	'is_safe'	=>	['html']]),
												new	\Twig_SimpleFunction('acl',	[$this,	'_checkAcl']),
												new	\Twig_SimpleFunction('isset',	[$this,	'_isset'])
								];
				}

				public	function	_isset($key)	{
								return	isset($key);
				}

				public	function	_checkAcl($name)	{
								$acl	=	$this->container->get('cms.acl');
								return	$acl->granted($name);
				}

				public	function	_getConfig(\Twig_Environment	$environment,	$name)	{
								$config	=	$this->container->getParameter('config');
								return	$config[$name];
				}

				public	function	_getWidget(\Twig_Environment	$environment,	$name)	{
								$widget	=	new	WidgetController($this->em,	$environment);
								return	$widget->getWidget($name);
				}

				public	function	getGlobals()	{
								$config	=	$this->container->getParameter('config');

								return	[
												'timezone'				=>	$config['timezone'],
												'time_format'	=>	$config['time_format'],
												'sitename'				=>	$config['sitename'],
												'logo'								=>	$config['logo'],
								];
				}

				public	function	getName()	{
								return	'cms_extension';
				}

}
