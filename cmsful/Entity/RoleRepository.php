<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */

namespace CMS\Entity;

use Doctrine\ORM\EntityRepository;
/**
 * Description of RoleRepository
 *
 * @author Reaper
 */
class RoleRepository extends EntityRepository
{
    public function findByName($name) {
        return $this->findOneBy(['name' => $name]);
    }
}