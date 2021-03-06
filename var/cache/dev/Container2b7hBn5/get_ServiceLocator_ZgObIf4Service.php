<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.zgObIf4' shared service.

return $this->privates['.service_locator.zgObIf4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
    'tariffRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TariffRepository', 'getTariffRepositoryService.php', true],
    'tariffTypeRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TariffTypeRepository', 'getTariffTypeRepositoryService.php', true],
]);
