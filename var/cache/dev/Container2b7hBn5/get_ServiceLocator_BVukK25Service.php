<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.bVukK25' shared service.

return $this->privates['.service_locator.bVukK25'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authorizationChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'damageRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\DamageRepository', 'getDamageRepositoryService.php', true],
    'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
    'typeRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TypeRepository', 'getTypeRepositoryService.php', true],
    'userRepository' => ['privates', 'Main\\UserBundle\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);
