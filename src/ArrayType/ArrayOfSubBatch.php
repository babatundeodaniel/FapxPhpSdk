<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSubBatch ArrayType
 * @subpackage Arrays
 */
class ArrayOfSubBatch extends AbstractStructArrayBase
{
    /**
     * The SubBatch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SubBatch[]
     */
    public $SubBatch;
    /**
     * Constructor method for ArrayOfSubBatch
     * @uses ArrayOfSubBatch::setSubBatch()
     * @param \StructType\SubBatch[] $subBatch
     */
    public function __construct(array $subBatch = array())
    {
        $this
            ->setSubBatch($subBatch);
    }
    /**
     * Get SubBatch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SubBatch[]|null
     */
    public function getSubBatch()
    {
        return isset($this->SubBatch) ? $this->SubBatch : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSubBatch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubBatch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSubBatchForArrayConstraintsFromSetSubBatch(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSubBatchSubBatchItem) {
            // validation for constraint: itemType
            if (!$arrayOfSubBatchSubBatchItem instanceof \StructType\SubBatch) {
                $invalidValues[] = is_object($arrayOfSubBatchSubBatchItem) ? get_class($arrayOfSubBatchSubBatchItem) : sprintf('%s(%s)', gettype($arrayOfSubBatchSubBatchItem), var_export($arrayOfSubBatchSubBatchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SubBatch property can only contain items of type \StructType\SubBatch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SubBatch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\SubBatch[] $subBatch
     * @return \ArrayType\ArrayOfSubBatch
     */
    public function setSubBatch(array $subBatch = array())
    {
        // validation for constraint: array
        if ('' !== ($subBatchArrayErrorMessage = self::validateSubBatchForArrayConstraintsFromSetSubBatch($subBatch))) {
            throw new \InvalidArgumentException($subBatchArrayErrorMessage, __LINE__);
        }
        if (is_null($subBatch) || (is_array($subBatch) && empty($subBatch))) {
            unset($this->SubBatch);
        } else {
            $this->SubBatch = $subBatch;
        }
        return $this;
    }
    /**
     * Add item to SubBatch value
     * @throws \InvalidArgumentException
     * @param \StructType\SubBatch $item
     * @return \ArrayType\ArrayOfSubBatch
     */
    public function addToSubBatch(\StructType\SubBatch $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SubBatch) {
            throw new \InvalidArgumentException(sprintf('The SubBatch property can only contain items of type \StructType\SubBatch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SubBatch[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SubBatch|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SubBatch|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SubBatch|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SubBatch|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SubBatch|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SubBatch
     */
    public function getAttributeName()
    {
        return 'SubBatch';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfSubBatch
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
