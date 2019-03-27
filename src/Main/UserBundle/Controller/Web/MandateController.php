<?php

namespace Main\UserBundle\Controller\Web;

use AppBundle\Controller\BaseController;
use AppBundle\Entity\Document;
use AppBundle\Repository\DocumentRepository;
use AppBundle\Repository\DocumentTypeRepository;
use Knp\Snappy\Pdf;
use Main\InsuranceBundle\Helper\FileParserHelper;
use Main\InsuranceBundle\Repository\ContractRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class MandateController extends BaseController
{
    /**
     * @Method({"PUT"})
     * @Route("/manager/mandate/{id}/sign/save", name="mandate_sign_save")
     */
    public function signMandateSaveAction($id = null,
                                          Request $request,
                                          AuthorizationCheckerInterface $authorizationChecker,
                                          UserRepository $userRepository,
                                          DocumentTypeRepository $documentTypeRepository,
                                          UserAddressRepository $userAddressRepository,
                                          LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $data = null;

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        }
        $requestData = $data['sign'];
        $jsonResponse['data'] = [];
        //if ($requestData) {
        $rootDir = $this->get('kernel')->getRootDir(); // $request->server->get('DOCUMENT_ROOT');
        $projectDir = $this->get('kernel')->getProjectDir();

        //print_r($_SERVER);die;
        //$jsonResponse['data'] = $requestData;
        $jsonResponse['data'] = 'Hat geklappt';
        $jsonResponse['status'] = '200';
        $address = $userAddressRepository->findBy(
            [
                'user' => $this->user,
                'isMain' => 1
            ]
        );

        $userIdForPath = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $signUploadPath = '_uploads/manager/' . $userIdForPath . '/images';
        if (!is_dir('../' . $signUploadPath)) {
            mkdir('../_uploads/manager/' . $userIdForPath . '/images', 0777, true);
            mkdir('../_uploads/manager/' . $userIdForPath . '/documents', 0777, true);
            $logger->info('Structure loaded type: ', [
                    'mkdir-userId-images' => 'Success',
                    'mkdir-userId-documents' => 'Success'
                ]
            );
        }

        date_default_timezone_set('Europe/Berlin');
        $timestamp = date("Y-m-d_H-i-s");

        $data_uri = $requestData;
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);

        $fileNameSign = 'sign_' . $userIdForPath . '_' . $timestamp . '.png';
        file_put_contents('../' . $signUploadPath . '/' . $fileNameSign, $decoded_image);
        //$snappy = new Pdf($projectDir . "/public/libs/wkhtmltopdf/wkhtmltopdf");

        $env = $this->getEnvironment();
        if ($env != 'dev') {
            $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/usr/local/bin/wkhtmltopdf';
        } else {
            $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/wkhtmltopdf';
        }
        // /usr/www/users/yourne/test12/public/ind
        $snappy = new Pdf($pathToPdfGeneratingLibrary);
        //$snappy = new Pdf($projectDir . "/public/libs/wkhtmltopdf/bin/wkhtmltopdf");
        $html = $this->renderView('@MainUserBundle/Manager/reports/manager.mandate.tmpl.html.twig', [
            'userId' => $this->user->getId(),
            'user' => $this->user,
            'address' => $address,
            'date' => date("F j, Y, g:i a"),
            'agenturNr' => 'BP-211454',
            'path' => $projectDir . '/' . $signUploadPath,
            'pathToResponsible' => $projectDir . '/_uploads/manager/___/faksimile_bjarke_pahrmann.jpg',
            'fileNameSign' => $fileNameSign,
            'signDate' => date("d.m.Y (H:i:s)")
        ]);

        //$secretPath = $request->server->get('DOCUMENT_ROOT');
        $secretPath = '../_uploads/manager/' . $userIdForPath . '/documents';
        $fileNameMandate = 'mandate_' . $userIdForPath . '_' . $timestamp . '.pdf';

        $snappy->setTemporaryFolder('../_uploads/tmp');
        //file_put_contents($secretPath . '/mandate.pdf', $snappy->getOutputFromHtml("<h1>Maklermandat</h1>"));
        $snappy->generateFromHtml($html, $secretPath . '/' . $fileNameMandate, [], true);
        $snappy->removeTemporaryFiles();
        //}

        $document = new Document();
        $document->setDocumentType($documentTypeRepository->find(1));
        $document->setName($fileNameMandate);
        $document->setPublicName('Maklermandat');
        $document->setIsActive(1);
        $document->setUser($this->user);
        $em = $this->getDoctrine()->getManager();
        $em->persist($document);
        $em->flush();
        return $this->redirectToRoute('contract_new_mail', [
            'id' => $this->user->getId()
        ]);

        $jsonResponse['data'] = [];
        $jsonResponse['pathUserId'] = $userIdForPath;
        $jsonResponse['documentName'] = $fileNameMandate;
        return new JsonResponse($jsonResponse, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Method({"GET"})
     * @Route("/manager/mandate-sign/{type}/contract/{id}", name="manager_mandate_sign")
     */
    public function signMandateAction($id = null,
                                      $type = null,
                                      Request $request,
                                      AuthorizationCheckerInterface $authorizationChecker,
                                      UserRepository $userRepository,
                                      DocumentRepository $documentRepository,
                                      LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        if ($documentRepository->findOneBy(['user' => $this->user, 'documentType' => 1])) {
            return $this->redirectToRoute('contracts', [
                'id' => $this->user->getId()
            ]);
        }

        $structure = FileParserHelper::getJsonFromFile($this->get('kernel')->getRootDir() . '/../public/survey_data/' .
            $this->type, 'survey_mandate.json');
        $projectDir = $this->get('kernel')->getProjectDir();

        return $this->render('@MainUserBundle/Manager/mandate.sign.html.twig', [
                'resultUser' => $this->user,
                'user' => $this->user,
                'contractId' => $id,
                'type' => $this->type,
                'structure' => json_encode($structure),
                'projectDir' => $projectDir
            ]
        );
    }


    private function formatCurrency($value = null)
    {
        return number_format((float)$value, 2, '.', '');
    }

    /*
     * CALLED IN TAA
     */
    /**
     * @Method({"PUT", "GET"})
     * @Route("/manager/mandate/save/{type}/{tariffId}", name="manager_sign_mandate_save")
     * @Route("/manager/contract/{type}/sign/mandate/save", name="manager_contract_sign_mandate_save")
     */
    public function managerSignMandateSaveAction(String $type = null,
                                                 String $tariffId = null,
                                                 Request $request,
                                                 AuthorizationCheckerInterface $authorizationChecker,
                                                 UserRepository $userRepository,
                                                 TypeRepository $typeRepository,
                                                 DocumentTypeRepository $documentTypeRepository,
                                                 UserAddressRepository $userAddressRepository,
                                                 LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);

        $data = null;
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        }
        $requestData = $data['sign'];
        //if ($requestData) {
        $rootDir = $this->get('kernel')->getRootDir(); // $request->server->get('DOCUMENT_ROOT');
        $projectDir = $this->get('kernel')->getProjectDir();

        //print_r($_SERVER);die;
        //$jsonResponse['data'] = $requestData;
        $address = $userAddressRepository->findOneBy(
            [
                'user' => $this->user->getId(),
                'isMain' => 1
            ]);

        $userIdForPath = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $signUploadPath = '_uploads/manager/' . $userIdForPath . '/images';
        if (!is_dir('../' . $signUploadPath)) {
            mkdir('../_uploads/manager/' . $userIdForPath . '/images', 0777, true);
        }
        $customUploadPath = '_uploads/manager/' . $userIdForPath . '/documents/custom/misc';
        if (!is_dir('../' . $signUploadPath)) {
            mkdir($signUploadPath, 0777, true);
        }

        date_default_timezone_set('Europe/Berlin');
        $timestamp = date("Y-m-d_H-i-s");

        $data_uri = $requestData;
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);


        $fileNameSign = 'sign_' . $userIdForPath . '_' . $timestamp . '.png';
        $logger->info('STEP 4b: ', [
            'fileNameSign' => $fileNameSign
        ]);
        //$snappy = new Pdf($projectDir . "/public/libs/wkhtmltopdf/wkhtmltopdf");

        $env = $this->getEnvironment();
        if ($env != 'dev') {
            file_put_contents('../' . $signUploadPath . '/' . $fileNameSign, $decoded_image);
            $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/usr/local/bin/wkhtmltopdf';
        } else {
            $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/wkhtmltopdf';
        }
        // /usr/www/users/yourne/test12/public/ind
        $snappy = new Pdf($pathToPdfGeneratingLibrary);
        //$snappy = new Pdf($projectDir . "/public/libs/wkhtmltopdf/bin/wkhtmltopdf");
        $html = $this->renderView('@MainUserBundle/Manager/reports/manager.mandate.tmpl.html.twig', [
            'userId' => $this->user->getId(),
            'user' => $this->user,
            'address' => $address,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'date' => date("F j, Y, g:i a"),
            'path' => $projectDir . '/' . $signUploadPath,
            'pathToResponsible' => $projectDir . '/_uploads/manager/___/faksimile_bjarke_pahrmann.jpg',
            'fileNameSign' => $fileNameSign,
            'signDate' => date("d.m.Y (H:i:s)")
        ]);

        //$secretPath = $request->server->get('DOCUMENT_ROOT');
        $secretPath = '../' . $customUploadPath;
        $fileNameMandate = 'mandate_' . $userIdForPath . '_' . $timestamp . '.pdf';

        $snappy->setTemporaryFolder('../_uploads/tmp');
        //file_put_contents($secretPath . '/mandate.pdf', $snappy->getOutputFromHtml("<h1>Maklermandat</h1>"));
        $snappy->generateFromHtml($html, $secretPath . '/' . $fileNameMandate, [], true);
        $snappy->removeTemporaryFiles();
        //}

        $document = new Document();
        $document->setDocumentType($documentTypeRepository->find(1));
        $document->setName($fileNameMandate);
        $document->setPublicName('Maklermandat');
        $document->setFolder('mandate');
        $document->setIsActive(1);
        $document->setUser($this->user);
        $this->databaseAccessor->persist($document);
        $this->databaseAccessor->flush();
        /*
        $em = $this->getDoctrine()->getManager();
        $em->persist($document);
        $em->flush();
        */

        /*
        return $this->redirectToRoute('manager_show_result', [
            'type' => $typeIdentifier,
            'tariffId' => $tariffId,
        ]);
    */
        $jsonResponse['data'] = [];
        $jsonResponse['status'] = '200';
        $jsonResponse['pathUserId'] = $userIdForPath;
        $jsonResponse['documentName'] = $fileNameMandate;
        return new JsonResponse($jsonResponse, 200, ['Access-Control-Allow-Origin' => '*', 'Content-Type' => 'application/json']);
    }

    /**
     * @Method({"GET"})
     * @Route("/manager/sign/mandate/{type}/{tariffId}", name="manager_sign_mandate")
     * @Route("/manager/contract/{id}/sign/mandate/{type}", name="manager_contract_sign_mandate")
     */
    public function managerSignMandateAction($id = null,
                                             String $type = null,
                                             String $tariffId = null,
                                             Request $request,
                                             AuthorizationCheckerInterface $authorizationChecker,
                                             UserRepository $userRepository,
                                             TypeRepository $typeRepository,
                                             DocumentRepository $documentRepository,
                                             DocumentTypeRepository $documentTypeRepository,
                                             ContractRepository $contractRepository,
                                             LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_CHOOSE_PAYMENT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $this->setType($type, $typeRepository);
        $typeIdentifier = $this->type->getIdentifier();

        $tmpMandateDocumentType = $documentTypeRepository->findBy(
            [
                'ident' => 'mandate'
            ]
        );
        if (null != $tmpMandateDocumentType && $tmpMandateDocumentType[0]->getId() > 0) {
            $tmpMandate = $documentRepository->findOneBy(
                [
                    'user' => $this->user,
                    'documentType' => $tmpMandateDocumentType
                ]
            );

            if (null != $tmpMandate && $tmpMandate->getId() > 0) {
                return $this->redirectToRoute('manager_show_result', [
                    'type' => $typeIdentifier,
                    'tariffId' => $tariffId,
                ]);
            }
        }

        $structure = FileParserHelper::getJsonFromFile($this->get('kernel')->getRootDir() . '/../public/survey_data/' .
            $typeIdentifier, 'survey_mandate.json');

        $projectDir = $this->get('kernel')->getProjectDir();

        $redirectLink = null;
        $contract = null;
        if (null != $id & $id > 0) {
            $redirectLink = 'contract';
            //$contract = $contractRepository->find($id);
        }

        return $this->render('@MainUserBundle/Manager/sub/manager.decide.mandate.html.twig', [
                'resultUser' => $this->user,
                'type' => $typeIdentifier,
                'tariffId' => $tariffId,
                'user' => $this->user,
                'userId' => $this->user->getId(),
                'structure' => json_encode($structure),
                'projectDir' => $projectDir,
                'id' => $id,
                'redirectLink' => $redirectLink
            ]
        );
    }
}