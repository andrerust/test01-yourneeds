<?php

class ContractController_3baeea9 extends \Main\InsuranceBundle\Controller\ContractController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3baeea9 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3baeea9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3baeea9 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function contractNewMailAction($id = null, $cId = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \Main\InsuranceBundle\Repository\ContractRepository $contractRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository)
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, 'contractNewMailAction', array('id' => $id, 'cId' => $cId, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository, 'contractRepository' => $contractRepository, 'tariffTypeRepository' => $tariffTypeRepository), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        return $this->valueHolder3baeea9->contractNewMailAction($id, $cId, $request, $authorizationChecker, $userRepository, $documentRepository, $documentTypeRepository, $contractRepository, $tariffTypeRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function contractNewAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository)
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, 'contractNewAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository, 'companyRepository' => $companyRepository, 'tariffTypeRepository' => $tariffTypeRepository), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        return $this->valueHolder3baeea9->contractNewAction($request, $authorizationChecker, $userRepository, $documentRepository, $documentTypeRepository, $companyRepository, $tariffTypeRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function contractEditAction($cid = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository, \Main\InsuranceBundle\Repository\ContractRepository $contractRepository)
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, 'contractEditAction', array('cid' => $cid, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'companyRepository' => $companyRepository, 'tariffTypeRepository' => $tariffTypeRepository, 'contractRepository' => $contractRepository), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        return $this->valueHolder3baeea9->contractEditAction($cid, $request, $authorizationChecker, $userRepository, $companyRepository, $tariffTypeRepository, $contractRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function managerContractReadAction(\Main\InsuranceBundle\Repository\ContractRepository $contractRepository, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository)
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, 'managerContractReadAction', array('contractRepository' => $contractRepository, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        return $this->valueHolder3baeea9->managerContractReadAction($contractRepository, $request, $authorizationChecker, $userRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function managerContractsAction(\Main\InsuranceBundle\Repository\ContractRepository $contractRepository, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, 'managerContractsAction', array('contractRepository' => $contractRepository, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'logger' => $logger), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        return $this->valueHolder3baeea9->managerContractsAction($contractRepository, $request, $authorizationChecker, $userRepository, $documentRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, 'setContainer', array('container' => $container), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        return $this->valueHolder3baeea9->setContainer($container);
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

        $instance->initializer3baeea9 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3baeea9) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\ContractController');
            $this->valueHolder3baeea9 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, '__get', ['name' => $name], $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        if (isset(self::$publicProperties3baeea9[$name])) {
            return $this->valueHolder3baeea9->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3baeea9;

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

        $targetObject = $this->valueHolder3baeea9;
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
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3baeea9;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3baeea9;
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
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, '__isset', array('name' => $name), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3baeea9;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3baeea9;
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
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, '__unset', array('name' => $name), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3baeea9;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3baeea9;
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
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, '__clone', array(), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        $this->valueHolder3baeea9 = clone $this->valueHolder3baeea9;
    }

    public function __sleep()
    {
        $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, '__sleep', array(), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;

        return array('valueHolder3baeea9');
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
        $this->initializer3baeea9 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3baeea9;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3baeea9 && ($this->initializer3baeea9->__invoke($valueHolder3baeea9, $this, 'initializeProxy', array(), $this->initializer3baeea9) || 1) && $this->valueHolder3baeea9 = $valueHolder3baeea9;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3baeea9;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3baeea9;
    }


}
