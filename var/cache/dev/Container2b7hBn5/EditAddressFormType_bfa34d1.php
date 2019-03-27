<?php

class EditAddressFormType_bfa34d1 extends \Main\UserBundle\Form\Address\Admin\EditAddressFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderbfa34d1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbfa34d1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbfa34d1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return $this->valueHolderbfa34d1->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'configureOptions', array('resolver' => $resolver), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return $this->valueHolderbfa34d1->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'getName', array(), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return $this->valueHolderbfa34d1->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return $this->valueHolderbfa34d1->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return $this->valueHolderbfa34d1->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'getBlockPrefix', array(), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return $this->valueHolderbfa34d1->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'getParent', array(), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return $this->valueHolderbfa34d1->getParent();
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

        $instance->initializerbfa34d1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderbfa34d1) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\Address\\Admin\\EditAddressFormType');
            $this->valueHolderbfa34d1 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, '__get', ['name' => $name], $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        if (isset(self::$publicPropertiesbfa34d1[$name])) {
            return $this->valueHolderbfa34d1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa34d1;

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

        $targetObject = $this->valueHolderbfa34d1;
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
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa34d1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderbfa34d1;
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
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, '__isset', array('name' => $name), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa34d1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbfa34d1;
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
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, '__unset', array('name' => $name), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfa34d1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbfa34d1;
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
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, '__clone', array(), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        $this->valueHolderbfa34d1 = clone $this->valueHolderbfa34d1;
    }

    public function __sleep()
    {
        $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, '__sleep', array(), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;

        return array('valueHolderbfa34d1');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerbfa34d1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerbfa34d1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerbfa34d1 && ($this->initializerbfa34d1->__invoke($valueHolderbfa34d1, $this, 'initializeProxy', array(), $this->initializerbfa34d1) || 1) && $this->valueHolderbfa34d1 = $valueHolderbfa34d1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbfa34d1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbfa34d1;
    }


}
