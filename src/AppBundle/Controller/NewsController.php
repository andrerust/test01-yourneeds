<?php

namespace AppBundle\Controller;

use AppBundle\Repository\MessageRepository;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class NewsController extends BaseController
{

    /**
     * @Route("news", name="news")
     */
    public function helpFaqAction(Request $request,
                                  AuthorizationCheckerInterface $authorizationChecker,
                                  UserRepository $userRepository,
                                  MessageRepository $messageRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_SAVE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        return $this->render('@AppBundle/news/news.html.twig', [
            'user' => $this->user
        ]);
    }
}