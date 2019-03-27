<?php

class TestSurveyController_30e9fd1 extends \Main\InsuranceBundle\Controller\Test\TestSurveyController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder30e9fd1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer30e9fd1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties30e9fd1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function sortBestFit($a, $b)
    {
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, 'sortBestFit', array('a' => $a, 'b' => $b), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        return $this->valueHolder30e9fd1->sortBestFit($a, $b);
    }

    /**
     * {@inheritDoc}
     */
    public function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
    {
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, 'rand_float', array('st_num' => $st_num, 'end_num' => $end_num, 'mul' => $mul), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        return $this->valueHolder30e9fd1->rand_float($st_num, $end_num, $mul);
    }

    /**
     * {@inheritDoc}
     */
    public function adminSurveyDamageBuilderAction(?string $type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, 'adminSurveyDamageBuilderAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'structureRepository' => $structureRepository, 'logger' => $logger), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        return $this->valueHolder30e9fd1->adminSurveyDamageBuilderAction($type, $request, $authorizationChecker, $userRepository, $typeRepository, $structureRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminSurveyTariffBuilderAction(?string $type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, 'adminSurveyTariffBuilderAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'structureRepository' => $structureRepository, 'logger' => $logger), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        return $this->valueHolder30e9fd1->adminSurveyTariffBuilderAction($type, $request, $authorizationChecker, $userRepository, $typeRepository, $structureRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, 'setContainer', array('container' => $container), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        return $this->valueHolder30e9fd1->setContainer($container);
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

        $instance->initializer30e9fd1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder30e9fd1) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\Test\\TestSurveyController');
            $this->valueHolder30e9fd1 = $reflection->newInstanceWithoutConstructor();
        unset($this->cheapestList, $this->bestFitList, $this->performanceList, $this->resultParamList, $this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, '__get', ['name' => $name], $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        if (isset(self::$publicProperties30e9fd1[$name])) {
            return $this->valueHolder30e9fd1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e9fd1;

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

        $targetObject = $this->valueHolder30e9fd1;
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
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e9fd1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder30e9fd1;
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
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, '__isset', array('name' => $name), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e9fd1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder30e9fd1;
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
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, '__unset', array('name' => $name), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30e9fd1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder30e9fd1;
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
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, '__clone', array(), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        $this->valueHolder30e9fd1 = clone $this->valueHolder30e9fd1;
    }

    public function __sleep()
    {
        $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, '__sleep', array(), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;

        return array('valueHolder30e9fd1');
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
        $this->initializer30e9fd1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer30e9fd1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer30e9fd1 && ($this->initializer30e9fd1->__invoke($valueHolder30e9fd1, $this, 'initializeProxy', array(), $this->initializer30e9fd1) || 1) && $this->valueHolder30e9fd1 = $valueHolder30e9fd1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30e9fd1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30e9fd1;
    }


}
