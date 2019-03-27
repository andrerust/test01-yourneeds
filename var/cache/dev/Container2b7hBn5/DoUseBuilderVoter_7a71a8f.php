<?php

class DoUseBuilderVoter_7a71a8f extends \Main\UserBundle\Security\Voter\DoUseBuilderVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder7a71a8f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7a71a8f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7a71a8f = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;

        return $this->valueHolder7a71a8f->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoUseBuilderVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\DoUseBuilderVoter')->__invoke($instance);

        $instance->initializer7a71a8f = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder7a71a8f) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\DoUseBuilderVoter');
            $this->valueHolder7a71a8f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoUseBuilderVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoUseBuilderVoter')->__invoke($this);

        }

        $this->valueHolder7a71a8f->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, '__get', ['name' => $name], $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;

        if (isset(self::$publicProperties7a71a8f[$name])) {
            return $this->valueHolder7a71a8f->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a71a8f;

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

        $targetObject = $this->valueHolder7a71a8f;
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
        $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a71a8f;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7a71a8f;
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
        $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, '__isset', array('name' => $name), $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a71a8f;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7a71a8f;
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
        $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, '__unset', array('name' => $name), $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a71a8f;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7a71a8f;
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
        $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, '__clone', array(), $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;

        $this->valueHolder7a71a8f = clone $this->valueHolder7a71a8f;
    }

    public function __sleep()
    {
        $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, '__sleep', array(), $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;

        return array('valueHolder7a71a8f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoUseBuilderVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoUseBuilderVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer7a71a8f = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer7a71a8f;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer7a71a8f && ($this->initializer7a71a8f->__invoke($valueHolder7a71a8f, $this, 'initializeProxy', array(), $this->initializer7a71a8f) || 1) && $this->valueHolder7a71a8f = $valueHolder7a71a8f;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7a71a8f;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7a71a8f;
    }


}
