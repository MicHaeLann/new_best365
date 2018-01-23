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

namespace Elcodi\Admin\ProductBundle\Controller;

use Buzz\Message\Response;
use Mmoreram\ControllerExtraBundle\Annotation\Entity as EntityAnnotation;
use Mmoreram\ControllerExtraBundle\Annotation\Form as FormAnnotation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

use Elcodi\Admin\CoreBundle\Controller\Abstracts\AbstractAdminController;
use Elcodi\Component\Core\Entity\Interfaces\EnabledInterface;
use Elcodi\Component\Media\Entity\Interfaces\ImageInterface;
use Elcodi\Component\Product\Entity\Interfaces\ProductInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

/**
 * Class Controller for Product
 *
 * @Route(
 *      path = "/product",
 * )
 */
class ProductController extends AbstractAdminController
{
    /**
     * List elements of certain entity type.
     *
     * This action is just a wrapper, so should never get any data,
     * as this is component responsibility
     *
     * @param integer $page             Page
     * @param integer $limit            Limit of items per page
     * @param string  $orderByField     Field to order by
     * @param string  $orderByDirection Direction to order by
	 * @param string  $field 			Search Product key word
     *
     * @return array Result
     *
     * @Route(
     *      path = "s/{page}/{limit}/{orderByField}/{orderByDirection}",
     *      name = "admin_product_list",
     *      requirements = {
     *          "page" = "\d*",
     *          "limit" = "\d*",
     *      },
     *      defaults = {
     *          "page" = "1",
     *          "limit" = "50",
     *          "orderByField" = "id",
     *          "orderByDirection" = "DESC"
     *      },
     * )
     * @Template
     * @Method({"GET", "POST"})
     */
    public function listAction(
        $page,
        $limit,
        $orderByField,
        $orderByDirection
    ) {
        return [
            'page'             => $page,
            'limit'            => $limit,
            'orderByField'     => $orderByField,
            'orderByDirection' => $orderByDirection
        ];
    }

    /**
     * Edit and Saves product
     *
     * @param FormInterface    $form    Form
     * @param ProductInterface $product Product
     * @param boolean          $isValid Is valid
     *
     * @return RedirectResponse Redirect response
     *
     * @Route(
     *      path = "/{id}",
     *      name = "admin_product_view",
     *      requirements = {
     *          "id" = "\d+",
     *      },
     *      methods = {"GET"}
     * )
     * @Route(
     *      path = "/{id}/edit",
     *      name = "admin_product_edit",
     *      requirements = {
     *          "id" = "\d+",
     *      },
     *      methods = {"GET"}
     * )
     * @Route(
     *      path = "/{id}/update",
     *      name = "admin_product_update",
     *      requirements = {
     *          "id" = "\d+",
     *      },
     *      methods = {"POST"}
     * )
     *
     * @Route(
     *      path = "/new",
     *      name = "admin_product_new",
     *      methods = {"GET"}
     * )
     * @Route(
     *      path = "/new/update",
     *      name = "admin_product_save",
     *      methods = {"POST"}
     * )
     *
     * @EntityAnnotation(
     *      class = {
     *          "factory" = "elcodi.factory.product",
     *          "method" = "create",
     *          "static" = false
     *      },
     *      mapping = {
     *          "id" = "~id~"
     *      },
     *      mappingFallback = true,
     *      name = "product",
     *      persist = true
     * )
     * @FormAnnotation(
     *      class = "elcodi_admin_product_form_type_product",
     *      name  = "form",
     *      entity = "product",
     *      handleRequest = true,
     *      validate = "isValid"
     * )
     *
     * @Template
     */
    public function editAction(
        FormInterface $form,
        ProductInterface $product,
        $isValid
    ) {
        if ($isValid) {
            $firstImage = $product
                ->getSortedImages()
                ->first();

            if ($firstImage instanceof ImageInterface) {
                $product->setPrincipalImage($firstImage);
            }

            $this->flush($product);

			// update ext info
			$this->get('best365.manager.purchasable')->updateProductExt($product, $this->get('request'));

			// update price info
			$this->get('best365.manager.purchasable')->updateProductPrice($product, $this->get('request'));

            $this->addFlash(
                'success',
                $this
                    ->get('translator')
                    ->trans('admin.product.saved')
            );

            return $this->redirectToRoute('admin_product_list');
        }

        return [
            'product' => $product,
            'form'    => $form->createView(),
        ];
    }

    /**
     * Enable entity
     *
     * @param Request          $request Request
     * @param EnabledInterface $entity  Entity to enable
     *
     * @return array Result
     *
     * @Route(
     *      path = "/{id}/enable",
     *      name = "admin_product_enable"
     * )
     * @Method({"GET", "POST"})
     *
     * @EntityAnnotation(
     *      class = "elcodi.entity.product.class",
     *      mapping = {
     *          "id" = "~id~"
     *      }
     * )
     */
    public function enableAction(
        Request $request,
        EnabledInterface $entity
    ) {
        return parent::enableAction(
            $request,
            $entity
        );
    }

