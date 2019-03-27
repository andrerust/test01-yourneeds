<?php

class DamageReportController_3995969 extends \Main\InsuranceBundle\Controller\DamageReportController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3995969 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3995969 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3995969 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function logMapStructure($array, \Psr\Log\LoggerInterface $logger, int $level)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'logMapStructure', array('array' => $array, 'logger' => $logger, 'level' => $level), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->logMapStructure($array, $logger, $level);
    }

    /**
     * {@inheritDoc}
     */
    public function damageReportDoUploadAction($type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \AppBundle\Repository\MediaRepository $mediaRepository, \AppBundle\Repository\MediaTypeRepository $mediaTypeRepository, \Main\InsuranceBundle\Repository\DamageMediaRepository $damageMediaRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Main\UserBundle\Repository\BankAccountRepository $bankAccountRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'damageReportDoUploadAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'damageRepository' => $damageRepository, 'mediaRepository' => $mediaRepository, 'mediaTypeRepository' => $mediaTypeRepository, 'damageMediaRepository' => $damageMediaRepository, 'addressRepository' => $addressRepository, 'bankAccountRepository' => $bankAccountRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository, 'logger' => $logger), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->damageReportDoUploadAction($type, $request, $authorizationChecker, $userRepository, $typeRepository, $damageRepository, $mediaRepository, $mediaTypeRepository, $damageMediaRepository, $addressRepository, $bankAccountRepository, $documentRepository, $documentTypeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function damageDecisionSurveyAction(?string $type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'damageDecisionSurveyAction', array('type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository, 'typeRepository' => $typeRepository, 'logger' => $logger), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->damageDecisionSurveyAction($type, $request, $authorizationChecker, $userRepository, $damageRepository, $typeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function damageDecisionAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'damageDecisionAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->damageDecisionAction($request, $authorizationChecker, $userRepository, $damageRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function damageResultPdfSendAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \Main\InsuranceBundle\Repository\DamageMediaRepository $damageMediaRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'damageResultPdfSendAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository, 'damageMediaRepository' => $damageMediaRepository, 'logger' => $logger), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->damageResultPdfSendAction($id, $request, $authorizationChecker, $userRepository, $damageRepository, $damageMediaRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function damageResultPdfDownloadAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'damageResultPdfDownloadAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->damageResultPdfDownloadAction($id, $request, $authorizationChecker, $userRepository, $damageRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function damagesAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \Main\InsuranceBundle\Repository\DamageDocumentRepository $damageDocumentRepository)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'damagesAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'damageRepository' => $damageRepository, 'damageDocumentRepository' => $damageDocumentRepository), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->damagesAction($request, $authorizationChecker, $userRepository, $documentRepository, $damageRepository, $damageDocumentRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'setContainer', array('container' => $container), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return $this->valueHolder3995969->setContainer($container);
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

        $instance->initializer3995969 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3995969) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Controller\\DamageReportController');
            $this->valueHolder3995969 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, '__get', ['name' => $name], $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        if (isset(self::$publicProperties3995969[$name])) {
            return $this->valueHolder3995969->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3995969;

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

        $targetObject = $this->valueHolder3995969;
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
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3995969;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3995969;
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
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, '__isset', array('name' => $name), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3995969;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3995969;
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
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, '__unset', array('name' => $name), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3995969;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3995969;
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
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, '__clone', array(), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        $this->valueHolder3995969 = clone $this->valueHolder3995969;
    }

    public function __sleep()
    {
        $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, '__sleep', array(), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;

        return array('valueHolder3995969');
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
        $this->initializer3995969 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3995969;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3995969 && ($this->initializer3995969->__invoke($valueHolder3995969, $this, 'initializeProxy', array(), $this->initializer3995969) || 1) && $this->valueHolder3995969 = $valueHolder3995969;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3995969;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3995969;
    }


}
