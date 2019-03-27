<?php

namespace Main\InsuranceBundle\Controller\Test;

use AppBundle\Controller\BaseController;
use AppBundle\Entity\Media;
use AppBundle\Helper\ConstantHelper;
use AppBundle\Repository\MediaRepository;
use AppBundle\Repository\MediaTypeRepository;
use Knp\Snappy\Pdf;
use Main\InsuranceBundle\Entity\Damage;
use Main\InsuranceBundle\Entity\DamageMedia;
use Main\InsuranceBundle\Helper\Structure\DamageStructureHelper;
use Main\InsuranceBundle\Repository\DamageMediaRepository;
use Main\InsuranceBundle\Repository\DamageRepository;
use Main\InsuranceBundle\Repository\TypeRepository;
use Main\UserBundle\Entity\Usermedia;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\BankAccountRepository;
use Main\UserBundle\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Swift_Attachment;
use Swift_Mailer;
use Swift_SmtpTransport;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class TestDamageReportController extends BaseController
{

    public function logMapStructure($array, LoggerInterface $logger, int $level = 0)
    {
        $level++;
        foreach ($array as $k => $v) {
            $logger->info('*** LVL' . $level . ':', [
                'k' => $k,
                'v' => $v
            ]);
            //" . $v . "<br>";
            if (is_array($v)) {
                $this->logMapStructure($v, $logger, $level);
            }
        }
    }

    /**
     * @param array $attachments
     */
    private function sendDamageReportMail(Array $attachments, LoggerInterface $logger)
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
            foreach ($attachments as $attachment) {
                $message->attach(Swift_Attachment::fromPath($attachment));
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

    /**
     * @Route(
     * {"en": "/test/manager/damage/{type}/report/save",
     * "de": "/test/manager/damage/{type}/report/speichern"}, name="test_damage_type_report_save", methods={"PUT"}
     * )
     */
    public function damageReportDoUploadAction($type = null,
                                               Request $request,
                                               AuthorizationCheckerInterface $authorizationChecker,
                                               UserRepository $userRepository,
                                               TypeRepository $typeRepository,
                                               DamageRepository $damageRepository,
                                               MediaRepository $mediaRepository,
                                               DamageMediaRepository $damageMediaRepository,
                                               MediaTypeRepository $mediaTypeRepository,
                                               AddressRepository $addressRepository,
                                               BankAccountRepository $bankAccountRepository,
                                               LoggerInterface $logger
    )
    {

        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_CHOOSE_SURVEY', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);

        $data = null;
        $requestData = null;
        $countMedia = 0;
        $fileNameDamageReport = null;
        $mediaObjectPaths = [];

        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
        } else {
            $data = '
			 {"imageUpload":[{"tags":"Aufnahme vom Ort","description":"Das ist Aufnahme 1","imageFile":[{"pos":{"start":2123,"end":4587},"name":"AlbumArt_{CD480C1B-E8B6-48C7-A2D0-C168839239CC}_Small - Kopie.jpg","type":"image/jpeg","content":"data:image/jpeg;base64,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"}]},{"tags":"Aufnahme vom Ort","description":"Das ist Aufnahme 1","imageFile":[{"pos":{"start":2123,"end":4587},"name":"AlbumArt_{CD480C1B-E8B6-48C7-A2D0-C168839239CC}_Small - Kopie.jpg","type":"image/jpeg","content":"data:image/jpeg;base64,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"}]}],"dateOfDamage":"1980-02-05","damageLocation":"Hamburg","zipOfCause":"21075","streetAndStreetNoOfCause":"Schadensort-Straße 55","personOfCause":"Schadensperson Alex","personOfCauseZip":"40568","personOfCauseCity":"Schadensort-Person","personOfCauseStreetAndStreetNo":"Schadensort-Person-Straße 45","damageDescription":"Das ist hier passiert.\n\nHallo, Hallo !?","damageContactNumber":"Meine Telefonnummer"}
			';
        }

        $logger->info('STEP 1: ', [
            'type' => $this->type->getIdentifier(),
            'userId' => $this->user->getId()
        ]);

        $sHelper = new DamageStructureHelper($userRepository, $damageRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setType($type, $typeRepository);
        $sHelper->setUser($this->user);
        $sHelper->parseCustomStructure($data);
        $requestData = $sHelper->getStructureAsArray();
        $this->logMapStructure($requestData, $logger);
        //die;
        $newDamage = new Damage();
        $newDamage->setUser($this->user);
        $newDamage->setType($this->type);
        $newDamage->setSubType($this->type->getIdentifier());
        $newDamage->setDescription('no description');
        $newDamage->setJson(json_encode($requestData));
        $newDamage->setDocumentName('---');
        $newDamage->setCountMedia($countMedia);
        $this->databaseAccessor->persist($newDamage);
        $this->databaseAccessor->flush();
        $newDamageId = $newDamage->getId();
        //print_r($newDamage->get());

        $damageObjectId = (array)$damageRepository->find($newDamageId)->getId();
        $logger->info('STEP 2 :', [
            'damageObjectId' => $damageObjectId
        ]);

        $jsonResponse['data'] = [];
        if (false !== $sHelper->hasErrors()) {
            $logger->info('STEP 3a :', [
                'errors' => 'Sorry, errors in da house!'
            ]);
            $this->logMapStructure($sHelper->getErrors(), $logger);
        } else {
            if ($requestData && !empty($requestData)) {
                $jsonResponse['status'] = '200';

                $rootDir = $this->get('kernel')->getRootDir(); // $request->server->get('DOCUMENT_ROOT');
                $projectDir = $this->get('kernel')->getProjectDir();

                $logger->info('STEP 3b: ', [
                    'rootDir' => $rootDir
                ]);

                //print_r($rootDir);
                $pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);
                $imageUploadPath = '_uploads/manager/' . $pathUserId . '/images';
                if (!is_dir('../' . $imageUploadPath)) {
                    /*
                    if (!is_dir('../_uploads/manager/' . $pathUserId . '/damage')) {
                        mkdir('../_uploads/manager/' . $pathUserId . '/damage', 0777, true);
                    }
                    */
                    mkdir('../_uploads/manager/' . $pathUserId . '/images', 0777, true);
                }
                date_default_timezone_set('Europe/Berlin');
                $timestamp = date("Ymd_His");

                $logger->info('STEP 4a: ', [
                    'pathUserId' => $pathUserId,
                    'imageUploadPath' => $imageUploadPath
                ]);

                $mediaObjectPaths = [];
                if (isset($requestData['structure']['imageUpload'])) {

                    $logger->info('STEP 4b: ', [
                        'INIT MEDIA' => true
                    ]);

                    foreach ($requestData['structure']['imageUpload'] as $index => $image) {
                        if (isset($image)) {
                            $imageContent = (isset($image['content']))
                                ? $image['name'] : '---';
                            if (isset($imageContent) && '' != $imageContent) {
                                $imageType = (isset($image['imageFile'][0]['type']))
                                    ? $image['imageFile'][0]['type'] : '---';
                                $imageName = (isset($image['imageFile'][0]['name']))
                                    ? $image['imageFile'][0]['name'] : '---';
                                $imageDescription = (isset($image['description']))
                                    ? $image['description'] : '---';
                                $imageContent = (isset($image['imageFile'][0]['content']))
                                    ? $image['imageFile'][0]['content'] : '---';
                                $imageTags = (isset($image['tags']))
                                    ? $image['tags'] : 'empty';

                                //$tmpImageName = md5($imageName);
                                $encodedImage = explode(",", $imageContent)[1];
                                $decodedImage = base64_decode($encodedImage);
                                $newFileName = 'damage_' . $pathUserId . '_' . $timestamp . '_' . $imageName;

                                if ('dev' != $this->getEnvironment()) {
                                    file_put_contents('../' . $imageUploadPath . '/' . $newFileName, $decodedImage);
                                    $mediaObjectPaths[] = '../' . $imageUploadPath . '/' . $newFileName;
                                }

                                $newMedia = new Media();
                                $newMedia->setMediaType($mediaTypeRepository->findBy(['ident' => 'image'])[0]);
                                $newMedia->setType($imageType);
                                $newMedia->setName($newFileName);
                                $newMedia->setDescription($imageDescription);
                                $newMedia->setImage($imageName);
                                $newMedia->setTags($imageTags);
                                $newMedia->setIsActive(1);
                                $newMedia->setIsBlocked(0);
                                $newMedia->setIsPublished(1);
                                $this->databaseAccessor->persist($newMedia);
                                $this->databaseAccessor->flush();

                                $newMediaId = $newMedia->getId();
                                $mediaObjectId = (array)$mediaRepository->find($newMediaId)->getId();

                                $logger->info('STEP 4c - ' . $countMedia . ': ', [
                                    'imageName' => $imageName,
                                    'imageType' => $imageType,
                                    'imageDescription' => $imageDescription,
                                    'imageTags' => $imageTags,
                                    'mediaObjectId' => $mediaObjectId,
                                    'IMAGE' => $image['imageFile'][0]
                                ]);

                                $newUserMedia = new UserMedia();
                                $newUserMedia->setUser($this->user);
                                $newUserMedia->setMedia($newMedia);
                                $newUserMedia->setReference('damage');
                                $this->databaseAccessor->persist($newUserMedia);
                                $this->databaseAccessor->flush();

                                $newDamageMedia = new DamageMedia();
                                $newDamageMedia->setDamage($newDamage);
                                $newDamageMedia->setMedia($newMedia);
                                $newDamageMedia->setReference('damage');
                                $this->databaseAccessor->persist($newDamageMedia);
                                $this->databaseAccessor->flush();

                                $countMedia++;
                            }
                        }
                    }
                }

                if ($this->environment != 'dev') {
                    $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/usr/local/bin/wkhtmltopdf';
                } else {
                    $pathToPdfGeneratingLibrary = $projectDir . '/public/wkhtmltopdf/wkhtmltopdf';
                }

                $logger->info('STEP ' . (5 + $countMedia) . ' : ', [
                    'pathToPdfGeneratingLibrary' => $pathToPdfGeneratingLibrary
                ]);

                $address = $addressRepository->findByUserId($this->user->getId());
                $bankAccount = $bankAccountRepository->findByUserId($this->user->getId());

                if (null != $this->user->getGender()) {
                    $gender = $this->user->getGender();
                    if (1 == $gender) {
                        $salutation = 'Herr';
                    } elseif (2 == $gender) {
                        $salutation = 'Frau';
                    } elseif (3 == $gender) {
                        $salutation = 'Divers';
                    }
                }

                $urlBuilderClassName = 'Main\\InsuranceBundle\\Helper\\Damage\\' . ucfirst($this->type->getIdentifier() . 'DamageReportHelper');
                $requestParser = (new $urlBuilderClassName($userRepository, $this->getDoctrine()->getManager(), $logger));
                $requestParser->setUser($this->user);
                $requestParser->setType($this->type->getIdentifier(), $typeRepository);
                $requestParser->parseParams($requestData['structure']);
                $requestParams = $requestParser->getParsedParameters();

                $snappy = new Pdf($pathToPdfGeneratingLibrary);
                //'date' => date("F j, Y"),
                //'dateTime' => date("F j, Y, g:i a"),
                $html = $this->renderView('@MainUserBundle/Manager/reports/manager.' . $this->type->getIdentifier() . '.damage-report.tmpl.html.twig', [
                    'userId' => $this->user->getId(),
                    'user' => $this->user,
                    'salutation' => $salutation,
                    'address' => $address,
                    'bankAccount' => $bankAccount,
                    'dateTime' => date("d.m.Y (H:i:s)"),
                    'date' => date("d.m.Y"),
                    'agencyNumber' => 'TestNr - BP-211454',
                    'countMedia' => $countMedia,
                    'requestData' => $requestParams,
                    'company' => ['name' => 'TESTGESELLSCHAFT'],
                    'pathToResponsible' => $projectDir . '/_uploads/manager/___/faksimile_bjarke_pahrmann.jpg',
                    'signDate' => date("d.m.Y (H:i:s)"),
                    'mandateDate' => date("d.m.Y (H:i:s)")
                ]);

                $secretPath = '../_uploads/manager/' . $pathUserId . '/documents';
                $fileNameDamageReport = 'damage_' . $this->type->getIdentifier() . '_' . $pathUserId . '_' . $timestamp . '.pdf';
                $snappy->setTemporaryFolder('../_uploads/tmp');
                $snappy->generateFromHtml($html, $secretPath . '/' . $fileNameDamageReport, [], true);
                $snappy->removeTemporaryFiles();

                $mediaObjectPaths[] = $secretPath . '/' . $fileNameDamageReport;

                $logger->info('STEP ' . (6 + $countMedia) . ' : ', [
                    'file exists: ' => file_exists($secretPath . '/' . $fileNameDamageReport)
                ]);
            }
        }

        $this->sendDamageReportMail($mediaObjectPaths, $logger);

        $currentDamageObject = $damageRepository->find($newDamageId);
        $currentDamageObject->setDocumentName($fileNameDamageReport);
        $currentDamageObject->setCountMedia($countMedia);
        $this->databaseAccessor->persist($currentDamageObject);
        $this->databaseAccessor->flush();

        return new JsonResponse($jsonResponse, 200, array('Access - Control - Allow - Origin' => ' * ', 'Content - Type' => 'application / json'));
    }

    /**
     * @Route("/test/manager/damage/{type}/report", name="test_damage_type_report", methods={"GET"})
     */
    public function damageDecisionSurveyAction(String $type = null,
                                               Request $request,
                                               AuthorizationCheckerInterface $authorizationChecker,
                                               UserRepository $userRepository,
                                               DamageRepository $damageRepository,
                                               TypeRepository $typeRepository,
                                               LoggerInterface $logger
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $this->setType($type, $typeRepository);
        $sHelper = new DamageStructureHelper($userRepository, $damageRepository, $this->getDoctrine()->getManager(), $logger);
        $sHelper->setUser($this->user);
        $sHelper->setType($type, $typeRepository);
        $sHelper->setRootDir($this->get('kernel')->getRootDir());
        $sHelper->setFileDirName('../public/damage_report/test');
        $sHelper->setFileNamePraefix('test_damage_survey_');
        $structure = $sHelper->loadStructureJsonFileByType();

        return $this->render('@MainInsuranceBundle/DamageReport/test/test.damage.type.survey.html.twig', [
                'user' => $this->user,
                'type' => $this->type->getIdentifier(),
                'structure' => json_encode($structure)
            ]
        );
    }

    /**
     * @Route("/test/manager/damage/decision", name="test_damage_type_decision", methods={"GET"})
     */
    public function damageDecisionAction(Request $request,
                                         AuthorizationCheckerInterface $authorizationChecker,
                                         UserRepository $userRepository,
                                         DamageRepository $damageRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }
        $damages = $damageRepository->findBy(['user' => $this->user]);
        $assetPath = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);

        return $this->render('@MainInsuranceBundle/DamageReport/test/test.damage.decide.html.twig', [
                'user' => $this->user,
                'assetPath' => $assetPath,
                'damages' => $damages
            ]
        );
    }


    /**
     * @Route("/test/manager/damages", name="test_show_damages", methods={"GET"}, requirements={"id" = "\d+"}, defaults={"id" = 0})
     */
    public function damagesAction(Request $request,
                                  AuthorizationCheckerInterface $authorizationChecker,
                                  UserRepository $userRepository,
                                  DamageRepository $damageRepository
    )
    {
        $this->initialize();
        if (!$this->allowedToUse('CAN_VIEW_PROFILE', $request, $userRepository, $authorizationChecker)) {
            return $this->getCredentialRedirectUrl();
        }

        $damages = $damageRepository->findBy(['user' => $this->user]);
        $assetPath = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);

        return $this->render('@MainInsuranceBundle/DamageReport/damages.html.twig', [
                'user' => $this->user,
                'assetPath' => $assetPath,
                'damageList' => $damages
            ]
        );
    }
}
