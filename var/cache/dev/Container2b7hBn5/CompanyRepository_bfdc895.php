<?php

class CompanyRepository_bfdc895 extends \Main\InsuranceBundle\Repository\CompanyRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderbfdc895 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbfdc895 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbfdc895 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getAll()
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'getAll', array(), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->getAll();
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'clear', array(), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'findAll', array(), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'count', array('criteria' => $criteria), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'getClassName', array(), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'matching', array('criteria' => $criteria), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return $this->valueHolderbfdc895->matching($criteria);
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

        $instance->initializerbfdc895 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderbfdc895) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\CompanyRepository');
            $this->valueHolderbfdc895 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderbfdc895->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, '__get', ['name' => $name], $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        if (isset(self::$publicPropertiesbfdc895[$name])) {
            return $this->valueHolderbfdc895->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfdc895;

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

        $targetObject = $this->valueHolderbfdc895;
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
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfdc895;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderbfdc895;
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
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, '__isset', array('name' => $name), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfdc895;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbfdc895;
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
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, '__unset', array('name' => $name), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbfdc895;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderbfdc895;
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
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, '__clone', array(), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        $this->valueHolderbfdc895 = clone $this->valueHolderbfdc895;
    }

    public function __sleep()
    {
        $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, '__sleep', array(), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;

        return array('valueHolderbfdc895');
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
        $this->initializerbfdc895 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerbfdc895;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerbfdc895 && ($this->initializerbfdc895->__invoke($valueHolderbfdc895, $this, 'initializeProxy', array(), $this->initializerbfdc895) || 1) && $this->valueHolderbfdc895 = $valueHolderbfdc895;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbfdc895;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbfdc895;
    }


}
