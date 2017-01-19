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
	 *      methods = {"GET"}
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

		// profile
		$customer = $this
			->get('elcodi.wrapper.customer')
			->get();

		// locale
		$locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

		// products(category->product)
		$promotions = $this
			->get('best365.manager.promotion')
			->getPromotion();

		$cids = array();
		foreach ($promotions as $promotion) {
			if (!array_key_exists($promotion->getCategoryId(), $cids)) {
				$cids[$promotion->getCategoryId()] = array();
			}
			$purchasable = $this
				->get('elcodi.repository.purchasable')
				->find($promotion->getPurchasableId());

			$cids[$promotion->getCategoryId()][] = $purchasable;
		}

		$list = array();
		foreach ($cids as $cid => $purchasables) {
			$category = $this
				->get('elcodi.repository.category')
				->find($cid);

			$current_trends = array();
			$trends = $this
				->get('best365.manager.trends')
				->getTrends($cid);
			foreach ($trends as $trending) {
				if ($trending->getIso() == $locale) {
					$current_trends[] = $trending;
				}
			}
			$item = new \stdClass();
			$item->category = $category;
			$item->products = $purchasables;
			$item->trends = $current_trends;
			$list[] = $item;
		}

		// manufacturer
		$manufacturers = $this->get('elcodi.repository.manufacturer')
			->findBy(array('enabled' => 1), array('name' => 'ASC'));

		return $this->render(
			'Best365Bundle:Home:home.html.twig',
			[
				'categories' => $categories,
				'events' => $events,
				'customer' => $customer,
				'products' => $list,
				'manufacturers' => $manufacturers
			]
		);
	}
}
