<?php

/**
	* RayTech Content Management System
	* @author Kevin Roy <royk@myraytech.net>
	* @link <https://myraytech.net>
	* @copyright (c) 2017, RayTech Hosting
	* @license MIT
	*/

namespace	CMS\Form\Administration\Content;

use	CMS\Entity\Page;
use	Symfony\Component\Form\AbstractType;
use	CMS\Form\Administration\Widget\WidgetType;
use	Symfony\Component\Form\FormBuilderInterface;
use	Symfony\Component\OptionsResolver\OptionsResolver;
use	Symfony\Component\Form\Extension\Core\Type\TextType;
use	Symfony\Component\Form\Extension\Core\Type\TextareaType;
use	Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use	Symfony\Component\Form\Extension\Core\Type\LanguageType;

/**
	* ArticleType
	*
	* @author Kevin Roy <royk@myraytech.net>
	*/
class	PageType	extends	AbstractType	{

				public	function	buildForm(FormBuilderInterface	$builder,	array	$options)	{
								$builder->add('name',	TextType::class,	[
																				'label'						=>	'name',
																				'label_attr'	=>	['class'	=>	'col-md-3'],
																				'attr'							=>	['class'	=>	'form-control']
																								]
																)
																->add('content',	TextareaType::class,	[
																				'label'						=>	'content',
																				'label_attr'	=>	['class'	=>	'col-md-3'],
																				'attr'							=>	['class'	=>	'form-control builder']
																								]
																)
																->add('lang',	LanguageType::class,	[
																				'label'						=>	'language',
																				'label_attr'	=>	['class'	=>	'col-md-3'],
																				'attr'							=>	['class'	=>	'form-control']
																								]
								);
				}

				public	function	configureOptions(OptionsResolver	$resolver)	{
								$resolver->setDefaults([
												'data_class'						=>	Page::class,
												'csrf_protection'	=>	true,
												'csrf_field_name'	=>	'_token',
												'csrf_token_id'			=>	'page_form',
								]);
				}

}
