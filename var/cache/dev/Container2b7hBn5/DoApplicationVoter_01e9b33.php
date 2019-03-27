<?php

class DoApplicationVoter_01e9b33 extends \Main\UserBundle\Security\Voter\DoApplicationVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder01e9b33 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer01e9b33 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties01e9b33 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;

        return $this->valueHolder01e9b33->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoApplicationVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\DoApplicationVoter')->__invoke($instance);

        $instance->initializer01e9b33 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder01e9b33) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\DoApplicationVoter');
            $this->valueHolder01e9b33 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoApplicationVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoApplicationVoter')->__invoke($this);

        }

        $this->valueHolder01e9b33->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, '__get', ['name' => $name], $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;

        if (isset(self::$publicProperties01e9b33[$name])) {
            return $this->valueHolder01e9b33->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e9b33;

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

        $targetObject = $this->valueHolder01e9b33;
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
        $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e9b33;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder01e9b33;
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
        $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, '__isset', array('name' => $name), $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e9b33;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder01e9b33;
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
        $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, '__unset', array('name' => $name), $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01e9b33;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder01e9b33;
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
        $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, '__clone', array(), $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;

        $this->valueHolder01e9b33 = clone $this->valueHolder01e9b33;
    }

    public function __sleep()
    {
        $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, '__sleep', array(), $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;

        return array('valueHolder01e9b33');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\DoApplicationVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\DoApplicationVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer01e9b33 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer01e9b33;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer01e9b33 && ($this->initializer01e9b33->__invoke($valueHolder01e9b33, $this, 'initializeProxy', array(), $this->initializer01e9b33) || 1) && $this->valueHolder01e9b33 = $valueHolder01e9b33;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01e9b33;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01e9b33;
    }


}
