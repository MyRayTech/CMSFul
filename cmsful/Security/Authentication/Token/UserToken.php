<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Security\Authentication\Token;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;
/**
 * UserToken
 */
class UserToken extends AbstractToken
{
	protected $credentials;
	
	public function __construct(array $roles = array()) {
		$this->roles[] = $roles;
	}

	public function getCredentials() {
		return $this->credentials;
	}
	
	/**
     * {@inheritdoc}
     */
    public function __toString()
    {
        $class = get_class($this);
        $class = substr($class, strrpos($class, '\\') + 1);

        $roles = array();
        foreach ($this->roles as $role) {
            $roles[] = $role->getName();
        }

        return sprintf('%s(user="%s", authenticated=%s, roles="%s")', $class, $this->getUsername(), json_encode($this->authenticated), implode(', ', $roles));
    }

}
