<?php

namespace ContainerVatGb0R;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfd76f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer075fd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties87a1b = [
        
    ];

    public function getConnection()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getConnection', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getMetadataFactory', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getExpressionBuilder', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'beginTransaction', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getCache', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'transactional', array('func' => $func), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'commit', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->commit();
    }

    public function rollback()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'rollback', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getClassMetadata', array('className' => $className), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'createQuery', array('dql' => $dql), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'createNamedQuery', array('name' => $name), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'createQueryBuilder', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'flush', array('entity' => $entity), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'clear', array('entityName' => $entityName), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->clear($entityName);
    }

    public function close()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'close', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->close();
    }

    public function persist($entity)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'persist', array('entity' => $entity), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'remove', array('entity' => $entity), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'refresh', array('entity' => $entity), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'detach', array('entity' => $entity), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'merge', array('entity' => $entity), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'contains', array('entity' => $entity), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getEventManager', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getConfiguration', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'isOpen', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getUnitOfWork', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getProxyFactory', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'initializeObject', array('obj' => $obj), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'getFilters', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'isFiltersStateClean', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'hasFilters', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return $this->valueHolderfd76f->hasFilters();
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

        $instance->initializer075fd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfd76f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfd76f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfd76f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, '__get', ['name' => $name], $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        if (isset(self::$publicProperties87a1b[$name])) {
            return $this->valueHolderfd76f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd76f;

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

        $targetObject = $this->valueHolderfd76f;
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
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd76f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfd76f;
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
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, '__isset', array('name' => $name), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd76f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfd76f;
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
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, '__unset', array('name' => $name), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfd76f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfd76f;
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
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, '__clone', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        $this->valueHolderfd76f = clone $this->valueHolderfd76f;
    }

    public function __sleep()
    {
        $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, '__sleep', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;

        return array('valueHolderfd76f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer075fd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer075fd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer075fd && ($this->initializer075fd->__invoke($valueHolderfd76f, $this, 'initializeProxy', array(), $this->initializer075fd) || 1) && $this->valueHolderfd76f = $valueHolderfd76f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfd76f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfd76f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
