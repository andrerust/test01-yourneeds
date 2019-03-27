<?php

class ProcessRepository_4f9961e extends \Main\InsuranceBundle\Repository\ProcessRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder4f9961e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4f9961e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4f9961e = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function findProcessByUserId($userId = null, $type = null, $contextType = null)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'findProcessByUserId', array('userId' => $userId, 'type' => $type, 'contextType' => $contextType), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->findProcessByUserId($userId, $type, $contextType);
    }

    /**
     * {@inheritDoc}
     */
    public function findDamageStructureByUserId($userId = null, $type = null)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'findDamageStructureByUserId', array('userId' => $userId, 'type' => $type), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->findDamageStructureByUserId($userId, $type);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'clear', array(), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'findAll', array(), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'count', array('criteria' => $criteria), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'getClassName', array(), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'matching', array('criteria' => $criteria), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return $this->valueHolder4f9961e->matching($criteria);
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

        $instance->initializer4f9961e = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder4f9961e) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\ProcessRepository');
            $this->valueHolder4f9961e = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder4f9961e->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, '__get', ['name' => $name], $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        if (isset(self::$publicProperties4f9961e[$name])) {
            return $this->valueHolder4f9961e->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f9961e;

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

        $targetObject = $this->valueHolder4f9961e;
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
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f9961e;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder4f9961e;
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
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, '__isset', array('name' => $name), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f9961e;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4f9961e;
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
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, '__unset', array('name' => $name), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4f9961e;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4f9961e;
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
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, '__clone', array(), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        $this->valueHolder4f9961e = clone $this->valueHolder4f9961e;
    }

    public function __sleep()
    {
        $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, '__sleep', array(), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;

        return array('valueHolder4f9961e');
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
        $this->initializer4f9961e = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer4f9961e;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer4f9961e && ($this->initializer4f9961e->__invoke($valueHolder4f9961e, $this, 'initializeProxy', array(), $this->initializer4f9961e) || 1) && $this->valueHolder4f9961e = $valueHolder4f9961e;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4f9961e;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4f9961e;
    }


}
