<?php

namespace CMS\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use CMS\Doctrine\UserManager;
/**
 * ApiKeyUserProvider
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class ApiKeyUserProvider implements UserProviderInterface 
{
	protected $em;
	
	public function __construct(UserManager $um) {
		$this->um = $um;
	}
	
	/**
	 * Refreshes the user data
	 * 
	 * @param UserInterface $user
	 * @return type
	 * @throws UnsupportedUserException
	 */
    public function refreshUser(UserInterface $user)
    {
        if(!$user instanceof UserInterface) {
             throw new UnsupportedUserException(
                sprintf('Instances of "%s" are not supported.', get_class($user))
            );
        }
        return $this->loadUserByUsername($user->getUsername());
    }
    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username)
    {
        return $this->um->findUserByUsername($username);
    }
    /**
     * Whether this provider supports the given user class.
     *
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
        return $class === 'CMS\Security\User\ApiKeyUser';
    }
    
    public function getUsernameForApiKey($apikey)
    {
        $account = $this->um->findUserByApiKey($apikey);
        return $account->getOwner()->getUsername();
    }
}
