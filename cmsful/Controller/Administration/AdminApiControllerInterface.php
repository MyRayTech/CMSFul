<?php

/*
	* To change this license header, choose License Headers in Project Properties.
	* To change this template file, choose Tools | Templates
	* and open the template in the editor.
	*/

namespace	CMS\Controller\Administration;
use Symfony\Component\HttpFoundation\Request;

/**
	*
	* @author Reaper
	*/
interface	AdminApiControllerInterface {
				public function getAction(Request $request);

}
