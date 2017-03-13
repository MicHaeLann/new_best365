<?php

namespace Best365Bundle\Controller;

use LogicException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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
	 * @param Request $request The current request
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
    public function navigationAction(Request $request)
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

		$params = $request->query->all();

        return $this->render(
            'Best365Bundle:Layout:_language.nav.html.twig',
            [
                'request'      => $masterRequest,
                'languages'    => $languages,
                'activeLocale' => $masterRequest->getLocale(),
				'params' 	   => $params
            ]
        );
    }
}
