<?php

class UserActivityRepository_d99711b extends \Main\UserBundle\Repository\UserActivityRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd99711b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd99711b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd99711b = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findAllByUserId($id = null)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'findAllByUserId', array('id' => $id), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->findAllByUserId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'clear', array(), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'findAll', array(), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'count', array('criteria' => $criteria), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'getClassName', array(), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'matching', array('criteria' => $criteria), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return $this->valueHolderd99711b->matching($criteria);
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

        $instance->initializerd99711b = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderd99711b) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\UserActivityRepository');
            $this->valueHolderd99711b = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderd99711b->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, '__get', ['name' => $name], $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        if (isset(self::$publicPropertiesd99711b[$name])) {
            return $this->valueHolderd99711b->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99711b;

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

        $targetObject = $this->valueHolderd99711b;
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
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99711b;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd99711b;
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
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, '__isset', array('name' => $name), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99711b;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd99711b;
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
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, '__unset', array('name' => $name), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd99711b;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd99711b;
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
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, '__clone', array(), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        $this->valueHolderd99711b = clone $this->valueHolderd99711b;
    }

    public function __sleep()
    {
        $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, '__sleep', array(), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;

        return array('valueHolderd99711b');
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
        $this->initializerd99711b = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd99711b;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd99711b && ($this->initializerd99711b->__invoke($valueHolderd99711b, $this, 'initializeProxy', array(), $this->initializerd99711b) || 1) && $this->valueHolderd99711b = $valueHolderd99711b;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd99711b;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd99711b;
    }


}
