<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Model;

/**
 * RoleManager
 */
abstract class RoleManager implements RoleManagerInterface
{
	/**
     * {@inheritdoc}
     */
    public function createRole()
    {
        $class = $this->getClass();
        $account = new $class();

        return $account;
    }
	public function findRoleByName($name) {
		return $this->findRoleBy(['name' => $name]);
	}
}
