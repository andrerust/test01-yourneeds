<?php

class EditMessageFormType_cc22f79 extends \AppBundle\Form\Message\EditMessageFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercc22f79 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercc22f79 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescc22f79 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return $this->valueHoldercc22f79->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'configureOptions', array('resolver' => $resolver), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return $this->valueHoldercc22f79->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'getName', array(), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return $this->valueHoldercc22f79->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return $this->valueHoldercc22f79->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return $this->valueHoldercc22f79->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'getBlockPrefix', array(), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return $this->valueHoldercc22f79->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'getParent', array(), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return $this->valueHoldercc22f79->getParent();
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

        $instance->initializercc22f79 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldercc22f79) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Form\\Message\\EditMessageFormType');
            $this->valueHoldercc22f79 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, '__get', ['name' => $name], $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        if (isset(self::$publicPropertiescc22f79[$name])) {
            return $this->valueHoldercc22f79->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc22f79;

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

        $targetObject = $this->valueHoldercc22f79;
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
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc22f79;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercc22f79;
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
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, '__isset', array('name' => $name), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc22f79;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercc22f79;
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
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, '__unset', array('name' => $name), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc22f79;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercc22f79;
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
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, '__clone', array(), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        $this->valueHoldercc22f79 = clone $this->valueHoldercc22f79;
    }

    public function __sleep()
    {
        $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, '__sleep', array(), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;

        return array('valueHoldercc22f79');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializercc22f79 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercc22f79;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercc22f79 && ($this->initializercc22f79->__invoke($valueHoldercc22f79, $this, 'initializeProxy', array(), $this->initializercc22f79) || 1) && $this->valueHoldercc22f79 = $valueHoldercc22f79;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc22f79;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc22f79;
    }


}
