<?php

namespace Best365Bundle\Controller;

use LogicException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Elcodi\Store\CurrencyBundle\Controller\CurrencyController;
use Elcodi\Component\Currency\Entity\Interfaces\CurrencyInterface;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;

/**
 * Class ControllerCurrency
 *
 * @Route(
 *      path = "/best365/currency",
 * )
 */
class Best365CurrencyController extends CurrencyController
{
    use TemplateRenderTrait;

    /**
     * Currency navigator
     *
     * @return Response Response
     *
     * @throws LogicException No currencies available
     *
     * @Route(
     *      path = "/nav",
     *      name = "best365_store_currency_nav",
     *      methods = {"GET"}
     * )
     */
    public function navAction()
    {
        $currencies = $this
            ->get('elcodi.repository.currency')
            ->findBy([
                'enabled' => true,
            ]);

        if (empty($currencies)) {
            throw new LogicException(
                'There are not currencies, you must configure at least one'
            );
        }

        $activeCurrency = $this
            ->get('elcodi.wrapper.currency')
            ->get();

        return $this->render(
            'Best365Bundle:Layout:_currency.nav.html.twig',
            [
                'currencies'     => $currencies,
                'activeCurrency' => $activeCurrency,
            ]
        );
    }

    /**
     * Switch currency to new one
     *
     * @param Request $request Request
     * @param string  $iso     Currency iso
     *
     * @return RedirectResponse Last page
     *
     * @Route(
     *      path = "/switch/{iso}",
     *      name = "best365_store_currency_switch",
     *      methods = {"GET"}
     * )
     */
    public function switchAction(Request $request, $iso)
    {
        $currency = $this
            ->get('elcodi.repository.currency')
            ->findOneBy([
                'enabled' => true,
                'iso'     => $iso,
            ]);

        if ($currency instanceof CurrencyInterface) {
            $this
                ->get('elcodi.manager.currency_session')
                ->set($currency);
        }

        $referrer = $request
            ->headers
            ->get(
                'referer',
                $this->generateUrl('store_homepage')
            );

        return $this->redirect($referrer);
    }
}
