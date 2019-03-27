<?php

class NewBankFormType_c796b38 extends \Main\UserBundle\Form\Bank\Admin\NewBankFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderc796b38 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc796b38 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc796b38 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return $this->valueHolderc796b38->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'configureOptions', array('resolver' => $resolver), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return $this->valueHolderc796b38->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'getName', array(), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return $this->valueHolderc796b38->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return $this->valueHolderc796b38->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return $this->valueHolderc796b38->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'getBlockPrefix', array(), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return $this->valueHolderc796b38->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'getParent', array(), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return $this->valueHolderc796b38->getParent();
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

        $instance->initializerc796b38 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderc796b38) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\Bank\\Admin\\NewBankFormType');
            $this->valueHolderc796b38 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, '__get', ['name' => $name], $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        if (isset(self::$publicPropertiesc796b38[$name])) {
            return $this->valueHolderc796b38->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796b38;

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

        $targetObject = $this->valueHolderc796b38;
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
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796b38;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderc796b38;
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
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, '__isset', array('name' => $name), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796b38;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc796b38;
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
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, '__unset', array('name' => $name), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc796b38;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc796b38;
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
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, '__clone', array(), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        $this->valueHolderc796b38 = clone $this->valueHolderc796b38;
    }

    public function __sleep()
    {
        $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, '__sleep', array(), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;

        return array('valueHolderc796b38');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerc796b38 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerc796b38;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerc796b38 && ($this->initializerc796b38->__invoke($valueHolderc796b38, $this, 'initializeProxy', array(), $this->initializerc796b38) || 1) && $this->valueHolderc796b38 = $valueHolderc796b38;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc796b38;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc796b38;
    }


}
