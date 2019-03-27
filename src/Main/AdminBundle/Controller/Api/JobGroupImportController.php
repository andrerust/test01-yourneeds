<?php

namespace Main\AdminBundle\Controller\Api;

use AppBundle\Controller\BaseController;
use Doctrine\Common\Collections\Criteria;
use Main\AdminBundle\Repository\JobGroupRepository;
use Main\UserBundle\Repository\UserRepository;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class JobGroupImportController extends BaseController
{
    /**
     * @Method({"PUT", "GET"})
     * @Route("/api/job/{input}/load", name="api_job_input_load")
     */
    public function loadApiJobAction($input = 'all',
                                     Request $request,
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
        
        $logger->info('STEP 2a-error :', [
            '/api/job/{input}/load' => $input
        ]);
        
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        } else {
            $data = json_decode($request->getContent(), true);
        }
        $requestData = json_encode($data['data']);
        //$list = $jobGroupRepository->findBy(['name' => 'Abteilungsleiter']);
        
        if ('all' != $input) {
            $criteria = new Criteria();
            $criteria
                ->where($criteria->expr()->contains('name', $input));
            $tmpList = $jobGroupRepository->matching($criteria);
        } else {
            $tmpList = $jobGroupRepository->findAll();
        }
        $resultList = [];
        foreach ($tmpList as $key => $value) {
            $resultList[] = ['name' => $value->getName()];
        }
        $jsonResponse['input'] = $input;
        $jsonResponse['resultList'] = $resultList;
        $jsonResponse['requestData'] = $requestData;
        $jsonResponse['status'] = '200';
        
        $this->logger = new Logger('my_logger');
        $logger->info('resultList parameters: ', [
            'list' => [
                'result' => $resultList
            ]
        ]);
        
        return new JsonResponse($resultList, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }
}
