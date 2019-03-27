<?php

namespace Main\UserBundle\Security;

use Main\UserBundle\Controller\Web\SecurityController;
use Main\UserBundle\Entity\BenefitPartnerUser;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Entity\UserSecurityLog;
use Main\UserBundle\Form\LoginForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Validation;

class LoginFormAuthentificator extends AbstractFormLoginAuthenticator
{
    private $formFactory;
    
    private $em;
    
    private $router;
    
    private $passwordEncoder;
    
    private $user;
    
    use TargetPathTrait;
    
    public function __construct(FormFactoryInterface $formFactory,
                                EntityManagerInterface $em,
                                RouterInterface $router,
                                UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->formFactory = $formFactory;
        $this->em = $em;
        $this->router = $router;
        $this->passwordEncoder = $passwordEncoder;
    }
    
    /**
     * Get the authentication credentials from the request and return them
     * as any type (e.g. an associate array). If you return null, authentication
     * will be skipped.
     *
     * Whatever value you return here will be passed to getUser() and checkCredentials()
     *
     * For example, for a form login, you might:
     *
     *      if ($request->request->has('_username')) {
     *          return array(
     *              'username' => $request->request->get('_username'),
     *              'password' => $request->request->get('_password'),
     *          );
     *      } else {
     *          return;
     *      }
     *
     * Or for an API token that's on a header, you might use:
     *
     *      return array('api_key' => $request->headers->get('X-API-TOKEN'));
     *
     * @param Request $request
     *
     * @return mixed|null
     */
    public function getCredentials(Request $request)
    {
        //print_r($request)die;
        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);
        $data = $form->getData();
        
        if (null !== $request->request->get('login_form')) {
            $formRequest = $request->request->get('login_form');
        }
        
        $user = $this->em->getRepository('MainUserBundle:User')->findOneBy(
            [
                'email' => $data['_username']
            ]
        );
        
        //print_r($formRequest['benefitPartner']);
        $benefitPartnerId = (isset($formRequest['benefitPartner'])) ? $formRequest['benefitPartner'] : null;
        $termsAccepted = (isset($formRequest['termsAccepted'])) ? $formRequest['termsAccepted'] : null;
        $privacyPolicyAccepted = (isset($formRequest['privacyPolicyAccepted'])) ? $formRequest['privacyPolicyAccepted'] : null;
        $email = (isset($formRequest['_username'])) ? $formRequest['_username'] : $data['_username'];
        
        $benefitPartner = null;
        $newBenefitPartnerUserId = 0;
        //benefit partner exists
        if (null != $benefitPartnerId) {
            $benefitPartner = $this->em->getRepository('MainUserBundle:BenefitPartner')->find($benefitPartnerId);
        }

        if (!$user) {
            $user = new User();
            $user->setEmail($data['_username']);
            $user->setUserName($data['_username']);
            $user->setRoles(['ROLE_USER']);
            $user->setNewsShown(0);
            $this->em->persist($user);
            $this->em->flush();
        }

        if (null != $benefitPartner) {
            $benefitPartner = $this->em->getRepository('MainUserBundle:BenefitPartner')->find($benefitPartnerId);
            $benefitPartnerUser = $this->em->getRepository('MainUserBundle:BenefitPartnerUser')->findOneBy(
                [
                    'user' => $user,
                    'benefitPartner' => $benefitPartner
                ],
                [
                    'createdAt' => 'DESC'
                ]
            );
            
            if (null === $benefitPartnerUser) {
                $newBenefitPartnerUser = new BenefitPartnerUser();
                $newBenefitPartnerUser->setUser($user);
                $newBenefitPartnerUser->setBenefitPartner($benefitPartner);
                $newBenefitPartnerUser->setIsActive(1);
                $newBenefitPartnerUser->setIsResponsible(0);
                $this->em->persist($newBenefitPartnerUser);
                $this->em->flush();
                $newBenefitPartnerUserId = $newBenefitPartnerUser->getId();
            }
        }
        
