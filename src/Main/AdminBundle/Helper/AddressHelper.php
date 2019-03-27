<?php

namespace Main\AdminBundle\Helper;

use Doctrine\ORM\EntityManagerInterface;
use Main\AdminBundle\Helper\AbstractARCustomHelper;
use Main\UserBundle\Repository\AddressRepository;
use Main\UserBundle\Repository\UserAddressRepository;
use Main\UserBundle\Repository\UserRepository;

class AddressHelper extends AbstractARCustomHelper
{
    private $userAddressRepository = null;
    private $primaryAddress = null;
    private $addressParameterList = [];

    public function __construct(
        UserRepository $userRepository = null,
        UserAddressRepository $userAddressRepository = null,
        EntityManagerInterface $databaseManager = null,
        $logger = null
    )
    {
        parent::initialize($userRepository, $databaseManager, $logger);
        $this->userAddressRepository = $userAddressRepository;
    }

    public function getPrimaryAddressParameterList()
    {
        $this->addressParameterList['street'] = 'Strasse nicht angegeben';
        $this->addressParameterList['streetNumber'] = 'HausNr nicht angegeben';
        $this->addressParameterList['postalCode'] = 'PLZ nicht angegeben';
        $this->addressParameterList['cityName'] = 'Ort nicht angegeben';

        if (null != $this->primaryAddress) {
            $addressStreet = (null != $this->primaryAddress->getStreet()
                && null != $this->primaryAddress->getStreet()->getName())
                ? $this->primaryAddress->getStreet()->getName() : 'Strasse nicht angegeben';
            $addressStreetNo = (null != $this->primaryAddress->getStreetNumber())
                ? $this->primaryAddress->getstreetNumber() : 'HausNr nicht angegeben';
            $addressPostalCode = (null != $this->primaryAddress->getPostalCode()
                && null != $this->primaryAddress->getPostalCode()->getZip())
                ? $this->primaryAddress->getPostalCode()->getZip() : 'PLZ nicht angegeben';
            $addressCityName = (null != $this->primaryAddress->getCity()
                && null != $this->primaryAddress->getCity()->getName())
                ? $this->primaryAddress->getCity()->getName() : 'Ort nicht angegeben';

            $this->addressParameterList['street'] = $addressStreet;
            $this->addressParameterList['streetNumber'] = $addressStreetNo;
            $this->addressParameterList['postalCode'] = $addressPostalCode;
            $this->addressParameterList['cityName'] = $addressCityName;
        }
        return $this->addressParameterList;
    }

    public function setPrimaryAddress()
    {
        $tmpAddress = $this->userAddressRepository->findOneBy(
            [
                'user' => $this->user,
                'isMain' => '1'
            ],
            [
                'updatedAt' => 'ASC'
            ]
        );
        $this->primaryAddress = $tmpAddress;
    }
}