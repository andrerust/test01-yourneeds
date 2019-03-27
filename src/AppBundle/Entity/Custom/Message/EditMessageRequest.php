<?php
namespace AppBundle\Entity\Custom\Message;

use AppBundle\Entity\Message;
use Symfony\Component\Validator\Constraints as Assert;

class EditMessageRequest
{
	private $id;

	private $subject;

	protected $body;

	private $isRead;

	private $hasAnswer;

	private $isBlocked;

	private $updatedAt;

	private $createdAt;

	private $user;

	private $messageType;

	public static function factory(Message $entity): self
	{
		$request = new self();
		return $request;
	}

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
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/**
	 * @param mixed $updatedAt
	 */
	public function setUpdatedAt($updatedAt)
	{
		$this->updatedAt = $updatedAt;
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

}