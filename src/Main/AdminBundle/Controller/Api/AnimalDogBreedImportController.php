<?php

namespace Main\AdminBundle\Controller\Api;

use AppBundle\Controller\BaseController;
use Doctrine\Common\Collections\Criteria;
use Main\AdminBundle\Repository\AnimalDogBreedRepository;
use Main\UserBundle\Repository\UserRepository;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class AnimalDogBreedImportController extends BaseController
{
    /**
     * @Method({"PUT"})
     * @Route("/api/dogbreeds/{input}/load", name="api_dogbreeds_input_load")
     */
    public function loadApiJobInputAction($input = 'all',
                                          Request $request,
                                          AuthorizationCheckerInterface $authorizationChecker,
                                          UserRepository $userRepository,
                                          AnimalDogBreedRepository $animalDogBreedRepository,
                                          LoggerInterface $logger
    )
    {
        
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_ADMIN_IMPORT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        } else {
            $data = json_decode($request->getContent(), true);
        }
        $requestData = json_encode($data['data']);
        
        if ('all' != $input) {
            $criteria = new Criteria();
            $criteria
                ->where($criteria->expr()->contains('name', $input));
            $tmpList = $animalDogBreedRepository->matching($criteria);
        } else {
            $tmpList = $animalDogBreedRepository->findAll();
        }
        $resultList = [];
        foreach ($tmpList as $key => $value) {
            $resultList[] = $value->getName();;
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
        
        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }
}
