<?php

namespace CMS\Routing\Loader;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\RouteCollection;
/**
 * DynamicLoader
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class DynamicLoader extends Loader
{
    private $loaded = false;
    
    private $em;
    
    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
 
    public function process(ContainerBuilder $container) {
        var_dump($container);
    }
    
    public function load($resource, $type = null) {
        if (true === $this->loaded) {
            throw new \RuntimeException('Do not add the "dynamic" loader twice');
        }
        
        $routes = new RouteCollection();
		var_dump($routes);
        
        /** here */
        $this->loaded = true;
        return $routes;
    }

    public function supports($resource, $type = null) {
        return 'dynamic' === $type;
    }

}
