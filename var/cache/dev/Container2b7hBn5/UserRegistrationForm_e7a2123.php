<?php

class UserRegistrationForm_e7a2123 extends \Main\UserBundle\Form\UserRegistrationForm implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere7a2123 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere7a2123 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7a2123 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        return $this->valueHoldere7a2123->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, 'configureOptions', array('resolver' => $resolver), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        return $this->valueHoldere7a2123->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        return $this->valueHoldere7a2123->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        return $this->valueHoldere7a2123->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, 'getBlockPrefix', array(), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        return $this->valueHoldere7a2123->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, 'getParent', array(), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        return $this->valueHoldere7a2123->getParent();
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

        $instance->initializere7a2123 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere7a2123) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\UserRegistrationForm');
            $this->valueHoldere7a2123 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, '__get', ['name' => $name], $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        if (isset(self::$publicPropertiese7a2123[$name])) {
            return $this->valueHoldere7a2123->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a2123;

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

        $targetObject = $this->valueHoldere7a2123;
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
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a2123;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere7a2123;
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
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, '__isset', array('name' => $name), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a2123;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere7a2123;
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
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, '__unset', array('name' => $name), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere7a2123;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere7a2123;
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
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, '__clone', array(), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        $this->valueHoldere7a2123 = clone $this->valueHoldere7a2123;
    }

    public function __sleep()
    {
        $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, '__sleep', array(), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;

        return array('valueHoldere7a2123');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializere7a2123 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere7a2123;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere7a2123 && ($this->initializere7a2123->__invoke($valueHoldere7a2123, $this, 'initializeProxy', array(), $this->initializere7a2123) || 1) && $this->valueHoldere7a2123 = $valueHoldere7a2123;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere7a2123;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere7a2123;
    }


}
