<?php

class DocumentRepository_a0e4a4d extends \AppBundle\Repository\DocumentRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHoldera0e4a4d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0e4a4d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa0e4a4d = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getManagerMandate($userId, $typeId)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'getManagerMandate', array('userId' => $userId, 'typeId' => $typeId), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->getManagerMandate($userId, $typeId);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'clear', array(), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'findAll', array(), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'count', array('criteria' => $criteria), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'getClassName', array(), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'matching', array('criteria' => $criteria), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return $this->valueHoldera0e4a4d->matching($criteria);
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

        $instance->initializera0e4a4d = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHoldera0e4a4d) {
            $reflection = $reflection ?? new \ReflectionClass('AppBundle\\Repository\\DocumentRepository');
            $this->valueHoldera0e4a4d = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHoldera0e4a4d->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, '__get', ['name' => $name], $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        if (isset(self::$publicPropertiesa0e4a4d[$name])) {
            return $this->valueHoldera0e4a4d->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0e4a4d;

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

        $targetObject = $this->valueHoldera0e4a4d;
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
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0e4a4d;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHoldera0e4a4d;
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
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, '__isset', array('name' => $name), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0e4a4d;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera0e4a4d;
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
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, '__unset', array('name' => $name), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera0e4a4d;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldera0e4a4d;
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
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, '__clone', array(), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        $this->valueHoldera0e4a4d = clone $this->valueHoldera0e4a4d;
    }

    public function __sleep()
    {
        $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, '__sleep', array(), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;

        return array('valueHoldera0e4a4d');
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
        $this->initializera0e4a4d = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializera0e4a4d;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializera0e4a4d && ($this->initializera0e4a4d->__invoke($valueHoldera0e4a4d, $this, 'initializeProxy', array(), $this->initializera0e4a4d) || 1) && $this->valueHoldera0e4a4d = $valueHoldera0e4a4d;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera0e4a4d;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera0e4a4d;
    }


}
