<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Doctrine;

use CMS\Model\RoleManager as Base;
use Doctrine\Common\Persistence\ObjectManager;
/**
 * RoleManager
 */
class RoleManager extends Base
{
	/**
     * @var ObjectManager
     */
    protected $objectManager;

    /**
     * @var string
     */
    private $class;
	
	/**
	 * 
	 * @param ObjectManager $om
	 * @param string $class
	 */
	public function __construct(ObjectManager $om, $class) {
		$this->class = $class;
		$this->objectManager = $om;
	}
	
	public function findRoleBy(array $criteria){
		return $this->getRepository()->findOneBy($criteria);
	}
	public function findAllRoles() {
		return $this->getRepository()->findAll();
	}

	public function deleteRole(\CMS\Entity\Role $role) {
		$this->objectManager->remove($role);
		$this->objectManager->flush();
	}

	public function getClass() {
		if (false !== strpos($this->class, ':')) {
            $metadata = $this->objectManager->getClassMetadata($this->class);
            $this->class = $metadata->getName();
        }

        return $this->class;
	}

	public function getRepository() {
		return $this->objectManager->getRepository($this->getClass());
	}

	public function updateRole(\CMS\Entity\Role $role, $andFlush = true) {
		$this->objectManager->persist($role);
        if ($andFlush) {
            $this->objectManager->flush();
        }
	}

}
