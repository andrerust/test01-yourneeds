<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Main\InsuranceBundle\Repository\ContractRepository' shared autowired service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
include_once $this->targetDirs[3].'/src/Main/InsuranceBundle/Repository/ContractRepository.php';

if ($lazyLoad) {
    return $this->privates['Main\InsuranceBundle\Repository\ContractRepository'] = $this->createProxy('ContractRepository_d40975e', function () {
        return \ContractRepository_d40975e::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getContractRepositoryService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\InsuranceBundle\Repository\ContractRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
