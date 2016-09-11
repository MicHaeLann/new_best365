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

namespace Mmoreram\ControllerExtraBundle;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Mmoreram\ControllerExtraBundle\CompilerPass\PaginatorCompilerPass;
use Mmoreram\ControllerExtraBundle\CompilerPass\ResolverCompilerPass;

/**
 * ControllerExtraBundle, an extension of Bundle
 */
class ControllerExtraBundle extends Bundle
{
    /**
     * Boots the Bundle.
     */
    public function boot()
    {
        $kernel = $this
            ->container
            ->get('kernel');

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Form.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Form.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Flush.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Log.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/JsonResponse.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Paginator.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Entity.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/ObjectManager.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Get.php")
        );

        AnnotationRegistry::registerFile($kernel
            ->locateResource("@ControllerExtraBundle/Annotation/Post.php")
        );
    }

    /**
     * Builds bundle
     *
     * @param ContainerBuilder $container Container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        /**
         * Adds compiler passes
         */
        $container->addCompilerPass(new ResolverCompilerPass());
        $container->addCompilerPass(new PaginatorCompilerPass());
    }
}
