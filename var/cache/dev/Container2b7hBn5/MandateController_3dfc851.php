<?php

class MandateController_3dfc851 extends \Main\UserBundle\Controller\Web\MandateController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder3dfc851 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3dfc851 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3dfc851 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function signMandateSaveAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, 'signMandateSaveAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentTypeRepository' => $documentTypeRepository, 'addressRepository' => $addressRepository, 'logger' => $logger), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        return $this->valueHolder3dfc851->signMandateSaveAction($id, $request, $authorizationChecker, $userRepository, $documentTypeRepository, $addressRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function signMandateAction($id = null, $type = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, 'signMandateAction', array('id' => $id, 'type' => $type, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'logger' => $logger), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        return $this->valueHolder3dfc851->signMandateAction($id, $type, $request, $authorizationChecker, $userRepository, $documentRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function managerSignMandateSaveAction(?string $type = null, ?string $tariffId = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, 'managerSignMandateSaveAction', array('type' => $type, 'tariffId' => $tariffId, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'documentTypeRepository' => $documentTypeRepository, 'addressRepository' => $addressRepository, 'logger' => $logger), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        return $this->valueHolder3dfc851->managerSignMandateSaveAction($type, $tariffId, $request, $authorizationChecker, $userRepository, $typeRepository, $documentTypeRepository, $addressRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function managerSignMandateAction($id = null, ?string $type = null, ?string $tariffId = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\TypeRepository $typeRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, 'managerSignMandateAction', array('id' => $id, 'type' => $type, 'tariffId' => $tariffId, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'typeRepository' => $typeRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository, 'logger' => $logger), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        return $this->valueHolder3dfc851->managerSignMandateAction($id, $type, $tariffId, $request, $authorizationChecker, $userRepository, $typeRepository, $documentRepository, $documentTypeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, 'setContainer', array('container' => $container), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        return $this->valueHolder3dfc851->setContainer($container);
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

        $instance->initializer3dfc851 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder3dfc851) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Controller\\Web\\MandateController');
            $this->valueHolder3dfc851 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, '__get', ['name' => $name], $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        if (isset(self::$publicProperties3dfc851[$name])) {
            return $this->valueHolder3dfc851->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfc851;

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

        $targetObject = $this->valueHolder3dfc851;
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
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfc851;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder3dfc851;
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
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, '__isset', array('name' => $name), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfc851;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3dfc851;
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
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, '__unset', array('name' => $name), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfc851;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder3dfc851;
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
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, '__clone', array(), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        $this->valueHolder3dfc851 = clone $this->valueHolder3dfc851;
    }

    public function __sleep()
    {
        $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, '__sleep', array(), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;

        return array('valueHolder3dfc851');
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
        $this->initializer3dfc851 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer3dfc851;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer3dfc851 && ($this->initializer3dfc851->__invoke($valueHolder3dfc851, $this, 'initializeProxy', array(), $this->initializer3dfc851) || 1) && $this->valueHolder3dfc851 = $valueHolder3dfc851;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3dfc851;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3dfc851;
    }


}
