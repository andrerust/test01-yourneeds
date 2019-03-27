<?php

namespace Main\UserBundle\Controller\Web;

use AppBundle\Controller\BaseController;
use AppBundle\Helper\ConstantHelper;
use Main\UserBundle\Entity\BenefitPartnerUser;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Entity\UserSecurityLog;
use Main\UserBundle\Form\LoginForm;
use Main\UserBundle\Repository\BenefitPartnerRepository;
use Main\UserBundle\Repository\BenefitPartnerUserRepository;
use Main\UserBundle\Repository\UserRepository;
use Main\UserBundle\Repository\UserSecurityLogRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

class SecurityController extends BaseController
{
    
    /**
     * @Route("/login/{id}/mail", name="new_login_mail")
     */
    public function loginNewMailAction($id = null,
                                       UserRepository $userRepository,
                                       UserSecurityLog $securityLog,
                                       $em = null,
                                       $uniqueId = null
    )
    {
        $user = $userRepository->find($id);
        if (1 != $user->getIsBlocked()) {
            if (true == ConstantHelper::getMailGeneral()['sendMail']) {
                $smtpHostIp = gethostbyname(ConstantHelper::getMailCustomerGeneral()['host']);
                $transport = (new Swift_SmtpTransport($smtpHostIp, ConstantHelper::getMailCustomerGeneral()['port'], null))
                    ->setUsername(ConstantHelper::getMailCustomerGeneral()['user'])
                    ->setPassword(ConstantHelper::getMailCustomerGeneral()['pass']);
                $mailer = new Swift_Mailer($transport);
                /*
                            $uniqueId = uniqid();
                            $securityLog->setLoginCode($uniqueId);
                            $em->persist($securityLog);
                            $em->flush();
                */
                // http://localhost:82/login/
                //->setTo(['mail-test@yourneeds.de'])
                $env = 'prod';
                if ('localhost:82' == $_SERVER['HTTP_HOST']) {
                    //$env = $_SERVER['APP_ENV'];
                    $env = 'dev';
                }
                
                $firstName = '';
                if (null != $user->getFirstName()) {
                    $firstName = ' ' . $user->getFirstName();
                }
                $message = (new \Swift_Message('YOURneeds Versicherungsmakler GmbH - Dein Login-Link'))
                    ->setFrom(
                        [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                    ->setTo([$user->getEmail()])
                    ->setBcc(['andre.rust@intertects.com' => 'Admin'])
                    ->setBody(
                        'Guten Tag' . $firstName . ',
					<br><br>
					Du kannst Dich mit Klick auf diesen Link <a href="' . ConstantHelper::getMailGeneral()['env'][$env]['loginLink'] . $uniqueId . '">' . $uniqueId . '</a> bei Deinem YOURneeds einloggen.
					<br>
					Viel Spaß!
					<br><br>
					Dein YOURneeds-Team'
                        , 'text/html'
                    );
                $mailer->send($message);
            }
        }
    }
    
    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {
    }
    
    /**
     * @Route("/forgot", name="security_forgot_password")
     */
    public function forgotPasswordAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        $form = $this->createForm(LoginForm::class, [
                '_username' => $lastUsername
            ]
        );
        
        $message = null;
        if ($error) {
            $message = 'Sorry, not correct!';
        }
        
        $user = new User();
        $user->setId(0);
        if (null !== $this->getUser() && null !== $this->getUser()->getId()) {
            $user = $this->getUser();
        }
        
        return $this->render(
            '@MainUserBundle/Security/forgot-password.html.twig', [
                '_username' => $lastUsername,
                'error' => $error,
                'form' => $form->createView(),
                'isLogin' => true,
                'message' => $message,
                'user' => $user,
                'userId' => $user->getId()
            ]
        );
    }
    
    /**
     * @Route("/verification/{code}", name="verification_code")
     */
    public function loginVerificationAction($code = null,
                                            Request $request,
                                            UserSecurityLogRepository $securityLogRepository,
                                            UserRepository $userRepository
    )
    {
        $this->initialize();
        if (null != $code) {
            $securityLogin = $securityLogRepository->findOneBy(['loginCode' => $code]);
            if ($securityLogin) {
                $user = $userRepository->find($securityLogin->getUser()->getId());
                if (0 == $user->getIsBlocked() || 0 == $user->getIsActive()) {
                    if (0 == $securityLogin->getCodeUsed()) {
                        //print_r($securityLogin->getLoginCode()); die;
                        $securityLogin->setCodeUsed(1);
                        $this->databaseAccessor->persist($securityLogin);
                        $this->databaseAccessor->flush();
                        
                        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                        $this->get('security.token_storage')->setToken($token);
                        $this->get('session')->set('_security_main', serialize($token));
                        $event = new InteractiveLoginEvent($request, $token);
                        $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
                        
                        $this->setUser($user);
                        $roles = $this->user->getRoles();
                        if (in_array('ROLE_ADMIN', $roles, true) || in_array('ROLE_SUPERADMIN', $roles, true)) {
                            return $this->redirectToRoute('manager_home');
                        } elseif (in_array('ROLE_USER', $roles, true)) {
                            return $this->redirectToRoute('manager_home');
                        } else {
                            return $this->redirectToRoute('security_login');
                        }
                    }
                }
            }
        }
        return $this->redirectToRoute('security_login');
    }
    
    /**
     * @Route("/login/{id}/waiting", name="security_login_waiting")
     */
    public function loginWaitingAction($id = null,
                                       Request $request,
                                       UserRepository $userRepository,
                                       UserSecurityLogRepository $securityLogRepository,
                                       TokenStorageInterface $tokenStorage,
                                       LoggerInterface $logger
    )
    {
        $user = $userRepository->find($id);
        $firstName = '';
        if (null != $user
            && null != $user->getFirstName()) {
            $firstName = $user->getFirstName();
        }
        
        return $this->render(
            '@MainUserBundle/Security/login.waiting.html.twig', [
                'firstName' => $firstName
            ]
        );
    }
    
    /**
     * @Route("/login", name="security_login")
     * @Route("/login/{isBenefit}", name="security_login")
     * @Route("/verification/{code}", name="security_login_verification")
     */
    public function loginAction($isBenefit = null,
                                Request $request,
                                UserRepository $userRepository,
                                UserSecurityLogRepository $securityLogRepository,
                                TokenStorageInterface $tokenStorage,
                                BenefitPartnerRepository $benfitPartnerRepository,
                                BenefitPartnerUserRepository $benfitPartnerRepositoryUser,
                                LoggerInterface $logger
    )
    {
        $this->initialize();
        
        $authenticationUtils = $this->get('security.authentication_utils');
        // get the login error if there is one
        $authError = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        
        $termsAccepted = false;
        $privacyPolicyAccepted = false;
        $hasError = 0;
        $error = '';
        $message = '';
        $isBenefit = (null !== $isBenefit) ? true : false;
        
        if (null != $this->user && null != $this->user->getId() && $this->user->getId() > 0) {
            return $this->redirectToRoute('manager_home');
        } else {
            
            $form = $this->createForm(LoginForm::class, [
                    '_username' => $lastUsername,
                ]
            );
            $form->handleRequest($request);
            $data = $form->getData();
            //print_r($request->request);
            if ($form->isSubmitted()) {
            }
            
            /*
            $formRequest = null;
            if (null !== $request->request->get('login_form')) {
                $formRequest = $request->request->get('login_form');
            }
            */
            if (null !== $data) {
                //print_r($formRequest['benefitPartner']);
                /*
                $benefitPartnerId = (null !== $formRequest['benefitPartner']) ? $formRequest['benefitPartner'] : null;
                $termsAccepted = (null !== $formRequest['termsAccepted']) ? $formRequest['termsAccepted'] : null;
                $privacyPolicyAccepted = (null !== $formRequest['privacyPolicyAccepted']) ? $formRequest['privacyPolicyAccepted'] : null;
                $email = (null !== $formRequest['_username']) ? $formRequest['_username'] : $data['_username'];
                */
                if (1 == $termsAccepted && 1 == $privacyPolicyAccepted) {
                    $termsAccepted = true;
                    $privacyPolicyAccepted = true;
                }
                
                if (null != $data['_username']) {
                    $user = $userRepository->findOneBy(
                        [
                            'email' => $data['_username']
                        ]
                    );
                    
                    if (null != $user) {
                        
                        $userSecurityLog = $securityLogRepository->findOneBy(
                            [
                                'user' => $user
                            ],
                            [
                                'createdAt' => 'DESC'
                            ]
                        );
                        
                        //print_r($userSecurityLog->getId());die;
                        if (null != $userSecurityLog) {
                            
                            $validator = Validation::createValidator();
                            $violations = $validator->validate($data['_username'], [
                                new Email(),
                                new NotBlank(),
                            ]);
                            if (0 !== count($violations)) {
                                $hasError = 1;
                                $error = 'Bitte korrigiere deine E-Mail-Eingabe.';
                            }
                            if (0 == $userSecurityLog->getCodeUsed()
                                && 1 == $userSecurityLog->getTermsAccepted()
                                && 1 == $userSecurityLog->getPrivacyPolicyAccepted()
                            ) {
                                
                                $tmpId = 0;
                                if (null != $userSecurityLog->getUser()
                                    & null != $userSecurityLog->getUser()->getId()) {
                                    $tmpId = $userSecurityLog->getUser()->getId();
                                }
                                return $this->redirectToRoute('security_login_waiting', [
                                    'id' => $tmpId
                                ]);
                            }
                        }
                    }
                }
            }
            
            $benefitPartners = $benfitPartnerRepository->findAll();
            return $this->render(
                '@MainUserBundle/Security/login.html.twig', [
                    '_username' => $lastUsername,
                    'termsAccepted' => $termsAccepted,
                    'privacyPolicyAccepted' => $privacyPolicyAccepted,
                    'hasError' => $hasError,
                    'error' => $error,
                    'form' => $form->createView(),
                    'message' => $message,
                    'benefitPartners' => $benefitPartners,
                    'isBenefit' => $isBenefit
                ]
            );
        }
    }
    
    
    /**
     * @Route("/relogin", name="security_relogin")
     */
    public function relogoutAction()
    {
        return $this->redirectToRoute('security_logout');
    }
    
    
    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new Exception('this should not be reaches');
    }
}
