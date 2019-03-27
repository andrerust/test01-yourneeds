<?php

class CanDoUploadDocumentVoter_721bb00 extends \Main\UserBundle\Security\Voter\CanDoUploadDocumentVoter implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder721bb00 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer721bb00 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties721bb00 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function vote(\Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token, $subject, array $attributes)
    {
        $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, 'vote', array('token' => $token, 'subject' => $subject, 'attributes' => $attributes), $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;

        return $this->valueHolder721bb00->vote($token, $subject, $attributes);
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

        \Closure::bind(function (\Main\UserBundle\Security\Voter\CanDoUploadDocumentVoter $instance) {
            unset($instance->security);
        }, $instance, 'Main\\UserBundle\\Security\\Voter\\CanDoUploadDocumentVoter')->__invoke($instance);

        $instance->initializer721bb00 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Symfony\Component\Security\Core\Security $security)
    {
        static $reflection;

        if (! $this->valueHolder721bb00) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Security\\Voter\\CanDoUploadDocumentVoter');
            $this->valueHolder721bb00 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Main\UserBundle\Security\Voter\CanDoUploadDocumentVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\CanDoUploadDocumentVoter')->__invoke($this);

        }

        $this->valueHolder721bb00->__construct($security);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, '__get', ['name' => $name], $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;

        if (isset(self::$publicProperties721bb00[$name])) {
            return $this->valueHolder721bb00->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder721bb00;

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

        $targetObject = $this->valueHolder721bb00;
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
        $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder721bb00;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder721bb00;
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
        $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, '__isset', array('name' => $name), $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder721bb00;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder721bb00;
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
        $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, '__unset', array('name' => $name), $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder721bb00;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder721bb00;
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
        $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, '__clone', array(), $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;

        $this->valueHolder721bb00 = clone $this->valueHolder721bb00;
    }

    public function __sleep()
    {
        $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, '__sleep', array(), $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;

        return array('valueHolder721bb00');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Main\UserBundle\Security\Voter\CanDoUploadDocumentVoter $instance) {
            unset($instance->security);
        }, $this, 'Main\\UserBundle\\Security\\Voter\\CanDoUploadDocumentVoter')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer721bb00 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer721bb00;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer721bb00 && ($this->initializer721bb00->__invoke($valueHolder721bb00, $this, 'initializeProxy', array(), $this->initializer721bb00) || 1) && $this->valueHolder721bb00 = $valueHolder721bb00;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder721bb00;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder721bb00;
    }


}
