<?php

class AbstractARCustomController_cb4d161 extends \AppBundle\Controller\AbstractARCustomController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercb4d161 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercb4d161 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescb4d161 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, 'setContainer', array('container' => $container), $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;

        return $this->valueHoldercb4d161->setContainer($container);
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

        unset($instance->databaseAccessor, $instance->environment, $instance->logger, $instance->user, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->type, $instance->errors, $instance->container);

        $instance->initializercb4d161 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldercb4d161) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\AbstractARCustomController');
            $this->valueHoldercb4d161 = $reflection->newInstanceWithoutConstructor();
        unset($this->databaseAccessor, $this->environment, $this->logger, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->type, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, '__get', ['name' => $name], $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;

        if (isset(self::$publicPropertiescb4d161[$name])) {
            return $this->valueHoldercb4d161->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb4d161;

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

        $targetObject = $this->valueHoldercb4d161;
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
        $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb4d161;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercb4d161;
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
        $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, '__isset', array('name' => $name), $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb4d161;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb4d161;
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
        $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, '__unset', array('name' => $name), $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb4d161;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb4d161;
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
        $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, '__clone', array(), $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;

        $this->valueHoldercb4d161 = clone $this->valueHoldercb4d161;
    }

    public function __sleep()
    {
        $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, '__sleep', array(), $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;

        return array('valueHoldercb4d161');
    }

    public function __wakeup()
    {
        unset($this->databaseAccessor, $this->environment, $this->logger, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->type, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializercb4d161 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercb4d161;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercb4d161 && ($this->initializercb4d161->__invoke($valueHoldercb4d161, $this, 'initializeProxy', array(), $this->initializercb4d161) || 1) && $this->valueHoldercb4d161 = $valueHoldercb4d161;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb4d161;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb4d161;
    }


}
