<?php

class ViewChooseSurveyVoter_dd1dda8 extends \Main\UserBundle\Security\Voter\ViewChooseSurveyVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderdd1dda8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdd1dda8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdd1dda8 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;

        return $this->valueHolderdd1dda8->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewChooseSurveyVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\ViewChooseSurveyVoter')->__invoke($instance);

        $instance->initializerdd1dda8 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolderdd1dda8) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\ViewChooseSurveyVoter');
            $this->valueHolderdd1dda8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewChooseSurveyVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewChooseSurveyVoter')->__invoke($this);

        }

        $this->valueHolderdd1dda8->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, '__get', ['name' => $name], $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;

        if (isset(self::$publicPropertiesdd1dda8[$name])) {
            return $this->valueHolderdd1dda8->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1dda8;

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

        $targetObject = $this->valueHolderdd1dda8;
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
        $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1dda8;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderdd1dda8;
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
        $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, '__isset', array('name' => $name), $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1dda8;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderdd1dda8;
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
        $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, '__unset', array('name' => $name), $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd1dda8;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderdd1dda8;
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
        $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, '__clone', array(), $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;

        $this->valueHolderdd1dda8 = clone $this->valueHolderdd1dda8;
    }

    public function __sleep()
    {
        $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, '__sleep', array(), $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;

        return array('valueHolderdd1dda8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\ViewChooseSurveyVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\ViewChooseSurveyVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerdd1dda8 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerdd1dda8;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerdd1dda8 && ($this->initializerdd1dda8->__invoke($valueHolderdd1dda8, $this, 'initializeProxy', array(), $this->initializerdd1dda8) || 1) && $this->valueHolderdd1dda8 = $valueHolderdd1dda8;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd1dda8;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd1dda8;
    }


}
