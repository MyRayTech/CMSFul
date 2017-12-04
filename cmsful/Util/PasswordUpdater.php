<?php

namespace CMS\Util;

use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use CMS\Model\UserInterface;
use CMS\Util\PasswordUpdaterInterface;

/**
 * Class updating the hashed password in the user when there is a new password.
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class PasswordUpdater implements PasswordUpdaterInterface
{
    private $encoderFactory;

    public function __construct(EncoderFactoryInterface $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    public function hashPassword(UserInterface $user)
    {
        $plainPass = $user->getPlainPassword();

        if (0 === strlen($plainPass)) {
            return;
        }

        $encoder = $this->encoderFactory->getEncoder($user);

        if ($encoder instanceof BCryptPasswordEncoder) {
            $user->setSalt(null);
        } else {
            $salt = rtrim(str_replace('+', '.', base64_encode(random_bytes(32))), '=');
            $user->setSalt($salt);
        }

        $hashedPass = $encoder->encodePassword($plainPass, $user->getSalt());
        $user->setPassword($hashedPass);
        $user->eraseCredentials();
    }
}
