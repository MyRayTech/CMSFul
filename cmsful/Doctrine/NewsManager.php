<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\Doctrine;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use CMS\Model\ArticleInterface;
use CMS\Model\NewsManager as BaseNewsManager;
use CMS\Util\Slugger;

/**
 * NewsManager
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class NewsManager extends BaseNewsManager
{
	/**
	 * @var Slugger
	 */
	protected $slugger;

	/**
	 * @var ObjectManager
	 */
	protected $objectManager;

	/**
	 * @var string
	 */
	private $class;

	/**
	 * Constructor.
	 *
	 * @param PasswordUpdaterInterface $passwordUpdater
	 * @param CanonicalFieldsUpdater   $canonicalFieldsUpdater
	 * @param ObjectManager            $om
	 * @param string                   $class
	 */
	public function __construct(Slugger $slugger, ObjectManager $om, $class) {
		$this->slugger		 = $slugger;
		$this->objectManager = $om;
		$this->class		 = $class;
	}

	/**
	 * @return ObjectRepository
	 */
	protected function getRepository() {
		return $this->objectManager->getRepository($this->getClass());
	}

	/**
	 * Get All News Articles
	 */
	public function findArticles() {
		return $this->getRepository()->findAll();
	}

	/**
	 * Update the News Article instance
	 * 
	 * 
	 */
	public function updateArticle(ArticleInterface $article, $andFlush = true) {
		$article->setSlug($this->slugger->slugify($article->getName()));
		$this->objectManager->persist($article);
		if ($andFlush) {
			$this->objectManager->flush();
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function getClass() {
		if (false !== strpos($this->class, ':')) {
			$metadata	 = $this->objectManager->getClassMetadata($this->class);
			$this->class = $metadata->getName();
		}

		return $this->class;
	}

}
