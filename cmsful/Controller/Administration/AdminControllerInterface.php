<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Controller\Administration;

use Symfony\Component\HttpFoundation\Request;

interface AdminControllerInterface
{
public function indexAction();
public function addAction(Request $request);
public function editAction(Request $request);
public function deleteAction(Request $request);
}