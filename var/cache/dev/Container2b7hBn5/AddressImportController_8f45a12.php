<?php

class AddressImportController_8f45a12 extends \Main\AdminBundle\Controller\Api\AddressImportController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8f45a12 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8f45a12 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8f45a12 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function loadApiJobInputAction($filter = 'all', \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\JobGroupRepository $jobGroupRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, 'loadApiJobInputAction', array('filter' => $filter, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'jobGroupRepository' => $jobGroupRepository, 'logger' => $logger), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        return $this->valueHolder8f45a12->loadApiJobInputAction($filter, $request, $authorizationChecker, $userRepository, $jobGroupRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, 'setContainer', array('container' => $container), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        return $this->valueHolder8f45a12->setContainer($container);
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

        unset($instance->errorList, $instance->hasErrors, $instance->test, $instance->parser, $instance->tariffMap, $instance->tariffReadabilityMap, $instance->type, $instance->logger, $instance->databaseAccessor, $instance->environment, $instance->user, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->errors, $instance->container);

        $instance->initializer8f45a12 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder8f45a12) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\AdminBundle\\Controller\\Api\\AddressImportController');
            $this->valueHolder8f45a12 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, '__get', ['name' => $name], $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        if (isset(self::$publicProperties8f45a12[$name])) {
            return $this->valueHolder8f45a12->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f45a12;

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

        $targetObject = $this->valueHolder8f45a12;
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
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f45a12;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8f45a12;
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
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, '__isset', array('name' => $name), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f45a12;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8f45a12;
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
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, '__unset', array('name' => $name), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f45a12;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8f45a12;
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
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, '__clone', array(), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        $this->valueHolder8f45a12 = clone $this->valueHolder8f45a12;
    }

    public function __sleep()
    {
        $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, '__sleep', array(), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;

        return array('valueHolder8f45a12');
    }

    public function __wakeup()
    {
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer8f45a12 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer8f45a12;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer8f45a12 && ($this->initializer8f45a12->__invoke($valueHolder8f45a12, $this, 'initializeProxy', array(), $this->initializer8f45a12) || 1) && $this->valueHolder8f45a12 = $valueHolder8f45a12;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8f45a12;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8f45a12;
    }


}
