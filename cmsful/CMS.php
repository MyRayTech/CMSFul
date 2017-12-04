<?php

namespace CMS;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use CMS\DependencyInjection\Compiler\ConfigPass;
use CMS\DependencyInjection\Compiler\PermissionsPass;
use CMS\DependencyInjection\Compiler\LanguagePass;
use CMS\DependencyInjection\Compiler\RoutingPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;

class CMS extends Bundle
{
    public function build(ContainerBuilder $container) {
        parent::build($container);
        
        $container->addCompilerPass(new ConfigPass(), PassConfig::TYPE_AFTER_REMOVING, 100);
		$container->addCompilerPass(new LanguagePass(), PassConfig::TYPE_AFTER_REMOVING, 75);
        $container->addCompilerPass(new RoutingPass(), PassConfig::TYPE_AFTER_REMOVING, 50);
        $container->addCompilerPass(new PermissionsPass(), PassConfig::TYPE_AFTER_REMOVING, 10);
    }
}