<?php
namespace Best365Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class Best365PageController
 * @package Best365Bundle\Controller
 * @Route("/best365/page")
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

		return $this->render(
			'Best365Bundle:Page:page.view.html.twig',
			[
				'page' => $page
			]
		);
	}
}