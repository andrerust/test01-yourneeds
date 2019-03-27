<?php

namespace Main\AdminBundle\Controller\Api;

use AppBundle\Controller\BaseController;
use Main\InsuranceBundle\Repository\SurveyQuestionRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class QuestionLoadController extends BaseController
{
    /**
     * @Method({"PUT"})
     * @Route("/api/survey/questions/load", name="api_survey_questions_load")
     */
    public function loadQuestionsAction(Request $request,
                                        AuthorizationCheckerInterface $authorizationChecker,
                                        UserRepository $userRepository,
                                        SurveyQuestionRepository $surveyQuestionRepository,
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
        //$requestData = json_encode($data['data']);
        
        $tmpList = $surveyQuestionRepository->findAll();
        $entries = [];
        foreach ($tmpList as $key => $value) {
            if (null != $value->getident() && !empty($value->getident())
                && null != $value->getDescription()
            ) {
                $entries[$value->getident()] = $value->getDescription();
            }
        }
        $jsonResponse['resultList'] = $entries;
        $jsonResponse['status'] = '200';
        
        $logger->info('resultList parameters: ', [
            'list' => [
                'result' => $entries
            ]
        ]);
        
        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }
}
