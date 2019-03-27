<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'AppBundle\Controller\MainController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/AbstractARCustomController.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/BaseController.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/MainController.php';

if ($lazyLoad) {
    return $this->services['AppBundle\Controller\MainController'] = $this->createProxy('MainController_20fb069', function () {
        return \MainController_20fb069::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getMainControllerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \AppBundle\Controller\MainController();
