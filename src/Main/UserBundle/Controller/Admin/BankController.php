<?php

namespace Main\UserBundle\Controller\Admin;

use AppBundle\Controller\BaseController;
use Main\UserBundle\Entity\BankAccount;
use Main\UserBundle\Entity\Custom\Bank\EditBankRequest;
use Main\UserBundle\Entity\Custom\Bank\NewBankRequest;
use Main\UserBundle\Form\Bank\Admin\EditBankFormType;
use Main\UserBundle\Form\Bank\Admin\NewBankFormType;
use Main\UserBundle\Repository\BankAccountRepository;
use Main\AdminBundle\Repository\CountryRepository;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class BankController extends BaseController
{
    /**
     * @Route("/manager/bank/new", name="manager_bank_new", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function bankAccountNewAction($id = null,
                                         Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         CountryRepository $countryRepository)
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $bank = new BankAccount();
        $newRequest = NewBankRequest::factory($bank);
        $form = $this->createForm(NewBankFormType::class, $newRequest);
        $form->handleRequest($request);

        $countries = $countryRepository->findAll();

        if ($form->isSubmitted()) {
            //print_r($this->getErrorMessages($form));die;
            if ($form->isValid()) {
                $bank->setUser($this->user);
                $bank->setIban($newRequest->getIban());
                $bank->setBic($newRequest->getBic());
                $bank->setBank($newRequest->getBank());

                $bank->setCountry($countryRepository->find($newRequest->getCountry()));
                $em = $this->getDoctrine()->getManager();
                $em->persist($bank);
                $em->flush();
                return $this->redirectToRoute('manager_personal_data', [
                ]);
            }
        }

        return $this->render('@MainUserBundle/BankAccount/manager.bank.new.html.twig', [
            'user' => $this->user,
            'bank' => $bank,
            'countries' => $countries,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/manager/bank/{id}/edit", name="manager_bank_edit", requirements={"id" = "\d+", "bid" = "\d+"}, defaults={"id" = 0, "aId" = 0})
     */
    public function bankAccountEditAction($id = null,
                                          Request $request,
                                          AuthorizationCheckerInterface $authorizationChecker,
                                          UserRepository $userRepository,
                                          BankAccountRepository $bankAccountRepository,
                                          CountryRepository $countryRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $bank = $bankAccountRepository->find($id);
        if (!$bank) {
            return $this->redirectToRoute('manager_profile', [
                'id' => $this->user->getId()
            ]);
        }

        $editRequest = EditBankRequest::factory($bank);
        $form = $this->createForm(EditBankFormType::class, $editRequest);
        $form->handleRequest($request);

        $countries = $countryRepository->findAll();

        if ($form->isSubmitted()) {
            //print_r($this->getErrorMessages($form));die;
            if ($form->isValid()) {
                //print_r($countryRepository->find($editRequest->getCountry())->getName());die;
                $bank->setIban($editRequest->getIban());
                $bank->setBic($editRequest->getBic());
                $bank->setBank($editRequest->getBank());

                $bank->setCountry($countryRepository->find($editRequest->getCountry()));
                $em = $this->getDoctrine()->getManager();
                $em->persist($bank);
                $em->flush();
                return $this->redirectToRoute('manager_personal_data', [
                ]);
            }
        }

        return $this->render('@MainUserBundle/BankAccount/manager.bank.edit.html.twig', [
            'user' => $this->user,
            'bank' => $bank,
            'countries' => $countries,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/user/{id}/bank/new", name="admin_user_id_bank_new", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminBankNewAction($id = null,
                                       Request $request,
                                       UserRepository $userRepository,
                                       CountryRepository $countryRepository)
    {
        $user = $userRepository->find($id);
        if (!$user)
            return $this->redirectToRoute('admin_users');

        $bank = new BankAccount();
        $newRequest = NewBankRequest::factory($bank);
        $form = $this->createForm(NewBankFormType::class, $newRequest);
        $form->handleRequest($request);

        $countries = $countryRepository->findAll();

        if ($form->isSubmitted()) {
            //print_r($this->getErrorMessages($form));die;
            //print_r($newRequest->getGender());die;
            if ($form->isValid()) {
                $bank->setUser($user);
                $bank->setIban($newRequest->getIban());
                $bank->setBic($newRequest->getBic());
                $bank->setBank($newRequest->getBank());

                $bank->setCountry($countryRepository->find($newRequest->getCountry()));
                $em = $this->getDoctrine()->getManager();
                $em->persist($bank);
                $em->flush();

                return $this->redirectToRoute('admin_user_id', [
                    'id' => $id
                ]);
            }
        }

        return $this->render('@MainUserBundle/Admin/bank/admin.bank.new.html.twig', [
            'loggedUser' => $this->getCurrentUser(),
            'user' => $user,
            'bank' => $bank,
            'countries' => $countries,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/user/{id}/bank/{bid}/edit", name="admin_user_id_bank_bid_edit", requirements={"id" = "\d+", "bid" = "\d+"}, defaults={"id" = 0, "aId" = 0})
     */
    public function adminBankEditAction($id = null,
                                        $bid = null,
                                        Request $request,
                                        UserRepository $userRepository,
                                        BankAccountRepository $bankAccountRepository,
                                        CountryRepository $countryRepository
    )
    {
        $user = $userRepository->find($id);
        if (!$user)
            return $this->redirectToRoute('admin_users');
        $bank = $bankAccountRepository->find($bid);
        if (!$bank) {
            return $this->redirectToRoute('admin_user_id', [
                'id' => $id
            ]);
        }

        $editRequest = EditBankRequest::factory($bank);
        $form = $this->createForm(EditBankFormType::class, $editRequest);
        $form->handleRequest($request);

        $countries = $countryRepository->findAll();

        if ($form->isSubmitted()) {
            //print_r($this->getErrorMessages($form));die;
            if ($form->isValid()) {
                $bank->setIban($editRequest->getIban());
                $bank->setBic($editRequest->getBic());
                $bank->setBank($editRequest->getBank());

                $bank->setCountry($countryRepository->find($editRequest->getCountry()));
                $em = $this->getDoctrine()->getManager();
                $em->persist($bank);
                $em->flush();
                return $this->redirectToRoute('admin_user_id', [
                    'id' => $id
                ]);
            }
        }

        return $this->render('@MainUserBundle/Admin/bank/admin.bank.edit.html.twig', [
            'loggedUser' => $this->getCurrentUser(),
            'user' => $user,
            'bank' => $bank,
            'countries' => $countries,
            'form' => $form->createView()
        ]);
    }
}
