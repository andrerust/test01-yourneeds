<?php

class CompanyController_277310e extends \Main\InsuranceBundle\Controller\Admin\CompanyController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder277310e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer277310e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties277310e = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function adminCompanyNewAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository)
    {
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, 'adminCompanyNewAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'companyRepository' => $companyRepository), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        return $this->valueHolder277310e->adminCompanyNewAction($request, $authorizationChecker, $userRepository, $companyRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminCompanyEditAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository)
    {
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, 'adminCompanyEditAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'companyRepository' => $companyRepository), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        return $this->valueHolder277310e->adminCompanyEditAction($id, $request, $authorizationChecker, $userRepository, $companyRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminCompanyAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository)
    {
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, 'adminCompanyAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'companyRepository' => $companyRepository), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        return $this->valueHolder277310e->adminCompanyAction($id, $request, $authorizationChecker, $userRepository, $companyRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function adminCompaniesAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository)
    {
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, 'adminCompaniesAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'companyRepository' => $companyRepository, 'addressRepository' => $addressRepository), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        return $this->valueHolder277310e->adminCompaniesAction($request, $authorizationChecker, $userRepository, $companyRepository, $addressRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, 'setContainer', array('container' => $container), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        return $this->valueHolder277310e->setContainer($container);
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

        $instance->initializer277310e = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder277310e) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\Admin\\CompanyController');
            $this->valueHolder277310e = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, '__get', ['name' => $name], $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        if (isset(self::$publicProperties277310e[$name])) {
            return $this->valueHolder277310e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder277310e;

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

        $targetObject = $this->valueHolder277310e;
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
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder277310e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder277310e;
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
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, '__isset', array('name' => $name), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder277310e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder277310e;
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
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, '__unset', array('name' => $name), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder277310e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder277310e;
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
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, '__clone', array(), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        $this->valueHolder277310e = clone $this->valueHolder277310e;
    }

    public function __sleep()
    {
        $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, '__sleep', array(), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;

        return array('valueHolder277310e');
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
        $this->initializer277310e = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer277310e;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer277310e && ($this->initializer277310e->__invoke($valueHolder277310e, $this, 'initializeProxy', array(), $this->initializer277310e) || 1) && $this->valueHolder277310e = $valueHolder277310e;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder277310e;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder277310e;
    }


}
