<?php

namespace Main\UserBundle\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\Index;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="user", indexes={@Index(name="search_id_email_username", columns={"email"})})
 * @UniqueEntity(fields={"email"}, message="It looks like there is an account with this email address!")
 * @UniqueEntity(fields={"phoneNumber"}, message="It looks like there is an account with this phone number!")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Email(
     *      message = "The entered email is not in a valid format",
     *      checkMX = true)
     * @ORM\Column(type="string", unique=true)
     */
    private $email;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    private $userName;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    private $phoneNumber;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    private $firstName;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastName;
    
    /**
     * @ORM\Column(name="gender", type="integer", nullable=true)
     */
    private $gender;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $birthdate;
    
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", unique=false, nullable=true)
     */
    private $employer;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $password;
    
    /**
     * @Assert\Length(
     *      min = 3,
     *      minMessage = "Password too short!"
     * )
     * @ORM\Column(type="string", nullable=true)
     */
    private $plainPassword;
    
    /**
     * @Assert\Type(type="text")
     * @ORM\Column(name="note", type="text", length=4090, nullable=true)
     */
    protected $note;
    
    /**
     * /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\File(
     *      mimeTypes={ "image/png", "image/jpeg", "image/jpg", "image/gif" }
     * )
     */
    private $profilePicture;
    
    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = [];
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive = true;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $isBlocked = false;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $termsAccepted = false;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $termsAcceptedUpdate;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $privacyPolicyAccepted = false;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $privacyPolicyAcceptedUpdate;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $receiveNewsletter = true;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $receiveNewsletterUpdate;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $newsShown = true;
    
    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $newsShownUpdate;
    
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $createdAt;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\Title", inversedBy="users", fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $userTitle;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\FamilyStatus", inversedBy="users", fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $familyStatus;
    
    /**
     * @ORM\ManyToOne(targetEntity="Main\AdminBundle\Entity\JobGroup", inversedBy="users", fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $jobGroup;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserAddress", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $userAddresses;

    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\BankAccount", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $bankAccounts;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserSecurityLog", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $securityLogs;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\UserTariff", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $tariffs;
    
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Project", mappedBy="user", fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $projects;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserAchievement", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $achievements;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\ProcessActivity", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $activities;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Structure", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $structures;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Damage", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $damages;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\InsuranceBundle\Entity\Contract", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $contracts;
    
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Message", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $messages;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\UserMedia", mappedBy="user", cascade={"persist", "remove"}, fetch="EXTRA_LAZY")
     */
    private $medias;
    
    /**
     * @ORM\OneToMany(targetEntity="Main\UserBundle\Entity\BenefitPartnerUser", mappedBy="user", fetch="EXTRA_LAZY")
     * @ORM\OrderBy({"id" = "DESC"})
     */
    private $benefitPartners;

    /**
     * @return mixed
     */
    public function getUserAddresses()
    {
        return $this->userAddresses;
    }

    /**
     * @param mixed $userAddresses
     */
    public function setUserAddresses($userAddresses): void
    {
        $this->userAddresses = $userAddresses;
    }
    
    public function getMemberTypeOfBenefitPartnerType(): string
    {
        foreach ($this->benefitPartners as $partner) {
            if ($partner->getUser()->getId() == $this->id
                && null !== $partner->getBenefitPartner()->getPartnerType()) {
                $type = $partner->getBenefitPartner()->getPartnerType();
                if ('company' === $type) {
                    return 'Mitarbeiter';
                }
            }
        }
        return 'Mitglied';
    }
    
    public function getBenefitPartnerName(): string
    {
        foreach ($this->benefitPartners as $partner) {
            if ($partner->getUser()->getId() == $this->id
                && null !== $partner->getBenefitPartner()->getPartnerType()) {
                return $partner->getBenefitPartner()->getName();
            }
        }
        return '';
    }
    
    
    public function isBenefitPartnerMember(): bool
    {
        foreach ($this->benefitPartners as $partner) {
            if ($partner->getUser()->getId() == $this->id) {
                return true;
            }
        }
        return false;
    }
    
    public function isBenefitPartnerResponsible(): bool
    {
        foreach ($this->benefitPartners as $partner) {
            if ($partner->getUser()->getId() == $this->id) {
                if (1 == $partner->getIsResponsible()) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }
    
    
    /**
     * @return mixed
     */
    public function getBenefitPartners()
    {
        return $this->benefitPartners;
    }
    
    /**
     * @param mixed $benefitPartners
     */
    public function setBenefitPartners($benefitPartners): void
    {
        $this->benefitPartners = $benefitPartners;
    }
    
    /**
     * @return mixed
     */
    public function getPrivacyPolicyAccepted()
    {
        return $this->privacyPolicyAccepted;
    }
    
    /**
     * @param mixed $privacyPolicyAccepted
     */
    public function setPrivacyPolicyAccepted($privacyPolicyAccepted)
    {
        $this->privacyPolicyAccepted = $privacyPolicyAccepted;
    }
    
    /**
     * @return \DateTime
     */
    public function getPrivacyPolicyAcceptedUpdate()
    {
        return $this->privacyPolicyAcceptedUpdate;
    }
    
    /**
     * @param \DateTime $privacyPolicyAcceptedUpdate
     */
    public function setPrivacyPolicyAcceptedUpdate($privacyPolicyAcceptedUpdate)
    {
        $this->privacyPolicyAcceptedUpdate = $privacyPolicyAcceptedUpdate;
    }
    
    /**
     * @return mixed
     */
    public function getNewsShown()
    {
        return $this->newsShown;
    }
    
    /**
     * @param mixed $newsShown
     */
    public function setNewsShown($newsShown)
    {
        $this->newsShown = $newsShown;
    }
    
    /**
     * @return \DateTime
     */
    public function getNewsShownUpdate()
    {
        return $this->newsShownUpdate;
    }
    
    /**
     * @param \DateTime $newsShownUpdate
     */
    public function setNewsShownUpdate($newsShownUpdate)
    {
        $this->newsShownUpdate = $newsShownUpdate;
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
    public function getMessages()
    {
        return $this->messages;
    }
    
    /**
     * @param mixed $messages
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    
    /**
     * @return mixed
     */
    public function getContracts()
    {
        return $this->contracts;
    }
    
    /**
     * @param mixed $mmContracts
     */
    public function setContracts($contracts)
    {
        $this->contracts = $contracts;
    }
    
    /*
     * constructor
     */
    public function __construct()
    {
        $this->achievements = new ArrayCollection();
        $this->achievements = new ArrayCollection();
        $this->bankAccounts = new ArrayCollection();
        $this->tariffs = new ArrayCollection();
        $this->securityLogs = new ArrayCollection();
        $this->structures = new ArrayCollection();
        $this->damages = new ArrayCollection();
        $this->contracts = new ArrayCollection();
        $this->projects = new ArrayCollection();
    }
    
    /**
     * @return mixed
     */
    public function getProjects()
    {
        return $this->projects;
    }
    
    /**
     * @param mixed $projects
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
    }
    
    /**
     * @return mixed
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }
    
    /**
     * @return mixed
     */
    public function getDamages()
    {
        return $this->damages;
    }
    
    /**
     * @param mixed $damages
     */
    public function setDamages($damages)
    {
        $this->damages = $damages;
    }
    
    /**
     * @return mixed
     */
    public function getStructures()
    {
        return $this->structures;
    }
    
    /**
     * @param mixed $structures
     */
    public function setStructures($structures)
    {
        $this->structures = $structures;
    }
    
    /**
     * @param mixed $birthdate
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }
    
    /**
     * @return mixed
     */
    public function getTariffs()
    {
        return $this->tariffs;
    }
    
    /**
     * @param mixed $tariffs
     */
    public function setTariffs($tariffs)
    {
        $this->tariffs = $tariffs;
    }
    
    /**
     * @return mixed
     */
    public function getJobGroup()
    {
        return $this->jobGroup;
    }
    
    /**
     * @return mixed
     */
    public function getSecurityLogs()
    {
        return $this->securityLogs;
    }
    
    /**
     * @param mixed $securityLogs
     */
    public function setSecurityLogs($securityLogs)
    {
        $this->securityLogs = $securityLogs;
    }
    
    /**
     * @return mixed
     */
    public function getFamilyStatus()
    {
        return $this->familyStatus;
    }
    
    /**
     * @param mixed $familyStatus
     */
    public function setFamilyStatus($familyStatus)
    {
        $this->familyStatus = $familyStatus;
    }
    
    /**
     * @param mixed $jobGroup
     */
    public function setJobGroup($jobGroup)
    {
        $this->jobGroup = $jobGroup;
    }
    
    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    
    /**
     * @return mixed
     */
    public function getActivities()
    {
        return $this->activities;
    }
    
    /**
     * @param mixed $activities
     */
    public function setActivities($activities)
    {
        $this->activities = $activities;
    }
    
    /**
     * @return mixed
     */
    public function getEmployer()
    {
        return $this->employer;
    }
    
    /**
     * @param mixed $employer
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;
    }
    
    /**
     * @return mixed
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }
    
    /**
     * @param mixed $userTitle
     */
    public function setUserTitle($userTitle)
    {
        $this->userTitle = $userTitle;
    }
    
    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    
    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    
    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }
    
    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }
    
    /**
     * @return mixed
     */
    public function getAchievements()
    {
        return $this->achievements;
    }
    
    /**
     * @param mixed $achievements
     */
    public function setAchievements($achievements)
    {
        $this->achievements = $achievements;
    }
    
    /**
     * @return mixed
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }
    
    /**
     * @param mixed $bankAccounts
     */
    public function setBankAccounts($bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;
    }
    
    /**
     * @return mixed
     */
    public function getReceiveNewsletter()
    {
        return $this->receiveNewsletter;
    }
    
    /**
     * @param mixed $receiveNewsletter
     */
    public function setReceiveNewsletter($receiveNewsletter)
    {
        $this->receiveNewsletter = $receiveNewsletter;
    }
    
    /**
     * @return mixed
     */
    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }
    
    /**
     * @param mixed $termsAccepted
     */
    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = $termsAccepted;
    }
    
    
    /**
     * @param string $imageName
     */
    public function setProfilePicture($imageName)
    {
        $this->profilePicture = $imageName;
    }
    
    /**
     * @return \DateTime
     */
    public function getTermsAcceptedUpdate()
    {
        return $this->termsAcceptedUpdate;
    }
    
    public function setTermsAcceptedUpdate($termsAcceptedUpdate)
    {
        if ($termsAcceptedUpdate == null) {
            $this->termsAcceptedUpdate = new DateTime("now");
        } else {
            $this->termsAcceptedUpdate = $termsAcceptedUpdate;
        }
    }
    
    /**
     * @return \DateTime
     */
    public function getReceiveNewsletterUpdate()
    {
        return $this->receiveNewsletterUpdate;
        
    }
    
    public function setReceiveNewsletterUpdate($receiveNewsletterUpdate)
    {
        if ($receiveNewsletterUpdate == null) {
            $this->receiveNewsletterUpdate = new DateTime("now");
        } else {
            $this->receiveNewsletterUpdate = $receiveNewsletterUpdate;
        }
    }
    
    /**
     * @return string|null
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
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
    public function getId()
    {
        return $this->id;
    }
    
    /*
    public function addInsurance(Insurance $insurance)
    {
         //$this->insurances->add($insurance);
    }
*/
    
    public function getUserName()
    {
        return $this->userName;
    }
    
    public function getRoles()
    {
        $roles = $this->roles;
        if (!in_array('ROLE_USER', $roles)) {
            $roles[] = 'ROLE_USER';
        }
        
        /* *OR* loop over some ManyToMany relation to a Group entity

        foreach ($this->groups as $group) {
                $roles = array_merge($roles, $group->getRoles());
        }
        */
        
        return $roles;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getSalt()
    {
    
    }
    
    public function eraseCredentials()
    {
        $this->plainPassword = null;
    }
    
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @param mixed $userName
     */
    
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    
    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
     * @return mixed
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    
    /**
     * @param mixed $plainPassword
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
        $this->password = null;
    }
    
    /**
     * @param mixed $roles
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }
    
    /**
     * Gets triggered only on insert
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new DateTime("now");
        $this->updatedAt = new DateTime("now");
        $this->termsAcceptedUpdate = new DateTime("now");
        $this->receiveNewsletterUpdate = new DateTime("now");
    }
    
    /**
     * Gets triggered every time on update
     * @ORM\PreUpdate
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new DateTime("now");
    }
    
    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * @return mixed
     */
    public function getIsBlocked()
    {
        return $this->isBlocked;
    }
    
    /**
     * @param mixed $isBlocked
     */
    public function setIsBlocked($isBlocked)
    {
        $this->isBlocked = $isBlocked;
    }
    
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }
    
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }
    /*
        public function addActivity(UserActivity $activity)
        {
            if (!$this->hasActivity($activity)) {
                $this->activities->add($activity);
                $activity->setUser($this);
            }

            return $this;
        }

        public function hasActivity(UserActivity $activity)
        {
            return $this->activities->contains($activity);
        }
    */
}