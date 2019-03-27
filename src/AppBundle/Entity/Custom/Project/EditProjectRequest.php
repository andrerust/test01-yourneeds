<?php
namespace AppBundle\Entity\Custom\Project;

use Main\UserBundle\Entity\UserProject;
use Symfony\Component\Validator\Constraints as Assert;

class EditProjectRequest
{
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $user;

	/**
	 * @var string
	 */
	protected $project;

	/**
	 * @return int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * @return string
	 */
	public function getUser()
	{
		return $this->user;
	}

	/**
	 * @param string $user
	 */
	public function setUser($user)
	{
		$this->user = $user;
	}

	/**
	 * @return string
	 */
	public function getProject()
	{
		return $this->project;
	}

	/**
	 * @param string $project
	 */
	public function setProject($project)
	{
		$this->project = $project;
	}

	public static function factory(UserProject $entity): self
	{
		$request = new self();
		return $request;
	}

}