<?php

class ProcessTariffTrackerRepository_c3ae689 extends \Main\InsuranceBundle\Repository\ProcessTariffTrackerRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderc3ae689 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc3ae689 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc3ae689 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'clear', array(), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'findAll', array(), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'count', array('criteria' => $criteria), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'getClassName', array(), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'matching', array('criteria' => $criteria), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return $this->valueHolderc3ae689->matching($criteria);
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

        $instance->initializerc3ae689 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderc3ae689) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\ProcessTariffTrackerRepository');
            $this->valueHolderc3ae689 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderc3ae689->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, '__get', ['name' => $name], $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        if (isset(self::$publicPropertiesc3ae689[$name])) {
            return $this->valueHolderc3ae689->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae689;

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

        $targetObject = $this->valueHolderc3ae689;
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
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae689;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderc3ae689;
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
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, '__isset', array('name' => $name), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae689;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc3ae689;
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
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, '__unset', array('name' => $name), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc3ae689;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc3ae689;
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
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, '__clone', array(), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        $this->valueHolderc3ae689 = clone $this->valueHolderc3ae689;
    }

    public function __sleep()
    {
        $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, '__sleep', array(), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;

        return array('valueHolderc3ae689');
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
        $this->initializerc3ae689 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerc3ae689;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerc3ae689 && ($this->initializerc3ae689->__invoke($valueHolderc3ae689, $this, 'initializeProxy', array(), $this->initializerc3ae689) || 1) && $this->valueHolderc3ae689 = $valueHolderc3ae689;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc3ae689;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc3ae689;
    }


}
