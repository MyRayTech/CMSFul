<?php

/**
	* RayTech Content Management System
	* @author Kevin Roy <royk@myraytech.net>
	* @link <https://myraytech.net>
	* @copyright (c) 2017, RayTech Hosting
	* @license MIT
	*/

namespace	CMS\Util;

use	Symfony\Component\Serializer\SerializerInterface;
use	Symfony\Component\Serializer\Serializer;
use	Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use	Symfony\Component\Serializer\Encoder\JsonEncoder;

/**
	* Serializer
	*/
class	ApiSerializer	implements	SerializerInterface	{

				/** @var \Symfony\Component\Serializer\Serializer Serializer for API */
				protected	$serializer;

				public	function	__construct()	{
								$normalizer	=	[new	ObjectNormalizer()];
								$encoder				=	[new	JsonEncoder()];

								$normalizer[0]->setCircularReferenceHandler(function($object)	{
												$object->getId();
								});
								$this->serializer	=	new	Serializer($normalizer,	$encoder);
				}

				//put your code here
				public	function	deserialize($data,	$type,	$format	=	null,	array	$context	=	[]):	object	{
								return	$this->serializer->deserialize($data,	$type,	$format,	$context);
				}

				public	function	serialize($data,	$format	=	null,	array	$context	=	[]):	string	{
								return	$this->serializer->serialize($data,	$format,	$context);
				}

				public	function	normalize($data,	$format	=	null,	array	$context	=	[])	{
								return	$this->serializer->normalize($data,	$format,	$context);
				}

				public	function	denormalize($data,	$type,	$format	=	null,	array	$context	=	[])	{
								return	$this->serializer->denormalize($data,	$type,	$format,	$context);
				}

}
