<?php

class BenefitPartnerRepository_d257d0f extends \Main\UserBundle\Repository\BenefitPartnerRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolderd257d0f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd257d0f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd257d0f = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'clear', array(), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'findAll', array(), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'count', array('criteria' => $criteria), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'getClassName', array(), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'matching', array('criteria' => $criteria), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return $this->valueHolderd257d0f->matching($criteria);
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

        $instance->initializerd257d0f = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolderd257d0f) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\BenefitPartnerRepository');
            $this->valueHolderd257d0f = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolderd257d0f->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, '__get', ['name' => $name], $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        if (isset(self::$publicPropertiesd257d0f[$name])) {
            return $this->valueHolderd257d0f->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd257d0f;

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

        $targetObject = $this->valueHolderd257d0f;
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
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd257d0f;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolderd257d0f;
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
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, '__isset', array('name' => $name), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd257d0f;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd257d0f;
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
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, '__unset', array('name' => $name), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd257d0f;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolderd257d0f;
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
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, '__clone', array(), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        $this->valueHolderd257d0f = clone $this->valueHolderd257d0f;
    }

    public function __sleep()
    {
        $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, '__sleep', array(), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;

        return array('valueHolderd257d0f');
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
        $this->initializerd257d0f = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializerd257d0f;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializerd257d0f && ($this->initializerd257d0f->__invoke($valueHolderd257d0f, $this, 'initializeProxy', array(), $this->initializerd257d0f) || 1) && $this->valueHolderd257d0f = $valueHolderd257d0f;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd257d0f;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd257d0f;
    }


}
