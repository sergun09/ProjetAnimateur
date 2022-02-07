<?php

namespace ContainerFT7RxtD;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere555c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0a02 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5b6d2 = [
        
    ];

    public function getConnection()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getConnection', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getMetadataFactory', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getExpressionBuilder', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'beginTransaction', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getCache', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getCache();
    }

    public function transactional($func)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'transactional', array('func' => $func), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'wrapInTransaction', array('func' => $func), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'commit', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->commit();
    }

    public function rollback()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'rollback', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getClassMetadata', array('className' => $className), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'createQuery', array('dql' => $dql), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'createNamedQuery', array('name' => $name), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'createQueryBuilder', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'flush', array('entity' => $entity), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'clear', array('entityName' => $entityName), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->clear($entityName);
    }

    public function close()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'close', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->close();
    }

    public function persist($entity)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'persist', array('entity' => $entity), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'remove', array('entity' => $entity), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'refresh', array('entity' => $entity), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'detach', array('entity' => $entity), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'merge', array('entity' => $entity), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'contains', array('entity' => $entity), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getEventManager', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getConfiguration', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'isOpen', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getUnitOfWork', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getProxyFactory', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'initializeObject', array('obj' => $obj), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'getFilters', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'isFiltersStateClean', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'hasFilters', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return $this->valueHoldere555c->hasFilters();
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera0a02 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere555c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere555c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere555c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, '__get', ['name' => $name], $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        if (isset(self::$publicProperties5b6d2[$name])) {
            return $this->valueHoldere555c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere555c;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere555c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere555c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere555c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, '__isset', array('name' => $name), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere555c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere555c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, '__unset', array('name' => $name), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere555c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere555c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, '__clone', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        $this->valueHoldere555c = clone $this->valueHoldere555c;
    }

    public function __sleep()
    {
        $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, '__sleep', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;

        return array('valueHoldere555c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0a02 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0a02;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera0a02 && ($this->initializera0a02->__invoke($valueHoldere555c, $this, 'initializeProxy', array(), $this->initializera0a02) || 1) && $this->valueHoldere555c = $valueHoldere555c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere555c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere555c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
