<?php

class DamageDocumentRepository_267cdbf extends \Main\InsuranceBundle\Repository\DamageDocumentRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder267cdbf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer267cdbf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties267cdbf = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'clear', array(), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'findAll', array(), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'count', array('criteria' => $criteria), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'getClassName', array(), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'matching', array('criteria' => $criteria), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return $this->valueHolder267cdbf->matching($criteria);
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

        $instance->initializer267cdbf = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder267cdbf) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\InsuranceBundle\\Repository\\DamageDocumentRepository');
            $this->valueHolder267cdbf = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder267cdbf->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, '__get', ['name' => $name], $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        if (isset(self::$publicProperties267cdbf[$name])) {
            return $this->valueHolder267cdbf->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder267cdbf;

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

        $targetObject = $this->valueHolder267cdbf;
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
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder267cdbf;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder267cdbf;
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
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, '__isset', array('name' => $name), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder267cdbf;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder267cdbf;
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
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, '__unset', array('name' => $name), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder267cdbf;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder267cdbf;
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
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, '__clone', array(), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        $this->valueHolder267cdbf = clone $this->valueHolder267cdbf;
    }

    public function __sleep()
    {
        $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, '__sleep', array(), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;

        return array('valueHolder267cdbf');
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
        $this->initializer267cdbf = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer267cdbf;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer267cdbf && ($this->initializer267cdbf->__invoke($valueHolder267cdbf, $this, 'initializeProxy', array(), $this->initializer267cdbf) || 1) && $this->valueHolder267cdbf = $valueHolder267cdbf;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder267cdbf;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder267cdbf;
    }


}
