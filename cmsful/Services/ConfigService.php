<?php

namespace CMS\Services;

use Doctrine\ORM\EntityManagerInterface;
/**
 * ConfigService
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class ConfigService
{
    protected $em;
    
    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
    
    public function get($key) {
        $value = $this->em->getRepository('CMS:Config')->findOneBy(['key' => $key]);
        
       return $value->getValue();
    }
    
    public function set($key, $value) {
        $array = $this->em->getRepository('CMS:Config')->findOneBy(['key' => $key]);
        $array->setValue($value);
        $this->em->persist($array);
        $this->em->flush();
        return $this;
    }
}
