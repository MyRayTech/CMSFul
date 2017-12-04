<?php

namespace	CMS\Controller\Administration\Api\General;

use	CMS\Controller\Administration\AdminApiControllerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
	* Description of Settings
	*
	* @author Reaper
	*/
class	SettingsController extends Controller	implements	AdminApiControllerInterface {

				public	function	getAction(Request $request)	{
								$config = $this->get('cms.config');
								$headers = [
												'Content-Type' => 'application/json'
								];
								$array = [
												'sitename' => $config->get('sitename'),
												'email' => $config->get('email'),
												'locale' => $config->get('locale'),
												'logo' => $config->get('logo')
								];
								if(!empty($config) && !empty($array))
								{
												$status = 200;
								}
								else
								{
												$status = 400;
								}
								
								$response = new JsonResponse($array);
								$response->headers->set('content-type', 'application/json');
								return $response;
				}

				public	function	put()	{
								
				}

}
