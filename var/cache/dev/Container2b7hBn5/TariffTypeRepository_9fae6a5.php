<?php

class TariffTypeRepository_9fae6a5 extends \Main\InsuranceBundle\Repository\TariffTypeRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9fae6a5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9fae6a5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9fae6a5 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findTypeById($id = null)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'findTypeById', array('id' => $id), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->findTypeById($id);
    }

    /**
     * {@inheritDoc}
     */
    public function findIdByShortName($type = null)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'findIdByShortName', array('type' => $type), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->findIdByShortName($type);
    }

    /**
     * {@inheritDoc}
     */
    public function findIdByIdentifier($identifier = null)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'findIdByIdentifier', array('identifier' => $identifier), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->findIdByIdentifier($identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'clear', array(), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'findAll', array(), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'count', array('criteria' => $criteria), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'getClassName', array(), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'matching', array('criteria' => $criteria), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return $this->valueHolder9fae6a5->matching($criteria);
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

        $instance->initializer9fae6a5 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder9fae6a5) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\TariffTypeRepository');
            $this->valueHolder9fae6a5 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder9fae6a5->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, '__get', ['name' => $name], $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        if (isset(self::$publicProperties9fae6a5[$name])) {
            return $this->valueHolder9fae6a5->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fae6a5;

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

        $targetObject = $this->valueHolder9fae6a5;
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
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fae6a5;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9fae6a5;
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
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, '__isset', array('name' => $name), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fae6a5;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9fae6a5;
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
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, '__unset', array('name' => $name), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9fae6a5;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9fae6a5;
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
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, '__clone', array(), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        $this->valueHolder9fae6a5 = clone $this->valueHolder9fae6a5;
    }

    public function __sleep()
    {
        $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, '__sleep', array(), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;

        return array('valueHolder9fae6a5');
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
        $this->initializer9fae6a5 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer9fae6a5;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer9fae6a5 && ($this->initializer9fae6a5->__invoke($valueHolder9fae6a5, $this, 'initializeProxy', array(), $this->initializer9fae6a5) || 1) && $this->valueHolder9fae6a5 = $valueHolder9fae6a5;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9fae6a5;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9fae6a5;
    }


}
