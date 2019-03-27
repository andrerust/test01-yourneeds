<?php

namespace Main\UserBundle\Controller\Admin;

use AppBundle\Controller\BaseController;
use Doctrine\Common\Collections\ArrayCollection;
use Main\AdminBundle\Repository\JobGroupRepository;
use Main\InsuranceBundle\Repository\TariffRepository;
use Main\UserBundle\Entity\Custom\User\EditUserRequest;
use Main\UserBundle\Entity\Custom\User\NewUserRequest;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Form\User\Admin\EditUserFormType;
use Main\UserBundle\Form\User\Admin\NewUserFormType;
use Main\UserBundle\Repository\AchievementRepository;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\BankAccountRepository;
use Main\UserBundle\Repository\TitleRepository;
use Main\UserBundle\Repository\UserActivityRepository;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class AdminUserController extends BaseController
{
    /**
     * @Route("/admin/manager/new", name="admin_manager_new")
     */
    public function adminUserNewAction(Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_USE_ADMIN', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $user = new User();
        $newRequest = NewUserRequest::factory($user);
        $form = $this->createForm(NewUserFormType::class, $newRequest);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $titles = $em->getRepository('MainUserBundle:Title')
            ->findAll();

        $familyStatus = $em->getRepository('MainUserBundle:FamilyStatus')
            ->findAll();

        $jobGroups = $em->getRepository('MainUserBundle:JobGroup')
            ->findAll();

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($newRequest);
            if (count($errors) > 0) {
                $this->addErrors($errors);
            } else {
                if ($form->isValid()) {
                    if ($this->validateEmail($em, $newRequest->getEmail()) &&
                        $this->validatePhoneNumber($em, $newRequest->getPhoneNumber())
                    ) {
                        if ($newRequest->getProfilePicture() != null) {
                            $file = $newRequest->getProfilePicture();
                            $fileService = $this->get('app.service.file_uploader');
                            $fileService->setActiveTargetDir("profiles");
                            $fileName = $fileService->upload($file);
                            $user->setProfilePicture($fileName);
                        }

                        $user->setGender($newRequest->getGender());
                        $user->setFirstName($newRequest->getFirstName());
                        $user->setLastName($newRequest->getLastName());
                        $user->setEmail($newRequest->getEmail());
                        $user->setBirthdate($newRequest->getBirthdate());
                        $user->setPhoneNumber($newRequest->getPhoneNumber());
                        $user->setUserName($newRequest->getUserName());
                        $user->setEmployer($newRequest->getEmployer());
                        $user->setIsActive($newRequest->getIsActive());
                        $user->setIsBlocked($newRequest->getIsBlocked());
                        $user->setReceiveNewsletter($newRequest->getReceiveNewsletter());
                        $user->setTermsAccepted($newRequest->getTermsAccepted());
                        $user->setNote($newRequest->getNote());
                        $user->setPassword("illgo");
                        $user->setPlainPassword("illgo");

                        if ($newRequest->getUserTitle() != null) {
                            $user->setUserTitle(
                                $em->getRepository('MainUserBundle:Title')
                                    ->find($newRequest->getUserTitle())
                            );
                        } else {
                            $defaultTitle = $em->getRepository('MainUserBundle:Title')
                                ->findByIsDefault();
                            $user->setUserTitle(
                                $em->getRepository('MainUserBundle:Title')
                                    ->find($defaultTitle['id'])
                            );
                            //print_r($user->getUserTitle()->getName());die;
                        }
                        if ($newRequest->getFamilyStatus() != null) {
                            $user->setFamilyStatus(
                                $em->getRepository('MainUserBundle:FamilyStatus')
                                    ->find($newRequest->getFamilyStatus())
                            );
                        } else {
                            $defaultFamilyStatus = $em->getRepository('MainUserBundle:FamilyStatus')
                                ->findByIsDefault();
                            $user->setFamilyStatus(
                                $em->getRepository('MainUserBundle:FamilyStatus')
                                    ->find($defaultFamilyStatus['id'])
                            );
                            //print_r($user->getUserTitle()->getName());die;
                        }

                        if ($newRequest->getJobGroup() != null) {
                            $user->setJobGroup(
                                $em->getRepository('MainUserBundle:JobGroup')
                                    ->find($newRequest->getJobGroup())
                            );
                        } else {
                            $defaultJobGroup = $em->getRepository('MainUserBundle:JobGroup')
                                ->findByIsDefault();
                            $user->setJobGroup(
                                $em->getRepository('MainUserBundle:JobGroup')
                                    ->find($defaultJobGroup['id'])
                            );
                            //print_r($user->getUserTitle()->getName());die;
                        }

                        $em->persist($user);
                        $em->flush();

                        return $this->redirectToRoute('admin_users', [
                        ]);
                    } // mailIsUnique
                } // isValid
            } // count > 0
        } // isSubmitted

        return $this->render('@MainUserBundle/Admin/user/admin.user.new.html.twig', [
            'user' => $user,
            'titles' => $titles,
            'familyStatus' => $familyStatus,
            'jobGroups' => $jobGroups,
            'form' => $form->createView(),
            'errors' => $this->errorList,
            'admin' => false
        ]);
    }

    /**
     * @Route("/admin/manager/{id}/edit", name="admin_manager_edit", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminUserEditAction($id = null,
                                        Request $request,
                                        AuthorizationCheckerInterface $authorizationChecker,
                                        UserRepository $userRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_USE_ADMIN', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MainUserBundle:User')->find($id);

        if (!$user) {
            return $this->redirectToRoute('admin_managers');
        }

        $editRequest = EditUserRequest::factory($user);
        $form = $this->createForm(EditUserFormType::class, $editRequest, [
            'action' => $this->generateUrl('admin_manager_edit', [
                'id' => $user->getId()
            ]),
            'attr' => [
                'id' => 'edit_user_form',
                'name' => 'edit_user_form',
                'class' => 'well form-horizontal edit_user_form'
            ],
            'method' => 'POST'
        ]);

        $currentImage = $editRequest->getProfilePicture();
        $form->handleRequest($request);

        $titles = $em->getRepository('MainUserBundle:Title')
            ->findAll();

        $familyStatus = $em->getRepository('MainUserBundle:FamilyStatus')
            ->findAll();

        $jobGroups = $em->getRepository('MainUserBundle:JobGroup')
            ->findAll();

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($editRequest);
            if (count($errors) > 0) {
                $this->addErrors($errors);
            } else {
                if ($form->isValid()) {
                    //$editRequest = $form->getData();
                    if ($editRequest->getProfilePicture() == null) {
                        $user->setProfilePicture($currentImage);
                    } else {
                        $file = $editRequest->getProfilePicture();
                        $fileService = $this->get('app.service.file_uploader');
                        $fileService->setActiveTargetDir("profiles");
                        $fileName = $fileService->upload($file);
                        $user->setProfilePicture($fileName);
                    }
                    /*if ($this->validateEmail($em, $editRequest->getEmail()) &&
                         $this->validatePhoneNumber($em, $editRequest->getPhoneNumber())
                    ) {*/
                    $user->setGender($editRequest->getGender());
                    $user->setFirstName($editRequest->getFirstName());
                    $user->setLastName($editRequest->getLastName());

                    $user->setEmail($editRequest->getEmail());
                    $user->setPhoneNumber($editRequest->getPhoneNumber());
                    $user->setBirthdate($editRequest->getBirthdate());
                    $user->setEmployer($editRequest->getEmployer());
                    $user->setIsActive($editRequest->getIsActive());
                    $user->setIsBlocked($editRequest->getIsBlocked());
                    $user->setReceiveNewsletter($editRequest->getReceiveNewsletter());
                    $user->setTermsAccepted($editRequest->getTermsAccepted());
                    $user->setNote($editRequest->getNote());
                    //print_r($editRequest->getJobGroup());die;

                    if ($editRequest->getUserTitle() != null) {
                        $user->setUserTitle($em->getRepository('MainUserBundle:Title')
                            ->find($editRequest->getUserTitle()));
                    } else {
                        $user->setUserTitle($em->getRepository('MainUserBundle:Title')
                            ->findByIsDefault());
                    }

                    $user->setFamilyStatus($em->getRepository('MainUserBundle:FamilyStatus')
                        ->find($editRequest->getFamilyStatus()));

                    $user->setJobGroup($em->getRepository('MainUserBundle:JobGroup')
                        ->find($editRequest->getJobGroup()));


                    $em->persist($user);
                    $em->flush();
                    /*
                    $user = $form->getData();
                    */
                    return $this->redirectToRoute('admin_manager', [
                        'id' => $id
                    ]);
                    //} // mailIsUnique
                } // isValid
            } // count > 0
        } // isSubmitted

        return $this->render('@MainUserBundle/Admin/user/admin.user.edit.html.twig', [
                'user' => $user,
                'titles' => $titles,
                'familyStatus' => $familyStatus,
                'jobGroups' => $jobGroups,
                'form' => $form->createView(),
                'errors' => $this->errorList,
                'admin' => false
            ]
        );
    }


    /**
     * @Route("/admin/manager/{id}/decide", name="admin_manager_decide_type", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminManagerDecideTypeAction($id = null,
                                                 Request $request,
                                                 AuthorizationCheckerInterface $authorizationChecker,
                                                 UserRepository $userRepository,
                                                 TitleRepository $titleRepository,
                                                 AchievementRepository $achievementRepository,
                                                 AddressRepository $addressRepository,
                                                 BankAccountRepository $bankAccountRepository,
                                                 JobGroupRepository $jobGroupRepository,
                                                 TariffRepository $tariffRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_USE_ADMIN', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $address = null;
        $bankAccount = null;
        $userTitle = null;
        $achievements = null;
        $familyStatus = null;
        $jobGroup = null;
        $userTariffs = null;
        $resultUser = $userRepository->getUser($id);
        $user = $userRepository->find($id);
        if ($resultUser) {
            $achievements = $achievementRepository->findByUserId($id);
            $address = $addressRepository->findByUserId($id);
            $bankAccount = $bankAccountRepository->findByUserId($id);

            if (!$resultUser['userTitleId'] == null) {
                $userTitle = $titleRepository->findById($resultUser['userTitleId']);
            }
            if (!$resultUser['jobGroupId'] == null) {
                $jobGroup = $jobGroupRepository->findById($resultUser['jobGroupId']);
            }

            $userTariffs = $tariffRepository->findTariffsByUserId($id);
            //print_r($userTariffs);die;
        }

        return $this->render('@MainUserBundle/Admin/user/admin.manager.decide.html.twig', [
            'userId' => $user->getId(),
            'resultUser' => $resultUser,
            'gender' => $this->getGender($resultUser['gender']),
            'userTitle' => $userTitle,
            'jobGroup' => $jobGroup,
            'address' => $address,
            'tariffs' => $userTariffs,
            'bankAccount' => $bankAccount,
            'achievements' => $achievements
        ]);
    }

    /**
     * @Route("/admin/manager/{id}/activities", name="admin_manager_activities", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminUserActivitiesAction($id = null,
                                              UserRepository $userRepository,
                                              TitleRepository $titleRepository,
                                              UserActivityRepository $userActivityRepository
    )
    {
        $resultUser = $userRepository->find($id);
        $user = $userRepository->find($id);
        $activities = $userActivityRepository->findAllByUserId($id);
        //print_r($activities);die;
        return $this->render('@MainUserBundle/Admin/user/admin.manager.activities.html.twig', [
            'userId' => $user->getId(),
            'user' => $user,
            'resultUser' => $resultUser,
            'activities' => $activities
        ]);
    }

    /**
     * @Route("/admin/manager/{id}", name="admin_manager", requirements={"id" = "\d+"}, defaults={"id" = 0})
     * @Method({"GET"})
     */
    public function adminUserAction($id = null,
                                    Request $request,
                                    AuthorizationCheckerInterface $authorizationChecker,
                                    UserRepository $userRepository,
                                    UserAddressRepository $userAddressRepository,
                                    BankAccountRepository $bankAccountRepository,
                                    TariffRepository $tariffRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $address = null;
        $userTitle = null;
        $familyStatus = null;
        $jobGroup = null;
        $userTariffs = null;
        $user = $userRepository->find($id);
        $address = $userAddressRepository->findBy(
            [
                'user' => $this->user
            ]
        );
        $bankAccount = $bankAccountRepository->findOneBy(
            [
                'user' => $this->user
            ]
        );

        if (null !== $user->getUserTitle() && null !== $user->getUserTitle()->getName()) {
            $userTitle = $user->getUserTitle()->getName();
        }
        if (null !== $user->getJobGroup() && null !== $user->getJobGroup()->getName()) {
            $jobGroup = $user->getUserTitle()->getName();
        }

        $userTariffs = $tariffRepository->findTariffsByUserId($id);

        return $this->render('@MainUserBundle/Admin/user/admin.manager.profile.html.twig', [
            'user' => $this->user,
            'userTitle' => $userTitle,
            'jobGroup' => $jobGroup,
            'address' => $address,
            'tariffs' => $userTariffs,
            'bankAccount' => $bankAccount
        ]);
    }

    /**
     * @Route("/admin/managers", name="admin_managers")
     * @Method({"GET"})
     */
    public function adminUsersAction(Request $request,
                                     AuthorizationCheckerInterface $authorizationChecker,
                                     UserRepository $userRepository,
                                     TariffRepository $tariffRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $users = $userRepository->findBy(
            [
                'isActive' => 1,
                'isBlocked' => 0
            ]
        );
        if (count($users) > 0) {
            $resultList = new ArrayCollection();
            foreach ($users as $entry) {
                $resultList[] = ['user' => $entry, 'address' => $entry->getUserAddresses(), 'userTariffs' => $tariffRepository->findTariffsByUserId($entry->getId('id'))];
            }
            return $this->render('@MainUserBundle/Admin/user/admin.users.html.twig', [
                'user' => $this->user,
                'loggedUser' => $this->getUser(),
                'users' => $resultList
            ]);
        }
    }
}
