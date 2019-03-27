<?php

class JobGroupImportController_d741e94 extends \Main\AdminBundle\Controller\Api\JobGroupImportController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd741e94 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd741e94 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd741e94 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function loadApiJobInputAction($input = 'all', \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\JobGroupRepository $jobGroupRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, 'loadApiJobInputAction', array('input' => $input, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'jobGroupRepository' => $jobGroupRepository, 'logger' => $logger), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        return $this->valueHolderd741e94->loadApiJobInputAction($input, $request, $authorizationChecker, $userRepository, $jobGroupRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, 'setContainer', array('container' => $container), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        return $this->valueHolderd741e94->setContainer($container);
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

        $instance->initializerd741e94 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderd741e94) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\AdminBundle\\Controller\\Api\\JobGroupImportController');
            $this->valueHolderd741e94 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, '__get', ['name' => $name], $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        if (isset(self::$publicPropertiesd741e94[$name])) {
            return $this->valueHolderd741e94->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd741e94;

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

        $targetObject = $this->valueHolderd741e94;
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
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd741e94;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd741e94;
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
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, '__isset', array('name' => $name), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd741e94;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd741e94;
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
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, '__unset', array('name' => $name), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd741e94;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd741e94;
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
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, '__clone', array(), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        $this->valueHolderd741e94 = clone $this->valueHolderd741e94;
    }

    public function __sleep()
    {
        $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, '__sleep', array(), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;

        return array('valueHolderd741e94');
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
        $this->initializerd741e94 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd741e94;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd741e94 && ($this->initializerd741e94->__invoke($valueHolderd741e94, $this, 'initializeProxy', array(), $this->initializerd741e94) || 1) && $this->valueHolderd741e94 = $valueHolderd741e94;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd741e94;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd741e94;
    }


}
