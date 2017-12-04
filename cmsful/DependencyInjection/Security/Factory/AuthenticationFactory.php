<?php

namespace CMS\DependencyInjection\Security\Factory;

use Symfony\Bundle\SecurityBundle\DependencyInjection\Security\Factory\SecurityFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Reference;
/**
 * UserFactory
 *
 * @author Kevin Roy <royk@myraytech.net>
 */
class AuthenticationFactory implements SecurityFactoryInterface
{
    public function addConfiguration(NodeDefinition $builder) {
        
    }

    public function create(ContainerBuilder $container, $id, $config, $userProvider, $defaultEntryPoint): array {
        $providerId = 'security.cms.auth.provider'.$id;
        $container
                ->setDefinition($providerId, new DefinitionDecorator('cms.authentication_provider'))
                ->replaceArgument(0, new Reference($userProvider));
        
        $listenerId = 'security.cms.auth.listener.'.$id;
        $listener = $container->setDefinition($listenerId, new DefinitionDecorator('cms.authentication_listener'));
                
        return [$providerId, $listenerId, $defaultEntryPoint];
    }

    public function getKey(): string {
        return 'user';
    }

    public function getPosition(): string {
        return 'pre_auth';
    }

}
