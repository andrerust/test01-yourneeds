<?php

class SurveyController_5cfc818 extends \Main\InsuranceBundle\Controller\Admin\SurveyController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5cfc818 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5cfc818 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5cfc818 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function adminSurveyElementsSaveAction(string $type, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\SurveyQuestionRepository $surveyQuestionRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminSurveyElementsSaveAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'typeRepository' => $typeRepository, 'surveyQuestionRepository' => $surveyQuestionRepository, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminSurveyElementsSaveAction($type, $request, $authorizationChecker, $userRepository, $structureRepository, $typeRepository, $surveyQuestionRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminSurveyHelptextsAction(string $type, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\SurveyQuestionRepository $surveyQuestionRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminSurveyHelptextsAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'typeRepository' => $typeRepository, 'surveyQuestionRepository' => $surveyQuestionRepository, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminSurveyHelptextsAction($type, $request, $authorizationChecker, $userRepository, $structureRepository, $typeRepository, $surveyQuestionRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function chooseSurveyAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'chooseSurveyAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'typeRepository' => $typeRepository, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->chooseSurveyAction($request, $authorizationChecker, $userRepository, $structureRepository, $typeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function sortBestFit($a, $b)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'sortBestFit', array('a' => $a, 'b' => $b), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->sortBestFit($a, $b);
    }

    /**
     * {@inheritDoc}
     */
    public function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'rand_float', array('st_num' => $st_num, 'end_num' => $end_num, 'mul' => $mul), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->rand_float($st_num, $end_num, $mul);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffDecisionResultAction($id = null, $type = null, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminTariffDecisionResultAction', array('id' => $id, 'type' => $type, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'tariffRepository' => $tariffRepository, 'tariffTypeRepository' => $tariffTypeRepository, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminTariffDecisionResultAction($id, $type, $userRepository, $structureRepository, $tariffRepository, $tariffTypeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminUserIdTypeFinishAction($id = null, $type = null, \Main\UserBundle\Repository\UserRepository $userRepository, \Symfony\Component\HttpFoundation\Request $request, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminUserIdTypeFinishAction', array('id' => $id, 'type' => $type, 'userRepository' => $userRepository, 'request' => $request, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminUserIdTypeFinishAction($id, $type, $userRepository, $request, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffDecisionCalculatorJsonAction($id = null, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminTariffDecisionCalculatorJsonAction', array('id' => $id, 'request' => $request), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminTariffDecisionCalculatorJsonAction($id, $request);
    }

    /**
     * {@inheritDoc}
     */
    public function adminUserSurveyTypeDecision($id = null, ?string $type = null, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminUserSurveyTypeDecision', array('id' => $id, 'type' => $type, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminUserSurveyTypeDecision($id, $type, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffDecisionAction($id = null, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminTariffDecisionAction', array('id' => $id, 'request' => $request), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminTariffDecisionAction($id, $request);
    }

    /**
     * {@inheritDoc}
     */
    public function adminSurveyDamageBuilderAction(?string $type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminSurveyDamageBuilderAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'structureRepository' => $structureRepository, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminSurveyDamageBuilderAction($type, $request, $authorizationChecker, $userRepository, $typeRepository, $structureRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminSurveyTariffBuilderAction(?string $type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'adminSurveyTariffBuilderAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'structureRepository' => $structureRepository, 'logger' => $logger), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->adminSurveyTariffBuilderAction($type, $request, $authorizationChecker, $userRepository, $typeRepository, $structureRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'setContainer', array('container' => $container), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return $this->valueHolder5cfc818->setContainer($container);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();

        unset($instance->cheapestList, $instance->bestFitList, $instance->performanceList, $instance->resultParamList, $instance->errorList, $instance->hasErrors, $instance->test, $instance->parser, $instance->tariffMap, $instance->tariffReadabilityMap, $instance->type, $instance->logger, $instance->databaseAccessor, $instance->environment, $instance->user, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->errors, $instance->container);

        $instance->initializer5cfc818 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5cfc818) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\Admin\\SurveyController');
            $this->valueHolder5cfc818 = $reflection->newInstanceWithoutConstructor();
        unset($this->cheapestList, $this->bestFitList, $this->performanceList, $this->resultParamList, $this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, '__get', ['name' => $name], $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        if (isset(self::$publicProperties5cfc818[$name])) {
            return $this->valueHolder5cfc818->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfc818;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5cfc818;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfc818;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5cfc818;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, '__isset', array('name' => $name), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfc818;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5cfc818;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, '__unset', array('name' => $name), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cfc818;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5cfc818;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, '__clone', array(), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        $this->valueHolder5cfc818 = clone $this->valueHolder5cfc818;
    }

    public function __sleep()
    {
        $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, '__sleep', array(), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;

        return array('valueHolder5cfc818');
    }

    public function __wakeup()
    {
        unset($this->cheapestList, $this->bestFitList, $this->performanceList, $this->resultParamList, $this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5cfc818 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5cfc818;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5cfc818 && ($this->initializer5cfc818->__invoke($valueHolder5cfc818, $this, 'initializeProxy', array(), $this->initializer5cfc818) || 1) && $this->valueHolder5cfc818 = $valueHolder5cfc818;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5cfc818;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5cfc818;
    }


}
