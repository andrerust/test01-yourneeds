<?php

class HelpFormExtension_63775b4 extends \AppBundle\Form\TypeExtension\HelpFormExtension implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder63775b4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer63775b4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties63775b4 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, 'buildView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        return $this->valueHolder63775b4->buildView($view, $form, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, 'configureOptions', array('resolver' => $resolver), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        return $this->valueHolder63775b4->configureOptions($resolver);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtendedType()
    {
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, 'getExtendedType', array(), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        return $this->valueHolder63775b4->getExtendedType();
    }

    /**
     * {@inheritDoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, 'buildForm', array('builder' => $builder, 'options' => $options), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        return $this->valueHolder63775b4->buildForm($builder, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function finishView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, 'finishView', array('view' => $view, 'form' => $form, 'options' => $options), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        return $this->valueHolder63775b4->finishView($view, $form, $options);
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

        $instance->initializer63775b4 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder63775b4) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Form\\TypeExtension\\HelpFormExtension');
            $this->valueHolder63775b4 = $reflection->newInstanceWithoutConstructor();
        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, '__get', ['name' => $name], $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        if (isset(self::$publicProperties63775b4[$name])) {
            return $this->valueHolder63775b4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63775b4;

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

        $targetObject = $this->valueHolder63775b4;
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
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63775b4;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder63775b4;
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
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, '__isset', array('name' => $name), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63775b4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder63775b4;
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
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, '__unset', array('name' => $name), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63775b4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder63775b4;
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
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, '__clone', array(), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        $this->valueHolder63775b4 = clone $this->valueHolder63775b4;
    }

    public function __sleep()
    {
        $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, '__sleep', array(), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;

        return array('valueHolder63775b4');
    }

    public function __wakeup()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer63775b4 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer63775b4;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer63775b4 && ($this->initializer63775b4->__invoke($valueHolder63775b4, $this, 'initializeProxy', array(), $this->initializer63775b4) || 1) && $this->valueHolder63775b4 = $valueHolder63775b4;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder63775b4;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder63775b4;
    }


}
