<?php

class ViewDoSurveyVoter_f529af1 extends \Main\UserBundle\Security\Voter\ViewDoSurveyVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf529af1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf529af1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf529af1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;

        return $this->valueHolderf529af1->vote($token, $subject, $attributes);
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

        $instance->initializerf529af1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderf529af1) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\ViewDoSurveyVoter');
            $this->valueHolderf529af1 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, '__get', ['name' => $name], $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;

        if (isset(self::$publicPropertiesf529af1[$name])) {
            return $this->valueHolderf529af1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf529af1;

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

        $targetObject = $this->valueHolderf529af1;
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
        $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf529af1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf529af1;
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
        $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, '__isset', array('name' => $name), $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf529af1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf529af1;
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
        $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, '__unset', array('name' => $name), $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf529af1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf529af1;
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
        $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, '__clone', array(), $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;

        $this->valueHolderf529af1 = clone $this->valueHolderf529af1;
    }

    public function __sleep()
    {
        $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, '__sleep', array(), $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;

        return array('valueHolderf529af1');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerf529af1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf529af1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf529af1 && ($this->initializerf529af1->__invoke($valueHolderf529af1, $this, 'initializeProxy', array(), $this->initializerf529af1) || 1) && $this->valueHolderf529af1 = $valueHolderf529af1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf529af1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf529af1;
    }


}
