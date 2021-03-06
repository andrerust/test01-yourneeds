<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.b6gcx50' shared service.

return $this->privates['.service_locator.b6gcx50'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authorizationChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'faqQuestionRepository' => ['privates', 'AppBundle\\Repository\\FaqQuestionRepository', 'getFaqQuestionRepositoryService.php', true],
    'logger' => ['privates', 'monolog.logger', 'getMonolog_LoggerService', false],
    'userRepository' => ['privates', 'Main\\UserBundle\\Repository\\UserRepository', 'getUserRepositoryService.php', true],
]);
