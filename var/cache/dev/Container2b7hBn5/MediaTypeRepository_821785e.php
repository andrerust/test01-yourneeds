<?php

class MediaTypeRepository_821785e extends \AppBundle\Repository\MediaTypeRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder821785e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer821785e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties821785e = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'clear', array(), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'findAll', array(), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'count', array('criteria' => $criteria), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'getClassName', array(), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'matching', array('criteria' => $criteria), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return $this->valueHolder821785e->matching($criteria);
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

        $instance->initializer821785e = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder821785e) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\MediaTypeRepository');
            $this->valueHolder821785e = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder821785e->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, '__get', ['name' => $name], $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        if (isset(self::$publicProperties821785e[$name])) {
            return $this->valueHolder821785e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder821785e;

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

        $targetObject = $this->valueHolder821785e;
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
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder821785e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder821785e;
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
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, '__isset', array('name' => $name), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder821785e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder821785e;
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
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, '__unset', array('name' => $name), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder821785e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder821785e;
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
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, '__clone', array(), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        $this->valueHolder821785e = clone $this->valueHolder821785e;
    }

    public function __sleep()
    {
        $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, '__sleep', array(), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;

        return array('valueHolder821785e');
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
        $this->initializer821785e = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer821785e;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer821785e && ($this->initializer821785e->__invoke($valueHolder821785e, $this, 'initializeProxy', array(), $this->initializer821785e) || 1) && $this->valueHolder821785e = $valueHolder821785e;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder821785e;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder821785e;
    }


}
