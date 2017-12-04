<?php

namespace CMS\Util;

/**
 * TokenGenerator
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class TokenGenerator implements TokenGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function generateToken()
    {
        return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
    }
}
