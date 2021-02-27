<?php

namespace ContainerEd7U6dq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8adf4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer858af = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties19bd5 = [
        
    ];

    public function getConnection()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getConnection', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getMetadataFactory', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getExpressionBuilder', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'beginTransaction', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getCache', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'transactional', array('func' => $func), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->transactional($func);
    }

    public function commit()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'commit', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->commit();
    }

    public function rollback()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'rollback', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getClassMetadata', array('className' => $className), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'createQuery', array('dql' => $dql), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'createNamedQuery', array('name' => $name), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'createQueryBuilder', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'flush', array('entity' => $entity), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'clear', array('entityName' => $entityName), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->clear($entityName);
    }

    public function close()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'close', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->close();
    }

    public function persist($entity)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'persist', array('entity' => $entity), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'remove', array('entity' => $entity), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'refresh', array('entity' => $entity), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'detach', array('entity' => $entity), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'merge', array('entity' => $entity), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'contains', array('entity' => $entity), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getEventManager', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getConfiguration', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'isOpen', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getUnitOfWork', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getProxyFactory', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'initializeObject', array('obj' => $obj), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'getFilters', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'isFiltersStateClean', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'hasFilters', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return $this->valueHolder8adf4->hasFilters();
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

        $instance->initializer858af = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8adf4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8adf4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8adf4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, '__get', ['name' => $name], $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        if (isset(self::$publicProperties19bd5[$name])) {
            return $this->valueHolder8adf4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8adf4;

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

        $targetObject = $this->valueHolder8adf4;
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
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8adf4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8adf4;
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
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, '__isset', array('name' => $name), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8adf4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8adf4;
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
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, '__unset', array('name' => $name), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8adf4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8adf4;
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
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, '__clone', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        $this->valueHolder8adf4 = clone $this->valueHolder8adf4;
    }

    public function __sleep()
    {
        $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, '__sleep', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;

        return array('valueHolder8adf4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer858af = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer858af;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer858af && ($this->initializer858af->__invoke($valueHolder8adf4, $this, 'initializeProxy', array(), $this->initializer858af) || 1) && $this->valueHolder8adf4 = $valueHolder8adf4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8adf4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8adf4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
