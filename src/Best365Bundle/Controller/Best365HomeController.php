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

		// profile
		$customer = $this
			->get('elcodi.wrapper.customer')
			->get();

		if (!empty($customer->getId())) {
			$membership = $this->get('best365.manager.customer')
				->getCustomerMembership($customer);
			$strategy = $membership->getStrategy();
		} else {
			$strategy = 100;
		}


		// locale
		$locale = $this
			->get('request_stack')
			->getMasterRequest()
			->getLocale();

		// products(category->product)
		$promotions = $this
			->get('elcodi.repository.purchasable')
			->getHomePurchasables(200, false);

		// initialize cid array
		foreach ($categories as $category) {
			$cids[$category['entity']['id']] = array();
		}

		foreach ($promotions as $promotion) {
			$parent_category = $promotion->getPrincipalCategory()->getParent();
			if (empty($parent_category)) {
				$parent_category = $promotion->getPrincipalCategory();
			}
			$cids[$parent_category->getId()][] = $promotion;
		}
		ksort($cids);
		
		// used to fill $cids when short of data, at least 1 not empty required
		foreach ($cids as $v) {
			if (!empty($v)) {
				$const = $v;
				break;
			}
		}
		foreach ($cids as &$v) {
			if (empty($v)) {
				$v = $const;
			}

			if (count($v) < 7) {
				$v[1] = $v[2] = $v[3] = $v[4] = $v[5] = $v[6] = $v[0];
			}
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

			// get fixed price
			foreach ($purchasables as &$purchasable) {
				$purchasable_ext = $this->get('best365.manager.purchasable')
					->getProductExt($purchasable);
				$fixed_price = 0;
				if (!empty($purchasable_ext)) {
					$fixed_price = $purchasable_ext->getFixedPrice();
				}
				$purchasable->fixedPrice = $fixed_price;
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
				'manufacturers' => $manufacturers,
				'strategy' => $strategy
			]
		);
	}
}
