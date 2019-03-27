<?php

class AddressController_7f48a6a extends \Main\UserBundle\Controller\Admin\AddressController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder7f48a6a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7f48a6a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7f48a6a = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function managerAddressNewAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\CityRepository $cityRepository, \Main\UserBundle\Repository\AddressTypeRepository $addressTypeRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, 'managerAddressNewAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'cityRepository' => $cityRepository, 'addressTypeRepository' => $addressTypeRepository, 'countryRepository' => $countryRepository), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        return $this->valueHolder7f48a6a->managerAddressNewAction($id, $request, $authorizationChecker, $userRepository, $cityRepository, $addressTypeRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function managerAddressEditAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\UserBundle\Repository\CityRepository $cityRepository, \Main\UserBundle\Repository\AddressTypeRepository $addressTypeRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, 'managerAddressEditAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'addressRepository' => $addressRepository, 'cityRepository' => $cityRepository, 'addressTypeRepository' => $addressTypeRepository, 'countryRepository' => $countryRepository), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        return $this->valueHolder7f48a6a->managerAddressEditAction($id, $request, $authorizationChecker, $userRepository, $addressRepository, $cityRepository, $addressTypeRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function addressDeleteAction($id = null, \Main\UserBundle\Repository\AddressRepository $addressRepository)
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, 'addressDeleteAction', array('id' => $id, 'addressRepository' => $addressRepository), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        return $this->valueHolder7f48a6a->addressDeleteAction($id, $addressRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function addressNewAction($type = null, $sourceId = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Main\UserBundle\Repository\CityRepository $cityRepository, \Main\UserBundle\Repository\AddressTypeRepository $addressTypeRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, 'addressNewAction', array('type' => $type, 'sourceId' => $sourceId, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'companyRepository' => $companyRepository, 'cityRepository' => $cityRepository, 'addressTypeRepository' => $addressTypeRepository, 'countryRepository' => $countryRepository), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        return $this->valueHolder7f48a6a->addressNewAction($type, $sourceId, $request, $authorizationChecker, $userRepository, $companyRepository, $cityRepository, $addressTypeRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function addressEditAction($type = null, $id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\UserBundle\Repository\CityRepository $cityRepository, \Main\UserBundle\Repository\AddressTypeRepository $addressTypeRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository)
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, 'addressEditAction', array('type' => $type, 'id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'companyRepository' => $companyRepository, 'addressRepository' => $addressRepository, 'cityRepository' => $cityRepository, 'addressTypeRepository' => $addressTypeRepository, 'countryRepository' => $countryRepository), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        return $this->valueHolder7f48a6a->addressEditAction($type, $id, $request, $authorizationChecker, $userRepository, $companyRepository, $addressRepository, $cityRepository, $addressTypeRepository, $countryRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, 'setContainer', array('container' => $container), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        return $this->valueHolder7f48a6a->setContainer($container);
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

        $instance->initializer7f48a6a = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder7f48a6a) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Admin\\AddressController');
            $this->valueHolder7f48a6a = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, '__get', ['name' => $name], $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        if (isset(self::$publicProperties7f48a6a[$name])) {
            return $this->valueHolder7f48a6a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f48a6a;

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

        $targetObject = $this->valueHolder7f48a6a;
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
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f48a6a;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder7f48a6a;
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
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, '__isset', array('name' => $name), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f48a6a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7f48a6a;
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
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, '__unset', array('name' => $name), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7f48a6a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder7f48a6a;
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
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, '__clone', array(), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        $this->valueHolder7f48a6a = clone $this->valueHolder7f48a6a;
    }

    public function __sleep()
    {
        $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, '__sleep', array(), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;

        return array('valueHolder7f48a6a');
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
        $this->initializer7f48a6a = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer7f48a6a;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer7f48a6a && ($this->initializer7f48a6a->__invoke($valueHolder7f48a6a, $this, 'initializeProxy', array(), $this->initializer7f48a6a) || 1) && $this->valueHolder7f48a6a = $valueHolder7f48a6a;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7f48a6a;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7f48a6a;
    }


}
