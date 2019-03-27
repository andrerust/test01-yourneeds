<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.sJXbDkU' shared service.

return $this->privates['.service_locator.sJXbDkU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'companyRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\CompanyRepository', 'getCompanyRepositoryService.php', true],
    'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
    'targetGroupRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TargetGroupRepository', 'getTargetGroupRepositoryService.php', true],
    'tariffTargetGroupRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TariffTargetGroupRepository', 'getTariffTargetGroupRepositoryService.php', true],
    'tariffTypeRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TariffTypeRepository', 'getTariffTypeRepositoryService.php', true],
]);