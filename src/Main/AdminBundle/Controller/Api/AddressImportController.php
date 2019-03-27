<?php

namespace Main\AdminBundle\Controller\Api;

use AppBundle\Controller\BaseController;
use Main\AdminBundle\Helper\MM\AddressImportHelper;
use Main\AdminBundle\Helper\MM\AddressLookupHelper;
use Main\AdminBundle\Repository\AddressStreetRepository;
use Main\AdminBundle\Repository\AddressZipCityRepository;
use Main\AdminBundle\Repository\AddressZipRepository;
use Main\AdminBundle\Repository\AddressZipStreetRepository;
use Main\UserBundle\Repository\AddressRepository;
use Main\AdminBundle\Repository\CityRepository;
use Main\AdminBundle\Repository\CountryRepository;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class AddressImportController extends BaseController
{

    // LOAD IN PERSONAL DATA
    /**
     * @Method({"PUT", "GET"})
     * @Route("/api/address/zip/{input}/lookup", name="api_address_zip_lookup")
     */
    public function adminDoLookupAddressesZipAction($input = null,
                                                    Request $request,
                                                    AuthorizationCheckerInterface $authorizationChecker,
                                                    UserRepository $userRepository,
                                                    AddressRepository $addressRepository,
                                                    AddressZipRepository $addressZipRepository,
                                                    AddressStreetRepository $addressStreetRepository,
                                                    AddressZipStreetRepository $addressZipStreetRepository,
                                                    AddressZipCityRepository $addressZipCityRepository,
                                                    CountryRepository $countryRepository,
                                                    CityRepository $cityRepository,
                                                    LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_ADMIN_IMPORT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $importHelper = new AddressLookupHelper($input, $userRepository, $addressRepository,
            $addressZipRepository, $addressStreetRepository, $addressZipStreetRepository, $addressZipCityRepository,
            $countryRepository, $cityRepository, $this->getDoctrine()->getManager(), $logger);
        $importHelper->init();
        $importHelper->importList();
        if ($importHelper->getCounts() > 0) {
            $counts = $importHelper->getCounts();
        }

        $jsonResponse['status'] = '200';
        $jsonResponse['results']['cities'] = $importHelper->getResponseCityList();
        $jsonResponse['results']['streets'] = $importHelper->getResponseStreetList();
        $jsonResponse['counts'] = $counts;

        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }

    // LOAD IN SURVEY
    /**
     * @Method({"PUT", "GET"})
     * @Route("/api/address/{input}/load", name="api_address_input_load")
     */
    public function loadApiAddressAction($input = 'all',
                                         Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         UserAddressRepository $userAddressRepository,
                                         LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_ADMIN_IMPORT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $logger->info('STEP 2a-error :', [
            '/api/address/{input}/load' => $input
        ]);

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        } else {
            $data = json_decode($request->getContent(), true);
        }
        $requestData = json_encode($data['data']);
        //$list = $jobGroupRepository->findBy(['name' => 'Abteilungsleiter']);

        $tmpList = $userAddressRepository->findBy(
            [
                'user' => $this->user
            ]
        );
        $resultList = [];
        foreach ($tmpList as $key => $value) {
            $addressString = $value->getStreet()->getName() . ' ' . $value->getStreetNumber()
                . ', ' . $value->getPostalCode()->getZip() . ' ' . $value->getCity()->getName();
            $resultList[] = ['id' => $value->getId(), 'name' => $addressString];
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

        return new JsonResponse($resultList, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }


    // IMPORT IN DB
    /**
     * @Method({"PUT"})
     * @Route("/admin/import/addresses/{twoZipDigits}", name="admin_do_import_addresses")
     */
    public function adminDoImportAddressesAction($twoZipDigits = null,
                                                 Request $request,
                                                 AuthorizationCheckerInterface $authorizationChecker,
                                                 UserRepository $userRepository,
                                                 AddressRepository $addressRepository,
                                                 AddressZipRepository $addressZipRepository,
                                                 AddressStreetRepository $addressStreetRepository,
                                                 AddressZipStreetRepository $addressZipStreetRepository,
                                                 AddressZipCityRepository $addressZipCityRepository,
                                                 CountryRepository $countryRepository,
                                                 CityRepository $cityRepository,
                                                 LoggerInterface $logger
    )
    {
        $this->initialize();
        $counts = 0;
        $executionTime = 0;
        if (!$this->allowedToUse('CAN_DO_ADMIN_IMPORT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $importHelper = new AddressImportHelper($twoZipDigits, $userRepository, $addressRepository,
            $addressZipRepository, $addressStreetRepository, $addressZipStreetRepository, $addressZipCityRepository,
            $countryRepository, $cityRepository, $this->getDoctrine()->getManager(), $logger);
        $importHelper->init();
        $importHelper->importList();
        if ($importHelper->getCounts() > 0) {
            $counts = $importHelper->getCounts();
        }
        if ($importHelper->getExecutionTime() > 0) {
            $executionTime = $importHelper->getExecutionTime();
        }

        $jsonResponse['status'] = '200';
        $jsonResponse['zipInsert'] = $counts['zipInsert'];
        $jsonResponse['zipUpdate'] = $counts['zipUpdate'];
        $jsonResponse['zipExist'] = $counts['zipExist'];
        $jsonResponse['streetInsert'] = $counts['streetInsert'];
        $jsonResponse['streetUpdate'] = $counts['streetUpdate'];
        $jsonResponse['streetExist'] = $counts['streetExist'];
        $jsonResponse['cityInsert'] = $counts['cityInsert'];
        $jsonResponse['cityUpdate'] = $counts['cityUpdate'];
        $jsonResponse['cityExist'] = $counts['cityExist'];
        $jsonResponse['zipStreetInsert'] = $counts['zipStreetInsert'];
        $jsonResponse['zipCityInsert'] = $counts['zipCityInsert'];
        $jsonResponse['executionTime'] = $executionTime;

        return new JsonResponse($jsonResponse, 200, array('Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json'));
    }

    // IMPORT IN DB
    /**
     * @Method({"GET"})
     * @Route("/admin/import/addresses", name="admin_import_addresses")
     * @Route("/admin/import/addresses/start/{twoZipDigits}", name="admin_import_addresses_two_digits")
     */
    public function adminImportAddressesAction($twoZipDigits = null,
                                               Request $request,
                                               AuthorizationCheckerInterface $authorizationChecker,
                                               UserRepository $userRepository,
                                               AddressRepository $addressRepository,
                                               AddressZipRepository $addressZipRepository,
                                               AddressStreetRepository $addressStreetRepository,
                                               AddressZipStreetRepository $addressZipStreetRepository,
                                               AddressZipCityRepository $addressZipCityRepository,
                                               CountryRepository $countryRepository,
                                               CityRepository $cityRepository,
                                               LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_ADMIN_IMPORT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $tmpFirstDigit = substr($twoZipDigits, 0, 1);
        $firstDigit = ($tmpFirstDigit >= 0) ? $tmpFirstDigit : "0, 1, 2";
        $tmpSecondDigit = substr($twoZipDigits, 1, 1);
        $secondDigit = ($tmpSecondDigit >= 0) ? $tmpSecondDigit : "0, 1, 2, 3, 4, 5, 6, 7, 8, 9";

        return $this->render('@MainAdminBundle/Address/address.import.html.twig', [
                'user' => $this->user,
                'firstDigit' => $firstDigit,
                'secondDigit' => $secondDigit
            ]
        );
    }

}
