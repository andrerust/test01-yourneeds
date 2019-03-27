<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Custom\Message\EditMessageRequest;
use AppBundle\Entity\Message;
use AppBundle\Form\Message\EditMessageFormType;
use AppBundle\Helper\ConstantHelper;
use AppBundle\Repository\MessageRepository;
use AppBundle\Repository\MessageTypeRepository;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class MessageController extends BaseController
{

    /**
     * @Route("/manager/message/{id}/mail", name="message_new_mail", methods={"GET", "PUT"})
     */
    public function contractNewMailAction(String $id = null,
                                          Request $request,
                                          AuthorizationCheckerInterface $authorizationChecker,
                                          UserRepository $userRepository,
                                          MessageRepository $messageRepository,
                                          MessageTypeRepository $messageTypeRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_NEW_CONTRACT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $userMessage = $messageRepository->find($id);
        if (true == ConstantHelper::getMailMessenger()['sendMail']) {
            $smtpHostIp = gethostbyname(ConstantHelper::getMailMessenger()['host']);
            $transport = (new Swift_SmtpTransport($smtpHostIp, ConstantHelper::getMailMessenger()['port'], null))
                ->setUsername(ConstantHelper::getMailMessenger()['user'])
                ->setPassword(ConstantHelper::getMailMessenger()['pass']);
            $mailer = new Swift_Mailer($transport);

            $message = (new \Swift_Message('YOURneeds GmbH - Deine Nachricht an uns'))
                ->setFrom(
                    [ConstantHelper::getMailMessenger()['mail'] => ConstantHelper::getMailMessenger()['sender']])
                ->setTo([$this->user->getEmail()])
                ->setBCC(['andre.rust@intertects.com' => 'Admin'])
                ->setBody(
                    $this->renderView(
                        '@AppBundle/message/mail/mail.manager.new.html.twig',
                        [
                            'user' => $this->user,
                            'userMessage' => $userMessage
                        ]
                    ),
                    'text/html'
                );
            $mailer->send($message);

            $message = (new \Swift_Message('YOURneeds Messenger - Nachricht von Nutzer'))
                ->setFrom(
                    [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                ->setTo([ConstantHelper::getMailMessenger()['mail']])
                ->setBCC(['andre.rust@intertects.com' => 'Admin'])
                ->setBody(
                    $this->renderView(
                        '@AppBundle/message/mail/mail.self.messenger.new.html.twig',
                        [
                            'user' => $this->user,
                            'userMessage' => $userMessage
                        ]
                    ),
                    'text/html'
                );
            $mailer->send($message);
        }

        return $this->redirectToRoute('manager_messages', [
        ]);
    }

    /**
     * @Route("manager/message/{id}", name="manager_message_read", methods={"GET"})
     */
    public function messageAction(String $id,
                                  Request $request,
                                  AuthorizationCheckerInterface $authorizationChecker,
                                  UserRepository $userRepository,
                                  MessageRepository $messageRepository
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_SAVE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $message = $messageRepository->find($id);

        return $this->render('@AppBundle/message/message.html.twig', [
            'user' => $this->user,
            'message' => $message
        ]);
    }

    /**
     * @Route("manager/messages", name="manager_messages", methods={"GET", "POST"})
     */
    public function messagesAction(Request $request,
                                   AuthorizationCheckerInterface $authorizationChecker,
                                   UserRepository $userRepository,
                                   MessageRepository $messageRepository,
                                   MessageTypeRepository $messageTypeRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_SEND_MESSAGE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $messages = $messageRepository->findBy(
            [
                'user' => $this->user
            ],
            [
                'updatedAt' => 'DESC'
            ]);
        $messageTypes = $messageTypeRepository->findAll();

        $formRequest = new EditMessageRequest();
        $form = $this->createForm(EditMessageFormType::class, $formRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);
            if (count($errors) > 0) {
                $this->addErrors($errors);
                if ($this->hasErrors == true) {
                }
            } else {
                $em = $this->getDoctrine()->getManager();

                $tmpMessageType = $formRequest->getMessageType();
                $message = new Message();
                $message->setSubject($formRequest->getSubject());
                $message->setBody($formRequest->getBody());
                $message->setUser($this->user);
                $messageType = $messageTypeRepository->find($tmpMessageType);
                $message->setMessageType($messageType);
                $message->setisRead(0);
                $message->sethasAnswer(0);
                $message->setisBlocked(0);
                $em->persist($message);
                $em->flush();
                $messageId = $message->getId();

                return $this->redirectToRoute('message_new_mail', [
                    'id' => $messageId
                ]);
            }
        }

        return $this->render('@AppBundle/message/message.edit.html.twig', [
            'user' => $this->user,
            'messages' => $messages,
            'messageTypes' => $messageTypes,
            'form' => $form->createView()
        ]);
    }
}