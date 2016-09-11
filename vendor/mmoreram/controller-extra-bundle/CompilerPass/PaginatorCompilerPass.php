<?php

/*
 * This file is part of the ControllerExtraBundle for Symfony2.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

namespace Mmoreram\ControllerExtraBundle\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class PaginatorCompilerPass
 */
class PaginatorCompilerPass implements CompilerPassInterface
{
    /**
     * Every service tagged as controller_extra.paginator_evaluator will be processed
     *
     * @param ContainerBuilder $container Container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('mmoreram.controllerextra.collector.paginator_evaluator_collector')) {
            return;
        }

        /**
         * We get our collector
         */
        $definition = $container->getDefinition(
            'mmoreram.controllerextra.collector.paginator_evaluator_collector'
        );

        /**
         * We get all tagged services
         */
        $taggedServices = $container->findTaggedServiceIds(
            'controller_extra.paginator_evaluator'
        );

        /**
         * We add every tagged Resolver into EventListener
         */
        foreach ($taggedServices as $id => $attributes) {
            $definition->addMethodCall(
                'addPaginatorEvaluator',
                array(new Reference($id))
            );
        }
    }
}
