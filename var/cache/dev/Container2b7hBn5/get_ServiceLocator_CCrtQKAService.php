<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.CCrtQKA' shared service.

return $this->privates['.service_locator.CCrtQKA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'addressRepository' => ['privates', 'Main\\UserBundle\\Repository\\AddressRepository', 'getAddressRepositoryService.php', true],
    'addressTypeRepository' => ['privates', 'Main\\UserBundle\\Repository\\AddressTypeRepository', 'getAddressTypeRepositoryService.php', true],
    'authorizationChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'cityRepository' => ['privates', 'Main\\UserBundle\\Repository\\CityRepository', 'getCityRepositoryService.php', true],
    'companyRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\CompanyRepository', 'getCompanyRepositoryService.php', true],
    'countryRepository' => ['privates', 'Main\\UserBundle\\Repository\\CountryRepository', 'getCountryRepositoryService.php', true],
    'userRepository' => ['privates', 'Main\\UserBundle\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);
