<?php

namespace Main\UserBundle\Controller\Web;

use AppBundle\Controller\BaseController;
use Doctrine\Common\Collections\ArrayCollection;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserStatsController extends BaseController
{

   /**
    * @Route("/stats/save", name="stats_save", methods={"PUT"}, requirements={"id" = "\d+"}, defaults={"id" = 0})
    */
   public function saveStats(UserRepository $userRepository = null,
                             Request $request,
                             AuthorizationCheckerInterface $authorizationChecker

   )
   {
       $this->initialize();
       if (!$this->allowedToUse('CAN_VIEW_SURVEY_RESULT', $request, $userRepository, $authorizationChecker)) {
           return $this->getCredentialRedirectUrl();
       }


      $list = new ArrayCollection();

      return $this->render('MainUserBundle:Pet/widgets:activities.tab.widget.html.twig', [
         'activities' => $list
      ]);
   }
}