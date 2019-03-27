<?php

class DamageRepository_d0a46d6 extends \Main\InsuranceBundle\Repository\DamageRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd0a46d6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd0a46d6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd0a46d6 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findDamageStructureByUserId($userId = null, $type = null)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'findDamageStructureByUserId', array('userId' => $userId, 'type' => $type), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->findDamageStructureByUserId($userId, $type);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'clear', array(), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'findAll', array(), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'count', array('criteria' => $criteria), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'getClassName', array(), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'matching', array('criteria' => $criteria), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return $this->valueHolderd0a46d6->matching($criteria);
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

        $instance->initializerd0a46d6 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderd0a46d6) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\DamageRepository');
            $this->valueHolderd0a46d6 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderd0a46d6->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, '__get', ['name' => $name], $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        if (isset(self::$publicPropertiesd0a46d6[$name])) {
            return $this->valueHolderd0a46d6->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0a46d6;

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

        $targetObject = $this->valueHolderd0a46d6;
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
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0a46d6;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd0a46d6;
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
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, '__isset', array('name' => $name), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0a46d6;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd0a46d6;
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
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, '__unset', array('name' => $name), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0a46d6;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd0a46d6;
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
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, '__clone', array(), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        $this->valueHolderd0a46d6 = clone $this->valueHolderd0a46d6;
    }

    public function __sleep()
    {
        $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, '__sleep', array(), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;

        return array('valueHolderd0a46d6');
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
        $this->initializerd0a46d6 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd0a46d6;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd0a46d6 && ($this->initializerd0a46d6->__invoke($valueHolderd0a46d6, $this, 'initializeProxy', array(), $this->initializerd0a46d6) || 1) && $this->valueHolderd0a46d6 = $valueHolderd0a46d6;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0a46d6;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd0a46d6;
    }


}
