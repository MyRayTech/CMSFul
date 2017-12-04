<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Exception;

use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * ApiKeyNotFoundException
 */
class ApiKeyNotFoundException extends AuthenticationException
{
	public function getMessageKey() {
		return 'Api key was not found in the request.';
	}
}
