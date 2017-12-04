<?php

namespace CMS\Util;
use CMS\Model\UserInterface;

/**
 * PasswordUpdaterInterface
 *
 * @author Kevin Roy <royk@myraytech.net>
 * @package CMSFul
 */
interface PasswordUpdaterInterface
{
    /**
     * Updates the hashed password in the user when there is a new password.
     *
     * The implement should be a no-op in case there is no new password (it should not erase the
     * existing hash with a wrong one).
     *
     * @param UserInterface $user
     *
     * @return void
     */
    public function hashPassword(UserInterface $user);
}
