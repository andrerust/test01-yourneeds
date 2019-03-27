<?php

namespace Main\AdminBundle\Controller;

use AppBundle\Controller\BaseController;
use Main\AdminBundle\Helper\MM\AnimalDogBreedImportHelper;
use Main\AdminBundle\Helper\MM\JobImportHelper;
use Main\AdminBundle\Repository\AnimalDogBreedRepository;
use Main\AdminBundle\Repository\JobGroupRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class AdminController extends BaseController
{
    /**
     * @Route("/admin/import/jobs", name="admin_import_jobs")
     */
    public function adminImportMMJobsAction(Request $request,
                                            AuthorizationCheckerInterface $authorizationChecker,
                                            UserRepository $userRepository,
                                            JobGroupRepository $jobGroupRepository,
                                            LoggerInterface $logger
    
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_ADMIN_IMPORT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        
        $importHelper = new JobImportHelper($userRepository, $jobGroupRepository, $this->getDoctrine()->getManager(), $logger);
        $importHelper->init();
        $list = $importHelper->importList();
        
        $jsonResponse['data'] = $list;
        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }
    
    
    /**
     * @Route("/admin/home", name="admin_home")
     */
    public function adminHomeAction()
    {
        /*
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
             throw $this->createAccessDeniedException();
        }

        $user = $this->get('security.token_storage')->getToken()->getUser();
        */
        return $this->redirectToRoute('admin_dashboard', [
        ]);
    }
    
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function adminDashboardAction(Request $request, UserInterface $user = null)
    {
        
        $em = $this->getDoctrine()->getManager();
        $activities = array();
        //$accessList = $this->getAuthorization('show_profile', $this->getCurrentUser(), $user);
        //$this->setCurrentPetSession($currentUser, $request);
        /*
        $this->get('logger')
                ->info('Showing user profile: ' . $user->getEmail());
        */
        
        $lastSecurityLog = $em->getRepository('MainUserBundle:UserSecurityLog')
            ->findLastByUserId($this->getCurrentUser()->getId());
        
        $activities = $em->getRepository('MainUserBundle:Activity')
            ->findAllByUserId($this->getCurrentUser()->getId());
        
        //print_r($lastSecurityLog);die;
        //'accessList' => $accessList,
        return $this->render('@MainAdminBundle/admin.dashboard.html.twig', [
            'loggedUser' => $this->getCurrentUser(),
            'activities' => $activities,
            'lastSecurityLog' => $lastSecurityLog
        ]);
    }
    
}