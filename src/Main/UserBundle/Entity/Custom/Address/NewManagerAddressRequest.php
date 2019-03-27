<?php
namespace Main\UserBundle\Entity\Custom\Address;

use Main\UserBundle\Entity\UserAddress;
use Symfony\Component\Validator\Constraints as Assert;

class NewManagerAddressRequest
{
	/**
	 * @var string
	 */
	private $additionalInfo;

	/**
	 * @var string
	 */
	private $type;
	/**
	 * @var string
	 */
	private $street;

	/**
	 * @var string
	 */
	private $streetNumber;

	/**
	 * @var string
	 */
	private $postalCode;

	/**
	 * @var string
	 */
	private $city;

    /**
     * @var string
     */
    private $isMain = true;

	/**
	 * @var string
	 */
	private $isActive = true;

	/**
	 * @var string
	 */
	private $isBlocked = false;

	/**
	 * @var string
	 */
	private $country;

	/**
	 * @return mixed
	 */
	public function getIsActive()
	{
		return $this->isActive;
	}

    /**
     * @return string
     */
    public function getIsMain(): string
    {
        return $this->isMain;
    }

    /**
     * @param string $isMain
     */
    public function setIsMain(string $isMain): void
    {
        $this->isMain = $isMain;
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

	public static function factory(UserAddress $entity): self
	{
		$request = new self();
		return $request;
	}

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type)
	{
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 */
	public function setCity($city)
	{
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * @param string $country
	 */
	public function setCountry($country)
	{
		$this->country = $country;
	}

	/**
	 * @return string
	 */
	public function getAdditionalInfo()
	{
		return $this->additionalInfo;
	}

	/**
	 * @param string $additionalInfo
	 */
	public function setAdditionalInfo($additionalInfo)
	{
		$this->additionalInfo = $additionalInfo;
	}

	/**
	 * @return string
	 */
	public function getStreet()
	{
		return $this->street;
	}

	/**
	 * @param string $street
	 */
	public function setStreet($street)
	{
		$this->street = $street;
	}

	/**
	 * @return string
	 */
	public function getStreetNumber()
	{
		return $this->streetNumber;
	}

	/**
	 * @param string $streetNumber
	 */
	public function setStreetNumber($streetNumber)
	{
		$this->streetNumber = $streetNumber;
	}

	/**
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}

	/**
	 * @param string $postalCode
	 */
	public function setPostalCode($postalCode)
	{
		$this->postalCode = $postalCode;
	}

}