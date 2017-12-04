<?php

namespace CMS\Util;

/**
 * TokenGeneratorInterface
 *
 * @author Kevin Roy <royk@myraytech.net>
 */


interface TokenGeneratorInterface
{
    /**
     * @return string
     */
    public function generateToken();
}
