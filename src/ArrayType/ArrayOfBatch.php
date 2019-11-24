<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBatch ArrayType
 * @subpackage Arrays
 */
class ArrayOfBatch extends AbstractStructArrayBase
{
    /**
     * The Batch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Batch[]
     */
    public $Batch;
    /**
     * Constructor method for ArrayOfBatch
     * @uses ArrayOfBatch::setBatch()
     * @param \StructType\Batch[] $batch
     */
    public function __construct(array $batch = array())
    {
        $this
            ->setBatch($batch);
    }
    /**
     * Get Batch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Batch[]|null
     */
    public function getBatch()
    {
        return isset($this->Batch) ? $this->Batch : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBatch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBatch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBatchForArrayConstraintsFromSetBatch(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBatchBatchItem) {
            // validation for constraint: itemType
            if (!$arrayOfBatchBatchItem instanceof \StructType\Batch) {
                $invalidValues[] = is_object($arrayOfBatchBatchItem) ? get_class($arrayOfBatchBatchItem) : sprintf('%s(%s)', gettype($arrayOfBatchBatchItem), var_export($arrayOfBatchBatchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Batch property can only contain items of type \StructType\Batch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Batch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Batch[] $batch
     * @return \ArrayType\ArrayOfBatch
     */
    public function setBatch(array $batch = array())
    {
        // validation for constraint: array
        if ('' !== ($batchArrayErrorMessage = self::validateBatchForArrayConstraintsFromSetBatch($batch))) {
            throw new \InvalidArgumentException($batchArrayErrorMessage, __LINE__);
        }
        if (is_null($batch) || (is_array($batch) && empty($batch))) {
            unset($this->Batch);
        } else {
            $this->Batch = $batch;
        }
        return $this;
    }
    /**
     * Add item to Batch value
     * @throws \InvalidArgumentException
     * @param \StructType\Batch $item
     * @return \ArrayType\ArrayOfBatch
     */
    public function addToBatch(\StructType\Batch $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Batch) {
            throw new \InvalidArgumentException(sprintf('The Batch property can only contain items of type \StructType\Batch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Batch[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Batch|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Batch|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Batch|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Batch|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Batch|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Batch
     */
    public function getAttributeName()
    {
        return 'Batch';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfBatch
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
