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

namespace Elcodi\Admin\ProductBundle\Controller\Component;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Mmoreram\ControllerExtraBundle\Annotation\Entity as EntityAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Form as FormAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Paginator as PaginatorAnnotation;
use Mmoreram\ControllerExtraBundle\ValueObject\PaginatorAttributes;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormView;

use Elcodi\Admin\CoreBundle\Controller\Abstracts\AbstractAdminController;
use Elcodi\Component\Product\Entity\Interfaces\ProductInterface;

/**
 * Class ProductComponentController
 *
 * @Route(
 *      path = "product"
 * )
 */
class ProductComponentController extends AbstractAdminController
{
    /**
     * Component for entity list.
     *
     * As a component, this action should not return all the html macro, but
     * only the specific component
     *
     * @param Paginator           $paginator           Paginator instance
     * @param PaginatorAttributes $paginatorAttributes Paginator attributes
     * @param integer             $page                Page
     * @param integer             $limit               Limit of items per page
     * @param string              $orderByField        Field to order by
     * @param string              $orderByDirection    Direction to order by
	 * @param string              $field		       Search field
	 *
     * @return array Result
     *
     * @Route(
     *      path = "s/component/{page}/{limit}/{orderByField}/{orderByDirection}/{field}",
     *      name = "admin_product_list_component",
     *      requirements = {
     *          "page" = "\d*",
     *          "limit" = "\d*",
     *      },
     *      defaults = {
     *          "page" = "1",
     *          "limit" = "50",
     *          "orderByField" = "id",
     *          "orderByDirection" = "DESC",
	 *     		"field" = ""
     *      },
     *      methods = {"GET"}
     * )
     * @Template("AdminProductBundle:Product:listComponent.html.twig")
     *
     * @PaginatorAnnotation(
     *      attributes = "paginatorAttributes",
     *      class = "elcodi.entity.product.class",
     *      page = "~page~",
     *      limit = "~limit~",
     *      orderBy = {
     *          {"x", "~orderByField~", "~orderByDirection~"}
     *      },
	 *      wheres = {
	 *			{"x", "name", "LIKE", "%~field~%"},
	 *	 	}
     * )
     */
    public function listComponentAction(
        Paginator $paginator,
        PaginatorAttributes $paginatorAttributes,
        $page,
        $limit,
        $orderByField,
        $orderByDirection,
		$field
    ) {
        return [
            'paginator'        => $paginator,
            'page'             => $page,
            'limit'            => $limit,
            'orderByField'     => $orderByField,
            'orderByDirection' => $orderByDirection,
            'totalPages'       => $paginatorAttributes->getTotalPages(),
            'totalElements'    => $paginatorAttributes->getTotalElements(),
			'field'			   => $field
        ];
    }

    /**
     * New element component action
     *
     * As a component, this action should not return all the html macro, but
     * only the specific component
     *
     * @param FormView         $formView Form view
     * @param ProductInterface $product  Product
     *
     * @return array Result
     *
     * @Route(
     *      path = "/{id}/component",
     *      name = "admin_product_edit_component",
     *      requirements = {
     *          "id" = "\d+",
     *      },
     *      methods = {"GET"}
     * )
     * @Route(
     *      path = "/new/component",
     *      name = "admin_product_new_component",
     *      methods = {"GET"}
     * )
     * @Template("AdminProductBundle:Product:editComponent.html.twig")
     *
     * @EntityAnnotation(
     *      class = {
     *          "factory" = "elcodi.factory.product",
     *          "method" = "create",
     *          "static" = false
     *      },
     *      name = "product",
     *      mapping = {
     *          "id" = "~id~"
     *      },
     *      mappingFallback = true,
     * )
     * @FormAnnotation(
     *      class = "elcodi_admin_product_form_type_product",
     *      name  = "formView",
     *      entity = "product",
     *      handleRequest = true,
     *      validate = "isValid"
     * )
     */
    public function editComponentAction(
        FormView $formView,
        ProductInterface $product
    ) {
        $useStock = $this
            ->get('elcodi.store')
            ->getUseStock();

		// get ext info
		$ext = $this
			->get('best365.manager.purchasable')
			->getProductExt($product);

		// get price info
		$price = array();
		$membership = $this
			->get('best365.manager.membership')
			->getList();

		// initialise display
		foreach ($membership as $cfg) {
			$price[$cfg->getId()]['id'] = $cfg->getId();
			$price[$cfg->getId()]['name'] = $cfg->getName();
			$price[$cfg->getId()]['price'] = '0.00';
			$price[$cfg->getId()]['iso'] = 'NZD';
		}

		$membership_price = $this
			->get('best365.manager.purchasable')
			->getProductPrice($product->getId());

		foreach ($membership_price as $cfg) {
			$price[$cfg->getMid()]['price'] = number_format($cfg->getPrice() / 100, 2);
			$price[$cfg->getMid()]['iso'] = $cfg->getPriceCurrencyIso();
		}

		$currency = $this
			->get('elcodi.repository.currency')
			->findBy(array('enabled' => true));
		
        return [
            'product'  => $product,
            'form'     => $formView,
            'useStock' => $useStock,
			'ext' => $ext,
			'price'=> $price,
			'currency' => $currency
        ];
    }
}
