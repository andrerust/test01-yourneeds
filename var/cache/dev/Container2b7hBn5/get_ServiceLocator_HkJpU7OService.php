<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.hkJpU7O' shared service.

return $this->privates['.service_locator.hkJpU7O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authorizationChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'contractRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\ContractRepository', 'getContractRepositoryService.php', true],
    'documentRepository' => ['privates', 'AppBundle\\Repository\\DocumentRepository', 'getDocumentRepositoryService.php', true],
    'documentTypeRepository' => ['privates', 'AppBundle\\Repository\\DocumentTypeRepository', 'getDocumentTypeRepositoryService.php', true],
    'tariffTypeRepository' => ['privates', 'Main\\InsuranceBundle\\Repository\\TariffTypeRepository', 'getTariffTypeRepositoryService.php', true],
    'userRepository' => ['privates', 'Main\\UserBundle\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);