<?php

namespace DoctrineORMModule\Proxy\__CG__\Filtros\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Filtro extends \Filtros\Entity\Filtro implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

        return parent::__set($name, $value);
    }



    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'nome', 'pai', 'filhos', 'id', 'cliente_id', 'criacao', 'alteracao', 'visivel', 'inputFilter');
        }

        return array('__isInitialized__', 'nome', 'pai', 'filhos', 'id', 'cliente_id', 'criacao', 'alteracao', 'visivel', 'inputFilter');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Filtro $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', array($nome));

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', array());

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setPai($pai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPai', array($pai));

        return parent::setPai($pai);
    }

    /**
     * {@inheritDoc}
     */
    public function getPai()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPai', array());

        return parent::getPai();
    }

    /**
     * {@inheritDoc}
     */
    public function addFilho(\Filtros\Entity\Filtro $filho)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFilho', array($filho));

        return parent::addFilho($filho);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFilho(\Filtros\Entity\Filtro $filho)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFilho', array($filho));

        return parent::removeFilho($filho);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilhos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilhos', array());

        return parent::getFilhos();
    }

    /**
     * {@inheritDoc}
     */
    public function getInputFilter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInputFilter', array());

        return parent::getInputFilter();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function defineTimestamps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'defineTimestamps', array());

        return parent::defineTimestamps();
    }

    /**
     * {@inheritDoc}
     */
    public function log()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'log', array());

        return parent::log();
    }

    /**
     * {@inheritDoc}
     */
    public function setClienteId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClienteId', array());

        return parent::setClienteId();
    }

    /**
     * {@inheritDoc}
     */
    public function getClienteId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClienteId', array());

        return parent::getClienteId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCriacao($criacao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCriacao', array($criacao));

        return parent::setCriacao($criacao);
    }

    /**
     * {@inheritDoc}
     */
    public function getCriacao($formatted = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCriacao', array($formatted));

        return parent::getCriacao($formatted);
    }

    /**
     * {@inheritDoc}
     */
    public function setAlteracao($alteracao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlteracao', array($alteracao));

        return parent::setAlteracao($alteracao);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlteracao($formatted = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlteracao', array($formatted));

        return parent::getAlteracao($formatted);
    }

    /**
     * {@inheritDoc}
     */
    public function setVisivel($visivel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisivel', array($visivel));

        return parent::setVisivel($visivel);
    }

    /**
     * {@inheritDoc}
     */
    public function isVisivel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisivel', array());

        return parent::isVisivel();
    }

    /**
     * {@inheritDoc}
     */
    public function getTableName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTableName', array());

        return parent::getTableName();
    }

    /**
     * {@inheritDoc}
     */
    public function setData($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setData', array($data));

        return parent::setData($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getData', array());

        return parent::getData();
    }

    /**
     * {@inheritDoc}
     */
    public function exchangeArray($data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'exchangeArray', array($data));

        return parent::exchangeArray($data);
    }

    /**
     * {@inheritDoc}
     */
    public function getArrayCopy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArrayCopy', array());

        return parent::getArrayCopy();
    }

    /**
     * {@inheritDoc}
     */
    public function setInputFilter(\Zend\InputFilter\InputFilterInterface $inputFilter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInputFilter', array($inputFilter));

        return parent::setInputFilter($inputFilter);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

}