        if (isset($data['_username']) && !empty($data['_username'])
            && isset($data['termsAccepted']) && 1 == $data['termsAccepted']
            && isset($data['privacyPolicyAccepted']) && 1 == $data['privacyPolicyAccepted']
        ) {
            
            $validator = Validation::createValidator();
            $violations = $validator->validate($data['_username'], [
                new Email(),
                new NotBlank(),
            ]);
            if (0 !== count($violations)) {
                // there are errors, now you can show them
                foreach ($violations as $violation) {
                    echo $violation->getMessage() . '<br>';
                }
            }
            /*
            $user = $this->em->getRepository('MainUserBundle:User')
                 ->getUserByEmail($data['_username']);
            */
            
            if (0 === count($violations)) {
                $request->getSession()->set(
                    Security::LAST_USERNAME,
                    $data['_username']
                );
                $user = $this->em->getRepository('MainUserBundle:User')->findOneBy(
                    [
                        'email' => $data['_username']
                    ]
                );
                

                //print_r($data);die;
                if ($user) {
                    $securityLog = new UserSecurityLog();
                    $this->user = $user;
                    $securityLog->setUser($user);
                    $securityLog->setMessage($data['_username'] . ' logged in');
                    $securityLog->setCreatedAt(new \DateTime("now"));
                    
                    $uniqueId = uniqid();
                    $securityLog->setLoginCode($uniqueId);
                    $securityLog->setCodeUsed(0);
                    $securityLog->setIp($_SERVER['REMOTE_ADDR']);
                    $securityLog->setPrivacyPolicyAccepted(1);
                    $securityLog->setPrivacyPolicyAcceptedUpdate(new \DateTime("now"));
                    $securityLog->setTermsAccepted(1);
                    
                    $securityLog->setTermsAcceptedUpdate(new \DateTime("now"));
                    $this->em->persist($securityLog);
                    $this->em->flush();
                    $this->sendLoginMail($user, $securityLog, $uniqueId);
                }
                //print_r($request->getSession());die;
            }
        }
        return $data;
    }
    
    private function sendLoginMail($user, $securityLog, $uniqueId)
    {
        $mailer = new SecurityController();
        $mailer->loginNewMailAction($user->getId(), $this->em->getRepository('MainUserBundle:User'), $securityLog, $this->em, $uniqueId);
    }
    
    /**
     * Return a UserInterface object based on the credentials.
     *
     * The *credentials* are the return value from getCredentials()
     *
     * You may throw an AuthenticationException if you wish. If you return
     * null, then a UsernameNotFoundException is thrown for you.
     *
     * @param mixed $credentials
     * @param UserProviderInterface $userProvider
     *
     * @throws AuthenticationException
     *
     * @return UserInterface|null
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username = $credentials['_username'];
        return $this->em->getRepository('MainUserBundle:User')->findOneBy(['email' => $username]);
        
        //dump($this->em->getRepository('MainUserBundle:User')->findOneBy(['email' => $username]));die;
        /*
         *  return $this->em->getRepository('MainUserBundle:User')
         * old
             ->findOneBy(['email' => $username]);
         */
    }
    
    
    /**
     * Returns true if the credentials are valid.
     *
     * If any value other than true is returned, authentication will
     * fail. You may also throw an AuthenticationException if you wish
     * to cause authentication to fail.
     *
     * The *credentials* are the return value from getCredentials()
     *
     * @param mixed $credentials
     * @param UserInterface $user
     *
     * @return bool
     *
     * @throws AuthenticationException
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        $email = trim($credentials['_username']);
        //$user = $this->em->getRepository('MainUserBundle:User')->findOneBy(['email' => $email]);
        $userSecurityLog = $this->em->getRepository('MainUserBundle:UserSecurityLog')->findOneBy(
            [
                'user' => $user
            ],
            [
                'createdAt' => 'DESC'
            ]
        );
        //print_r($userSecurityLog->getId());die;
        if (null != $userSecurityLog
            && 1 == $userSecurityLog->getCodeUsed()
            && 1 == $userSecurityLog->getTermsAccepted()
            && 1 == $userSecurityLog->getPrivacyPolicyAccepted()
        ) {
            return true;
        }
        /*
        $password = $credentials['_password'];
        if ($this->passwordEncoder->isPasswordValid($user, $password)) {
            return true;
        }
        */
        //throw new BadCredentialsException();
        return false;
    }
    
    /**
     * Return the URL to the login page.
     *
     * @return string
     */
    protected function getLoginUrl()
    {
        return $this->router->generate('security_login');
    }
    
    public function supports(Request $request)
    {
        return $request->getPathInfo() == '/login' && $request->isMethod('POST');
    }
    
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        
        if ($targetPath = $this->getTargetPath($request->getSession(), 'main')) {
            return new RedirectResponse($targetPath);
        }
        /*
                 $roles = $this->user->getRoles();
                if (in_array('ROLE_ADMIN', $roles, true) || in_array('ROLE_SUPERADMIN', $roles, true)) {
                    return new RedirectResponse($this->router->generate('manager_profile', [
                        'id' => $this->user->getId()
                    ]));
                    //return new RedirectResponse($this->router->generate('admin_dashboard'));
                } elseif (in_array('ROLE_USER', $roles, true)) {
                    return new RedirectResponse($this->router->generate('manager_profile', [
                        'id' => $this->user->getId()
                    ]));
                }
                 */
    }
    
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
        
        $url = $this->router->generate('security_login');
        
        return new RedirectResponse($url);
    }
    
    public function supportsRememberMe()
    {
        return false;
    }
}