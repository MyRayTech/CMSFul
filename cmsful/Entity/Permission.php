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
 * @ORM\Entity(repositoryClass="CMS\Entity\PermissionRepository")
 * @ORM\Table(name="cmsf_permission")
 */
class Permission
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string",length=60)
     */
    private $name;
    
    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="permissions")
     * @ORM\JoinTable(name="cmsf_roles_perms")
     */
    private $roles;
    
    public function __construct() {
        $this->roles = new \Doctrine\Common\Collections\Collection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Permission
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add role
     *
     * @param \CMS\Entity\Role $role
     *
     * @return Permission
     */
    public function addRole(\CMS\Entity\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \CMS\Entity\Role $role
     */
    public function removeRole(\CMS\Entity\Role $role)
    {
        $this->roles->removeElement($role);
    }

    /**
     * Get roles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
