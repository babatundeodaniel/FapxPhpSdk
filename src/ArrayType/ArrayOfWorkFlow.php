<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkFlow ArrayType
 * @subpackage Arrays
 */
class ArrayOfWorkFlow extends AbstractStructArrayBase
{
    /**
     * The WorkFlow
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkFlow[]
     */
    public $WorkFlow;
    /**
     * Constructor method for ArrayOfWorkFlow
     * @uses ArrayOfWorkFlow::setWorkFlow()
     * @param \StructType\WorkFlow[] $workFlow
     */
    public function __construct(array $workFlow = array())
    {
        $this
            ->setWorkFlow($workFlow);
    }
    /**
     * Get WorkFlow value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkFlow[]|null
     */
    public function getWorkFlow()
    {
        return isset($this->WorkFlow) ? $this->WorkFlow : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkFlow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkFlow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkFlowForArrayConstraintsFromSetWorkFlow(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkFlowWorkFlowItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkFlowWorkFlowItem instanceof \StructType\WorkFlow) {
                $invalidValues[] = is_object($arrayOfWorkFlowWorkFlowItem) ? get_class($arrayOfWorkFlowWorkFlowItem) : sprintf('%s(%s)', gettype($arrayOfWorkFlowWorkFlowItem), var_export($arrayOfWorkFlowWorkFlowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkFlow property can only contain items of type \StructType\WorkFlow, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WorkFlow value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WorkFlow[] $workFlow
     * @return \ArrayType\ArrayOfWorkFlow
     */
    public function setWorkFlow(array $workFlow = array())
    {
        // validation for constraint: array
        if ('' !== ($workFlowArrayErrorMessage = self::validateWorkFlowForArrayConstraintsFromSetWorkFlow($workFlow))) {
            throw new \InvalidArgumentException($workFlowArrayErrorMessage, __LINE__);
        }
        if (is_null($workFlow) || (is_array($workFlow) && empty($workFlow))) {
            unset($this->WorkFlow);
        } else {
            $this->WorkFlow = $workFlow;
        }
        return $this;
    }
    /**
     * Add item to WorkFlow value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkFlow $item
     * @return \ArrayType\ArrayOfWorkFlow
     */
    public function addToWorkFlow(\StructType\WorkFlow $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkFlow) {
            throw new \InvalidArgumentException(sprintf('The WorkFlow property can only contain items of type \StructType\WorkFlow, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WorkFlow[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkFlow|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkFlow|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkFlow|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkFlow|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkFlow|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkFlow
     */
    public function getAttributeName()
    {
        return 'WorkFlow';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWorkFlow
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
