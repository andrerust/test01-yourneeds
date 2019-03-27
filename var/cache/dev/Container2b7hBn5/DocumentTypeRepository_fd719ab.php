<?php

class DocumentTypeRepository_fd719ab extends \AppBundle\Repository\DocumentTypeRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderfd719ab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfd719ab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfd719ab = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'clear', array(), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'findAll', array(), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'count', array('criteria' => $criteria), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'getClassName', array(), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'matching', array('criteria' => $criteria), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return $this->valueHolderfd719ab->matching($criteria);
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

        $instance->initializerfd719ab = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderfd719ab) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\DocumentTypeRepository');
            $this->valueHolderfd719ab = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderfd719ab->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, '__get', ['name' => $name], $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        if (isset(self::$publicPropertiesfd719ab[$name])) {
            return $this->valueHolderfd719ab->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd719ab;

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

        $targetObject = $this->valueHolderfd719ab;
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
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd719ab;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderfd719ab;
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
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, '__isset', array('name' => $name), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd719ab;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfd719ab;
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
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, '__unset', array('name' => $name), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd719ab;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderfd719ab;
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
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, '__clone', array(), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        $this->valueHolderfd719ab = clone $this->valueHolderfd719ab;
    }

    public function __sleep()
    {
        $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, '__sleep', array(), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;

        return array('valueHolderfd719ab');
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
        $this->initializerfd719ab = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerfd719ab;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerfd719ab && ($this->initializerfd719ab->__invoke($valueHolderfd719ab, $this, 'initializeProxy', array(), $this->initializerfd719ab) || 1) && $this->valueHolderfd719ab = $valueHolderfd719ab;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd719ab;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd719ab;
    }


}
