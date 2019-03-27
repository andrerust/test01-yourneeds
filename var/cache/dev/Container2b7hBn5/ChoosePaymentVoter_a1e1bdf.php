<?php

class ChoosePaymentVoter_a1e1bdf extends \Main\UserBundle\Security\Voter\ChoosePaymentVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldera1e1bdf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera1e1bdf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa1e1bdf = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;

        return $this->valueHoldera1e1bdf->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\ChoosePaymentVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\ChoosePaymentVoter')->__invoke($instance);

        $instance->initializera1e1bdf = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHoldera1e1bdf) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\ChoosePaymentVoter');
            $this->valueHoldera1e1bdf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ChoosePaymentVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ChoosePaymentVoter')->__invoke($this);

        }

        $this->valueHoldera1e1bdf->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, '__get', ['name' => $name], $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;

        if (isset(self::$publicPropertiesa1e1bdf[$name])) {
            return $this->valueHoldera1e1bdf->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1e1bdf;

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

        $targetObject = $this->valueHoldera1e1bdf;
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
        $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1e1bdf;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldera1e1bdf;
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
        $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, '__isset', array('name' => $name), $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1e1bdf;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera1e1bdf;
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
        $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, '__unset', array('name' => $name), $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1e1bdf;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera1e1bdf;
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
        $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, '__clone', array(), $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;

        $this->valueHoldera1e1bdf = clone $this->valueHoldera1e1bdf;
    }

    public function __sleep()
    {
        $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, '__sleep', array(), $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;

        return array('valueHoldera1e1bdf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ChoosePaymentVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ChoosePaymentVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializera1e1bdf = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializera1e1bdf;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializera1e1bdf && ($this->initializera1e1bdf->__invoke($valueHoldera1e1bdf, $this, 'initializeProxy', array(), $this->initializera1e1bdf) || 1) && $this->valueHoldera1e1bdf = $valueHoldera1e1bdf;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1e1bdf;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1e1bdf;
    }


}
