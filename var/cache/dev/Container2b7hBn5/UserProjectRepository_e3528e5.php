<?php

class UserProjectRepository_e3528e5 extends \Main\UserBundle\Repository\UserProjectRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldere3528e5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3528e5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese3528e5 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getUserProjectId($userId = null)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'getUserProjectId', array('userId' => $userId), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->getUserProjectId($userId);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'clear', array(), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'findAll', array(), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'count', array('criteria' => $criteria), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'getClassName', array(), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'matching', array('criteria' => $criteria), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return $this->valueHoldere3528e5->matching($criteria);
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

        $instance->initializere3528e5 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldere3528e5) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\UserProjectRepository');
            $this->valueHoldere3528e5 = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldere3528e5->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, '__get', ['name' => $name], $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        if (isset(self::$publicPropertiese3528e5[$name])) {
            return $this->valueHoldere3528e5->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3528e5;

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

        $targetObject = $this->valueHoldere3528e5;
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
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3528e5;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldere3528e5;
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
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, '__isset', array('name' => $name), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3528e5;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere3528e5;
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
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, '__unset', array('name' => $name), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3528e5;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldere3528e5;
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
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, '__clone', array(), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        $this->valueHoldere3528e5 = clone $this->valueHoldere3528e5;
    }

    public function __sleep()
    {
        $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, '__sleep', array(), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;

        return array('valueHoldere3528e5');
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
        $this->initializere3528e5 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializere3528e5;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializere3528e5 && ($this->initializere3528e5->__invoke($valueHoldere3528e5, $this, 'initializeProxy', array(), $this->initializere3528e5) || 1) && $this->valueHoldere3528e5 = $valueHoldere3528e5;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3528e5;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3528e5;
    }


}
