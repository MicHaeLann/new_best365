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

		if (strtolower($page->getTitle()) == 'membership' ||
			strpos($page->getTitle(), '会员') !== false) {
			$membership = $this->get('best365.manager.membership')
				->getList();

			return $this->render(
				'Best365Bundle:Page:membership.view.html.twig',
				[
					'page' => $page,
					'membership' => $membership
				]
			);
		} else {
			return $this->render(
				'Best365Bundle:Page:page.view.html.twig',
				[
					'page' => $page
				]
			);
		}
	}
}
