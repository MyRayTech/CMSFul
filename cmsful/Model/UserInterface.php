<?php

namespace CMS\Model;

use Symfony\Component\Security\Core\User\AdvancedUserInterface as BaseUser;

/**
 * UserInterface
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
interface UserInterface extends BaseUser
{
    /**
     * {@inheritdoc}
     */
    public function eraseCredentials();
    
    /**
     * {@inheritdoc}
     */
    public function getPassword();
    
    /**
     * {@inheritdoc}
     */
    public function getRoles();
    
    /**
     * {@inheritdoc}
     */
    public function getSalt();
    
    /**
     * {@inheritdoc}
     */
    public function getUsername();

}
