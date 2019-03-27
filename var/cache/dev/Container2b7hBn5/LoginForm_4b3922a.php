<?php

class LoginForm_4b3922a extends \Main\UserBundle\Form\LoginForm implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder4b3922a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4b3922a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4b3922a = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return $this->valueHolder4b3922a->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return $this->valueHolder4b3922a->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'getName', array(), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return $this->valueHolder4b3922a->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return $this->valueHolder4b3922a->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return $this->valueHolder4b3922a->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'getBlockPrefix', array(), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return $this->valueHolder4b3922a->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'getParent', array(), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return $this->valueHolder4b3922a->getParent();
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

        $instance->initializer4b3922a = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4b3922a) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\LoginForm');
            $this->valueHolder4b3922a = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, '__get', ['name' => $name], $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        if (isset(self::$publicProperties4b3922a[$name])) {
            return $this->valueHolder4b3922a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b3922a;

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

        $targetObject = $this->valueHolder4b3922a;
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
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b3922a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder4b3922a;
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
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, '__isset', array('name' => $name), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b3922a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4b3922a;
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
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, '__unset', array('name' => $name), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b3922a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4b3922a;
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
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, '__clone', array(), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        $this->valueHolder4b3922a = clone $this->valueHolder4b3922a;
    }

    public function __sleep()
    {
        $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, '__sleep', array(), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;

        return array('valueHolder4b3922a');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer4b3922a = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer4b3922a;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer4b3922a && ($this->initializer4b3922a->__invoke($valueHolder4b3922a, $this, 'initializeProxy', array(), $this->initializer4b3922a) || 1) && $this->valueHolder4b3922a = $valueHolder4b3922a;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b3922a;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b3922a;
    }


}
