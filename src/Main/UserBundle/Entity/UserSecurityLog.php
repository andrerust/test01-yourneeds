<?php
namespace Main\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\UserSecurityLogRepository")
 * @ORM\Table(name="user_security_log")
 * @ORM\HasLifecycleCallbacks
 */
class UserSecurityLog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="securityLogs")
     */
    private $user;

    /**
     * @ORM\Column(name="login_code", type="text", nullable=true)
     */
    private $loginCode;

    /**
     * @ORM\Column(name="ip", type="text", nullable=true)
     */
    private $ip;

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
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $codeUsed = false;

    /**
     * @return mixed
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
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
     * @return \DateTime
     */
    public function getTermsAcceptedUpdate()
    {
        return $this->termsAcceptedUpdate;
    }

    /**
     * @param \DateTime $termsAcceptedUpdate
     */
    public function setTermsAcceptedUpdate($termsAcceptedUpdate)
    {
        $this->termsAcceptedUpdate = $termsAcceptedUpdate;
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
    public function getCodeUsed()
    {
        return $this->codeUsed;
    }

    /**
     * @param mixed $codeUsed
     */
    public function setCodeUsed($codeUsed)
    {
        $this->codeUsed = $codeUsed;
    }

    /**
     * @return mixed
     */
    public function getLoginCode()
    {
        return $this->loginCode;
    }

    /**
     * @param mixed $loginCode
     */
    public function setLoginCode($loginCode)
    {
        $this->loginCode = $loginCode;
    }

    /**
     * @ORM\PrePersist
     */
    public function onPrePersist()
    {
        $this->createdAt = new \DateTime("now");
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
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
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
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}