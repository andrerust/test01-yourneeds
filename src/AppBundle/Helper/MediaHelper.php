<?php

namespace AppBundle\Helper;

use AppBundle\Entity\Document;
use AppBundle\Entity\Media;
use AppBundle\Repository\MediaRepository;
use AppBundle\Repository\MediaTypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\InsuranceBundle\Entity\Damage;
use Main\InsuranceBundle\Entity\DamageMedia;
use Main\UserBundle\Entity\User;
use Main\UserBundle\Entity\UserMedia;
use Main\UserBundle\Repository\UserRepository;

class MediaHelper extends AbstractARCustomHelper
{
    private $mediaRepository = null;
    private $mediaTypeRepository = null;
    private $damageReference = null;
    private $documentReference = null;
    private $mediaCounter = 0;
    private $mediaParameterList = [];
    private $mediaObjectPathList = [];
    private $mediaList = [];
    private $pathUserId = null;
    private $imageUploadPathPraefix = '_uploads/manager/';

    public function __construct(
        UserRepository $userRepository = null,
        MediaRepository $mediaRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->mediaRepository = $mediaRepository;
    }

    public function parseMediaDamageData()
    {
        foreach ($this->mediaList as $index => $image) {
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
                if (count($imageContent) > 1) {
                    $encodedImage = explode(",", $imageContent)[1];
                    $decodedImage = base64_decode($encodedImage);
                    $newFileName = 'damage_' . $this->pathUserId . '_' . date("Ymd_His") . '_' . $imageName;

                    $tmpTypeFolder = 'images';
                    $tmpPath = '../' . $this->imageUploadPathPraefix . $this->pathUserId . '/documents/custom/damage/'
                        . $tmpTypeFolder;
                    if (!is_dir($tmpPath)) {
                        mkdir($tmpPath, 0777, true);
                    }

                    //if ('dev' != $this->environment) {
                    $linkToMediaObject = $tmpPath . '/' . $newFileName;
                    file_put_contents($linkToMediaObject, $decodedImage);
                    $this->addMediaObjectPath($linkToMediaObject);
                    //}

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
                        'IMAGE' => $image['imageFile'][0]
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
                }
            }
        }
    }


    public function setUser(User $user = null)
    {
        parent::setUser($user);
        $this->pathUserId = str_pad($this->user->getId(), 10, '0', STR_PAD_LEFT);

    }

    private function addMediaCounter()
    {
        $this->mediaCounter = $this->mediaCounter + 1;
    }

    public function getMediaCounter()
    {
        return $this->mediaCounter;
    }

    private function addMediaObjectPath(String $mediaObject)
    {
        $this->mediaObjectPathList[] = $mediaObject;
    }

    public function getMediaObjectPathList()
    {
        return $this->mediaObjectPathList;
    }

    public function setMediaTypeRepository(MediaTypeRepository $mediaTypeRepository)
    {
        $this->mediaTypeRepository = $mediaTypeRepository;
    }

    public function setDocumentReference(Document $documentReference)
    {
        $this->documentReference = $documentReference;
    }

    public function setDamageReference(Damage $damageReference)
    {
        $this->damageReference = $damageReference;
    }

    public function setMediaList($mediaList)
    {
        $this->mediaList = $mediaList;
    }

}