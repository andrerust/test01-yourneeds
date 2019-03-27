<?php

class EditBenefitVoter_da130b2 extends \Main\UserBundle\Security\Voter\EditBenefitVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderda130b2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerda130b2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesda130b2 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;

        return $this->valueHolderda130b2->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\EditBenefitVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\EditBenefitVoter')->__invoke($instance);

        $instance->initializerda130b2 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolderda130b2) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\EditBenefitVoter');
            $this->valueHolderda130b2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\EditBenefitVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\EditBenefitVoter')->__invoke($this);

        }

        $this->valueHolderda130b2->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, '__get', ['name' => $name], $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;

        if (isset(self::$publicPropertiesda130b2[$name])) {
            return $this->valueHolderda130b2->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda130b2;

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

        $targetObject = $this->valueHolderda130b2;
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
        $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda130b2;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderda130b2;
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
        $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, '__isset', array('name' => $name), $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda130b2;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderda130b2;
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
        $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, '__unset', array('name' => $name), $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda130b2;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderda130b2;
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
        $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, '__clone', array(), $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;

        $this->valueHolderda130b2 = clone $this->valueHolderda130b2;
    }

    public function __sleep()
    {
        $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, '__sleep', array(), $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;

        return array('valueHolderda130b2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\EditBenefitVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\EditBenefitVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerda130b2 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerda130b2;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerda130b2 && ($this->initializerda130b2->__invoke($valueHolderda130b2, $this, 'initializeProxy', array(), $this->initializerda130b2) || 1) && $this->valueHolderda130b2 = $valueHolderda130b2;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderda130b2;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderda130b2;
    }


}
