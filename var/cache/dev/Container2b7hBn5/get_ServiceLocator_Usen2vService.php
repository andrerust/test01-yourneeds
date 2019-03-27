<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator._usen2v' shared service.

return $this->privates['.service_locator._usen2v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'activityRepository' => ['privates', 'Main\\UserBundle\\Repository\\ActivityRepository', 'getActivityRepositoryService.php', true],
    'authorizationChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
    'processActivityRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\ProcessActivityRepository', 'getProcessActivityRepositoryService.php', true],
    'processRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\ProcessRepository', 'getProcessRepositoryService.php', true],
    'processStatusRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\ProcessStatusRepository', 'getProcessStatusRepositoryService.php', true],
    'processTariffTrackerRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\ProcessTariffTrackerRepository', 'getProcessTariffTrackerRepositoryService.php', true],
    'processTypeRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\ProcessTypeRepository', 'getProcessTypeRepositoryService.php', true],
    'structureRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\StructureRepository', 'getStructureRepositoryService.php', true],
    'typeRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TypeRepository', 'getTypeRepositoryService.php', true],
    'userRepository' => ['privates', 'Main\\UserBundle\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);
