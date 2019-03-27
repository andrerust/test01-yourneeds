<?php

class EditProjectFormType_cf8944c extends \AppBundle\Form\Project\EditProjectFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercf8944c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercf8944c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescf8944c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return $this->valueHoldercf8944c->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'configureOptions', array('resolver' => $resolver), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return $this->valueHoldercf8944c->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'getName', array(), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return $this->valueHoldercf8944c->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return $this->valueHoldercf8944c->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return $this->valueHoldercf8944c->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'getBlockPrefix', array(), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return $this->valueHoldercf8944c->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'getParent', array(), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return $this->valueHoldercf8944c->getParent();
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

        $instance->initializercf8944c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldercf8944c) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Form\\Project\\EditProjectFormType');
            $this->valueHoldercf8944c = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, '__get', ['name' => $name], $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        if (isset(self::$publicPropertiescf8944c[$name])) {
            return $this->valueHoldercf8944c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf8944c;

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

        $targetObject = $this->valueHoldercf8944c;
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
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf8944c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercf8944c;
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
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, '__isset', array('name' => $name), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf8944c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercf8944c;
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
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, '__unset', array('name' => $name), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf8944c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercf8944c;
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
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, '__clone', array(), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        $this->valueHoldercf8944c = clone $this->valueHoldercf8944c;
    }

    public function __sleep()
    {
        $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, '__sleep', array(), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;

        return array('valueHoldercf8944c');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializercf8944c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercf8944c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercf8944c && ($this->initializercf8944c->__invoke($valueHoldercf8944c, $this, 'initializeProxy', array(), $this->initializercf8944c) || 1) && $this->valueHoldercf8944c = $valueHoldercf8944c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf8944c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf8944c;
    }


}
