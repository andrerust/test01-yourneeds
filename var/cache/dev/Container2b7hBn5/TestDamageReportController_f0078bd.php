<?php

class TestDamageReportController_f0078bd extends \Main\InsuranceBundle\Controller\Test\TestDamageReportController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf0078bd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf0078bd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0078bd = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function logMapStructure($array, \Psr\Log\LoggerInterface $logger, int $level = 0)
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, 'logMapStructure', array('array' => $array, 'logger' => $logger, 'level' => $level), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        return $this->valueHolderf0078bd->logMapStructure($array, $logger, $level);
    }

    /**
     * {@inheritDoc}
     */
    public function damageReportDoUploadAction($type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \AppBundle\Repository\MediaRepository $mediaRepository, \Main\InsuranceBundle\Repository\DamageMediaRepository $damageMediaRepository, \AppBundle\Repository\MediaTypeRepository $mediaTypeRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\UserBundle\Repository\BankAccountRepository $bankAccountRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, 'damageReportDoUploadAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'damageRepository' => $damageRepository, 'mediaRepository' => $mediaRepository, 'damageMediaRepository' => $damageMediaRepository, 'mediaTypeRepository' => $mediaTypeRepository, 'addressRepository' => $addressRepository, 'bankAccountRepository' => $bankAccountRepository, 'logger' => $logger), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        return $this->valueHolderf0078bd->damageReportDoUploadAction($type, $request, $authorizationChecker, $userRepository, $typeRepository, $damageRepository, $mediaRepository, $damageMediaRepository, $mediaTypeRepository, $addressRepository, $bankAccountRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function damageDecisionSurveyAction(?string $type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, 'damageDecisionSurveyAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository, 'typeRepository' => $typeRepository, 'logger' => $logger), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        return $this->valueHolderf0078bd->damageDecisionSurveyAction($type, $request, $authorizationChecker, $userRepository, $damageRepository, $typeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function damageDecisionAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository)
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, 'damageDecisionAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        return $this->valueHolderf0078bd->damageDecisionAction($request, $authorizationChecker, $userRepository, $damageRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function damagesAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository)
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, 'damagesAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        return $this->valueHolderf0078bd->damagesAction($request, $authorizationChecker, $userRepository, $damageRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, 'setContainer', array('container' => $container), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        return $this->valueHolderf0078bd->setContainer($container);
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

        $instance->initializerf0078bd = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderf0078bd) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\Test\\TestDamageReportController');
            $this->valueHolderf0078bd = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, '__get', ['name' => $name], $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        if (isset(self::$publicPropertiesf0078bd[$name])) {
            return $this->valueHolderf0078bd->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0078bd;

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

        $targetObject = $this->valueHolderf0078bd;
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
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0078bd;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf0078bd;
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
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, '__isset', array('name' => $name), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0078bd;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf0078bd;
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
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, '__unset', array('name' => $name), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0078bd;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf0078bd;
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
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, '__clone', array(), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        $this->valueHolderf0078bd = clone $this->valueHolderf0078bd;
    }

    public function __sleep()
    {
        $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, '__sleep', array(), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;

        return array('valueHolderf0078bd');
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
        $this->initializerf0078bd = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf0078bd;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf0078bd && ($this->initializerf0078bd->__invoke($valueHolderf0078bd, $this, 'initializeProxy', array(), $this->initializerf0078bd) || 1) && $this->valueHolderf0078bd = $valueHolderf0078bd;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0078bd;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0078bd;
    }


}