    /**
     * Disable entity
     *
     * @param Request          $request Request
     * @param EnabledInterface $entity  Entity to disable
     *
     * @return array Result
     *
     * @Route(
     *      path = "/{id}/disable",
     *      name = "admin_product_disable"
     * )
     * @Method({"GET", "POST"})
     *
     * @EntityAnnotation(
     *      class = "elcodi.entity.product.class",
     *      mapping = {
     *          "id" = "~id~"
     *      }
     * )
     */
    public function disableAction(
        Request $request,
        EnabledInterface $entity
    ) {
        return parent::disableAction(
            $request,
            $entity
        );
    }

    /**
     * Delete entity
     *
     * @param Request $request      Request
     * @param mixed   $entity       Entity to delete
     * @param string  $redirectPath Redirect path
     *
     * @return RedirectResponse Redirect response
     *
     * @Route(
     *      path = "/{id}/delete",
     *      name = "admin_product_delete"
     * )
     * @Method({"GET", "POST"})
     *
     * @EntityAnnotation(
     *      class = "elcodi.entity.product.class",
     *      mapping = {
     *          "id" = "~id~"
     *      }
     * )
     */
    public function deleteAction(
        Request $request,
        $entity,
        $redirectPath = null
    ) {
        return parent::deleteAction(
            $request,
            $entity,
            $this->generateUrl('admin_product_list')
        );
    }

	/**
	 * Update product by excel
	 *
	 * @param Request $request
	 *
	 * @return RedirectResponse
	 * @Route(
	 *      path = "/upload",
	 *      name = "admin_product_upload"
	 * )
	 * @Method({"POST"})
	 */
    public function uploadAction(Request $request)
	{
		$file = $request->files->get('file');
		$original_name = $file->getClientOriginalName();
		$directory = realpath($this->container->getParameter('kernel.root_dir') . '/../web/upload/');
		if (strpos($original_name, 'formula') !== false ) {
			$file_name = 'formula.xlsx';
			$file->move($directory, $file_name);
			$uploaded_file = $directory. '/' . $file_name;
			$obj = $this->get('phpexcel')->createPHPExcelObject($uploaded_file);
			$sheet = $obj->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();
			$data = $sheet->rangeToArray('A1:' . $highestColumn . $highestRow, null, true, false);
			$this->get('best365.manager.purchasable')->updateFormula($data);
			$this->addFlash(
				'success',
				$this
					->get('translator')
					->trans('admin.product.saved')
			);
		} elseif (strpos($original_name, 'product') !== false) {
			$file_name = 'product.xlsx';
			$file->move($directory, $file_name);
			$uploaded_file = $directory. '/' . $file_name;
			$obj = $this->get('phpexcel')->createPHPExcelObject($uploaded_file);
			$sheet = $obj->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();
			$data = $sheet->rangeToArray('A2:' . $highestColumn . $highestRow, null, true, false);
			$this->get('best365.manager.purchasable')->updateProduct($data);
			$this->addFlash(
				'success',
				$this
					->get('translator')
					->trans('admin.product.saved')
			);
		}

		return $this->redirectToRoute('admin_product_list');
	}

	/**
	 * export product data
	 *
	 * @Route(
	 *      path = "/export",
	 *      name = "admin_product_export"
	 * )
	 *
	 * @Method({"GET"})
	 */
	public function exportAction()
	{
		$obj = $this->get('phpexcel')->createPHPExcelObject();
		$obj->setActiveSheetIndex(0);
		$products = $this->get('best365.manager.purchasable')->exportProduct();
		$obj->getActiveSheet()->FromArray($products, NULL, 'A1', true);

		$writer = $this->get('phpexcel')->createWriter($obj, 'Excel2007');
		$response = $this->get('phpexcel')->createStreamedResponse($writer);

		$dispositionHeader = $response->headers->makeDisposition(
			ResponseHeaderBag::DISPOSITION_ATTACHMENT,
			'product.xlsx'
		);
		$response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
		$response->headers->set('Pragma', 'public');
		$response->headers->set('Cache-Control', 'maxage=1');
		$response->headers->set('Content-Disposition', $dispositionHeader);

		return $response;
	}

	/**
	 * Search Product
	 *
	 * @Route(
	 *      path = "/search",
	 *      name = "admin_product_search"
	 * )
	 *
	 * @return array
	 *
	 * @Method({"POST"})
	 *
	 * @Template("AdminProductBundle:Product:list.html.twig")
	 */
	public function searchAction()
	{
		$field = $this->get('request')->get('field');
		return [
			'field' => $field,
		];
	}
}
