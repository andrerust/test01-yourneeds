<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Main\InsuranceBundle\Controller\ContractController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/AbstractARCustomController.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/BaseController.php';
include_once $this->targetDirs[3].'/src/AppBundle/AppInterface/iStringHelper.php';
include_once $this->targetDirs[3].'/src/Main/InsuranceBundle/Controller/ContractController.php';

if ($lazyLoad) {
    return $this->services['Main\InsuranceBundle\Controller\ContractController'] = $this->createProxy('ContractController_3baeea9', function () {
        return \ContractController_3baeea9::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getContractControllerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\InsuranceBundle\Controller\ContractController();
