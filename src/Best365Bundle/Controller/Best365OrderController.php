<?php

namespace Best365Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Elcodi\Store\CartBundle\Controller\OrderController;
use Elcodi\Component\Cart\Entity\Interfaces\OrderInterface;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;

/**
 * Order controllers
 *
 * @Security("has_role('ROLE_CUSTOMER')")
 * @Route(
 *      path = "/best365/order",
 * )
 */
class Best365OrderController extends OrderController
{
    use TemplateRenderTrait;

    /**
     * Order view
     *
     * @param integer $id     Order id
     * @param boolean $thanks Thanks
	 * @param boolean $transfer Transfer
     *
     * @return Response Response
     *
     * @Route(
     *      path = "/{id}",
     *      name = "best365_store_order_view",
     *      requirements = {
     *          "orderId": "\d+"
     *      },
     *      defaults = {
     *          "thanks": false,
	 *     		"transfer": false
     *      },
     *      methods = {"GET"}
     * )
     * @Route(
	 *      path = "/{id}/thanks",
	 *      name = "best365_store_order_thanks",
	 *      requirements = {
	 *          "orderId": "\d+"
	 *      },
	 *      defaults = {
	 *          "thanks": true,
	 *     		"transfer": false
	 *      },
	 *      methods = {"GET"}
     * )
	 * @Route(
	 *      path = "/{id}/thanks/transfer",
	 *      name = "best365_store_order_thanks_transfer",
	 *      requirements = {
	 *          "orderId": "\d+"
	 *      },
	 *      defaults = {
	 *          "thanks": true,
	 *     		"transfer": true
	 *      },
	 *      methods = {"GET"}
	 * )
     */
    public function viewOrderAction($id, $thanks, $transfer)
    {
        $order = $this
            ->get('elcodi.repository.order')
            ->findOneBy([
                'id'       => $id,
                'customer' => $this->getUser(),
            ]);

        if (!($order instanceof OrderInterface)) {
            throw $this->createNotFoundException('Order not found');
        }

        // reference and tracking number
		$this->get('best365.manager.order')
			->getRecord($order);
        $tracking_nums = array();
        if (!empty($order->trackingNum)) {
			$tracking_nums = explode(',', $order->trackingNum);
		}
        $order->trackingNum = $tracking_nums;

        return $this->render(
            'Best365Bundle:User:order.view.html.twig',
            [
                'order'        => $order,
                'thanks'       => $thanks,
				'transfer'	   => $transfer
            ]
        );
    }

    /**
     * Order list
     *
     * @return Response Response
     *
     * @Route(
     *      path = "s",
     *      name = "best365_store_order_list",
     *      methods = {"GET"}
     * )
     */
    public function listAction()
    {
        $orders = $this
            ->get('elcodi.wrapper.customer')
            ->get()
            ->getOrders();

		foreach ($orders as &$order) {
			$this->get('best365.manager.order')
				->getRecord($order);

			$tracking_nums = array();
			if (!empty($order->trackingNum)) {
				$tracking_nums = explode(',', $order->trackingNum);
			}
			$order->trackingNum = $tracking_nums;
		}
        return $this->render(
            'Best365Bundle:User:list.html.twig',
            [
                'orders' => $orders
            ]
        );
    }
}
