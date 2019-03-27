<?php

class TypeRepository_f970b92 extends \Main\InsuranceBundle\Repository\TypeRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderf970b92 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf970b92 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf970b92 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'clear', array(), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'findAll', array(), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'count', array('criteria' => $criteria), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'getClassName', array(), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'matching', array('criteria' => $criteria), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return $this->valueHolderf970b92->matching($criteria);
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

        $instance->initializerf970b92 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderf970b92) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\TypeRepository');
            $this->valueHolderf970b92 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderf970b92->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, '__get', ['name' => $name], $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        if (isset(self::$publicPropertiesf970b92[$name])) {
            return $this->valueHolderf970b92->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf970b92;

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

        $targetObject = $this->valueHolderf970b92;
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
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf970b92;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderf970b92;
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
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, '__isset', array('name' => $name), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf970b92;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf970b92;
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
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, '__unset', array('name' => $name), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf970b92;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderf970b92;
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
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, '__clone', array(), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        $this->valueHolderf970b92 = clone $this->valueHolderf970b92;
    }

    public function __sleep()
    {
        $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, '__sleep', array(), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;

        return array('valueHolderf970b92');
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
        $this->initializerf970b92 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerf970b92;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerf970b92 && ($this->initializerf970b92->__invoke($valueHolderf970b92, $this, 'initializeProxy', array(), $this->initializerf970b92) || 1) && $this->valueHolderf970b92 = $valueHolderf970b92;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf970b92;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf970b92;
    }


}
