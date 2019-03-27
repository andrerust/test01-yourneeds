<?php

class StructureRepository_dba02d8 extends \Main\InsuranceBundle\Repository\StructureRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderdba02d8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerdba02d8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdba02d8 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findStructureByUserId($userId = null, $type = null)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'findStructureByUserId', array('userId' => $userId, 'type' => $type), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->findStructureByUserId($userId, $type);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'clear', array(), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'findAll', array(), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'count', array('criteria' => $criteria), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'getClassName', array(), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'matching', array('criteria' => $criteria), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return $this->valueHolderdba02d8->matching($criteria);
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

        $instance->initializerdba02d8 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderdba02d8) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\StructureRepository');
            $this->valueHolderdba02d8 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderdba02d8->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, '__get', ['name' => $name], $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        if (isset(self::$publicPropertiesdba02d8[$name])) {
            return $this->valueHolderdba02d8->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba02d8;

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

        $targetObject = $this->valueHolderdba02d8;
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
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba02d8;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderdba02d8;
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
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, '__isset', array('name' => $name), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba02d8;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderdba02d8;
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
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, '__unset', array('name' => $name), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdba02d8;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderdba02d8;
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
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, '__clone', array(), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        $this->valueHolderdba02d8 = clone $this->valueHolderdba02d8;
    }

    public function __sleep()
    {
        $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, '__sleep', array(), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;

        return array('valueHolderdba02d8');
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
        $this->initializerdba02d8 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerdba02d8;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerdba02d8 && ($this->initializerdba02d8->__invoke($valueHolderdba02d8, $this, 'initializeProxy', array(), $this->initializerdba02d8) || 1) && $this->valueHolderdba02d8 = $valueHolderdba02d8;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdba02d8;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdba02d8;
    }


}
