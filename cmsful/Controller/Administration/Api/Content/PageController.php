<?php

/*
	* The MIT License
	*
	* Copyright 2018 Reaper.
	*
	* Permission is hereby granted, free of charge, to any person obtaining a copy
	* of this software and associated documentation files (the "Software"), to deal
	* in the Software without restriction, including without limitation the rights
	* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	* copies of the Software, and to permit persons to whom the Software is
	* furnished to do so, subject to the following conditions:
	*
	* The above copyright notice and this permission notice shall be included in
	* all copies or substantial portions of the Software.
	*
	* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	* THE SOFTWARE.
	*/

namespace	CMS\Controller\Administration\Api\Content;

use CMS\Controller\Administration\AdminApiControllerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use CMS\Entity\Page;
use CMS\Util\ApiSerializer;
use CMS\Util\Slugger;

/**
	* Pages
	*
	* @author Reaper
	*/
class	PageController extends Controller implements AdminApiControllerInterface	{
				
				/* @var CMS\Util\ApiSerializer  $serializer */
				protected $serializer;
				
				public function __construct(ApiSerializer $serializer)	{
								$this->serializer = $serializer;
				}
				
				public	function	deleteAction(Request	$request)	{
								$em = $this->getDoctrine()->getManager();
								$page = $em->getRepository('CMS:Page')->find($request->get('id'));
								
								$em->remove($page);
								$em->flush();
								return new JsonResponse();
				}

				public	function	getAction(Request	$request)	{							
								$em = $this->getDoctrine()->getManager();
								$pages = $em->getRepository('CMS:Page')->findAll();
								$content = $this->serializer->normalize($pages,	'json');
								
								return new JsonResponse($content, 200, [
												'Content-Type' => 'application/vnd.api+json'
								]);
				}

				public	function	postAction(Request	$request)	{
								$config = $this->get('cms.config');
								$em = $this->getDoctrine()->getManager();
								
        $page = new Page();
        $slugger = new Slugger();
								
								$status = 200;
								$headers = [
											 'Content-Type' => 'application/vnd.api+json',
								];
								$response = new JsonResponse($page);
								$response->headers->add($headers);
								return $response;
				}

}
