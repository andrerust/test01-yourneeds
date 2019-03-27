<?php

namespace Main\AdminBundle\Controller;

use AppBundle\Controller\BaseController;
use Main\AdminBundle\Entity\City;
use Main\AdminBundle\Repository\AddressStreetRepository;
use Main\AdminBundle\Repository\AddressTypeRepository;
use Main\AdminBundle\Repository\AddressZipRepository;
use Main\AdminBundle\Repository\CityRepository;
use Main\AdminBundle\Repository\CountryRepository;
use Main\InsuranceBundle\Repository\CompanyRepository;
use Main\UserBundle\Entity\Custom\Address\EditAddressRequest;
use Main\UserBundle\Entity\Custom\Address\EditManagerAddressRequest;
use Main\UserBundle\Entity\Custom\Address\NewManagerAddressRequest;
use Main\UserBundle\Entity\UserAddress;
use Main\UserBundle\Form\Address\Admin\EditAddressFormType;
use Main\UserBundle\Form\Address\Admin\EditManagerAddressFormType;
use Main\UserBundle\Form\Address\Admin\NewManagerAddressFormType;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class AddressController extends BaseController
{
    /**
     * @Route("/address/new", name="manager_address_new", requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function managerAddressNewAction(Request $request,
                                            AuthorizationCheckerInterface $authorizationChecker,
                                            UserRepository $userRepository,
                                            UserAddressRepository $userAddressRepository,
                                            AddressZipRepository $addressZipRepository,
                                            AddressStreetRepository $addressStreetRepository,
                                            CityRepository $cityRepository,
                                            CountryRepository $countryRepository,
                                            AddressTypeRepository $addressTypeRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $userAddress = new UserAddress();
        $formRequest = NewManagerAddressRequest::factory($userAddress);
        $form = $this->createForm(NewManagerAddressFormType::class, $formRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);

            if (count($errors) > 0) {
                $this->addErrors($errors);
                if ($this->hasErrors == true) {
                }
            } else {
                if ($form->isValid()) {
                    $zip = $addressZipRepository->findOneBy(
                        [
                            'zip' => $formRequest->getPostalCode()
                        ]
                    );
                    $street = $addressStreetRepository->find($formRequest->getStreet());
                    $streetNumber = $formRequest->getStreetNumber();
                    $city = $cityRepository->find($formRequest->getCity());
                    $additionalInfo = $formRequest->getAdditionalInfo();
                    $country = $countryRepository->findOneBy(
                        [
                            'name' => 'Deutschland'
                        ]
                    );
                    $addressType = $addressTypeRepository->findOneBy(
                        [
                            'name' => 'Privatadresse'
                        ]
                    );

                    if (1 == $formRequest->getIsMain()) {
                        $tmpAddresses = $userAddressRepository->findBy(
                            [
                                'user' => $this->user
                            ]
                        );
                        if ($tmpAddresses) {
                            foreach ($tmpAddresses as $tmpAddress) {
                                $tmpAddress->setIsMain(0);
                                $this->databaseAccessor->persist($tmpAddress);
                                $this->databaseAccessor->flush();
                            }
                        }
                    }

                    $userAddress->setStreet($street);
                    $userAddress->setStreetNumber($streetNumber);
                    $userAddress->setPostalCode($zip);
                    $userAddress->setCity($city);
                    $userAddress->setIsMain($formRequest->getIsMain());
                    $userAddress->setAdditionalInfo($additionalInfo);
                    $userAddress->setCountry($country);
                    $userAddress->setType($addressType);
                    $userAddress->setUser($this->user);

                    $this->databaseAccessor->persist($userAddress);
                    $this->databaseAccessor->flush();
                    return $this->redirectToRoute('manager_personal_data', [
                    ]);
                }
            }
        }

        $mainStatus = [
            ['id' => 1, 'name' => 'Hauptadresse'],
            ['id' => 0, 'name' => 'Nebenadresse']
        ];


        $cities = $cityRepository->findAll();
        $countries = $countryRepository->findAll();

        return $this->render('@MainUserBundle/Address/manager.address.new.html.twig', [
            'user' => $this->user,
            'address' => $userAddress,
            'cities' => $cities,
            'mainStatus' => $mainStatus,
            'countries' => $countries,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/manager/address/{id}/edit", name="manager_address_edit", requirements={"id" = "\d+", "aid" = "\d+"}, defaults={"id" = 0, "aId" = 0})
     */
    public function managerAddressEditAction($id = null,
                                             Request $request,
                                             AuthorizationCheckerInterface $authorizationChecker,
                                             UserRepository $userRepository,
                                             UserAddressRepository $userAddressRepository,
                                             AddressZipRepository $addressZipRepository,
                                             AddressStreetRepository $addressStreetRepository,
                                             CityRepository $cityRepository,
                                             CountryRepository $countryRepository,
                                             AddressTypeRepository $addressTypeRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $userAddress = $userAddressRepository->find($id);
        $formRequest = EditManagerAddressRequest::factory($userAddress);
        $form = $this->createForm(EditManagerAddressFormType::class, $formRequest, [
            'action' => $this->generateUrl('manager_address_edit', [
                'id' => $userAddress->getId()
            ]),
            'attr' => [
                'id' => 'edit_manager_address_form',
                'name' => 'edit_manager_address_form'
            ],
            'method' => 'POST'
        ]);
        $form->handleRequest($request);

        //if (null != $request->get("edit_address_form")) {
        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);

            if (count($errors) > 0) {
                $this->addErrors($errors);
                if ($this->hasErrors == true) {
                }
            } else {
                //if ($form->isValid()) {
                $zip = $addressZipRepository->findOneBy(
                    [
                        'zip' => $formRequest->getPostalCode()
                    ]
                );
                $street = $addressStreetRepository->find($formRequest->getStreet());
                $streetNumber = $formRequest->getStreetNumber();
                $city = $cityRepository->find($formRequest->getCity());
                $additionalInfo = $formRequest->getAdditionalInfo();
                $country = $countryRepository->findOneBy(
                    [
                        'name' => 'Deutschland'
                    ]
                );
                $addressType = $addressTypeRepository->findOneBy(
                    [
                        'name' => 'Privatadresse'
                    ]
                );

                if (1 == $formRequest->getIsMain()) {
                    $tmpAddresses = $userAddressRepository->findBy(
                        [
                            'user' => $this->user
                        ]
                    );
                    if ($tmpAddresses) {
                        foreach ($tmpAddresses as $tmpAddress) {
                            $tmpAddress->setIsMain(0);
                            $this->databaseAccessor->persist($tmpAddress);
                            $this->databaseAccessor->flush();
                        }
                    }
                }

                $userAddress->setStreet($street);
                $userAddress->setStreetNumber($streetNumber);
                $userAddress->setPostalCode($zip);
                $userAddress->setCity($city);
                $userAddress->setIsMain($formRequest->getIsMain());
                $userAddress->setAdditionalInfo($additionalInfo);
                $userAddress->setCountry($country);
                $userAddress->setType($addressType);
                $userAddress->setUser($this->user);
                $userAddress->setIsActive(1);
                $userAddress->setIsBlocked(0);

                $this->databaseAccessor->persist($userAddress);
                $this->databaseAccessor->flush();
                return $this->redirectToRoute('manager_personal_data', [
                ]);
            }
        }

        $mainStatus = [
            ['id' => 1, 'name' => 'Hauptadresse'],
            ['id' => 0, 'name' => 'Nebenadresse']
        ];
        $countries = $countryRepository->findAll();

        return $this->render('@MainUserBundle/Address/manager.address.edit.html.twig', [
            'user' => $this->user,
            'address' => $userAddress,
            'mainStatus' => $mainStatus,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/address/{id}/edit", name="admin_address_edit", requirements={"id" = "\d+", "aid" = "\d+"}, defaults={"id" = 0, "aId" = 0})
     */
    public function managersAddressEditAction($id = null,
                                              Request $request,
                                              AuthorizationCheckerInterface $authorizationChecker,
                                              UserRepository $userRepository,
                                              AddressRepository $addressRepository,
                                              CityRepository $cityRepository,
                                              AddressTypeRepository $addressTypeRepository,
                                              CountryRepository $countryRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $address = $addressRepository->find($id);

        $formRequest = EditAddressRequest::factory($address);
        $form = $this->createForm(EditAddressFormType::class, $formRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);
            //print_r($this->getErrorMessages($form));
            if (count($errors) > 0) {
                $this->addErrors($errors);

                if ($this->hasErrors == true) {
                }
            } else {
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $cityId = null;
                    if ($formRequest->getCustomCity() != "") {
                        $city = new City();
                        $city->setName($formRequest->getCustomCity());
                        $city->setIsActive(1);
                        $em->persist($city);
                        $em->flush();
                        $cityId = $city->getId();
                    } else {
                        if ($formRequest->getCity() > 0) {
                            $cityId = $formRequest->getCity();
                        }
                    }

                    if (1 == $formRequest->getIsMain()) {
                        $tmpAddresses = $addressRepository->findBy(
                            [
                                'user' => $this->user
                            ]
                        );
                        if ($tmpAddresses) {
                            foreach ($tmpAddresses as $tmpAddress) {
                                $tmpAddress->setIsMain(0);
                                $em->persist($tmpAddress);
                                $em->flush();
                            }
                        }
                    }

                    $address->setCity($cityRepository->find($cityId));
                    //print_r($formRequest->getCustomCity());	die;
                    $address->setAdditionalInfo($formRequest->getAdditionalInfo());
                    $address->setStreet($formRequest->getStreet());
                    $address->setIsMain($formRequest->getIsMain());
                    $address->setStreetNumber($formRequest->getStreetNumber());
                    $address->setPostalCode($formRequest->getPostalCode());

                    if ($formRequest->getCountry() > 0) {
                        $countryId = $formRequest->getCountry();
                        $address->setCountry($countryRepository->find($countryId));
                    }
                    $addressTypeTmp = $addressTypeRepository->findBy(['name' => 'Privatadresse']);
                    $addressType = $addressTypeRepository->find($addressTypeTmp[0]->getId());
                    $address->setType($addressType);
                    $address->setUser($this->user);

                    //print_r($address->getType());die;
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($address);
                    $em->flush();


                    return $this->redirectToRoute('manager_personal_data', [
                    ]);
                }
            }
        }

        $mainStatus = [
            ['id' => 1, 'name' => 'Hauptadresse'],
            ['id' => 0, 'name' => 'Nebenadresse']
        ];

        $cities = $cityRepository->findBy(
            [],
            [
                'name' => 'ASC'
            ]
        );
        $countries = $countryRepository->findAll();

        return $this->render('@MainUserBundle/Address/manager.address.edit.html.twig', [
            'user' => $this->user,
            'address' => $address,
            'cities' => $cities,
            'mainStatus' => $mainStatus,
            'countries' => $countries,
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/admin/address/{id}/delete", name="admin_address_delete", requirements={"id" = "\d+", "aid" = "\d+"}, defaults={"id" = 0, "aId" = 0})
     */
    public function addressDeleteAction($id = null,
                                        AddressRepository $addressRepository
    )
    {
        $address = $addressRepository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($address);
        $em->flush();

        return $this->redirectToRoute('admin_company', [
            'id' => $address->getCompany()->getId()
        ]);
    }

    /**
     * @Route("/admin/address/new", name="admin_address_new", requirements={"id" = "\d+", "aid" = "\d+"}, defaults={"id" = 0, "aId" = 0})
     */
    public function addressNewAction($type = null,
                                     $sourceId = null,
                                     Request $request,
                                     AuthorizationCheckerInterface $authorizationChecker,
                                     UserRepository $userRepository,
                                     CompanyRepository $companyRepository,
                                     CityRepository $cityRepository,
                                     AddressTypeRepository $addressTypeRepository,
                                     CountryRepository $countryRepository
    )
    {
        {
            $this->initialize();
            if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
                return $this->getCredentialRedirectUrl();
            }
            $user = $this->user;
            $address = new Address();
            $handler = null;
            $source = null;
            if ($type == 'company') {
                $source = $companyRepository->find($sourceId);
                $handler = ['company', $source];
            } elseif ($type == 'manager') {
                $source = $userRepository->find($sourceId);
                $handler = ['manager', $source];
            }
            $id = $source->getId();

            $formRequest = EditAddressRequest::factory($address);
            $form = $this->createForm(EditAddressFormType::class, $formRequest);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                $validator = $this->get('validator');
                $errors = $validator->validate($formRequest);
                //print_r($this->getErrorMessages($form));
                if (count($errors) > 0) {
                    $this->addErrors($errors);
                    if ($this->hasErrors == true) {
                    }
                } else {
                    //if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    if ($formRequest->getCustomCity() != "") {
                        $city = new City();
                        $city->setName($formRequest->getCustomCity());
                        $city->setIsActive(1);
                        $em->persist($city);
                        $em->flush();
                        $cityId = $city->getId();
                    } else {
                        if ($formRequest->getCity() > 0) {
                            $cityId = $formRequest->getCity();
                        }
                    }
                    $address->setCity($cityRepository->find($cityId));

                    $address->setAdditionalInfo($formRequest->getAdditionalInfo());
                    $address->setStreet($formRequest->getStreet());
                    $address->setStreetNumber($formRequest->getStreetNumber());
                    $address->setPostalCode($formRequest->getPostalCode());
                    $address->setIsActive($formRequest->getIsActive());
                    $address->setIsBlocked($formRequest->getIsBlocked());

                    if ($formRequest->getCountry() > 0) {
                        $countryId = $formRequest->getCountry();
                        $address->setCountry($countryRepository->find($countryId));
                    }
                    if ($formRequest->getType() > 0) {
                        $addressTypeId = $formRequest->getType();
                        $address->setType($addressTypeRepository->find($addressTypeId));
                    }

                    if ($handler[0] == 'company') {
                        $address->setCompany($handler[1]);
                    } elseif ($handler[0] == 'manager') {
                        $address->setUser($handler[1]);
                    }
                    //echo $address->getId() . "<br>" . $cityId . "<br>" . $countryId . "<br>" . $type;die;
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($address);
                    $em->flush();

                    if ($handler != null) {
                        if ($handler[0] == 'company') {
                            return $this->redirectToRoute('admin_company', [
                                'id' => $id
                            ]);
                        } elseif ($handler[0] == 'manager') {
                            return $this->redirectToRoute('admin_manager', [
                                'id' => $id
                            ]);
                        }
                    }
                    //}
                }
            }

            $cities = $cityRepository->findAll();
            $countries = $countryRepository->findAll();

            return $this->render('@MainUserBundle/Address/address.new.html.twig', [
                'isCompany' => true,
                'id' => $source->getId(),
                'user' => $user,
                'address' => $address,
                'cities' => $cities,
                'countries' => $countries,
                'form' => $form->createView()
            ]);
        }
    }

    public function addressEditAction($type = null,
                                      $id = null,
                                      Request $request,
                                      AuthorizationCheckerInterface $authorizationChecker,
                                      UserRepository $userRepository,
                                      CompanyRepository $companyRepository,
                                      AddressRepository $addressRepository,
                                      CityRepository $cityRepository,
                                      AddressTypeRepository $addressTypeRepository,
                                      CountryRepository $countryRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $user = $this->user;
        $address = $addressRepository->find($id);

        $handler = null;
        $source = null;
        if ($type == 'company') {
            $source = $companyRepository->find($address->getCompany()->getId());
            $handler = ['company', $source];
        } elseif ($type == 'manager') {
            $source = $userRepository->find($address->getUser()->getId());
            $handler = ['manager', $source];
        }
        $id = $source->getId();

        $formRequest = EditAddressRequest::factory($address);

        $form = $this->createForm(EditAddressFormType::class, $formRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $validator = $this->get('validator');
            $errors = $validator->validate($formRequest);
            //print_r($this->getErrorMessages($form));
            if (count($errors) > 0) {
                $this->addErrors($errors);

                if ($this->hasErrors == true) {
                }
            } else {
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    if ($formRequest->getCustomCity() != "") {
                        $city = new City();
                        $city->setName($formRequest->getCustomCity());
                        $city->setIsActive(1);
                        $em->persist($city);
                        $em->flush();
                        $cityId = $city->getId();
                    } else {
                        if ($formRequest->getCity() > 0) {
                            $cityId = $formRequest->getCity();
                        }
                    }
                    $address->setCity($cityRepository->find($cityId));
                    //print_r($formRequest->getCustomCity());	die;
                    $address->setAdditionalInfo($formRequest->getAdditionalInfo());
                    $address->setStreet($formRequest->getStreet());
                    $address->setStreetNumber($formRequest->getStreetNumber());
                    $address->setPostalCode($formRequest->getPostalCode());
                    $address->setIsActive($formRequest->getIsActive());
                    $address->setIsBlocked($formRequest->getIsBlocked());

                    if ($formRequest->getCountry() > 0) {
                        $countryId = $formRequest->getCountry();
                        $address->setCountry($countryRepository->find($countryId));
                    }
                    if ($formRequest->getType() > 0) {
                        $addressTypeId = $formRequest->getType();
                        $address->setType($addressTypeRepository->find($addressTypeId));
                    }
                    //print_r($address->getType());die;
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($address);
                    $em->flush();

                    if ($handler != null) {
                        if ($handler[1] == null) {
                            if ($handler[0] == 'company') {
                                return $this->redirectToRoute('admin_company', [
                                    'id' => $id
                                ]);
                            } elseif ($handler[0] == 'manager') {
                                return $this->redirectToRoute('admin_manager', [
                                    'id' => $id
                                ]);
                            }
                        }
                    }
                    return $this->redirectToRoute('admin_company', [
                        'id' => $id
                    ]);
                }
            }
        }

        $cities = $cityRepository->findAll();
        $countries = $countryRepository->findAll();

        return $this->render('@MainUserBundle/Address/address.edit.html.twig', [
            'isCompany' => true,
            'id' => $source->getId(),
            'user' => $user,
            'address' => $address,
            'cities' => $cities,
            'countries' => $countries,
            'form' => $form->createView()
        ]);
    }
}
