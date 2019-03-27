<?php

class BenefitController_4b81a40 extends \Main\UserBundle\Controller\Web\BenefitController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder4b81a40 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4b81a40 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4b81a40 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function documentUploadSaveAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \AppBundle\Repository\DocumentRepository $damageMediaRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \Main\UserBundle\Repository\CityRepository $cityRepository, \Main\UserBundle\Repository\CountryRepository $countryRepository, \AppBundle\Repository\MediaRepository $mediaRepository, \AppBundle\Repository\MediaTypeRepository $mediaTypeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, 'documentUploadSaveAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository, 'damageMediaRepository' => $damageMediaRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository, 'cityRepository' => $cityRepository, 'countryRepository' => $countryRepository, 'mediaRepository' => $mediaRepository, 'mediaTypeRepository' => $mediaTypeRepository, 'logger' => $logger), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        return $this->valueHolder4b81a40->documentUploadSaveAction($request, $authorizationChecker, $userRepository, $damageRepository, $damageMediaRepository, $documentRepository, $documentTypeRepository, $cityRepository, $countryRepository, $mediaRepository, $mediaTypeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function benefitPartnerAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, 'benefitPartnerAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'logger' => $logger), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        return $this->valueHolder4b81a40->benefitPartnerAction($request, $authorizationChecker, $userRepository, $documentRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function benefitGreetingsAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, 'benefitGreetingsAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'logger' => $logger), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        return $this->valueHolder4b81a40->benefitGreetingsAction($request, $authorizationChecker, $userRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, 'setContainer', array('container' => $container), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        return $this->valueHolder4b81a40->setContainer($container);
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

        $instance->initializer4b81a40 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4b81a40) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Web\\BenefitController');
            $this->valueHolder4b81a40 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, '__get', ['name' => $name], $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        if (isset(self::$publicProperties4b81a40[$name])) {
            return $this->valueHolder4b81a40->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b81a40;

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

        $targetObject = $this->valueHolder4b81a40;
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
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b81a40;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder4b81a40;
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
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, '__isset', array('name' => $name), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b81a40;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4b81a40;
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
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, '__unset', array('name' => $name), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4b81a40;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4b81a40;
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
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, '__clone', array(), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        $this->valueHolder4b81a40 = clone $this->valueHolder4b81a40;
    }

    public function __sleep()
    {
        $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, '__sleep', array(), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;

        return array('valueHolder4b81a40');
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
        $this->initializer4b81a40 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer4b81a40;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer4b81a40 && ($this->initializer4b81a40->__invoke($valueHolder4b81a40, $this, 'initializeProxy', array(), $this->initializer4b81a40) || 1) && $this->valueHolder4b81a40 = $valueHolder4b81a40;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4b81a40;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4b81a40;
    }


}
