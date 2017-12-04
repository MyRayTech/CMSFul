<?php

namespace CMS\Model;

use CMS\Entity\Article;


/**
 * News Article Manager
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
abstract class NewsManager 
{	
	/**
	 * Create a news article instance
	 */
	public function createArticle() {
        $class = $this->getClass();
        $article = new $class();

        return $article;
	}
}
