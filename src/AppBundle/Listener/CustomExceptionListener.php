<?php

namespace AppBundle\Listener;

use AppBundle\Controller\BaseController;
use Doctrine\ORM\EntityManager;
use Main\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Debug\Exception\FlattenException;


/**
 * Exception Listener
 */
class CustomExceptionListener extends BaseController
{
	/**
	 * @var TokenStorage
	 */
	protected $token;

	/**
	 * @var Kernel
	 */
	protected $kernel;
	/**
	 */
	protected $templating;
	/**
	 * @var Translator
	 */
	protected $translator;
	/**
	 * @var Request
	 */
	protected $request;
	/**
	 */
	protected $entityManager;

	/**
	 * @var string
	 */
	protected $defaultLocale;

	/**
	 * @var string
	 */
	protected $user;

	/**
	 * @Route("/exception/404", name="exception_handler")
	 */
	public function onKernelException(GetResponseForExceptionEvent $event)
	{

		$this->setCurrentUser();
		if ('dev' == $this->kernel->getEnvironment() || 'prod' == $this->kernel->getEnvironment()) {
			$exception = $event->getException();

			// new Response object
			$response = new Response();
			$user = $this->entityManager->getRepository('MainUserBundle:User')
				->findOneBy(['id' => $this->user->getId()]);
			if (!$user) {
				return $this->redirectToRoute('homepage');
			}

			if ($exception instanceof HttpExceptionInterface) {
				/*
				$response->setStatusCode($exception->getStatusCode());
				$response->headers->replace($exception->getHeaders());
				*/
				$e = FlattenException::create($event->getException());

				$message = sprintf(
					'%s',
					$e->getMessage()
				);
				if ($exception->getStatusCode() == '404') {

					$response->setContent(
						$this->templating->render(
							'bundles/TwigBundle/Exception/error404.html.twig', [
								'exception' => $exception,
								'user' => $user,
								'statusCode' => $exception->getStatusCode(),
								'message' => $message
							]
						)
					);
				} elseif ($exception->getStatusCode() == '403') {
					$response->setContent(
						$this->templating->render(
							'bundles/TwigBundle/Exception/error403.html.twig', [
								'exception' => $exception,
								'user' => $user,
								'statusCode' => $exception->getStatusCode(),
								'message' => $message
							]
						)
					);
					// HttpExceptionInterface is a special type of exception
					// that holds status code and header details
				} elseif ($exception->getStatusCode() == '500') {
					$response->setContent(
						$this->templating->render(
							'bundles/TwigBundle/Exception/error500.html.twig', [
								'exception' => $exception,
								'user' => $user,
								'statusCode' => $exception->getStatusCode(),
								'message' => $message
							]
						)
					);
					// HttpExceptionInterface is a special type of exception
					// that holds status code and header details
				}
			} else {
				$response->setStatusCode(500);
			}

			// set the new $response object to the $event
			$event->setResponse($response);
		}
	}

	private function setCurrentUser()
	{
		if ($this->token->getToken()
			&& $this->token->getToken()->getUser()
			&& $this->token->getToken()->getUser()->getId()
		) {
			$user = $this->token->getToken()->getUser();
		} else {
			$user = new User();
			$user->setId(null);
			$user->setEmail('');
			$user->setRoles([]);
		}
		$this->user = $user;
	}

	/**
	 * @param Kernel $kernel
	 */
	public function setToken(TokenStorage $token)
	{
		$this->token = $token;
	}

	/**
	 * @param Kernel $kernel
	 */
	public function setKernel($kernel)
	{
		$this->kernel = $kernel;
	}

	public function setTemplating($templating)
	{
		$this->templating = $templating;
	}

	/**
	 * @param Request|null $request
	 */
	public function setRequest($request = null)
	{
		$this->request = $request;
	}

	/**
	 * @param Translator $translator
	 */
	public function setTranslator($translator)
	{
		$this->translator = $translator;
	}

	/**
	 * @param string $defaultLocale
	 */
	public function setDefaultLocale($defaultLocale)
	{
		$this->defaultLocale = $defaultLocale;
	}

	/**
	 * @param EntityManager $entityManager
	 */
	public function setEntityManager($entityManager)
	{
		$this->entityManager = $entityManager;
	}

}