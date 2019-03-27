<?php

namespace AppBundle\Helper;

use AppBundle\Entity\Document;
use AppBundle\Repository\DocumentRepository;
use AppBundle\Repository\DocumentTypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Repository\UserRepository;

class DocumentHelper extends AbstractARCustomHelper
{
    private $documentRepository = null;
    private $documentTypeRepository = null;
    private $documentReference = null;
    private $documentPathList = [];
    private $requestDocumentList = [];
    private $pathUserId = null;
    private $imageUploadPathPraefix = '_uploads/manager/';

    public function __construct(
        UserRepository $userRepository = null,
        DocumentRepository $documentRepository = null,
        DocumentTypeRepository $documentTypeRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->documentRepository = $documentRepository;
        $this->documentTypeRepository = $documentTypeRepository;
    }

    public function parseDocumentData()
    {
        foreach ($this->requestDocumentList as $index => $tmpDocument) {
            $imageContent = (isset($tmpDocument['content']))
                ? $tmpDocument['name'] : '---';
            //die;
            if (isset($imageContent) && '' != $imageContent) {
                $imageType = (isset($tmpDocument['imageFile'][0]['type']))
                    ? $tmpDocument['imageFile'][0]['type'] : '---';
                $imageName = (isset($tmpDocument['imageFile'][0]['name']))
                    ? $tmpDocument['imageFile'][0]['name'] : '---';
                $imageDescription = (isset($tmpDocument['description']))
                    ? $tmpDocument['description'] : '---';
                $imageContent = (isset($tmpDocument['imageFile'][0]['content']))
                    ? $tmpDocument['imageFile'][0]['content'] : '---';
                $imageTags = (isset($tmpDocument['tags']))
                    ? $tmpDocument['tags'] : 'misc';

                $this->logger->info('STEP 4bbb: ', [
                    'imageType' => $imageType,
                    'imageName' => $imageName,
                    'imageDescription' => $imageDescription,
                    'imageTags' => $imageTags,
                    'imageContent' => $imageContent
                ]);

                //$tmpImageName = md5($imageName);
                $encodedImage = explode(",", $imageContent)[1];
                $decodedImage = base64_decode($encodedImage);
                $newFileName = 'yn_' . date("Ymd_His") . '_' . $imageName;

                $tmpType = $this->documentTypeRepository->findOneBy(
                    [
                        'ident' => $imageTags
                    ]
                );

                $tmpTypeFolder = (null != $tmpType
                    && null != $tmpType->getFolder()
                    && !empty($tmpType->getFolder()))
                    ? $tmpType->getFolder() : 'misc';

                $tmpTypeName = (null != $tmpType
                    && null != $tmpType->getName()
                    && !empty($tmpType->getName()))
                    ? $tmpType->getName() . ': ' : '';
                $timestamp = date("Ymd_His");
                $tmpPath = '../' . $this->imageUploadPathPraefix . $this->pathUserId . '/documents/custom/'
                    . $tmpTypeFolder;
                if (!is_dir($tmpPath)) {
                    mkdir($tmpPath, 0777, true);
                }

                //if ('dev' != $this->environment) {
                $fileObject = $tmpPath . '/' . $newFileName;
                file_put_contents($fileObject, $decodedImage);
                //}

                $documentType = $this->documentTypeRepository->findOneBy(
                    [
                    'ident' => $imageTags
                ]
                );

                $newDocument = new Document();
                $newDocument->setUser($this->user);
                $newDocument->setDocumentType($documentType);
                $newDocument->setNote($imageDescription);
                $newDocument->setName($newFileName);
                $newDocument->setPublicName($tmpTypeName . ': ' . $imageName);
                $newDocument->setFolder($tmpTypeFolder);
                $this->databaseAccessor->persist($newDocument);
                $this->databaseAccessor->flush();
                $newDocumentId = $newDocument->getId();

                /*
                $newMedia = new Media();
                $newMedia->setMediaType($this->mediaTypeRepository->findBy(['ident' => 'image'])[0]);
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
                $mediaObjectId = (array)$this->mediaRepository->find($newMediaId)->getId();
                
                $this->logger->info('STEP 4c - ' . $this->mediaCounter . ': ', [
                    'imageName' => $imageName,
                    'imageType' => $imageType,
                    'imageDescription' => $imageDescription,
                    'imageTags' => $imageTags,
                    'mediaObjectId' => $mediaObjectId,
                    'IMAGE' => $tmpDocument['imageFile'][0]
                ]);
                
                $newUserMedia = new UserMedia();
                $newUserMedia->setUser($this->user);
                $newUserMedia->setMedia($newMedia);
                $newUserMedia->setReference('damage');
                $this->databaseAccessor->persist($newUserMedia);
                $this->databaseAccessor->flush();
                
                $newDamageMedia = new DamageMedia();
                $newDamageMedia->setDamage($this->damageReference);
                $newDamageMedia->setMedia($newMedia);
                $newDamageMedia->setReference('damage');
                $this->databaseAccessor->persist($newDamageMedia);
                $this->databaseAccessor->flush();
                
                $this->addMediaCounter();
                */
            }
        }
    }

    public function setUser(User $user = null)
    {
        parent::setUser($user);
        $this->pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);

    }

    private function addMediaObjectPath(String $documentPath)
    {
        $this->documentPathList [] = $documentPath;
    }

    public function getMediaObjectPathList()
    {
        return $this->documentPathList;
    }

    public function setDocumentTypeRepository(DocumentTypeRepository $documentTypeRepository)
    {
        $this->documentTypeRepository = $documentTypeRepository;
    }

    public function setDocumentReference(Document $documentReference)
    {
        $this->documentReference = $documentReference;
    }

    public function setDocumentList($tmpDocumentList)
    {
        $this->requestDocumentList = $tmpDocumentList;
    }

    public function getLogger()
    {
        return $this->logger;
    }

}