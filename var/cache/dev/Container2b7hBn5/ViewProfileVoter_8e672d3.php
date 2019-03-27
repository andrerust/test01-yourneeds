<?php

class ViewProfileVoter_8e672d3 extends \Main\UserBundle\Security\Voter\ViewProfileVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8e672d3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8e672d3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8e672d3 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;

        return $this->valueHolder8e672d3->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewProfileVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\ViewProfileVoter')->__invoke($instance);

        $instance->initializer8e672d3 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder8e672d3) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\ViewProfileVoter');
            $this->valueHolder8e672d3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewProfileVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewProfileVoter')->__invoke($this);

        }

        $this->valueHolder8e672d3->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, '__get', ['name' => $name], $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;

        if (isset(self::$publicProperties8e672d3[$name])) {
            return $this->valueHolder8e672d3->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e672d3;

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

        $targetObject = $this->valueHolder8e672d3;
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
        $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e672d3;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8e672d3;
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
        $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, '__isset', array('name' => $name), $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e672d3;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8e672d3;
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
        $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, '__unset', array('name' => $name), $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8e672d3;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8e672d3;
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
        $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, '__clone', array(), $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;

        $this->valueHolder8e672d3 = clone $this->valueHolder8e672d3;
    }

    public function __sleep()
    {
        $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, '__sleep', array(), $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;

        return array('valueHolder8e672d3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewProfileVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewProfileVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer8e672d3 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer8e672d3;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer8e672d3 && ($this->initializer8e672d3->__invoke($valueHolder8e672d3, $this, 'initializeProxy', array(), $this->initializer8e672d3) || 1) && $this->valueHolder8e672d3 = $valueHolder8e672d3;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8e672d3;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8e672d3;
    }


}
