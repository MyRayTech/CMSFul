<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CMS\Entity\LanguageRepository")
 * @ORM\Table(name="cmsf_language")
 */
class Language
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
         * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
        
        /**
         * @ORM\Column(type="string", length=60, unique=true)
         */
        private $key;
        
        /**
         * @ORM\Column(type="text")
         */
        private $message;
        
        /**
         * @ORM\Column(type="string", length=11)
         */
        private $locale;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Language
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    

    /**
     * Set key
     *
     * @param string $key
     *
     * @return Language
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Language
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return Language
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }
}
