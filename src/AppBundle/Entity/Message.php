<?php
namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MessageRepository")
 * @ORM\Table(name="message")
 * @ORM\HasLifecycleCallbacks()
 */
class Message
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @ORM\Column(type="integer")
	 */
	private $id;

	/**
	 * @ORM\Column(name="subject", type="string", nullable=true)
	 */
	private $subject;

	/**
	 * @ORM\Column(name="body", type="text", length=4090, nullable=true)
	 */
	protected $body;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isRead;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $hasAnswer;

	/**
	 * @ORM\Column(type="boolean")
	 */
	private $isBlocked;

	/**
	 * @ORM\Column(type="datetime")
	 *
	 * @var \DateTime
	 */
	private $updatedAt;

	/**
	 * @ORM\Column(type="datetime")
	 * @var \DateTime
	 */
	private $createdAt;

	/**
	 * @ORM\ManyToOne(targetEntity="Main\UserBundle\Entity\User", inversedBy="messages")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

	/**
	 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MessageType", inversedBy="messages")
	 * @ORM\OrderBy({"id" = "DESC"})
	 */
	private $messageType;

	/**
	 * @return mixed
	 */
	public function getMessageType()
	{
		return $this->messageType;
	}

	/**
	 * @param mixed $messageType
	 */
	public function setMessageType($messageType)
	{
		$this->messageType = $messageType;
	}

	/**
	 * @return mixed
	 */
	public function getSubject()
	{
		return $this->subject;
	}

	/**
	 * @param mixed $subject
	 */
	public function setSubject($subject)
	{
		$this->subject = $subject;
	}

	/**
	 * @return mixed
	 */
	public function getBody()
	{
		return $this->body;
	}

	/**
	 * @param mixed $body
	 */
	public function setBody($body)
	{
		$this->body = $body;
	}


	/**
	 * @return mixed
	 */
	public function getIsRead()
	{
		return $this->isRead;
	}

	/**
	 * @param mixed $isRead
	 */
	public function setIsRead($isRead)
	{
		$this->isRead = $isRead;
	}

	/**
	 * @return mixed
	 */
	public function getHasAnswer()
	{
		return $this->hasAnswer;
	}

	/**
	 * @param mixed $hasAnswer
	 */
	public function setHasAnswer($hasAnswer)
	{
		$this->hasAnswer = $hasAnswer;
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
	public function getId()
	{
		return $this->id;
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
	 * @param mixed $id
	 */
	public function setId($id)
	{
		$this->id = $id;
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
	 * Gets triggered only on insert
	 * @ORM\PrePersist
	 */
	public function onPrePersist()
	{
		$this->createdAt = new DateTime("now");
		$this->updatedAt = new DateTime("now");
	}
}