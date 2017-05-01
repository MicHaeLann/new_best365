<?php

namespace Best365Bundle\Manager;

use Doctrine\ORM\EntityManager;

class Best365CategoryManager
{
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	public function getHomepageCategory()
	{
		$categories = $this
			->em
			->getRepository('Best365Bundle\Entity\CategoryExt')
			->findBy(array('showInHome' => 1));
		return $categories;
	}
}