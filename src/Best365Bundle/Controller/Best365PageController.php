<?php
namespace Best365Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class Best365PageController
 * @package Best365Bundle\Controller
 * @Route(
 *     path = "/best365/page",
 *	   options={"expose"=true}
 * )
 */
class Best365PageController extends Controller
{
	/**
	 * Render page
	 * @return Response Response
	 * @Route(
	 *      path = "/{id}",
	 *      name = "best365_store_page",
	 *      requirements = {
	 *          "id" = "\d+"
	 *      },
	 *      methods = {"GET"}
	 * )
	 */
	public function viewPageAction($id)
	{
		$page = $this->get('elcodi.repository.page')
			->find($id);
		$view = 'Best365Bundle:Page:page.view.html.twig';
		if ($id == 2) {
			$view = 'Best365Bundle:Page:about.view.html.twig';
		}
		return $this->render(
			$view,
			[
				'page' => $page
			]
		);
	}
}
