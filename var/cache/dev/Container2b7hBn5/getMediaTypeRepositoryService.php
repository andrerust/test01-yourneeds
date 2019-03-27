<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AppBundle\Repository\MediaTypeRepository' shared autowired service.

include_once $this->targetDirs[3].'/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
include_once $this->targetDirs[3].'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
include_once $this->targetDirs[3].'/src/AppBundle/Repository/MediaTypeRepository.php';

if ($lazyLoad) {
    return $this->privates['AppBundle\Repository\MediaTypeRepository'] = $this->createProxy('MediaTypeRepository_821785e', function () {
        return \MediaTypeRepository_821785e::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getMediaTypeRepositoryService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \AppBundle\Repository\MediaTypeRepository(($this->services['doctrine'] ?? $this->getDoctrineService()));
