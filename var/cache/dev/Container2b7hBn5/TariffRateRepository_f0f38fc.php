<?php

class TariffRateRepository_f0f38fc extends \Main\InsuranceBundle\Repository\TariffRateRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf0f38fc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf0f38fc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf0f38fc = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findRatesByTariffId($id = null)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'findRatesByTariffId', array('id' => $id), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->findRatesByTariffId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'clear', array(), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'findAll', array(), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'count', array('criteria' => $criteria), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'getClassName', array(), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'matching', array('criteria' => $criteria), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return $this->valueHolderf0f38fc->matching($criteria);
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

        unset($instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializerf0f38fc = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderf0f38fc) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\TariffRateRepository');
            $this->valueHolderf0f38fc = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderf0f38fc->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, '__get', ['name' => $name], $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        if (isset(self::$publicPropertiesf0f38fc[$name])) {
            return $this->valueHolderf0f38fc->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f38fc;

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

        $targetObject = $this->valueHolderf0f38fc;
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
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f38fc;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf0f38fc;
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
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, '__isset', array('name' => $name), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f38fc;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf0f38fc;
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
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, '__unset', array('name' => $name), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf0f38fc;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf0f38fc;
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
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, '__clone', array(), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        $this->valueHolderf0f38fc = clone $this->valueHolderf0f38fc;
    }

    public function __sleep()
    {
        $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, '__sleep', array(), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;

        return array('valueHolderf0f38fc');
    }

    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerf0f38fc = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf0f38fc;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf0f38fc && ($this->initializerf0f38fc->__invoke($valueHolderf0f38fc, $this, 'initializeProxy', array(), $this->initializerf0f38fc) || 1) && $this->valueHolderf0f38fc = $valueHolderf0f38fc;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf0f38fc;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf0f38fc;
    }


}
