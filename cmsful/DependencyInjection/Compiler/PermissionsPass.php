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
	* PermissionsPass
	*/
class	PermissionsPass	implements	CompilerPassInterface	{

				public	function	process(ContainerBuilder	$container)	{
								$em	=	$container->get('doctrine.orm.default_entity_manager');
								$sm	=	$em->getConnection()->getSchemaManager();
								if	($sm->tablesExist(['cmsf_config']))	{
												$roles	=	$em->getRepository('CMS:Role')->findAll();
												foreach	($roles	as	$role)	{
																$perms	=	$role->getPermissions()->toArray();
																if	(!empty($perms))	{
																				foreach	($perms	as	$perm)	{
																								$array[$role->getName()]['name']	=	$role->getName();
																								if	($role->getParent())	{
																												$array[$role->getName()]['parent']	=	$role->getParent()->getName();
																								}	else	{
																												$array[$role->getName()]['parent'] = null;
																								}
																								$array[$role->getName()]['perms'][$perm->getId()]	=	$perm->getName();
																				}
																}	else	{
																				$array[$role->getName()]['name']	=	$role->getName();
																				if	(!empty($role->getParent()))	{
																								$array[$role->getName()]['parent']	=	$role->getParent()->getName();
																				}	else	{
																								$array[$role->getName()]['parent']	=	null;
																				}
																				$array[$role->getName()]['perms'] = [];
																}
												}

												$container->setParameter('permissions',	$array);
								}
				}

}
