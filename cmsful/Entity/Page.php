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
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="CMS\Entity\PageRepository")
 * @ORM\Table(name="cmsf_pages")
 */
class Page
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lang;

    /**
     * @ORM\ManyToOne(targetEntity="CMS\Entity\User")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */
    private $author;

    /**
     * @ORM\Column(type="integer")
     */
    private $created_time;

    /**
     * @var RouteObjectInterface[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="CMS\Entity\Route", cascade={"persist", "remove"})
     */
    private $routes;

    public function __construct() {
        $this->routes = new ArrayCollection();
    }

    /**
     * @return RouteObjectInterface[]|ArrayCollection
     */
    public function getRoutes() {
        return $this->routes;
    }

    /**
     * @param RouteObjectInterface[]|ArrayCollection $routes
     */
    public function setRoutes($routes) {
        $this->routes = $routes;
    }

    /**
     * @param RouteObjectInterface $route
     *
     * @return $this
     */
    public function addRoute($route) {
        $this->routes[] = $route;

        return $this;
    }

    /**
     * @param RouteObjectInterface $route
     *
     * @return $this
     */
    public function removeRoute($route) {
        $this->routes->removeElement($route);

        return $this;
    }

    /**
     * Get id
     *
     * @return \integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Content
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Content
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Content
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Content
     */
    public function setAuthor($author) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Set created_time
     *
     * @param \interer $createdTime
     * @return Content
     */
    public function setCreatedTime($createdTime) {
        $this->created_time = $createdTime;

        return $this;
    }

    /**
     * Get created_time
     *
     * @return \interer 
     */
    public function getCreatedTime() {
        return $this->created_time;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return Page
     */
    public function setLang($lang) {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang() {
        return $this->lang;
    }

}
