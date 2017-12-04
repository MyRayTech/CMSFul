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
 * RouteRepository
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class RouteRepository extends EntityRepository
{
   public function findByUrl($url) {
       return $this->findBy(['url' => $url]);
   }
   public function findByAction($action) {
       return $this->findBy(['actionController' => $action]);
   }
}
