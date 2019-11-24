<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTranWorkFlowLevelApprover ArrayType
 * @subpackage Arrays
 */
class ArrayOfTranWorkFlowLevelApprover extends AbstractStructArrayBase
{
    /**
     * The TranWorkFlowLevelApprover
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TranWorkFlowLevelApprover[]
     */
    public $TranWorkFlowLevelApprover;
    /**
     * Constructor method for ArrayOfTranWorkFlowLevelApprover
     * @uses ArrayOfTranWorkFlowLevelApprover::setTranWorkFlowLevelApprover()
     * @param \StructType\TranWorkFlowLevelApprover[] $tranWorkFlowLevelApprover
     */
    public function __construct(array $tranWorkFlowLevelApprover = array())
    {
        $this
            ->setTranWorkFlowLevelApprover($tranWorkFlowLevelApprover);
    }
    /**
     * Get TranWorkFlowLevelApprover value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TranWorkFlowLevelApprover[]|null
     */
    public function getTranWorkFlowLevelApprover()
    {
        return isset($this->TranWorkFlowLevelApprover) ? $this->TranWorkFlowLevelApprover : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTranWorkFlowLevelApprover method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTranWorkFlowLevelApprover method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTranWorkFlowLevelApproverForArrayConstraintsFromSetTranWorkFlowLevelApprover(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTranWorkFlowLevelApproverTranWorkFlowLevelApproverItem) {
            // validation for constraint: itemType
            if (!$arrayOfTranWorkFlowLevelApproverTranWorkFlowLevelApproverItem instanceof \StructType\TranWorkFlowLevelApprover) {
                $invalidValues[] = is_object($arrayOfTranWorkFlowLevelApproverTranWorkFlowLevelApproverItem) ? get_class($arrayOfTranWorkFlowLevelApproverTranWorkFlowLevelApproverItem) : sprintf('%s(%s)', gettype($arrayOfTranWorkFlowLevelApproverTranWorkFlowLevelApproverItem), var_export($arrayOfTranWorkFlowLevelApproverTranWorkFlowLevelApproverItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TranWorkFlowLevelApprover property can only contain items of type \StructType\TranWorkFlowLevelApprover, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TranWorkFlowLevelApprover value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\TranWorkFlowLevelApprover[] $tranWorkFlowLevelApprover
     * @return \ArrayType\ArrayOfTranWorkFlowLevelApprover
     */
    public function setTranWorkFlowLevelApprover(array $tranWorkFlowLevelApprover = array())
    {
        // validation for constraint: array
        if ('' !== ($tranWorkFlowLevelApproverArrayErrorMessage = self::validateTranWorkFlowLevelApproverForArrayConstraintsFromSetTranWorkFlowLevelApprover($tranWorkFlowLevelApprover))) {
            throw new \InvalidArgumentException($tranWorkFlowLevelApproverArrayErrorMessage, __LINE__);
        }
        if (is_null($tranWorkFlowLevelApprover) || (is_array($tranWorkFlowLevelApprover) && empty($tranWorkFlowLevelApprover))) {
            unset($this->TranWorkFlowLevelApprover);
        } else {
            $this->TranWorkFlowLevelApprover = $tranWorkFlowLevelApprover;
        }
        return $this;
    }
    /**
     * Add item to TranWorkFlowLevelApprover value
     * @throws \InvalidArgumentException
     * @param \StructType\TranWorkFlowLevelApprover $item
     * @return \ArrayType\ArrayOfTranWorkFlowLevelApprover
     */
    public function addToTranWorkFlowLevelApprover(\StructType\TranWorkFlowLevelApprover $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TranWorkFlowLevelApprover) {
            throw new \InvalidArgumentException(sprintf('The TranWorkFlowLevelApprover property can only contain items of type \StructType\TranWorkFlowLevelApprover, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TranWorkFlowLevelApprover[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TranWorkFlowLevelApprover|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TranWorkFlowLevelApprover|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TranWorkFlowLevelApprover|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TranWorkFlowLevelApprover|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TranWorkFlowLevelApprover|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TranWorkFlowLevelApprover
     */
    public function getAttributeName()
    {
        return 'TranWorkFlowLevelApprover';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfTranWorkFlowLevelApprover
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
