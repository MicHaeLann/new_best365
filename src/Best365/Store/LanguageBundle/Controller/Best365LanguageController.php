<?php

namespace Best365\Store\LanguageBundle\Controller;

use LogicException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Elcodi\Store\LanguageBundle\Controller\LanguageController;
use Elcodi\Store\CoreBundle\Controller\Traits\TemplateRenderTrait;

/**
 * Class LanguageController
 *
 * @Route(
 *      path = "/best365/language",
 * )
 */
class Best365LanguageController extends LanguageController
{
    use TemplateRenderTrait;

    /**
     * Language navigator
     *
     * @return Response Response
     *
     * @throws LogicException No languages available
     *
     * @Route(
     *      path = "/nav",
     *      name = "best365_store_language_nav",
     *      methods = {"GET"}
     * )
     */
    public function navAction()
    {
        $languages = $this
            ->get('elcodi.repository.language')
            ->findBy([
                'enabled' => true,
            ]);

        if (empty($languages)) {
            throw new LogicException(
                'There are not languages, you must configure at least one'
            );
        }

        $masterRequest = $this
            ->get('request_stack')
            ->getMasterRequest();

        return $this->render(
            'Best365LayoutStoreTemplateBundle:Layout:_language.nav.html.twig',
            [
                'request'      => $masterRequest,
                'languages'    => $languages,
                'activeLocale' => $masterRequest->getLocale(),
            ]
        );
    }
}
