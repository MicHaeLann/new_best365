<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2016 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Best365Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Elcodi\Store\CoreBundle\Controller\HomeController;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;

class Best365HomeController extends HomeController
{
	use TemplateRenderTrait;

	/**
	 * Home page.
	 *
	 * @return Response Response
	 *
	 * @Route(
	 *      path = "/",
	 *      name = "best365_store_homepage",
	 *      methods = {"GET"},
	 *      options={"expose"=true}
	 * )
	 */
	public function homeAction()
	{
		// categories
		$categories = $this
			->get('elcodi_store.store_category_tree')
			->load();

		// events
		$events = $this
			->get('best365.manager.event')
			->getEvent();

		// get bestselling
		$sellings = array();
		$bestsellings = $this
			->get('best365.manager.bestselling')
			->getBestselling();

		foreach ($bestsellings as $bestselling) {
			$purchasable = $this
				->get('best365.manager.purchasable')
				->getProduct($bestselling->getPid());
			$sellings[] = $purchasable;
		}

		// get products
		$list = array();
		$home_categories = $this
			->get('best365.manager.category')
			->getHomepageCategory();
		foreach ($home_categories as $category) {
			$item = new \stdClass();
			$category = $this
				->get('elcodi.repository.category')
				->find($category->getCid());
			$item->category = $category;

			$products = array();
			$purchasables = $this
				->get('elcodi.repository.purchasable')
				->getAllEnabledFromCategories([$category]);
			foreach ($purchasables as &$purchasable) {
				if ($purchasable->getShowInHome()) {
					$purchasable = $this
						->get('best365.manager.purchasable')
						->getProduct($purchasable->getId());
					$products[] = $purchasable;
				}
			}
			$item->products = $products;
			$list[] = $item;
		}

		// manufacturer
		$manufacturers = $this
			->get('elcodi.repository.manufacturer')
			->findBy(array('enabled' => 1), array('name' => 'ASC'));

		return $this->render(
			'Best365Bundle:Home:home.html.twig',
			[
				'categories' => $categories,
				'events' => $events,
				'bestselling' => $sellings,
				'products' => $list,
				'manufacturers' => $manufacturers
			]
		);
	}
}
