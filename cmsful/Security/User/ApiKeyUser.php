<?php

namespace CMS\Security\User;

//use SteamCheck\Model\UserInterface;
use CMS\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
//use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * ApiKeyUserProvider
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class ApiKeyUser extends User
{
    
    public function __construct($id, $key, $account, $isActive) {
        $this->id = $id;
        $this->key = $key;
        $this->isActive = $isActive;
    }
    
    public function isEqualTo(UserInterface $user)
    {
        if (!$user instanceof ApiKeyUser) {
            return false;
        }

        if ($this->key !== $user->getKey()) {
            return false;
        }

        if ($this->isActive !== $user->getIsActive()) {
            return false;
        }

        return true;
    }


    public function getKey() {
        return $this->key;
    }
}
