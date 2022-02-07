<?php

namespace ContainerAzO7cQF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder94354 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref79a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa5b46 = [
        
    ];

    public function getConnection()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getConnection', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getMetadataFactory', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getExpressionBuilder', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'beginTransaction', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getCache', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getCache();
    }

    public function transactional($func)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'transactional', array('func' => $func), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'wrapInTransaction', array('func' => $func), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'commit', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->commit();
    }

    public function rollback()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'rollback', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getClassMetadata', array('className' => $className), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'createQuery', array('dql' => $dql), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'createNamedQuery', array('name' => $name), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'createQueryBuilder', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'flush', array('entity' => $entity), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'clear', array('entityName' => $entityName), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->clear($entityName);
    }

    public function close()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'close', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->close();
    }

    public function persist($entity)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'persist', array('entity' => $entity), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'remove', array('entity' => $entity), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'refresh', array('entity' => $entity), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'detach', array('entity' => $entity), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'merge', array('entity' => $entity), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getRepository', array('entityName' => $entityName), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'contains', array('entity' => $entity), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getEventManager', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getConfiguration', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'isOpen', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getUnitOfWork', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getProxyFactory', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'initializeObject', array('obj' => $obj), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'getFilters', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'isFiltersStateClean', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'hasFilters', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return $this->valueHolder94354->hasFilters();
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

        $instance->initializeref79a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder94354) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder94354 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder94354->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, '__get', ['name' => $name], $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        if (isset(self::$publicPropertiesa5b46[$name])) {
            return $this->valueHolder94354->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94354;

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

        $targetObject = $this->valueHolder94354;
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
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94354;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder94354;
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
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, '__isset', array('name' => $name), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94354;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder94354;
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
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, '__unset', array('name' => $name), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94354;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder94354;
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
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, '__clone', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        $this->valueHolder94354 = clone $this->valueHolder94354;
    }

    public function __sleep()
    {
        $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, '__sleep', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;

        return array('valueHolder94354');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref79a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref79a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref79a && ($this->initializeref79a->__invoke($valueHolder94354, $this, 'initializeProxy', array(), $this->initializeref79a) || 1) && $this->valueHolder94354 = $valueHolder94354;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder94354;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder94354;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
