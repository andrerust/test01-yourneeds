<?php

namespace Main\InsuranceBundle\Entity;

use AppBundle\Helper\DateHelper;
use Doctrine\ORM\Mapping as ORM;
use Main\UserBundle\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="Main\InsuranceBundle\Repository\DamageRepository")
 * @ORM\Table(name="damage")
 * @ORM\HasLifecycleCallbacks()
 */
class Damage
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Type", inversedBy="structures")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=true, onDelete="CASCADE")
     */
    private $type;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $subType;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $publicName;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $documentName;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $countMedia;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $context;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="text", nullable=true)
     */
    private $json;

    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="damages")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Main\InsuranceBundle\Entity\Contract", inversedBy="damages")
     * @ORM\JoinColumn(name="contract_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     */
    private $contract;

    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserMedia", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     */
    private $medias;

    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\DamageDocument", mappedBy="damage")
     */
    private $documents;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;


    public function get()
    {
        $array = [
            'id' => $this->id,
            'type' => $this->type,
            'subtype' => $this->subType,
            'user' => $this->user->getId(),
            'json' => $this->json,
            'description' => $this->description,
            'documentName' => $this->documentName,
            'countMedia' => $this->countMedia,
            'isActive' => $this->isActive,
            'updatedAt' => DateHelper::dateToString($this->updatedAt)
        ];
        foreach ($array as $key => $value) {
            echo '<br><b>' . $key . '</b> => ' . $value;
        }

        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * @param mixed $contract
     */
    public function setContract($contract): void
    {
        $this->contract = $contract;
    }

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     */
    public function setDocuments($documents): void
    {
        $this->documents = $documents;
    }

    /**
     * @return mixed
     */
    public function getMedias()
    {
        return $this->medias;
    }

    /**
     * @param mixed $medias
     */
    public function setMedias($medias)
    {
        $this->medias = $medias;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Is the given User the author of this Post?
     *
     * @return bool
     */
    public function isOwner(User $user = null)
    {
        return $user && $user->getId() === $this->getUser()->getId();
    }

    /**
     * @return mixed
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * @param mixed $documentName
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;
    }

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed
     */
    public function getPublicName()
    {
        return $this->publicName;
    }

    /**
     * @param mixed $publicName
     */
    public function setPublicName($publicName)
    {
        $this->publicName = $publicName;
    }

    /**
     * @return mixed
     */
    public function getCountMedia()
    {
        return $this->countMedia;
    }

    /**
     * @param mixed $countMedia
     */
    public function setCountMedia($countMedia)
    {
        $this->countMedia = $countMedia;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @return mixed
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @param mixed $subType
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
    }

    /**
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param mixed $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return mixed
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * @param mixed $json
     */
    public function setJson($json)
    {
        $this->json = $json;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * @param mixed $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Gets triggered only on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime("now");
        $this->updatedAt = new \DateTime("now");
    }

    /**
     * Gets triggered every time on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime("now");
    }

}
