<?php

class CanSendMessageVoter_3d856b5 extends \Main\UserBundle\Security\Voter\CanSendMessageVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3d856b5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3d856b5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3d856b5 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;

        return $this->valueHolder3d856b5->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\CanSendMessageVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\CanSendMessageVoter')->__invoke($instance);

        $instance->initializer3d856b5 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder3d856b5) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\CanSendMessageVoter');
            $this->valueHolder3d856b5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\CanSendMessageVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\CanSendMessageVoter')->__invoke($this);

        }

        $this->valueHolder3d856b5->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, '__get', ['name' => $name], $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;

        if (isset(self::$publicProperties3d856b5[$name])) {
            return $this->valueHolder3d856b5->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d856b5;

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

        $targetObject = $this->valueHolder3d856b5;
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
        $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d856b5;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3d856b5;
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
        $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, '__isset', array('name' => $name), $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d856b5;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3d856b5;
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
        $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, '__unset', array('name' => $name), $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3d856b5;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3d856b5;
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
        $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, '__clone', array(), $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;

        $this->valueHolder3d856b5 = clone $this->valueHolder3d856b5;
    }

    public function __sleep()
    {
        $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, '__sleep', array(), $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;

        return array('valueHolder3d856b5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\CanSendMessageVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\CanSendMessageVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer3d856b5 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3d856b5;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3d856b5 && ($this->initializer3d856b5->__invoke($valueHolder3d856b5, $this, 'initializeProxy', array(), $this->initializer3d856b5) || 1) && $this->valueHolder3d856b5 = $valueHolder3d856b5;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3d856b5;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3d856b5;
    }


}
