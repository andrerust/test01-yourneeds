<?php

class AchievementRepository_396864b extends \Main\UserBundle\Repository\AchievementRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder396864b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer396864b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties396864b = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findByUserId($id = null)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'findByUserId', array('id' => $id), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->findByUserId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'clear', array(), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'findAll', array(), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'count', array('criteria' => $criteria), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'getClassName', array(), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'matching', array('criteria' => $criteria), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return $this->valueHolder396864b->matching($criteria);
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

        $instance->initializer396864b = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder396864b) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\AchievementRepository');
            $this->valueHolder396864b = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder396864b->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, '__get', ['name' => $name], $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        if (isset(self::$publicProperties396864b[$name])) {
            return $this->valueHolder396864b->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder396864b;

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

        $targetObject = $this->valueHolder396864b;
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
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder396864b;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder396864b;
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
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, '__isset', array('name' => $name), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder396864b;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder396864b;
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
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, '__unset', array('name' => $name), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder396864b;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder396864b;
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
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, '__clone', array(), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        $this->valueHolder396864b = clone $this->valueHolder396864b;
    }

    public function __sleep()
    {
        $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, '__sleep', array(), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;

        return array('valueHolder396864b');
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
        $this->initializer396864b = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer396864b;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer396864b && ($this->initializer396864b->__invoke($valueHolder396864b, $this, 'initializeProxy', array(), $this->initializer396864b) || 1) && $this->valueHolder396864b = $valueHolder396864b;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder396864b;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder396864b;
    }


}
