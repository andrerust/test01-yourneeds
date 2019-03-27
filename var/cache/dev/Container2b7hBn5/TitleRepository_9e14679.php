<?php

class TitleRepository_9e14679 extends \Main\UserBundle\Repository\TitleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder9e14679 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9e14679 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9e14679 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findByIsDefault()
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'findByIsDefault', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->findByIsDefault();
    }

    /**
     * {@inheritDoc}
     */
    public function findById($id = null)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'findById', array('id' => $id), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->findById($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'getAll', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'clear', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'findAll', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'count', array('criteria' => $criteria), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'getClassName', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'matching', array('criteria' => $criteria), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return $this->valueHolder9e14679->matching($criteria);
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

        $instance->initializer9e14679 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder9e14679) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\TitleRepository');
            $this->valueHolder9e14679 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder9e14679->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, '__get', ['name' => $name], $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        if (isset(self::$publicProperties9e14679[$name])) {
            return $this->valueHolder9e14679->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e14679;

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

        $targetObject = $this->valueHolder9e14679;
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
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e14679;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder9e14679;
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
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, '__isset', array('name' => $name), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e14679;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9e14679;
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
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, '__unset', array('name' => $name), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9e14679;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder9e14679;
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
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, '__clone', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        $this->valueHolder9e14679 = clone $this->valueHolder9e14679;
    }

    public function __sleep()
    {
        $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, '__sleep', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;

        return array('valueHolder9e14679');
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
        $this->initializer9e14679 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer9e14679;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer9e14679 && ($this->initializer9e14679->__invoke($valueHolder9e14679, $this, 'initializeProxy', array(), $this->initializer9e14679) || 1) && $this->valueHolder9e14679 = $valueHolder9e14679;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9e14679;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9e14679;
    }


}
