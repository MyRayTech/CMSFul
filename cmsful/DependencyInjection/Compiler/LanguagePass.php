<?php

/**
 * RayTech Content Management System
 * @author Kevin Roy <royk@myraytech.net>
 * @link <https://myraytech.net>
 * @copyright (c) 2017, RayTech Hosting
 * @license MIT
 */
namespace CMS\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Translation\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

/**
 * LanguagePass
 */
class LanguagePass implements CompilerPassInterface
{

	public function process(ContainerBuilder $container) {
		/**
		 * @var $translator \Symfony\Component\Translation\DataCollectorTranslator
		 */
		$translator	 = $container->get('translator');
		$paths		 = $container->getParameter('kernel.root_dir') . '/language/';
		$locator	 = new FileLocator($paths);
		$translator->addLoader('yaml', new YamlFileLoader());
		$translator->addResource('yaml', $locator->locate('messages.en.yml'), $translator->getLocale());
	}

}
