<?php

namespace CMS\Util;

/**
 * Slugger
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class Slugger
{
    public function slugify($string)
    {
        return preg_replace('/[^a-z0-9]/', '-', strtolower(trim(strip_tags($string))));
    }
}
