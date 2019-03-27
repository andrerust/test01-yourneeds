<?php
namespace Main\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Main\UserBundle\Repository\UserStatsRepository")
 * @ORM\Table(name="user_stats")
 * @ORM\HasLifecycleCallbacks
 */
class UserStats
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="login_code", type="text", nullable=true)
     */
    private $ip;

    /**
     * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="securityLogs")
     */
    private $user;

    /**
     * @ORM\Column(name="remote_address", type="text", nullable=true)
     */
    private $remoteAddress;

    /**
     * @ORM\Column(name="remote_host", type="text", nullable=true)
     */
    private $remoteHost;

    /**
     * @ORM\Column(name="remote_port", type="text", nullable=true)
     */
    private $remotePort;

    /**
     * @ORM\Column(name="http_referer", type="text", nullable=true)
     */
    private $httpReferer;

    /**
     * @ORM\Column(name="queryString", type="text", nullable=true)
     */
    private $queryString;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @return mixed
     */
    public function getRemoteAddress()
    {
        return $this->remoteAddress;
    }

    /**
     * @param mixed $remoteAddress
     */
    public function setRemoteAddress($remoteAddress)
    {
        $this->remoteAddress = $remoteAddress;
    }

    /**
     * @return mixed
     */
    public function getRemoteHost()
    {
        return $this->remoteHost;
    }

    /**
     * @param mixed $remoteHost
     */
    public function setRemoteHost($remoteHost)
    {
        $this->remoteHost = $remoteHost;
    }

    /**
     * @return mixed
     */
    public function getRemotePort()
    {
        return $this->remotePort;
    }

    /**
     * @param mixed $remotePort
     */
    public function setRemotePort($remotePort)
    {
        $this->remotePort = $remotePort;
    }

    /**
     * @return mixed
     */
    public function getHttpReferer()
    {
        return $this->httpReferer;
    }

    /**
     * @param mixed $httpReferer
     */
    public function setHttpReferer($httpReferer)
    {
        $this->httpReferer = $httpReferer;
    }

    /**
     * @return mixed
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @param mixed $queryString
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
    }

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