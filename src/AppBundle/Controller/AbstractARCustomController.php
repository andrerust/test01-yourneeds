<?php

namespace AppBundle\Controller;

use AppBundle\Helper\DateHelper;
use DateTime;
use Main\InsuranceBundle\Entity\Process;
use Main\InsuranceBundle\Entity\ProcessActivity;
use Main\InsuranceBundle\Repository\ProcessActivityRepository;
use Main\InsuranceBundle\Repository\ProcessRepository;
use Main\InsuranceBundle\Repository\ProcessStatusRepository;
use Main\InsuranceBundle\Repository\ProcessTypeRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Repository\ActivityRepository;
use Main\UserBundle\Repository\UserRepository;
use Monolog\Logger;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class AbstractARCustomController extends Controller
{
    protected $databaseAccessor = null;
    protected $environment = null;
    protected $logger = null;
    protected $user = null;
    protected $optionalUser = null; // really optional for later
    protected $validTypes = ['basicneeds', 'pli', 'hci', 'lpi', 'rbi', 'aci', 'ami', 'ali'];
    protected $apiTypeMapping = [
        'pli' => 'phv',
        'hci' => 'hr',
        'lpi' => 'rs',
        'rbi' => 'wg',
        'aci' => 'unf',
        'ali' => 'tie',
        'basicneeds' => 'basicneeds',
        'ami' => 'ami'
    ];
    protected $type = null;
    protected $errors = [];
    
    /**
     *
     */
    protected function initialize()
    {
        $this->setLogger();
        $this->setDatabaseManager();
        $this->setEnvironment();
        $this->setUser();
    }
    
    
    protected function getBrokerId()
    {
        return '00206868';
    }
    
    protected function getBrokerSubId()
    {
        return 'benefit1';
    }
    
    
    protected function saveProcess(String $typeIdentifier = null,
                                   String $statusIdentifier = null,
                                   String $typeContext = null,
                                   String $step = null,
                                   ProcessRepository $processRepository = null,
                                   ProcessStatusRepository $processStatusRepository = null,
                                   ProcessTypeRepository $processTypeRepository = null,
                                   $isNew = 0
    )
    {
        if (null !== $typeIdentifier && null !== $statusIdentifier && null !== $processRepository && null !== $processStatusRepository) {
            
            $processType = $processTypeRepository->findOneBy(['identifier' => $typeIdentifier]);
            $processStatus = $processStatusRepository->findOneBy(['identifier' => $statusIdentifier]);
            
            if (null !== $processType && null !== $processStatus) {
                $process = $processRepository->findOneBy(
                    [
                        'type' => $processType,
                        'status' => $processStatus,
                        'user' => $this->user
                    ],
                    [
                        'updatedAt' => 'DESC'
                    ]
                );
                
                $dateDifference = null;
                if (null !== $process && null !== $process->getUpdatedAt()) {
                    $dateHelper = new DateHelper();
                    $dateDifference = $dateHelper->getDateDifferenceInMinutes($process->getUpdatedAt(), new DateTime());
                }
                
                if (null === $process || (null !== $dateDifference && $dateDifference > 1200) || $isNew == 1) {
                    $process = new Process();
                    $process->setUser($this->user);
                    $process->setType($processType);
                    
                }
                $process->setStatus($processStatus);
                $process->setTypeContext($typeContext);
                $process->setStep($step);
                $this->databaseAccessor->persist($process);
                $this->databaseAccessor->flush();
                return $process;
            }
        }
        return null;
    }
    
    protected function saveActivity(String $activityIdent = null,
                                    ActivityRepository $activityRepository = null,
                                    Process $process = null,
                                    String $step = '',
                                    String $description = '',
                                    String $content = '',
                                    ProcessActivityRepository $processActivityRepository = null
    )
    {
        if (null !== $activityIdent && null !== $activityRepository && null !== $process) {
            $activity = $activityRepository->findOneBy(['ident' => $activityIdent]);
            
            $processActivity = $processActivityRepository->findOneBy(
                [
                    'process' => $process,
                    'activity' => $activity
                ],
                [
                    'updatedAt' => 'DESC'
                ]
            );
            
            $dateDifference = null;
            if (null !== $processActivity && null !== $processActivity->getUpdatedAt()) {
                $dateHelper = new DateHelper();
                $dateDifference = $dateHelper->getDateDifferenceInMinutes($processActivity->getUpdatedAt(), new DateTime('now'));
            }
            
            if (null !== $activity && (null === $dateDifference || $dateDifference > 1)) {
                $processActivity = new ProcessActivity();
                $processActivity->setActivity($activity);
                $processActivity->setProcess($process);
                $processActivity->setStep($step);
                $processActivity->setDescription($description);
                $processActivity->setContent($content);
                $processActivity->setIp($_SERVER['REMOTE_ADDR']);
                $this->databaseAccessor->persist($processActivity);
                $this->databaseAccessor->flush();
                return $processActivity;
            }
        }
        return null;
    }
    
    protected function getCredentialRedirectUrl()
    {
        return $this->redirectToRoute('homepage');
    }
    
    protected function hasErrors()
    {
        return (count($this->errors) > 0) ? true : false;
    }
    
    protected function getErrors()
    {
        return $this->errors;
    }
    
    protected function setError(String $error = '')
    {
        $this->errors[] = $error;
    }
    
    
    protected function getType()
    {
        return $this->type;
    }
    
    protected function typeIsValid(String $type = null)
    {
        return (isset($type) && null !== $type && in_array($type, $this->validTypes)) ? true : false;
    }
    
    protected function setType(String $type = '', TypeRepository $typeRepository = null)
    {
        $type = trim(strtolower($type));
        if (true === $this->typeIsValid($type)) {
            $tmpType = $typeRepository->findOneBy(['identifier' => $type]);
            $this->type = $tmpType;
        } else {
            $this->setError('Type is not valid. Asked type was ' . $type);
        }
    }
    
    protected function allowedToUse(String $voterAction = "",
                                    Request $request,
                                    UserRepository $userRepository,
                                    AuthorizationCheckerInterface $authorizationChecker)
    {
        //$this->setOptionalUser($request, $userRepository);
        //if (null != $voterAction && null != $this->user && null != $this->user->getId()) {
        if (null != $voterAction && null != $this->user && null != $this->user->getId()) {
            if ($authorizationChecker->isGranted($voterAction, $this->user)) {
                
                $userSecurityLog = $this->databaseAccessor->getRepository('MainUserBundle:UserSecurityLog')->findOneBy(
                    [
                        'user' => $this->user
                    ],
                    [
                        'createdAt' => 'DESC'
                    ]
                );
                
                if (1 != $userSecurityLog->getCodeUsed()) {
                    return false;
                    //throw new AccessDeniedHttpException();
                }
                //print_r($authorizationChecker->isGranted($voterAction, $this->user));die;
                return true;
            }
        }
        /*
        die;
        if (null !== $userRepository) {
            $tmpUser = $userRepository->find($id);
            if ($tmpUser && $this->isValidUser($tmpUser)) {
                return true;
            }
        }
        return false;
        */
        return false;
    }
    
    protected function isValidUser($tmpUser = null)
    {
        return (null !== $tmpUser && $tmpUser->getId() == $this->user->getId()) ? true : false;
    }
    
    private function setOptionalUser(Request $request, UserRepository $userRepository)
    {
        if (null !== ($request->query->get('id'))) {
            $id = $request->query->get('id');
            $optionalUser = $userRepository->find($id);
            if ($optionalUser && $optionalUser->getId() > 0) {
                //print_r($optionalUser->getRoles());die;
                $this->optionalUser = $optionalUser;
            }
        }
    }
    
    protected function getOptionalUser()
    {
        return $this->optionalUser;
    }
    
    protected function getUser()
    {
        return $this->user;
    }
    
    protected function setUser()
    {
        if (null != $this->get('security.token_storage')->getToken()->getUser()) {
            $this->user = ($this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY'))
                ? $this->get('security.token_storage')->getToken()->getUser() : null;
            //print_r($this->user->getId() );die;
        }
    }
    
    
    protected function getLogger()
    {
        return $this->logger;
    }
    
    private function setLogger()
    {
        $this->logger = new Logger('my_logger');
    }
    
    
    private function setEnvironment()
    {
        $this->environment = $this->container->getParameter('kernel.environment');
    }
    
    protected function getEnvironment()
    {
        return $this->environment;
    }
    
    
    protected function getDatabaseManager()
    {
        return $this->databaseAccessor;
    }
    
    private function setDatabaseManager()
    {
        $this->databaseAccessor = $this->getDoctrine()->getManager();
    }
}
