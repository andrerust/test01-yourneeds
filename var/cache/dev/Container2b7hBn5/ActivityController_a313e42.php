<?php

class ActivityController_a313e42 extends \Main\UserBundle\Controller\Web\ActivityController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldera313e42 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera313e42 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa313e42 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getPetActivitiesAction($id = null, ?\Symfony\Component\Security\Core\User\UserInterface $user = null, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, 'getPetActivitiesAction', array('id' => $id, 'user' => $user, 'request' => $request), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        return $this->valueHoldera313e42->getPetActivitiesAction($id, $user, $request);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, 'setContainer', array('container' => $container), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        return $this->valueHoldera313e42->setContainer($container);
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

        $instance->initializera313e42 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldera313e42) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Web\\ActivityController');
            $this->valueHoldera313e42 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, '__get', ['name' => $name], $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        if (isset(self::$publicPropertiesa313e42[$name])) {
            return $this->valueHoldera313e42->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313e42;

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

        $targetObject = $this->valueHoldera313e42;
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
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313e42;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldera313e42;
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
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, '__isset', array('name' => $name), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313e42;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera313e42;
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
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, '__unset', array('name' => $name), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera313e42;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera313e42;
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
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, '__clone', array(), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        $this->valueHoldera313e42 = clone $this->valueHoldera313e42;
    }

    public function __sleep()
    {
        $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, '__sleep', array(), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;

        return array('valueHoldera313e42');
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
        $this->initializera313e42 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializera313e42;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializera313e42 && ($this->initializera313e42->__invoke($valueHoldera313e42, $this, 'initializeProxy', array(), $this->initializera313e42) || 1) && $this->valueHoldera313e42 = $valueHoldera313e42;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera313e42;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera313e42;
    }


}
