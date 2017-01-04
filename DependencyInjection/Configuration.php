<?php

namespace Vadiktok\ChatBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files.
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/configuration.html}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('vadiktok_chat');
        $rootNode->children()
            ->scalarNode('socket_server_host')
                ->defaultValue('127.0.0.1')
            ->end()
            ->scalarNode('socket_server_port')
                ->defaultValue('3000')
            ->end()
        ->end();

        return $treeBuilder;
    }
}
