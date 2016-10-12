<?php

namespace Best365Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

use Best365Bundle\CompilerPass\MappingCompilerPass;

class Best365Bundle extends Bundle
{
	/**
	 * @param ContainerBuilder $container
	 */
	public function build(ContainerBuilder $container)
	{
		$container->addCompilerPass(new MappingCompilerPass());
	}
}
