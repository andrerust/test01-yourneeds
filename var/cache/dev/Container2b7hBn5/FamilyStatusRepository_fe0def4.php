<?php

class FamilyStatusRepository_fe0def4 extends \Main\UserBundle\Repository\FamilyStatusRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderfe0def4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfe0def4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfe0def4 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findByIsDefault()
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'findByIsDefault', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->findByIsDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function findById($id = null)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'findById', array('id' => $id), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->findById($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'getAll', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'clear', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'findAll', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'count', array('criteria' => $criteria), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'getClassName', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'matching', array('criteria' => $criteria), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return $this->valueHolderfe0def4->matching($criteria);
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

        $instance->initializerfe0def4 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderfe0def4) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\FamilyStatusRepository');
            $this->valueHolderfe0def4 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderfe0def4->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, '__get', ['name' => $name], $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        if (isset(self::$publicPropertiesfe0def4[$name])) {
            return $this->valueHolderfe0def4->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe0def4;

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

        $targetObject = $this->valueHolderfe0def4;
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
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe0def4;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderfe0def4;
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
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, '__isset', array('name' => $name), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe0def4;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfe0def4;
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
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, '__unset', array('name' => $name), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfe0def4;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfe0def4;
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
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, '__clone', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        $this->valueHolderfe0def4 = clone $this->valueHolderfe0def4;
    }

    public function __sleep()
    {
        $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, '__sleep', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;

        return array('valueHolderfe0def4');
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
        $this->initializerfe0def4 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerfe0def4;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerfe0def4 && ($this->initializerfe0def4->__invoke($valueHolderfe0def4, $this, 'initializeProxy', array(), $this->initializerfe0def4) || 1) && $this->valueHolderfe0def4 = $valueHolderfe0def4;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfe0def4;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfe0def4;
    }


}
