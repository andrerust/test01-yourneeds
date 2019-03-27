<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.8XHP_vY' shared service.

return $this->privates['.service_locator.8XHP_vY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'addressRepository' => ['privates', 'Main\\UserBundle\\Repository\\AddressRepository', 'getAddressRepositoryService.php', true],
    'titleRepository' => ['privates', 'Main\\UserBundle\\Repository\\TitleRepository', 'getTitleRepositoryService.php', true],
    'userRepository' => ['privates', 'Main\\UserBundle\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);
