<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Main\InsuranceBundle\Controller\Test\TestSurveyController' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/AbstractARCustomController.php';
include_once $this->targetDirs[3].'/src/AppBundle/Controller/BaseController.php';
include_once $this->targetDirs[3].'/src/Main/InsuranceBundle/Controller/Test/TestSurveyController.php';

if ($lazyLoad) {
    return $this->services['Main\InsuranceBundle\Controller\Test\TestSurveyController'] = $this->createProxy('TestSurveyController_30e9fd1', function () {
        return \TestSurveyController_30e9fd1::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getTestSurveyControllerService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Main\InsuranceBundle\Controller\Test\TestSurveyController();
