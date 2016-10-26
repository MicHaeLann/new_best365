<?php

/**
 * SimpleDoctrineMapping for Symfony2
 */

namespace Best365Bundle\CompilerPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;

use Mmoreram\SimpleDoctrineMapping\CompilerPass\Abstracts\AbstractMappingCompilerPass;

/**
 * Class MappingCompilerPass
 */
class MappingCompilerPass extends AbstractMappingCompilerPass
{
	/**
	 * You can modify the container here before it is dumped to PHP code.
	 *
	 * @param ContainerBuilder $container
	 *
	 * @api
	 */
	public function process(ContainerBuilder $container)
	{
		$this
			->addEntityMapping(
				$container,
				'default',
				'Best365Bundle\Entity\Membership',
				'@Best365Bundle/Resources/config/doctrine/Membership.orm.yml',
				true
			)
			->addEntityMapping(
				$container,
				'default',
				'Best365Bundle\Entity\CustomerMembership',
				'@Best365Bundle/Resources/config/doctrine/CustomerMembership.orm.yml',
				true
			)
			->addEntityMapping(
				$container,
				'default',
				'Best365Bundle\Entity\PurchasableTag',
				'@Best365Bundle/Resources/config/doctrine/PurchasableTag.orm.yml',
				true
			)
//			->addEntityMapping(
//				$container,
//				'default',
//				'Best365Bundle\Entity\Best365Customer',
//				'',
//				true
//			)
		;
	}
}