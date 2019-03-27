<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Document;
use AppBundle\Helper\ConstantHelper;
use AppBundle\Helper\DocumentHelper;
use AppBundle\Helper\DocumentStructureHelper;
use AppBundle\Repository\DocumentRepository;
use AppBundle\Repository\DocumentTypeRepository;
use AppBundle\Repository\MediaRepository;
use AppBundle\Repository\MediaTypeRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Main\InsuranceBundle\Helper\Structure\DamageStructureHelper;
use Main\InsuranceBundle\Repository\DamageDocumentRepository;
use Main\InsuranceBundle\Repository\DamageMediaRepository;
use Main\InsuranceBundle\Repository\DamageRepository;
use Main\InsuranceBundle\Repository\TargetGroupRepository;
use Main\InsuranceBundle\Repository\TariffRateRepository;
use Main\InsuranceBundle\Repository\TariffRepository;
use Main\InsuranceBundle\Repository\TariffTypeRepository;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\TitleRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Swift_Attachment;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class DocumentController extends BaseController
{
    
    /**
     * @Route("/manager/document/upload/save", name="document_upload_save", methods={"PUT"})
     */
    public function documentUploadSaveAction(Request $request,
                                             AuthorizationCheckerInterface $authorizationChecker,
                                             UserRepository $userRepository,
                                             DamageRepository $damageRepository,
                                             DamageMediaRepository $damageMediaRepository,
                                             DocumentRepository $documentRepository,
                                             DocumentTypeRepository $documentTypeRepository,
                                             MediaRepository $mediaRepository,
                                             MediaTypeRepository $mediaTypeRepository,
                                             LoggerInterface $logger
    )
    {
        
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        
        $data = null;
        $requestData = null;
        $countMedia = 0;
        $fileNameDamageReport = null;
        
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        } else {
            $data = '
			 {"imageUpload":[{"tags":"Aufnahme vom Ort","description":"Das ist Aufnahme 1","imageFile":[{"pos":{"start":2123,"end":4587},"name":"AlbumArt_{CD480C1B-E8B6-48C7-A2D0-C168839239CC}_Small - Kopie.jpg","type":"image/jpeg","content":"data:image/jpeg;base64,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"}]},{"tags":"Aufnahme vom Ort","description":"Das ist Aufnahme 1","imageFile":[{"pos":{"start":2123,"end":4587},"name":"AlbumArt_{CD480C1B-E8B6-48C7-A2D0-C168839239CC}_Small - Kopie.jpg","type":"image/jpeg","content":"data:image/jpeg;base64,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"}]}],"dateOfDamage":"1980-02-05","damageLocation":"Hamburg","zipOfCause":"21075","streetAndStreetNoOfCause":"Schadensort-Stra�e 55","personOfCause":"Schadensperson Alex","personOfCauseZip":"40568","personOfCauseCity":"Schadensort-Person","personOfCauseStreetAndStreetNo":"Schadensort-Person-Stra�e 45","damageDescription":"Das ist hier passiert.\n\nHallo, Hallo !?","damageContactNumber":"Meine Telefonnummer"}
			';
        }
        
        $logger->info('STEP 1: ', [
            'userId' => $this->user->getId()
        ]);
        
        $sHelper = new DamageStructureHelper($userRepository, $damageRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->parseCustomStructure($data);
        $requestData = $sHelper->getStructureAsArray();
        
        /*
        $newDocument = new Document();
        $newDocument->setUser($this->user);
        $newDocument->setDocumentType($documentType);
        $newDocument->setNote('no description');
        $newDocument->setName('Doc name');
        $newDocument->setPublicName('Doc public name');
        $this->databaseAccessor->persist($newDocument);
        $this->databaseAccessor->flush();
        $newDocumentId = $newDocument->getId();
        */
        $jsonResponse['data'] = [];
        if ($requestData && !empty($requestData)) {
            $logger->info('STEP 1: ', [
                'requestData' => $requestData
            ]);
            $jsonResponse['status'] = '200';
            $rootDir = $this->get('kernel')->getRootDir(); // $request->server->get('DOCUMENT_ROOT');
            $projectDir = $this->get('kernel')->getProjectDir();
            
            $logger->info('STEP 3b: ', [
                'rootDir' => $rootDir
            ]);
            
            $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
            $imageUploadPath = '_uploads/manager/' . $pathUserId . '/documents/custom';
            if (!is_dir('../' . $imageUploadPath)) {
                /*
                if (!is_dir('../_uploads/manager/' . $pathUserId . '/damage')) {
                    mkdir('../_uploads/manager/' . $pathUserId . '/damage', 0777, true);
                }
                */
                mkdir('../_uploads/manager/' . $pathUserId . '/documents', 0777, true);
                mkdir('../_uploads/manager/' . $pathUserId . '/documents/custom', 0777, true);
            }
            date_default_timezone_set('Europe/Berlin');
            $timestamp = date("Ymd_His");
            
            $logger->info('STEP 4a: ', [
                'pathUserId' => $pathUserId,
                'imageUploadPath' => $imageUploadPath
            ]);
            
            if (isset($requestData['structure']['imageUpload'])) {
                $logger->info('STEP 4b: ', [
                    'INIT MEDIA' => true
                ]);
                
                $documentHelper = new DocumentHelper($userRepository, $documentRepository, $documentTypeRepository, $this->getDoctrine()->getManager(), $logger);
                $documentHelper->setDocumentTypeRepository($documentTypeRepository);
                $documentHelper->setUser($this->user);
                $documentHelper->setEnvironment($this->environment);
                //$documentHelper->setDocumentReference($newDocumentId);
                $documentHelper->setDocumentList($requestData['structure']['imageUpload']);
                $documentHelper->parseDocumentData();
                $logger = $documentHelper->getLogger();
                
                if ($this->environment != 'dev') {
                    $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/usr/local/bin/wkhtmltopdf';
                } else {
                    $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/wkhtmltopdf';
                }
                
                $logger->info('STEP ' . (5 + $countMedia) . ' : ', [
                    'pathToPdfGeneratingLibrary' => $pathToPdfGeneratingLibrary
                ]);
                
            }
        }
        return new JsonResponse($jsonResponse, 200, array('Access - Control - Allow - Origin' => ' * ', 'Content - Type' => 'application / json'));
    }
    
    
    /**
     * @Route("/manager/document/upload", name="manager_document_upload", methods={"GET"})
     */
    public function documentUploadAction(Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         DocumentRepository $documentRepository,
                                         LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_DO_UPLOAD_DOCUMENT', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        
        $dsHelper = new DocumentStructureHelper($userRepository, $documentRepository, $this->getDoctrine()->getManager(), $logger);
        $dsHelper->setUser($this->user);
        $dsHelper->setRootDir($this->get('kernel')->getRootDir());
        $dsHelper->setFileDirName('../public/documents/upload');
        $dsHelper->setFileName('document_survey_upload');
        $structure = $dsHelper->loadStructureJsonFileByFileName();
        //print_r($structure);
        $logger->info('STEP MAIL:', [
            'email send to Andre: ' => 'andre.rust@intertects.com'
        ]);
        /*
        */
        return $this->render('@AppBundle/document/document.upload.html.twig', [
                'user' => $this->user,
                'structure' => $structure,
                'type' => 'pli'
            ]
        );
    }
    
    private function sendDocumentByMail(Array $attachments, LoggerInterface $logger)
    {
        if (true == ConstantHelper::getMailGeneral()['sendMail']) {
            $smtpHostIp = gethostbyname(ConstantHelper::getMailCustomerGeneral()['host']);
            $transport = (new Swift_SmtpTransport($smtpHostIp, ConstantHelper::getMailCustomerGeneral()['port'], null))
                ->setUsername(ConstantHelper::getMailCustomerGeneral()['user'])
                ->setPassword(ConstantHelper::getMailCustomerGeneral()['pass']);
            $mailer = new Swift_Mailer($transport);
            //->setTo(['mail-test@yourneeds.de'])
            $message = (new \Swift_Message('YOURneeds Versicherungsmakler GmbH - Schadensmeldung'))
                ->setFrom(
                    [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                ->setTo([$this->user->getEmail()])
                ->setCc([ConstantHelper::getMailCompanyGeneral()['mail']])
                ->setBcc(['andre.rust@intertects.com'])
                ->setBody(
                    'Guten Tag,
					<br><br>
					dies ist eine Schadensmeldung eines unserer Kunden. In der Anlage befindet sich das PDF mit der Beschreibung der Meldung und ggf weitere Medien.
					<br>
					Herzlichen Dank!
					<br><br>
					Ihr YOURneeds-Team'
                    , 'text/html'
                );
            if (!empty($attachments) && count($attachments) > 0) {
                foreach ($attachments as $attachment) {
                    $message->attach(Swift_Attachment::fromPath($attachment));
                }
            }
            $mailer->send($message);
            $logger->info('STEP MAIL:', [
                'email send to company: ' => $this->user->getEmail()
            ]);
            
            
            $message = (new \Swift_Message('YOURneeds Versicherungsmakler GmbH - Schadensmeldung'))
                ->setFrom(
                    [ConstantHelper::getMailCompanyGeneral()['mail'] => ConstantHelper::getMailCompanyGeneral()['sender']])
                ->setTo(['andre.rust@intertects.com'])
                ->setBody(
                    'Hallo Andre,
					<br><br>
					dies ist eine Schadensmeldung eines unserer Kunden. In der Anlage befindet sich das PDF mit der Beschreibung der Meldung und ggf weitere Medien.
					<br>
					Herzlichen Dank!
					<br><br>
					Ihr YOURneeds-Team'
                    , 'text/html'
                );
            foreach ($attachments as $attachment) {
                $message->attach(Swift_Attachment::fromPath($attachment));
            }
            $mailer->send($message);
            $logger->info('STEP MAIL:', [
                'email send to Andre: ' => 'andre.rust@intertects.com'
            ]);
        }
    }
    
    /*
     * GENERAL PDF send action
     *
     */
    /**
     * @Route("/document/{id}/send", name="document_send", methods={"GET"})
     */
    public function damageResultPdfSendAction($id = null,
                                              Request $request,
                                              AuthorizationCheckerInterface $authorizationChecker,
                                              UserRepository $userRepository,
                                              DocumentRepository $documentRepository,
                                              DamageRepository $damageRepository,
                                              DamageMediaRepository $damageMediaRepository,
                                              DamageDocumentRepository $damageDocumentRepository,
                                              LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $document = $documentRepository->find($id);
        
        $tmpType = $document->getDocumentType();
        $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $tmpTypeFolder = (null != $tmpType && null != $tmpType->getFolder()) ? $tmpType->getFolder() : null;
       
        $secretPathDocuments = '../_uploads/manager/' . $pathUserId . '/documents/custom/' . $tmpTypeFolder;
        $secretPathImages = '../_uploads/manager/' . $pathUserId . '/documents/custom/damage/images';
        
        $mediaObjectPaths = [];
        $mediaObjectPaths[] = $secretPathDocuments . '/' . $document->getName();
        
        $tmpDamageDocument = $damageDocumentRepository->findOneBy(
            [
                'document' => $document
            ],
            [
                'updatedAt' => 'DESC'
            ]
        );
        
        $tmpMedias = null;
        if (null != $tmpDamageDocument && null != $tmpDamageDocument->getDamage()->getId()) {
            $tmpDamage = $damageRepository->find($tmpDamageDocument->getDamage()->getId());
            $tmpMedias = $damageMediaRepository->findBy(
                [
                    'damage' => $tmpDamage
                ],
                [
                    'updatedAt' => 'DESC'
                ]
            );
        }
        
        if (null != $tmpMedias) {
            foreach ($tmpMedias as $tmpMedia) {
                if (file_exists($secretPathImages . '/' . $tmpMedia->getMedia()->getName())) {
                    $mediaObjectPaths[] = $secretPathImages . '/' . $tmpMedia->getMedia()->getName();
                }
            }
        }
        
        $this->sendDocumentByMail($mediaObjectPaths, $logger);
        return $this->redirectToRoute('contracts', []);
    }
    
    
    /**
     * @Route("/document/{id}/download", name="document_download")
     */
    public function damageResultPdfDownloadAction($id = null,
                                                  Request $request,
                                                  AuthorizationCheckerInterface $authorizationChecker,
                                                  UserRepository $userRepository,
                                                  DocumentRepository $documentRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $document = $documentRepository->find($id);
        
        $tmpType = $document->getDocumentType();
        $tmpTypeFolder = (null != $tmpType && null != $tmpType->getFolder()) ? $tmpType->getFolder() : null;
        $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
        $secretPath = '../_uploads/manager/' . $pathUserId . '/documents/custom/' . $tmpTypeFolder;
        
        // This should return the file to the browser as response
        $response = new BinaryFileResponse($secretPath . '/' . $document->getName());
        
        // To generate a file download, you need the mimetype of the file
        $mimeTypeGuesser = new FileinfoMimeTypeGuesser();
        // Set the mimetype with the guesser or manually
        if ($mimeTypeGuesser->isSupported()) {
            // Guess the mimetype of the file according to the extension of the file
            $response->headers->set('Content-Type', $mimeTypeGuesser->guess($secretPath . '/' . $document->getName()));
        } else {
            // Set the mimetype of the file manually, in this case for a text file is text/plain
            $response->headers->set('Content-Type', 'text/plain');
        }
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $document->getName()
        );
        /*manager_damage_report_send
         * return $this->file($secretPath);
         */
        return $response;
        //return $this->redirectToRoute('contracts', []);
    }
    
    /**
     * @Route("/manager/{pathId}/document/download/{documentName}", name="manager_document_download")
     */
    public function managerDocumentDownloadAction($pathId = null,
                                                  $documentName = null)
    {
        
        $projectDir = $this->get('kernel')->getProjectDir();
        $pathUserId = $pathId;
        $fileName = $documentName;
        $secretPath = $projectDir . '/_uploads/manager/' . $pathUserId . '/documents/' . $fileName;
        return $this->file($secretPath);
    }
    
    /**
     * @Route("/manager/{id}/damage/type/{type}/download", name="manager_type_damage_report_download")
     */
    public function damageResultPdfAction($id = null,
                                          $type = null,
                                          UserRepository $userRepository,
                                          TitleRepository $titleRepository,
                                          AddressRepository $addressRepository
    )
    {
        $address = null;
        $userTitle = null;
        $resultUser = $userRepository->getUser($id);
        
        if ($resultUser) {
            $address = $addressRepository->findByUserId($id);
            if (!$resultUser['userTitleId'] == null) {
                $userTitle = $titleRepository->findById($resultUser['userTitleId']);
            }
        }
        $snappy = new Pdf($this->get('kernel')->getRootDir() . "\\wkhtmltopdf\\wkhtmltopdf.exe");
        $html = $this->renderView('@MainInsuranceBundle/Damage/reports/damage.type.pli.tmpl.html.twig', [
            'resultUser' => $resultUser,
            'userTitle' => $userTitle,
            'address' => $address,
            'userId' => $resultUser['id'],
            'date' => date("F j, Y, g:i a"),
            'agenturNr' => 'BP-211454'
        
        ]);
        
        return new PdfResponse(
            $snappy->getOutputFromHtml($html),
            'yourneeds_schadensmeldung.pdf'
        );
    }
    
    /**
     * @Route("/admin/decision/{id}/result/pdf/mandate", name="admin_decision_result_pdf_mandate")
     */
    public function pdfResultMandateAction($id = null, Request $request)
    {
        //print_r($this->get('kernel')->getRootDir());
        $snappy = new Pdf($this->get('kernel')->getRootDir() . "\\wkhtmltopdf\\wkhtmltopdf.exe");
        return new PdfResponse(
            $snappy->getOutputFromHtml("<h1>Maklermandat</h1>"),
            'yourneeds_mandat.pdf'
        );
    }
    
    /**
     * @Route("/admin/decision/{id}/result/pdf/a", name="admin_decision_result_pdf_a")
     */
    public function pdfResultPdfAAction($id = null,
                                        TariffRepository $tariffRepository,
                                        TargetGroupRepository $targetGroupRepository,
                                        TariffRateRepository $tariffRateRepository,
                                        TariffTypeRepository $tariffTypeRepository)
    {
        $tariff = $tariffRepository->findTariff($id);
        $tariffType = $tariffTypeRepository->findTypeById($tariff['typeId']);
        $targetGroups = $targetGroupRepository->findTargetGroupsByTariffId($tariff['id']);
        //$this->OUT($targetGroups, true);
        
        $tariffRates = $tariffRateRepository->findRatesByTariffId($tariff['id']);
        $snappy = new Pdf($this->get('kernel')->getRootDir() . "\\wkhtmltopdf\\wkhtmltopdf.exe");
        
        $html = $this->renderView('@MainInsuranceBundle/Admin/tariff/tariff.html.twig', [
            'tariff' => $tariff,
            'tariffType' => $tariffType,
            'tariffRates' => $tariffRates,
            'targetGroups' => $targetGroups
        ]);
        
        return new PdfResponse(
            $snappy->getOutputFromHtml($html),
            'yourneeds_angebot.pdf'
        );
    }
}