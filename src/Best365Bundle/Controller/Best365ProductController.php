<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 25/10/16
 * Time: 3:27 PM
 */

namespace Best365Bundle\Controller;

use Elcodi\Store\ProductBundle\Controller\PurchasableController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Address controllers
 *
 * @Security("has_role('ROLE_CUSTOMER')")
 * @Route(
 *      path = "/best365",
 * )
 */
class Best365ProductController extends PurchasableController
{
	/**
	 * get result by search field
	 *
	 *
	 * @return Response Response
	 *
	 * @Security("has_role('ROLE_CUSTOMER')")
	 * @Route(
	 *      path = "/product/search",
	 *      name = "best365_store_product_search",
	 *      methods = {"GET", "POST"}
	 * )
	 *
	 */
	public function searchAction()
	{
		// find by key word
		$tag_ids = $this->get('best365.manager.purchasable')->getResult($this->get('request'));


		// find by name(if Chinese, split by word;if English, split by space)
		$name = $this->get('request')->get('field');
		$name_ids = $this->getPurchasableByName($name);

		// merge ids
		$ids = array_unique(array_merge($name_ids, $tag_ids));

		// get collection by ids
		$collection = array();
		foreach ($ids as $id) {
			$collection[] = $this
			->get('elcodi.repository.purchasable')
			->find($id);
		}

		return $this->render(
			'Best365Bundle:Product:product.list.html.twig',
			[
				'purchasables' => $collection,
			]
		);
	}

	/**
	 * get product by name
	 * @param $name
	 * @return array
	 */
	public function getPurchasableByName($name)
	{
		// check lan
		if (strlen($name) != mb_strlen($name, 'utf-8')) {
			// Chinese
			$field_chars = str_split($name);
		} else {
			// English
			$field_chars = explode(' ', $name);
		}
		$chars = array();
		foreach ($field_chars as $char) {
			if ($char !== ' ' && !in_array($char, $chars)) {
				$chars[] = $char;
			}
		}

		$length = count($chars);

		$query = $this->get('elcodi.repository.purchasable')
			->createQueryBuilder('p');
		$where = 'p.name LIKE ';
		for ($i = 0; $i < $length; $i++) {
			if ($i > 0) {
				$where .= ' AND p.name LIKE ';
			}
			$where .= ':letter'.$i;
		}
		$query->where($where);

		for($i = 0; $i < $length; $i++) {
			$letter = 'letter' . $i;
			$query->setParameter($letter, '%' . $chars[$i] . '%');
		}
		$result = $query->getQuery()
			->getResult();

		$ids = array();
		foreach ($result as $purchasable) {
			$ids[] = $purchasable->getId();
		}

		return $ids;
	}
}