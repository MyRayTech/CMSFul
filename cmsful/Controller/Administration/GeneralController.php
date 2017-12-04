<?php

/**
	* RayTech Content Management System
	* @author Kevin Roy <royk@myraytech.net>
	* @link <https://myraytech.net>
	* @copyright (c) 2017, RayTech Hosting
	* @license MIT
	*/

namespace	CMS\Controller\Administration;

use	Symfony\Bundle\FrameworkBundle\Controller\Controller;
use	Symfony\Component\Form\Extension\Core\Type\TextType;
use	Symfony\Component\Form\Extension\Core\Type\SubmitType;
use	Symfony\Component\HttpFoundation\Request;
use	Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use	Symfony\Component\Form\Extension\Core\Type\LocaleType;

/**
	* GeneralController
	*/
class	GeneralController	extends	Controller	{

				public	function	settingsAction(Request	$request)	{
								$configs	=	$this->get('cms.config');

								return	$this->render('@styles/backend/general/settings.html.twig',	[
								'title'	=>	'general.settings',
								'sub_header'	=>	'general.settings',
								'active'	=>	'general',
								'sub_active'	=>	'settings',
								'sub_menu'	=>	'',
								'form'	=>	$form->createView(),
								]);
				}

}
