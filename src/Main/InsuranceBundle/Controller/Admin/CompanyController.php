<?php

namespace Main\InsuranceBundle\Controller\Admin;

use AppBundle\Controller\BaseController;
use Doctrine\Common\Collections\ArrayCollection;
use Main\InsuranceBundle\Entity\Company;
use Main\InsuranceBundle\Entity\Custom\Company\EditCompanyRequest;
use Main\InsuranceBundle\Entity\Custom\Company\NewCompanyRequest;
use Main\InsuranceBundle\Form\Company\Admin\EditCompanyFormType;
use Main\InsuranceBundle\Form\Company\Admin\NewCompanyFormType;
use Main\InsuranceBundle\Repository\CompanyRepository;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class CompanyController extends BaseController
{

    /**
     * @Route("/admin/company/new", name="admin_company_new")
     */
    public function adminCompanyNewAction(Request $request,
                                          AuthorizationCheckerInterface $authorizationChecker,
                                          UserRepository $userRepository,
                                          CompanyRepository $companyRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $company = new Company();
        $newRequest = NewCompanyRequest::factory($company);

        $form = $this->createForm(NewCompanyFormType::class, $newRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            //print_r($this->getErrorMessages($form));//die;
            //if ($form->isValid()) {
            //print_r($newRequest);die;
            if ($newRequest->getLogo() != null) {
                $file = $newRequest->getLogo();
                $fileName = $file->getClientOriginalName();
                $file->move(
                    $this->getParameter('upload_logos'),
                    $fileName
                );
                //$uploadService->setActiveTargetDir("logos");
                //$fileName = $uploadService->upload($file);
                $company->setLogo($fileName);
            }
            $company->setName($newRequest->getName());
            $company->setPublicName($newRequest->getPublicName());
            $company->setDepartment($newRequest->getDepartment());
            $company->setContactPerson($newRequest->getContactPerson());
            $company->setWebsite($newRequest->getWebsite());
            $company->setFaxNumber($newRequest->getFaxNumber());
            $company->setNote($newRequest->getNote());
            $company->setIsActive($newRequest->getIsActive());

            $company->setPhoneNumberGeneral($newRequest->getPhoneNumberGeneral());
            $company->setPhoneDamageReportGeneral($newRequest->getPhoneDamageReportGeneral());
            $company->setPhoneDamageReportCar($newRequest->getPhoneDamageReportCar());
            $company->setPhoneDamageReportLaw($newRequest->getPhoneDamageReportLaw());
            $company->setPhoneDamageReportHealth($newRequest->getPhoneDamageReportHealth());
            $company->setFaxNumber($newRequest->getFaxNumber());
            $company->setEmailGeneral($newRequest->getEmailGeneral());
            $company->setEmailBrokerService($newRequest->getEmailBrokerService());
            $company->setEmailTransfer($newRequest->getEmailTransfer());
            $company->setEmailDamageReport($newRequest->getEmailDamageReport());
            $company->setBrokerNumberGeneral($newRequest->getBrokerNumberGeneral());
            $company->setBrokerNumberLife($newRequest->getBrokerNumberLife());
            $company->setBrokerNumberHealth($newRequest->getBrokerNumberHealth());
            $company->setEmailProvisions($newRequest->getEmailProvisions());
            $company->setBrokerCourtagePin($newRequest->getBrokerCourtagePin());
            $company->setLinkBrokerPortal($newRequest->getLinkBrokerPortal());
            $company->setBrokerPortalUsername($newRequest->getBrokerPortalUsername());
            $company->setBrokerPortalPassword($newRequest->getBrokerPortalPassword());
            $company->setMbpBrokerNo($newRequest->getMbpBrokerNo());

            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('admin_company', [
                'id' => $company->getId()
            ]);
        }
        //}

        return $this->render('@MainInsuranceBundle/Company/Admin/company.new.html.twig', [
            'company' => $company,
            'user' => $this->user,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/company/{id}/edit", name="admin_company_edit", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function adminCompanyEditAction($id = null,
                                           Request $request,
                                           AuthorizationCheckerInterface $authorizationChecker,
                                           UserRepository $userRepository,
                                           CompanyRepository $companyRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_SURVEY_RESULT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $company = $companyRepository->find($id);
        if (!$company) {
            return $this->redirectToRoute('admin_companies');
        }

        $editRequest = EditCompanyRequest::factory($company);
        $form = $this->createForm(EditCompanyFormType::class, $editRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            //if ($form->isValid()) {
            if ($editRequest->getLogo() != null) {
                $file = $editRequest->getLogo();
                $fileName = $file->getClientOriginalName();
                $file->move(
                    $this->getParameter('upload_logos'),
                    $fileName
                );
                $company->setLogo($fileName);
            }
            $company->setName($editRequest->getName());
            $company->setPublicName($editRequest->getPublicName());
            $company->setDepartment($editRequest->getDepartment());
            $company->setContactPerson($editRequest->getContactPerson());
            $company->setWebsite($editRequest->getWebsite());
            $company->setFaxNumber($editRequest->getFaxNumber());
            $company->setNote($editRequest->getNote());
            $company->setIsActive($editRequest->getIsActive());

            $company->setPhoneNumberGeneral($editRequest->getPhoneNumberGeneral());
            $company->setPhoneDamageReportGeneral($editRequest->getPhoneDamageReportGeneral());
            $company->setPhoneDamageReportCar($editRequest->getPhoneDamageReportCar());
            $company->setPhoneDamageReportLaw($editRequest->getPhoneDamageReportLaw());
            $company->setPhoneDamageReportHealth($editRequest->getPhoneDamageReportHealth());
            $company->setFaxNumber($editRequest->getFaxNumber());
            $company->setEmailGeneral($editRequest->getEmailGeneral());
            $company->setEmailBrokerService($editRequest->getEmailBrokerService());
            $company->setEmailTransfer($editRequest->getEmailTransfer());
            $company->setEmailDamageReport($editRequest->getEmailDamageReport());
            $company->setBrokerNumberGeneral($editRequest->getBrokerNumberGeneral());
            $company->setBrokerNumberLife($editRequest->getBrokerNumberLife());
            $company->setBrokerNumberHealth($editRequest->getBrokerNumberHealth());
            $company->setEmailProvisions($editRequest->getEmailProvisions());
            $company->setBrokerCourtagePin($editRequest->getBrokerCourtagePin());
            $company->setLinkBrokerPortal($editRequest->getLinkBrokerPortal());
            $company->setBrokerPortalUsername($editRequest->getBrokerPortalUsername());
            $company->setBrokerPortalPassword($editRequest->getBrokerPortalPassword());
            $company->setMbpBrokerNo($editRequest->getMbpBrokerNo());

            //print_r($company);//die;
            //print_r($this->getErrorMessages($form));//die;
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('admin_company', [
                'id' => $company->getId()
            ]);
            //}
        }

        return $this->render('@MainInsuranceBundle/Company/Admin/company.edit.html.twig', [
            'company' => $company,
            'user' => $this->user,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/company/{id}", name="admin_company", requirements={"id" = "\d+"}, defaults={"id" = 0})
     * @param Request $request
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param UserRepository $userRepository
     * @param UserRepository $userRepository
     * @param CompanyRepository $companyRepository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function adminCompanyAction($id = null,
                                       Request $request,
                                       AuthorizationCheckerInterface $authorizationChecker,
                                       UserRepository $userRepository,
                                       CompanyRepository $companyRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_SURVEY_RESULT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $company = $companyRepository->find($id);
        if (!$company) {
            return $this->redirectToRoute('admin_companies', [
                'user' => $this->user
            ]);
        }

        return $this->render('@MainInsuranceBundle/Company/Admin/company.html.twig', [
            'user' => $this->user,
            'company' => $company
        ]);
    }

    /**
     * @param $companyId
     * @param $addresses
     * @return null
     */
    private function findCompanyAddress($id, $addresses)
    {
        foreach ($addresses as $address) {
            if (null != $address->getCompany()
                && null != $address->getCompany()->getId()
                && $id == $address->getCompany()->getId()
                && $id == $address->getCity()->getId()
            ) {
                return $address;
            }
        }
        return null;
    }

    /**
     * @Route("/admin/companies", name="admin_companies")
     * @param Request $request
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param UserRepository $userRepository
     * @param CompanyRepository $companyRepository
     * @param AddressRepository $addressRepository
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function adminCompaniesAction(Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         CompanyRepository $companyRepository,
                                         AddressRepository $addressRepository
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $companies = $companyRepository->findAll();
        $resultList = new ArrayCollection();
        foreach ($companies as $company) {
            $address = $addressRepository->findOneBy([
                'company' => $company
            ]);
            $resultList[] = [$company, $address];
        }
        return $this->render('@MainInsuranceBundle/Company/Admin/companies.html.twig', [
                'user' => $this->user,
                'companies' => $resultList
            ]
        );
    }
}
