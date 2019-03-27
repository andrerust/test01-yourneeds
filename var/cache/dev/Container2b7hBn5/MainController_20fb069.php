<?php

class MainController_20fb069 extends \AppBundle\Controller\MainController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder20fb069 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20fb069 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties20fb069 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function iframeAction()
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, 'iframeAction', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        return $this->valueHolder20fb069->iframeAction();
    }

    /**
     * {@inheritDoc}
     */
    public function homepageAction()
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, 'homepageAction', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        return $this->valueHolder20fb069->homepageAction();
    }

    /**
     * {@inheritDoc}
     */
    public function pageOmbudsmanAction()
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, 'pageOmbudsmanAction', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        return $this->valueHolder20fb069->pageOmbudsmanAction();
    }

    /**
     * {@inheritDoc}
     */
    public function imprintAction()
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, 'imprintAction', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        return $this->valueHolder20fb069->imprintAction();
    }

    /**
     * {@inheritDoc}
     */
    public function privacyPolicyAction()
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, 'privacyPolicyAction', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        return $this->valueHolder20fb069->privacyPolicyAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, 'setContainer', array('container' => $container), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        return $this->valueHolder20fb069->setContainer($container);
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

        $instance->initializer20fb069 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder20fb069) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\MainController');
            $this->valueHolder20fb069 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, '__get', ['name' => $name], $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        if (isset(self::$publicProperties20fb069[$name])) {
            return $this->valueHolder20fb069->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20fb069;

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

        $targetObject = $this->valueHolder20fb069;
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
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20fb069;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder20fb069;
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
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, '__isset', array('name' => $name), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20fb069;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder20fb069;
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
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, '__unset', array('name' => $name), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder20fb069;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder20fb069;
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
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, '__clone', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        $this->valueHolder20fb069 = clone $this->valueHolder20fb069;
    }

    public function __sleep()
    {
        $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, '__sleep', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;

        return array('valueHolder20fb069');
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
        $this->initializer20fb069 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer20fb069;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer20fb069 && ($this->initializer20fb069->__invoke($valueHolder20fb069, $this, 'initializeProxy', array(), $this->initializer20fb069) || 1) && $this->valueHolder20fb069 = $valueHolder20fb069;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder20fb069;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder20fb069;
    }


}
