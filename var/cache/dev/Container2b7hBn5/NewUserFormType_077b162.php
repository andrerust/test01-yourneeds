<?php

class NewUserFormType_077b162 extends \Main\UserBundle\Form\User\Admin\NewUserFormType implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder077b162 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer077b162 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties077b162 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return $this->valueHolder077b162->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return $this->valueHolder077b162->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'getName', array(), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return $this->valueHolder077b162->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return $this->valueHolder077b162->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return $this->valueHolder077b162->finishView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockPrefix()
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'getBlockPrefix', array(), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return $this->valueHolder077b162->getBlockPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'getParent', array(), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return $this->valueHolder077b162->getParent();
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

        $instance->initializer077b162 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder077b162) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Form\\User\\Admin\\NewUserFormType');
            $this->valueHolder077b162 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, '__get', ['name' => $name], $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        if (isset(self::$publicProperties077b162[$name])) {
            return $this->valueHolder077b162->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077b162;

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

        $targetObject = $this->valueHolder077b162;
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
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077b162;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder077b162;
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
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, '__isset', array('name' => $name), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077b162;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder077b162;
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
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, '__unset', array('name' => $name), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder077b162;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder077b162;
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
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, '__clone', array(), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        $this->valueHolder077b162 = clone $this->valueHolder077b162;
    }

    public function __sleep()
    {
        $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, '__sleep', array(), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;

        return array('valueHolder077b162');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer077b162 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer077b162;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer077b162 && ($this->initializer077b162->__invoke($valueHolder077b162, $this, 'initializeProxy', array(), $this->initializer077b162) || 1) && $this->valueHolder077b162 = $valueHolder077b162;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder077b162;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder077b162;
    }


}
