<?php

class AdminTariffController_2b2491a extends \Main\InsuranceBundle\Controller\Admin\AdminTariffController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder2b2491a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2b2491a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2b2491a = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function adminTariffIdNewFinishAction($type = null, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository, \Main\InsuranceBundle\Repository\TargetGroupRepository $targetGroupRepository, \Main\InsuranceBundle\Repository\TariffTargetGroupRepository $tariffTargetGroupRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Symfony\Component\HttpFoundation\Request $request, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'adminTariffIdNewFinishAction', array('type' => $type, 'tariffTypeRepository' => $tariffTypeRepository, 'targetGroupRepository' => $targetGroupRepository, 'tariffTargetGroupRepository' => $tariffTargetGroupRepository, 'companyRepository' => $companyRepository, 'request' => $request, 'logger' => $logger), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return $this->valueHolder2b2491a->adminTariffIdNewFinishAction($type, $tariffTypeRepository, $targetGroupRepository, $tariffTargetGroupRepository, $companyRepository, $request, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffNewAction(?string $type = null, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Main\InsuranceBundle\Repository\TargetGroupRepository $targetGroupRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'adminTariffNewAction', array('type' => $type, 'companyRepository' => $companyRepository, 'targetGroupRepository' => $targetGroupRepository, 'logger' => $logger), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return $this->valueHolder2b2491a->adminTariffNewAction($type, $companyRepository, $targetGroupRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffIdEditFinishAction($id = null, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository, \Main\InsuranceBundle\Repository\TargetGroupRepository $targetGroupRepository, \Main\InsuranceBundle\Repository\TariffTargetGroupRepository $tariffTargetGroupRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Symfony\Component\HttpFoundation\Request $request, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'adminTariffIdEditFinishAction', array('id' => $id, 'tariffRepository' => $tariffRepository, 'tariffTypeRepository' => $tariffTypeRepository, 'targetGroupRepository' => $targetGroupRepository, 'tariffTargetGroupRepository' => $tariffTargetGroupRepository, 'companyRepository' => $companyRepository, 'request' => $request, 'logger' => $logger), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return $this->valueHolder2b2491a->adminTariffIdEditFinishAction($id, $tariffRepository, $tariffTypeRepository, $targetGroupRepository, $tariffTargetGroupRepository, $companyRepository, $request, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffEditAction($id = null, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Main\InsuranceBundle\Repository\TargetGroupRepository $targetGroupRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'adminTariffEditAction', array('id' => $id, 'tariffRepository' => $tariffRepository, 'tariffTypeRepository' => $tariffTypeRepository, 'companyRepository' => $companyRepository, 'targetGroupRepository' => $targetGroupRepository, 'logger' => $logger), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return $this->valueHolder2b2491a->adminTariffEditAction($id, $tariffRepository, $tariffTypeRepository, $companyRepository, $targetGroupRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffAction($id = null, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository, \Main\InsuranceBundle\Repository\TargetGroupRepository $targetGroupRepository, \Main\InsuranceBundle\Repository\TariffRateRepository $tariffRateRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'adminTariffAction', array('id' => $id, 'tariffRepository' => $tariffRepository, 'targetGroupRepository' => $targetGroupRepository, 'tariffRateRepository' => $tariffRateRepository, 'tariffTypeRepository' => $tariffTypeRepository, 'logger' => $logger), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return $this->valueHolder2b2491a->adminTariffAction($id, $tariffRepository, $targetGroupRepository, $tariffRateRepository, $tariffTypeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function adminTariffsAction(string $type = 'pli', \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'adminTariffsAction', array('type' => $type, 'tariffRepository' => $tariffRepository, 'tariffTypeRepository' => $tariffTypeRepository, 'logger' => $logger), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return $this->valueHolder2b2491a->adminTariffsAction($type, $tariffRepository, $tariffTypeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'setContainer', array('container' => $container), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return $this->valueHolder2b2491a->setContainer($container);
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

        unset($instance->errorList, $instance->hasErrors, $instance->test, $instance->parser, $instance->tariffMap, $instance->tariffReadabilityMap, $instance->type, $instance->logger, $instance->databaseAccessor, $instance->environment, $instance->user, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->errors, $instance->container);

        $instance->initializer2b2491a = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder2b2491a) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\Admin\\AdminTariffController');
            $this->valueHolder2b2491a = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, '__get', ['name' => $name], $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        if (isset(self::$publicProperties2b2491a[$name])) {
            return $this->valueHolder2b2491a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2491a;

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

        $targetObject = $this->valueHolder2b2491a;
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
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2491a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder2b2491a;
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
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, '__isset', array('name' => $name), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2491a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2b2491a;
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
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, '__unset', array('name' => $name), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2b2491a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder2b2491a;
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
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, '__clone', array(), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        $this->valueHolder2b2491a = clone $this->valueHolder2b2491a;
    }

    public function __sleep()
    {
        $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, '__sleep', array(), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;

        return array('valueHolder2b2491a');
    }

    public function __wakeup()
    {
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer2b2491a = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer2b2491a;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer2b2491a && ($this->initializer2b2491a->__invoke($valueHolder2b2491a, $this, 'initializeProxy', array(), $this->initializer2b2491a) || 1) && $this->valueHolder2b2491a = $valueHolder2b2491a;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2b2491a;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2b2491a;
    }


}
