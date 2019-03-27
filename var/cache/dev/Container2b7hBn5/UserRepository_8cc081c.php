<?php

class UserRepository_8cc081c extends \Main\UserBundle\Repository\UserRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder8cc081c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8cc081c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8cc081c = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getUser($id = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'getUser', array('id' => $id), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->getUser($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getAllUsers()
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'getAllUsers', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->getAllUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function findAllActive()
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'findAllActive', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->findAllActive();
    }

    /**
     * {@inheritDoc}
     */
    public function findUserByEmail($email = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'findUserByEmail', array('email' => $email), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->findUserByEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserByEmail($email = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'getUserByEmail', array('email' => $email), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->getUserByEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function findSecurityUserByEmail($email = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'findSecurityUserByEmail', array('email' => $email), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->findSecurityUserByEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->createQueryBuilder($alias, $indexBy);
    }

    /**
     * {@inheritDoc}
     */
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->createResultSetMappingBuilder($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($queryName)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->createNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->createNativeNamedQuery($queryName);
    }

    /**
     * {@inheritDoc}
     */
    public function clear()
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'clear', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->clear();
    }

    /**
     * {@inheritDoc}
     */
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->find($id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'findAll', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->findAll();
    }

    /**
     * {@inheritDoc}
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->findOneBy($criteria, $orderBy);
    }

    /**
     * {@inheritDoc}
     */
    public function count(array $criteria)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'count', array('criteria' => $criteria), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->count($criteria);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, $arguments)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->__call($method, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function getClassName()
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'getClassName', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->getClassName();
    }

    /**
     * {@inheritDoc}
     */
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'matching', array('criteria' => $criteria), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return $this->valueHolder8cc081c->matching($criteria);
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

        $instance->initializer8cc081c = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    public function __construct(\Doctrine\Common\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder8cc081c) {
            $reflection = $reflection ?? new \ReflectionClass('Main\\UserBundle\\Repository\\UserRepository');
            $this->valueHolder8cc081c = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder8cc081c->__construct($registry);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, '__get', ['name' => $name], $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        if (isset(self::$publicProperties8cc081c[$name])) {
            return $this->valueHolder8cc081c->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cc081c;

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

        $targetObject = $this->valueHolder8cc081c;
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
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cc081c;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder8cc081c;
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
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, '__isset', array('name' => $name), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cc081c;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8cc081c;
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
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, '__unset', array('name' => $name), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8cc081c;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder8cc081c;
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
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, '__clone', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        $this->valueHolder8cc081c = clone $this->valueHolder8cc081c;
    }

    public function __sleep()
    {
        $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, '__sleep', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;

        return array('valueHolder8cc081c');
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
        $this->initializer8cc081c = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer8cc081c;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer8cc081c && ($this->initializer8cc081c->__invoke($valueHolder8cc081c, $this, 'initializeProxy', array(), $this->initializer8cc081c) || 1) && $this->valueHolder8cc081c = $valueHolder8cc081c;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8cc081c;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8cc081c;
    }


}
