<?php

class TariffTargetGroupRepository_5c4d955 extends \Main\InsuranceBundle\Repository\TariffTargetGroupRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5c4d955 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c4d955 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5c4d955 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'clear', array(), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'findAll', array(), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'count', array('criteria' => $criteria), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'getClassName', array(), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'matching', array('criteria' => $criteria), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return $this->valueHolder5c4d955->matching($criteria);
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

        $instance->initializer5c4d955 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder5c4d955) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\TariffTargetGroupRepository');
            $this->valueHolder5c4d955 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder5c4d955->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, '__get', ['name' => $name], $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        if (isset(self::$publicProperties5c4d955[$name])) {
            return $this->valueHolder5c4d955->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4d955;

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

        $targetObject = $this->valueHolder5c4d955;
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
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4d955;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5c4d955;
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
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, '__isset', array('name' => $name), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4d955;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c4d955;
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
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, '__unset', array('name' => $name), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5c4d955;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5c4d955;
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
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, '__clone', array(), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        $this->valueHolder5c4d955 = clone $this->valueHolder5c4d955;
    }

    public function __sleep()
    {
        $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, '__sleep', array(), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;

        return array('valueHolder5c4d955');
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
        $this->initializer5c4d955 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5c4d955;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5c4d955 && ($this->initializer5c4d955->__invoke($valueHolder5c4d955, $this, 'initializeProxy', array(), $this->initializer5c4d955) || 1) && $this->valueHolder5c4d955 = $valueHolder5c4d955;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5c4d955;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5c4d955;
    }


}
