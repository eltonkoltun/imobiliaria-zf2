<?php

namespace Shift\Entity;

use Doctrine\ORM\Mapping as ORM;
use Shift\SM;

use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\Exception\InvalidArgumentException;

abstract class Entity implements InputFilterAwareInterface
{
    
    /**
     * Filters
     * 
     * @var InputFilter
     */
    protected $inputFilter = null;

    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set and validate field values
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public function __set($key, $value) 
    {
               
        $this->$key = $value;
    }

    /**
     * @param string $key
     * @return mixed 
     */
    public function __get($key) 
    {
        return $this->$key;
    }

    /**
     * Set all entity data based in an array with data
     *
     * @param array $data
     * @return void
     */
    public function setData($data)
    {
        foreach($data as $key => $value) {
            $this->__set($key, $value);
        }
    }

    /**
     * Return all entity data in array format
     *
     * @return array
     */
    public function getData()
    {
        $data = get_object_vars($this);
        unset($data['inputFilter']);
        unset($data['tableName']);
        unset($data['primaryKeyField']);
        return array_filter($data);
    }

    /**
     * Used by TableGateway
     *
     * @param array $data
     * @return void
     */
    public function exchangeArray($data)
    {
        $this->setData($data);
    }

    /**
     * Used by TableGateway
     *
     * @param array $data
     * @return void
     */
    public function getArrayCopy()
    {
        return $this->getData();
    }

    /**
     * @param InputFilterInterface $inputFilter
     * @return void
     */
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new EntityException("Not used");
    }

    /**
     * Entity filters
     *
     * @return InputFilter
     */
    public function getInputFilter() {}


    /**
     * Used by TableGateway
     *
     * @return array
     */
    public function toArray()
    {
        return $this->getData();
    }
}