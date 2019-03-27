<?php

class BaseController_2094e54 extends \AppBundle\Controller\BaseController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder2094e54 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2094e54 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2094e54 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, 'setContainer', array('container' => $container), $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;

        return $this->valueHolder2094e54->setContainer($container);
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

        $instance->initializer2094e54 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2094e54) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\BaseController');
            $this->valueHolder2094e54 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, '__get', ['name' => $name], $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;

        if (isset(self::$publicProperties2094e54[$name])) {
            return $this->valueHolder2094e54->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2094e54;

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

        $targetObject = $this->valueHolder2094e54;
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
        $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2094e54;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder2094e54;
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
        $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, '__isset', array('name' => $name), $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2094e54;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2094e54;
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
        $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, '__unset', array('name' => $name), $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2094e54;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2094e54;
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
        $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, '__clone', array(), $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;

        $this->valueHolder2094e54 = clone $this->valueHolder2094e54;
    }

    public function __sleep()
    {
        $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, '__sleep', array(), $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;

        return array('valueHolder2094e54');
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
        $this->initializer2094e54 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer2094e54;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer2094e54 && ($this->initializer2094e54->__invoke($valueHolder2094e54, $this, 'initializeProxy', array(), $this->initializer2094e54) || 1) && $this->valueHolder2094e54 = $valueHolder2094e54;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2094e54;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2094e54;
    }


}
