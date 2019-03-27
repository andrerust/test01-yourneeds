<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.uG.Ip7d' shared service.

return $this->privates['.service_locator.uG.Ip7d'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authorizationChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'companyRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\CompanyRepository', 'getCompanyRepositoryService.php', true],
    'userRepository' => ['privates', 'Main\\UserBundle\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);