<?php

namespace ContainerM6tpzWK;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder80546 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere4633 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e1b5 = [
        
    ];

    public function getConnection()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getConnection', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getMetadataFactory', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getExpressionBuilder', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'beginTransaction', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getCache', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getCache();
    }

    public function transactional($func)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'transactional', array('func' => $func), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->transactional($func);
    }

    public function commit()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'commit', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->commit();
    }

    public function rollback()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'rollback', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getClassMetadata', array('className' => $className), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'createQuery', array('dql' => $dql), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'createNamedQuery', array('name' => $name), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'createQueryBuilder', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'flush', array('entity' => $entity), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'clear', array('entityName' => $entityName), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->clear($entityName);
    }

    public function close()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'close', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->close();
    }

    public function persist($entity)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'persist', array('entity' => $entity), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'remove', array('entity' => $entity), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'refresh', array('entity' => $entity), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'detach', array('entity' => $entity), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'merge', array('entity' => $entity), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getRepository', array('entityName' => $entityName), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'contains', array('entity' => $entity), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getEventManager', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getConfiguration', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'isOpen', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getUnitOfWork', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getProxyFactory', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'initializeObject', array('obj' => $obj), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'getFilters', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'isFiltersStateClean', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'hasFilters', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return $this->valueHolder80546->hasFilters();
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

        $instance->initializere4633 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder80546) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder80546 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder80546->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, '__get', ['name' => $name], $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        if (isset(self::$publicProperties3e1b5[$name])) {
            return $this->valueHolder80546->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80546;

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

        $targetObject = $this->valueHolder80546;
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
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80546;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder80546;
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
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, '__isset', array('name' => $name), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80546;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder80546;
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
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, '__unset', array('name' => $name), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder80546;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder80546;
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
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, '__clone', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        $this->valueHolder80546 = clone $this->valueHolder80546;
    }

    public function __sleep()
    {
        $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, '__sleep', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;

        return array('valueHolder80546');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere4633 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere4633;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere4633 && ($this->initializere4633->__invoke($valueHolder80546, $this, 'initializeProxy', array(), $this->initializere4633) || 1) && $this->valueHolder80546 = $valueHolder80546;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder80546;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder80546;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
