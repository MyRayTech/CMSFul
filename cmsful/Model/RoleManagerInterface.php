<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Model;

use CMS\Entity\Role;
/**
 * Role Manager Interface
 */
interface RoleManagerInterface
{
	public function createRole();
	public function updateRole(Role $role);
	public function deleteRole(Role $role);
	public function getClass();
	public function getRepository();
	
}
