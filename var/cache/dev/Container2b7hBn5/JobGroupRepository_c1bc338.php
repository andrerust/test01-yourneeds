<?php

class JobGroupRepository_c1bc338 extends \Main\UserBundle\Repository\JobGroupRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderc1bc338 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc1bc338 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc1bc338 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findByIsDefault()
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'findByIsDefault', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->findByIsDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function findById($id = null)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'findById', array('id' => $id), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->findById($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'getAll', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'clear', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'findAll', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'count', array('criteria' => $criteria), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'getClassName', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'matching', array('criteria' => $criteria), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return $this->valueHolderc1bc338->matching($criteria);
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

        $instance->initializerc1bc338 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderc1bc338) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\JobGroupRepository');
            $this->valueHolderc1bc338 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderc1bc338->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, '__get', ['name' => $name], $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        if (isset(self::$publicPropertiesc1bc338[$name])) {
            return $this->valueHolderc1bc338->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1bc338;

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

        $targetObject = $this->valueHolderc1bc338;
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
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1bc338;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderc1bc338;
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
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, '__isset', array('name' => $name), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1bc338;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc1bc338;
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
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, '__unset', array('name' => $name), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc1bc338;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderc1bc338;
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
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, '__clone', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        $this->valueHolderc1bc338 = clone $this->valueHolderc1bc338;
    }

    public function __sleep()
    {
        $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, '__sleep', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;

        return array('valueHolderc1bc338');
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
        $this->initializerc1bc338 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerc1bc338;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerc1bc338 && ($this->initializerc1bc338->__invoke($valueHolderc1bc338, $this, 'initializeProxy', array(), $this->initializerc1bc338) || 1) && $this->valueHolderc1bc338 = $valueHolderc1bc338;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc1bc338;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc1bc338;
    }


}
