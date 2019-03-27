<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FaqQuestion;
use AppBundle\Repository\FaqQuestionRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class HelpController extends BaseController
{

    /**
     * @Route("/faq/new/save", name="faq_new_save")
     */
    public function faqSaveNewAction(Request $request,
                                     AuthorizationCheckerInterface $authorizationChecker,
                                     UserRepository $userRepository,
                                     FaqQuestionRepository $faqQuestionRepository,
                                     LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $jsonResponse['data'] = [];
        $post = $request->request->all();
        //$jsonResponse['data'] = $post;

        if (isset($post)) {
            $tmpFaqQuestion = new FaqQuestion();

            if (isset($post['question_new']) && !empty($post['question_new'])) {
                $tmpFaqQuestion->setQuestion(trim($post['question_new']));
            }

            if (isset($post['answer_new']) && !empty($post['answer_new'])) {
                $tmpFaqQuestion->setAnswer(trim($post['answer_new']));
            }

            $isActive = 0;
            if (isset($post['active_new'])
                && !empty($post['active_new'])
                && 'on' == $post['active_new']
            ) {
                $isActive = 1;
            }

            $tmpFaqQuestion->setIsActive($isActive);

            $this->databaseAccessor->persist($tmpFaqQuestion);
            $this->databaseAccessor->flush();
            //print_r($tmpFaqQuestion);die;
        }
        return $this->redirectToRoute('faq_edit', [
        ]);
    }

    /**
     * @Route("/faq/{id}/edit/save", name="faq_edit_save")
     */
    public function faqSaveEditAction(String $id,
                                      Request $request,
                                      AuthorizationCheckerInterface $authorizationChecker,
                                      UserRepository $userRepository,
                                      FaqQuestionRepository $faqQuestionRepository,
                                      LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $jsonResponse['data'] = [];
        $post = $request->request->all();
        //print_r($post);die;
        if (isset($post)) {
            foreach ($post as $postKey => $postValue) {
                $tmpFaqQuestion = $faqQuestionRepository->findOneBy(
                    [
                        'id' => $id
                    ]
                );

                if (isset($post['question']) && !empty($post['question'])) {
                    $tmpFaqQuestion->setQuestion(trim($post['question']));
                }

                if (isset($post['answer']) && !empty($post['answer'])) {
                    $tmpFaqQuestion->setAnswer(trim($post['answer']));
                }

                $isActive = 0;
                if (isset($post['active'])
                    && !empty($post['active'])
                    && 'on' == $post['active']
                ) {
                    $isActive = 1;
                }

                $tmpFaqQuestion->setIsActive($isActive);

                $this->databaseAccessor->persist($tmpFaqQuestion);
                $this->databaseAccessor->flush();
            }
        }
        return $this->redirectToRoute('faq_edit');
    }

    /**
     * @Method({"GET"})
     * @Route("/faq/edit", name="faq_edit")
     */
    public function faqHelpAction(Request $request,
                                  AuthorizationCheckerInterface $authorizationChecker,
                                  UserRepository $userRepository,
                                  TypeRepository $typeRepository,
                                  FaqQuestionRepository $faqQuestionRepository,
                                  LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $tmpFaqQuestion = $faqQuestionRepository->findAll();

        $entryList = [];
        if (isset($tmpFaqQuestion) && null != $tmpFaqQuestion) {
            foreach ($tmpFaqQuestion as $value) {
                $entry = [];
                $entry['id'] = $value->getId();
                $entry['question'] = $value->getQuestion();
                $entry['answer'] = $value->getAnswer();
                $entry['active'] = $value->getIsActive();
                $entryList[] = $entry;
            }
            //print_r($entryList);
        }
        return $this->render('@AppBundle/help/faq.edit.html.twig', [
            'user' => $this->user,
            'entryList' => $entryList
        ]);

    }

    /**
     * @Method({"GET"})
     * @Route("/faqs", name="faqs_show")
     */
    public function faqsShowAction(Request $request,
                                   AuthorizationCheckerInterface $authorizationChecker,
                                   UserRepository $userRepository,
                                   TypeRepository $typeRepository,
                                   FaqQuestionRepository $faqQuestionRepository,
                                   LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $tmpFaqQuestion = $faqQuestionRepository->findAll();

        $entryList = [];
        if (isset($tmpFaqQuestion) && null != $tmpFaqQuestion) {
            foreach ($tmpFaqQuestion as $value) {
                if (1 == $value->getIsActive()) {
                    $entry = [];
                    $entry['id'] = $value->getId();
                    $entry['question'] = $value->getQuestion();
                    $entry['answer'] = $value->getAnswer();
                    $entryList[] = $entry;
                }
            }
            //print_r($entryList);
        }
        return $this->render('@AppBundle/help/faqs.show.html.twig', [
            'user' => $this->user,
            'entryList' => $entryList
        ]);

    }
}
