<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPain001Tran ArrayType
 * @subpackage Arrays
 */
class ArrayOfPain001Tran extends AbstractStructArrayBase
{
    /**
     * The Pain001Tran
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Pain001Tran[]
     */
    public $Pain001Tran;
    /**
     * Constructor method for ArrayOfPain001Tran
     * @uses ArrayOfPain001Tran::setPain001Tran()
     * @param \StructType\Pain001Tran[] $pain001Tran
     */
    public function __construct(array $pain001Tran = array())
    {
        $this
            ->setPain001Tran($pain001Tran);
    }
    /**
     * Get Pain001Tran value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Pain001Tran[]|null
     */
    public function getPain001Tran()
    {
        return isset($this->Pain001Tran) ? $this->Pain001Tran : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPain001Tran method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPain001Tran method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePain001TranForArrayConstraintsFromSetPain001Tran(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPain001TranPain001TranItem) {
            // validation for constraint: itemType
            if (!$arrayOfPain001TranPain001TranItem instanceof \StructType\Pain001Tran) {
                $invalidValues[] = is_object($arrayOfPain001TranPain001TranItem) ? get_class($arrayOfPain001TranPain001TranItem) : sprintf('%s(%s)', gettype($arrayOfPain001TranPain001TranItem), var_export($arrayOfPain001TranPain001TranItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pain001Tran property can only contain items of type \StructType\Pain001Tran, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pain001Tran value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Pain001Tran[] $pain001Tran
     * @return \ArrayType\ArrayOfPain001Tran
     */
    public function setPain001Tran(array $pain001Tran = array())
    {
        // validation for constraint: array
        if ('' !== ($pain001TranArrayErrorMessage = self::validatePain001TranForArrayConstraintsFromSetPain001Tran($pain001Tran))) {
            throw new \InvalidArgumentException($pain001TranArrayErrorMessage, __LINE__);
        }
        if (is_null($pain001Tran) || (is_array($pain001Tran) && empty($pain001Tran))) {
            unset($this->Pain001Tran);
        } else {
            $this->Pain001Tran = $pain001Tran;
        }
        return $this;
    }
    /**
     * Add item to Pain001Tran value
     * @throws \InvalidArgumentException
     * @param \StructType\Pain001Tran $item
     * @return \ArrayType\ArrayOfPain001Tran
     */
    public function addToPain001Tran(\StructType\Pain001Tran $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Pain001Tran) {
            throw new \InvalidArgumentException(sprintf('The Pain001Tran property can only contain items of type \StructType\Pain001Tran, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pain001Tran[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Pain001Tran|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Pain001Tran|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Pain001Tran|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Pain001Tran|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Pain001Tran|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Pain001Tran
     */
    public function getAttributeName()
    {
        return 'Pain001Tran';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfPain001Tran
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
