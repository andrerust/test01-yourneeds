<?php

class TariffDeliveryApiController_d4368b1 extends \Main\InsuranceBundle\Controller\Api\TariffDeliveryApiController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd4368b1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4368b1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd4368b1 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function rand_float($st_num = 0, $end_num = 1, $mul = 1000000)
    {
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, 'rand_float', array('st_num' => $st_num, 'end_num' => $end_num, 'mul' => $mul), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        return $this->valueHolderd4368b1->rand_float($st_num, $end_num, $mul);
    }

    /**
     * {@inheritDoc}
     */
    public function managerSurveyTypeResultAction($type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\ContractRepository $contractRepository, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository $processTariffTrackerRepository, \Main\InsuranceBundle\Repository\CompanyRepository $companyRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, 'managerSurveyTypeResultAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'contractRepository' => $contractRepository, 'tariffRepository' => $tariffRepository, 'typeRepository' => $typeRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'processTariffTrackerRepository' => $processTariffTrackerRepository, 'companyRepository' => $companyRepository, 'logger' => $logger), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        return $this->valueHolderd4368b1->managerSurveyTypeResultAction($type, $request, $authorizationChecker, $userRepository, $structureRepository, $contractRepository, $tariffRepository, $typeRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $processTariffTrackerRepository, $companyRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function parseLanguageValue($value = null)
    {
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, 'parseLanguageValue', array('value' => $value), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        return $this->valueHolderd4368b1->parseLanguageValue($value);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, 'setContainer', array('container' => $container), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        return $this->valueHolderd4368b1->setContainer($container);
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

        unset($instance->apiAttributes, $instance->apiLeistungen, $instance->level, $instance->companies, $instance->cheapestList, $instance->bestFitList, $instance->performanceList, $instance->errorList, $instance->hasErrors, $instance->test, $instance->parser, $instance->tariffMap, $instance->tariffReadabilityMap, $instance->type, $instance->logger, $instance->databaseAccessor, $instance->environment, $instance->user, $instance->optionalUser, $instance->validTypes, $instance->apiTypeMapping, $instance->errors, $instance->container);

        $instance->initializerd4368b1 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderd4368b1) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\Api\\TariffDeliveryApiController');
            $this->valueHolderd4368b1 = $reflection->newInstanceWithoutConstructor();
        unset($this->apiAttributes, $this->apiLeistungen, $this->level, $this->companies, $this->cheapestList, $this->bestFitList, $this->performanceList, $this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, '__get', ['name' => $name], $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        if (isset(self::$publicPropertiesd4368b1[$name])) {
            return $this->valueHolderd4368b1->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4368b1;

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

        $targetObject = $this->valueHolderd4368b1;
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
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4368b1;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd4368b1;
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
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, '__isset', array('name' => $name), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4368b1;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd4368b1;
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
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, '__unset', array('name' => $name), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd4368b1;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd4368b1;
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
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, '__clone', array(), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        $this->valueHolderd4368b1 = clone $this->valueHolderd4368b1;
    }

    public function __sleep()
    {
        $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, '__sleep', array(), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;

        return array('valueHolderd4368b1');
    }

    public function __wakeup()
    {
        unset($this->apiAttributes, $this->apiLeistungen, $this->level, $this->companies, $this->cheapestList, $this->bestFitList, $this->performanceList, $this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerd4368b1 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd4368b1;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd4368b1 && ($this->initializerd4368b1->__invoke($valueHolderd4368b1, $this, 'initializeProxy', array(), $this->initializerd4368b1) || 1) && $this->valueHolderd4368b1 = $valueHolderd4368b1;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd4368b1;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd4368b1;
    }


}
