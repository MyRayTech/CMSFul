<?php

namespace CMS\Translation\Loader;

use Symfony\Component\Translation\Loader\LoaderInterface;
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Yaml\Parser as YamlParser;

/**
 * LanguageLoader
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class LanguageLoader implements LoaderInterface
{
    public function load($resource, $locale, $domain = 'messages'): MessageCatalogue {
		dump($resource);
        $yamlparser = new YamlParser();
        $messages = $yamlparser->parse(file_get_contents($resource));
        
        $catalogue = new MessageCatalogue($locale);
        $catalogue->add($messages, $domain);
        
        return $catalogue;
    }

}
