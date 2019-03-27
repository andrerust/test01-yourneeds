<?php

namespace AppBundle\Controller;

use Main\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends BaseController
{

	/**
	 * @Route("iframe", name="page_iframe")
	 */
	public function iframeAction()
	{
		$userId = null;
		if (null !== $this->getUser() && null !== $this->getUser()->getId()) {
			$userId = $this->getUser()->getId();
		}
		return $this->render('@AppBundle/home/mm.html.twig', [
			'user' => $this->user
		]);
	}

	/**
	 * @Route("/", name="homepage")
	 */
	public function homepageAction()
	{
		$this->initialize();
		if (null === $this->user) {
			$user = new User();
			$user->setId(0);
		}
		return $this->render('@AppBundle/home/index.html.twig', [
			'user' => $this->user
		]);
	}

	/**
	 * @Route("/ombudsman", name="page_ombudsman")
	 */
	public function pageOmbudsmanAction()
	{
		$userId = null;
		if (null !== $this->getUser() && null !== $this->getUser()->getId()) {
			$userId = $this->getUser()->getId();
		}
		return $this->render('@AppBundle/home/ombudsman.html.twig', [
			'user' => $this->user
		]);
	}


	/**
	 * @Route("/imprint", name="page_imprint")
	 */
	public function imprintAction()
	{
		$user = new User();
		$user->setId(0);
		if (null !== $this->getUser() && null !== $this->getUser()->getId()) {
			$user = $this->getUser();
		}
		return $this->render('@AppBundle/home/imprint.html.twig', [
			'user' => $this->user
		]);
	}


	/**
	 * @Route("/privacypolicy", name="page_privacypolicy")
	 */
	public function privacyPolicyAction()
	{
		$userId = null;
		if (null !== $this->getUser() && null !== $this->getUser()->getId()) {
			$userId = $this->getUser()->getId();
		}
		return $this->render('@AppBundle/home/privacypolicy.html.twig', [
			'user' => $this->user
		]);
	}

}