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

class ArticleRepository extends EntityRepository
{
    public function findByLang($lang) {
        return $this->findBy(['lang' => $lang]);
    }
    
    public function findByAuthor($author) {
        return $this->findBy(['author' => $author]);
    }
}