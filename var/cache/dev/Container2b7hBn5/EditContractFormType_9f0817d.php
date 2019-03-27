<?php

class EditContractFormType_9f0817d extends \Main\InsuranceBundle\Form\Contract\EditContractFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9f0817d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9f0817d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9f0817d = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return $this->valueHolder9f0817d->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return $this->valueHolder9f0817d->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'getName', array(), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return $this->valueHolder9f0817d->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return $this->valueHolder9f0817d->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return $this->valueHolder9f0817d->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'getBlockPrefix', array(), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return $this->valueHolder9f0817d->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'getParent', array(), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return $this->valueHolder9f0817d->getParent();
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

        $instance->initializer9f0817d = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9f0817d) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Form\\Contract\\EditContractFormType');
            $this->valueHolder9f0817d = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, '__get', ['name' => $name], $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        if (isset(self::$publicProperties9f0817d[$name])) {
            return $this->valueHolder9f0817d->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0817d;

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

        $targetObject = $this->valueHolder9f0817d;
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
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0817d;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9f0817d;
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
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, '__isset', array('name' => $name), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0817d;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9f0817d;
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
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, '__unset', array('name' => $name), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0817d;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9f0817d;
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
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, '__clone', array(), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        $this->valueHolder9f0817d = clone $this->valueHolder9f0817d;
    }

    public function __sleep()
    {
        $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, '__sleep', array(), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;

        return array('valueHolder9f0817d');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer9f0817d = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer9f0817d;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer9f0817d && ($this->initializer9f0817d->__invoke($valueHolder9f0817d, $this, 'initializeProxy', array(), $this->initializer9f0817d) || 1) && $this->valueHolder9f0817d = $valueHolder9f0817d;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f0817d;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f0817d;
    }


}
