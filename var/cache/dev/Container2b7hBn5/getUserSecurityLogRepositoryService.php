<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Main\UserBundle\Repository\UserSecurityLogRepository' shared autowired service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
include_once $this->targetDirs[3].'/src/Main/UserBundle/Repository/UserSecurityLogRepository.php';

if ($lazyLoad) {
    return $this->privates['Main\UserBundle\Repository\UserSecurityLogRepository'] = $this->createProxy('UserSecurityLogRepository_9c7a2c5', function () {
        return \UserSecurityLogRepository_9c7a2c5::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getUserSecurityLogRepositoryService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\UserBundle\Repository\UserSecurityLogRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
