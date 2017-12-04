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
 * Description of Role
 *
 * @author Reaper
 */

/**
 * @ORM\Entity(repositoryClass="CMS\Entity\RoleRepository")
 * @ORM\Table(name="cmsf_role")
 */
class Role
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumn(name="parent", referencedColumnName="id")
     */
    private $parent;
    
    /**
     * @ORM\ManyToMany(targetEntity="Permission", mappedBy="roles", fetch="EAGER")
     */
    private $permissions;
    
    public function __construct() {
        $this->permissions = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Role
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
     * Set parent
     *
     * @param \CMS\Entity\Role $parent
     *
     * @return Role
     */
    public function setParent(\CMS\Entity\Role $parent = null) {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \CMS\Entity\Role
     */
    public function getParent() {
        return $this->parent;
    }


    /**
     * Add permission
     *
     * @param \CMS\Entity\Permission $permission
     *
     * @return Role
     */
    public function addPermission(\CMS\Entity\Permission $permission)
    {
        $this->permissions[] = $permission;

        return $this;
    }

    /**
     * Remove permission
     *
     * @param \CMS\Entity\Permission $permission
     */
    public function removePermission(\CMS\Entity\Permission $permission)
    {
        $this->permissions->removeElement($permission);
    }

    /**
     * Get permissions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPermissions()
    {
        return $this->permissions;
    }
    
    /**
     * Has permissions
     * 
     * @return boolean
     */
    public function hasPermission($name) {
        return in_array($name, $this->permissions, true);
    }
}
