<?php

class ManagerController_abaa3f6 extends \Main\UserBundle\Controller\Web\ManagerController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderabaa3f6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerabaa3f6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesabaa3f6 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function editManagerAction($id = null, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'editManagerAction', array('id' => $id, 'userRepository' => $userRepository, 'activityRepository' => $activityRepository, 'request' => $request), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->editManagerAction($id, $userRepository, $activityRepository, $request);
    }

    /**
     * {@inheritDoc}
     */
    public function managerTypeShowApplicationAction(string $type = '', $tariffId = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository $processTariffTrackerRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'managerTypeShowApplicationAction', array('type' => $type, 'tariffId' => $tariffId, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'structureRepository' => $structureRepository, 'processTariffTrackerRepository' => $processTariffTrackerRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->managerTypeShowApplicationAction($type, $tariffId, $request, $authorizationChecker, $userRepository, $typeRepository, $structureRepository, $processTariffTrackerRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function savePaymentAction(string $type = '', $payment = null, $tariffId = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository $processTariffTrackerRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'savePaymentAction', array('type' => $type, 'payment' => $payment, 'tariffId' => $tariffId, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'processTariffTrackerRepository' => $processTariffTrackerRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->savePaymentAction($type, $payment, $tariffId, $request, $authorizationChecker, $userRepository, $typeRepository, $processTariffTrackerRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function choosePaymentAction(string $type = '', $tariffId = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository $processTariffTrackerRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'choosePaymentAction', array('type' => $type, 'tariffId' => $tariffId, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'processTariffTrackerRepository' => $processTariffTrackerRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->choosePaymentAction($type, $tariffId, $request, $authorizationChecker, $userRepository, $typeRepository, $processTariffTrackerRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function surveyTypeSaveAction(string $type = '', \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'surveyTypeSaveAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'typeRepository' => $typeRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->surveyTypeSaveAction($type, $request, $authorizationChecker, $userRepository, $structureRepository, $typeRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function surveyTypeDoAction(string $type = '', \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'surveyTypeDoAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'typeRepository' => $typeRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->surveyTypeDoAction($type, $request, $authorizationChecker, $userRepository, $structureRepository, $typeRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function chooseSurveyAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\StructureRepository $structureRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'chooseSurveyAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'structureRepository' => $structureRepository, 'typeRepository' => $typeRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->chooseSurveyAction($request, $authorizationChecker, $userRepository, $structureRepository, $typeRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function personalDataAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'personalDataAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->personalDataAction($request, $authorizationChecker, $userRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function profileHelpAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'profileHelpAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->profileHelpAction($request, $authorizationChecker, $userRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function profileCheckAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'profileCheckAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->profileCheckAction($request, $authorizationChecker, $userRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function profileAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\ProcessRepository $processRepository, \Main\InsuranceBundle\Repository\ProcessStatusRepository $processStatusRepository, \Main\InsuranceBundle\Repository\ProcessTypeRepository $processTypeRepository, \Main\InsuranceBundle\Repository\ProcessActivityRepository $processActivityRepository, \Main\UserBundle\Repository\ActivityRepository $activityRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'profileAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'processRepository' => $processRepository, 'processStatusRepository' => $processStatusRepository, 'processTypeRepository' => $processTypeRepository, 'processActivityRepository' => $processActivityRepository, 'activityRepository' => $activityRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->profileAction($request, $authorizationChecker, $userRepository, $processRepository, $processStatusRepository, $processTypeRepository, $processActivityRepository, $activityRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function greetingsAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'greetingsAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'logger' => $logger), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->greetingsAction($request, $authorizationChecker, $userRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'setContainer', array('container' => $container), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return $this->valueHolderabaa3f6->setContainer($container);
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

        $instance->initializerabaa3f6 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderabaa3f6) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Web\\ManagerController');
            $this->valueHolderabaa3f6 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, '__get', ['name' => $name], $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        if (isset(self::$publicPropertiesabaa3f6[$name])) {
            return $this->valueHolderabaa3f6->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabaa3f6;

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

        $targetObject = $this->valueHolderabaa3f6;
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
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabaa3f6;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderabaa3f6;
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
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, '__isset', array('name' => $name), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabaa3f6;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderabaa3f6;
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
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, '__unset', array('name' => $name), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabaa3f6;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderabaa3f6;
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
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, '__clone', array(), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        $this->valueHolderabaa3f6 = clone $this->valueHolderabaa3f6;
    }

    public function __sleep()
    {
        $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, '__sleep', array(), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;

        return array('valueHolderabaa3f6');
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
        $this->initializerabaa3f6 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerabaa3f6;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerabaa3f6 && ($this->initializerabaa3f6->__invoke($valueHolderabaa3f6, $this, 'initializeProxy', array(), $this->initializerabaa3f6) || 1) && $this->valueHolderabaa3f6 = $valueHolderabaa3f6;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderabaa3f6;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderabaa3f6;
    }


}
