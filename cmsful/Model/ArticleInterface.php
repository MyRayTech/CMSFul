<?php

namespace CMS\Model;



/**
 * News Articles Interface
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
interface ArticleInterface
{
	public function getId();
	public function getName();
	public function getSlug();
	public function getContent();
	public function getAuthor();
	public function getCreatedDate();
	public function getLang();
	public function getLastEditor();
	public function getEditTime();
	public function setName($name);
	public function setSlug($slug);
	public function setContent($content);
	public function setAuthor($author);
	public function setCreatedDate($createdDate);
	public function setLang($lang);
	public function setLastEditor($lastEditor);
	public function setEditTime($editTime);
}
