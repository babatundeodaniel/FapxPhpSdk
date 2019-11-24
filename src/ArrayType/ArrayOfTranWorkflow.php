<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTranWorkflow ArrayType
 * @subpackage Arrays
 */
class ArrayOfTranWorkflow extends AbstractStructArrayBase
{
    /**
     * The TranWorkflow
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TranWorkflow[]
     */
    public $TranWorkflow;
    /**
     * Constructor method for ArrayOfTranWorkflow
     * @uses ArrayOfTranWorkflow::setTranWorkflow()
     * @param \StructType\TranWorkflow[] $tranWorkflow
     */
    public function __construct(array $tranWorkflow = array())
    {
        $this
            ->setTranWorkflow($tranWorkflow);
    }
    /**
     * Get TranWorkflow value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TranWorkflow[]|null
     */
    public function getTranWorkflow()
    {
        return isset($this->TranWorkflow) ? $this->TranWorkflow : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTranWorkflow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTranWorkflow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTranWorkflowForArrayConstraintsFromSetTranWorkflow(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTranWorkflowTranWorkflowItem) {
            // validation for constraint: itemType
            if (!$arrayOfTranWorkflowTranWorkflowItem instanceof \StructType\TranWorkflow) {
                $invalidValues[] = is_object($arrayOfTranWorkflowTranWorkflowItem) ? get_class($arrayOfTranWorkflowTranWorkflowItem) : sprintf('%s(%s)', gettype($arrayOfTranWorkflowTranWorkflowItem), var_export($arrayOfTranWorkflowTranWorkflowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TranWorkflow property can only contain items of type \StructType\TranWorkflow, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TranWorkflow value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\TranWorkflow[] $tranWorkflow
     * @return \ArrayType\ArrayOfTranWorkflow
     */
    public function setTranWorkflow(array $tranWorkflow = array())
    {
        // validation for constraint: array
        if ('' !== ($tranWorkflowArrayErrorMessage = self::validateTranWorkflowForArrayConstraintsFromSetTranWorkflow($tranWorkflow))) {
            throw new \InvalidArgumentException($tranWorkflowArrayErrorMessage, __LINE__);
        }
        if (is_null($tranWorkflow) || (is_array($tranWorkflow) && empty($tranWorkflow))) {
            unset($this->TranWorkflow);
        } else {
            $this->TranWorkflow = $tranWorkflow;
        }
        return $this;
    }
    /**
     * Add item to TranWorkflow value
     * @throws \InvalidArgumentException
     * @param \StructType\TranWorkflow $item
     * @return \ArrayType\ArrayOfTranWorkflow
     */
    public function addToTranWorkflow(\StructType\TranWorkflow $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TranWorkflow) {
            throw new \InvalidArgumentException(sprintf('The TranWorkflow property can only contain items of type \StructType\TranWorkflow, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TranWorkflow[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TranWorkflow|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TranWorkflow|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TranWorkflow|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TranWorkflow|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TranWorkflow|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TranWorkflow
     */
    public function getAttributeName()
    {
        return 'TranWorkflow';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfTranWorkflow
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
