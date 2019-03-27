<?php

class DocumentController_cb008ee extends \AppBundle\Controller\DocumentController implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldercb008ee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercb008ee = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescb008ee = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function documentUploadSaveAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \Main\InsuranceBundle\Repository\DamageMediaRepository $damageMediaRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \AppBundle\Repository\DocumentTypeRepository $documentTypeRepository, \AppBundle\Repository\MediaRepository $mediaRepository, \AppBundle\Repository\MediaTypeRepository $mediaTypeRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'documentUploadSaveAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'damageRepository' => $damageRepository, 'damageMediaRepository' => $damageMediaRepository, 'documentRepository' => $documentRepository, 'documentTypeRepository' => $documentTypeRepository, 'mediaRepository' => $mediaRepository, 'mediaTypeRepository' => $mediaTypeRepository, 'logger' => $logger), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->documentUploadSaveAction($request, $authorizationChecker, $userRepository, $damageRepository, $damageMediaRepository, $documentRepository, $documentTypeRepository, $mediaRepository, $mediaTypeRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function documentUploadAction(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'documentUploadAction', array('request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'logger' => $logger), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->documentUploadAction($request, $authorizationChecker, $userRepository, $documentRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function damageResultPdfSendAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository, \Main\InsuranceBundle\Repository\DamageRepository $damageRepository, \Main\InsuranceBundle\Repository\DamageMediaRepository $damageMediaRepository, \Main\InsuranceBundle\Repository\DamageDocumentRepository $damageDocumentRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'damageResultPdfSendAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository, 'damageRepository' => $damageRepository, 'damageMediaRepository' => $damageMediaRepository, 'damageDocumentRepository' => $damageDocumentRepository, 'logger' => $logger), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->damageResultPdfSendAction($id, $request, $authorizationChecker, $userRepository, $documentRepository, $damageRepository, $damageMediaRepository, $damageDocumentRepository, $logger);
    }

    /**
     * {@inheritDoc}
     */
    public function damageResultPdfDownloadAction($id = null, \Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker, \Main\UserBundle\Repository\UserRepository $userRepository, \AppBundle\Repository\DocumentRepository $documentRepository)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'damageResultPdfDownloadAction', array('id' => $id, 'request' => $request, 'authorizationChecker' => $authorizationChecker, 'userRepository' => $userRepository, 'documentRepository' => $documentRepository), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->damageResultPdfDownloadAction($id, $request, $authorizationChecker, $userRepository, $documentRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function managerDocumentDownloadAction($pathId = null, $documentName = null)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'managerDocumentDownloadAction', array('pathId' => $pathId, 'documentName' => $documentName), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->managerDocumentDownloadAction($pathId, $documentName);
    }

    /**
     * {@inheritDoc}
     */
    public function damageResultPdfAction($id = null, $type = null, \Main\UserBundle\Repository\UserRepository $userRepository, \Main\UserBundle\Repository\TitleRepository $titleRepository, \Main\UserBundle\Repository\AddressRepository $addressRepository)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'damageResultPdfAction', array('id' => $id, 'type' => $type, 'userRepository' => $userRepository, 'titleRepository' => $titleRepository, 'addressRepository' => $addressRepository), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->damageResultPdfAction($id, $type, $userRepository, $titleRepository, $addressRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function pdfResultMandateAction($id = null, \Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'pdfResultMandateAction', array('id' => $id, 'request' => $request), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->pdfResultMandateAction($id, $request);
    }

    /**
     * {@inheritDoc}
     */
    public function pdfResultPdfAAction($id = null, \Main\InsuranceBundle\Repository\TariffRepository $tariffRepository, \Main\InsuranceBundle\Repository\TargetGroupRepository $targetGroupRepository, \Main\InsuranceBundle\Repository\TariffRateRepository $tariffRateRepository, \Main\InsuranceBundle\Repository\TariffTypeRepository $tariffTypeRepository)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'pdfResultPdfAAction', array('id' => $id, 'tariffRepository' => $tariffRepository, 'targetGroupRepository' => $targetGroupRepository, 'tariffRateRepository' => $tariffRateRepository, 'tariffTypeRepository' => $tariffTypeRepository), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->pdfResultPdfAAction($id, $tariffRepository, $targetGroupRepository, $tariffRateRepository, $tariffTypeRepository);
    }

    /**
     * {@inheritDoc}
     */
    public function setContainer(?\Symfony\Component\DependencyInjection\ContainerInterface $container = null)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'setContainer', array('container' => $container), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return $this->valueHoldercb008ee->setContainer($container);
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

        $instance->initializercb008ee = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldercb008ee) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Controller\\DocumentController');
            $this->valueHoldercb008ee = $reflection->newInstanceWithoutConstructor();
        unset($this->errorList, $this->hasErrors, $this->test, $this->parser, $this->tariffMap, $this->tariffReadabilityMap, $this->type, $this->logger, $this->databaseAccessor, $this->environment, $this->user, $this->optionalUser, $this->validTypes, $this->apiTypeMapping, $this->errors, $this->container);

        }
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, '__get', ['name' => $name], $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        if (isset(self::$publicPropertiescb008ee[$name])) {
            return $this->valueHoldercb008ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb008ee;

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

        $targetObject = $this->valueHoldercb008ee;
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
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb008ee;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldercb008ee;
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
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, '__isset', array('name' => $name), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb008ee;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb008ee;
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
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, '__unset', array('name' => $name), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercb008ee;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldercb008ee;
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
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, '__clone', array(), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        $this->valueHoldercb008ee = clone $this->valueHoldercb008ee;
    }

    public function __sleep()
    {
        $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, '__sleep', array(), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;

        return array('valueHoldercb008ee');
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
        $this->initializercb008ee = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializercb008ee;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializercb008ee && ($this->initializercb008ee->__invoke($valueHoldercb008ee, $this, 'initializeProxy', array(), $this->initializercb008ee) || 1) && $this->valueHoldercb008ee = $valueHoldercb008ee;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercb008ee;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercb008ee;
    }


}
