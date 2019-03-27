<?php

class NewAddressFormType_ffe9ca1 extends \Main\UserBundle\Form\Address\Admin\NewAddressFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderffe9ca1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerffe9ca1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesffe9ca1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return $this->valueHolderffe9ca1->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'configureOptions', array('resolver' => $resolver), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return $this->valueHolderffe9ca1->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'getName', array(), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return $this->valueHolderffe9ca1->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return $this->valueHolderffe9ca1->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return $this->valueHolderffe9ca1->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'getBlockPrefix', array(), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return $this->valueHolderffe9ca1->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'getParent', array(), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return $this->valueHolderffe9ca1->getParent();
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

        $instance->initializerffe9ca1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderffe9ca1) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\Address\\Admin\\NewAddressFormType');
            $this->valueHolderffe9ca1 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, '__get', ['name' => $name], $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        if (isset(self::$publicPropertiesffe9ca1[$name])) {
            return $this->valueHolderffe9ca1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe9ca1;

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

        $targetObject = $this->valueHolderffe9ca1;
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
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe9ca1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderffe9ca1;
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
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, '__isset', array('name' => $name), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe9ca1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderffe9ca1;
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
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, '__unset', array('name' => $name), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderffe9ca1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderffe9ca1;
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
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, '__clone', array(), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        $this->valueHolderffe9ca1 = clone $this->valueHolderffe9ca1;
    }

    public function __sleep()
    {
        $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, '__sleep', array(), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;

        return array('valueHolderffe9ca1');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerffe9ca1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerffe9ca1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerffe9ca1 && ($this->initializerffe9ca1->__invoke($valueHolderffe9ca1, $this, 'initializeProxy', array(), $this->initializerffe9ca1) || 1) && $this->valueHolderffe9ca1 = $valueHolderffe9ca1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderffe9ca1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderffe9ca1;
    }


}
