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
use CMS\Model\ArticleInterface;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="CMS\Entity\ArticleRepository")
 * @ORM\Table(name="cmsf_article")
 */
class Article implements ArticleInterface
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
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="author", referencedColumnName="id")
     */
    private $author;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdDate;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="last_editor", referencedColumnName="id", nullable=true)
     */
    private $lastEditor;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $editTime;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $lang;

    /**
     * @var RouteObjectInterface[]|ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Route", cascade={"persist", "remove"})
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
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return news
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
     * @return News
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
     * @return News
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
     * @param integer $author
     * @return News
     */
    public function setAuthor($author) {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return integer 
     */
    public function getAuthor() {
        return $this->author;
    }

    /**
     * Set createdDate
     *
     * @param integer $createdDate
     * @return News
     */
    public function setCreatedDate($createdDate) {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return integer 
     */
    public function getCreatedDate() {
        return $this->createdDate;
    }

    /**
     * Set lastEditor
     *
     * @param integer $lastEditor
     * @return News
     */
    public function setLastEditor($lastEditor) {
        $this->lastEditor = $lastEditor;

        return $this;
    }

    /**
     * Get lastEditor
     *
     * @return integer 
     */
    public function getLastEditor() {
        return $this->lastEditor;
    }

    /**
     * Set editTime
     *
     * @param $editTime
     * @return News
     */
    public function setEditTime($editTime) {
        $this->editTime = $editTime;

        return $this;
    }

    /**
     * Get editTime
     *
     * @return 
     */
    public function getEditTime() {
        return $this->editTime;
    }

	/**
	 * Get Language
	 * 
	 * @return
	 */
	public function getLang() {
		return $this->lang;
	}
	
	/**
	 * Set Language
	 * 
	 * @param $lang
	 * @return News 
	 */
	public function setLang($lang) {
		$this->lang = $lang;
		return $this;
	}

}
