<?php

namespace	CMS\Security;

use	Symfony\Component\DependencyInjection\ContainerInterface;
use	Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

/**
	* Acl Service
	*
	* @author Kevin Roy <royk@myraytech.net>
	*/
class	Authorization	{

				protected	$container;
				protected	$token;

				public	function	__construct(ContainerInterface	$container,	TokenStorageInterface	$token)	{
								$this->container	=	$container;
								$this->token					=	$token;
				}

				public	function	granted($name)	{
								$user		=	$this->token->getToken();
								$roles	=	$this->container->getParameter('permissions');
								foreach	($user->getRoles()	as	$role)	{
												$perms	=	$roles[$role->getRole()];
												if	(!in_array($name,	$perms['perms']))	{
																return	$this->checkChildren($name,	$role->getRole(),	$roles);
												}	else	{
																return	true;
												}
								}
				}

				private	function	checkChildren($name,	$role,	$roles)	{
								foreach	($roles	as	$child)	{
												if	($child['parent']	!==	null	&&	$child['parent']	==	$role)	{
																if	(!in_array($name,	$child['perms'])	==	true)	{
																				$this->checkChildren($name,	$child['name'],	$roles);
																}	else	{
																				return	true;
																}
												}
								}
								return	false;
				}

}
