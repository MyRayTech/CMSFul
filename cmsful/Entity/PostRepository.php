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
 * PostRepository
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class PostRepository extends EntityRepository
{
    public function findBySlug($slug) {
        return $this->findOneBy(['slug' => $slug[0], 'lang' => $slug[1]]);
    }
    
    public function findByAuthor($author) {
        return $this->findBy(['author' => $author]);
    }
    
}
