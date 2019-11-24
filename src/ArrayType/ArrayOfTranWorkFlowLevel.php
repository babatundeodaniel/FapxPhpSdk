<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTranWorkFlowLevel ArrayType
 * @subpackage Arrays
 */
class ArrayOfTranWorkFlowLevel extends AbstractStructArrayBase
{
    /**
     * The TranWorkFlowLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TranWorkFlowLevel[]
     */
    public $TranWorkFlowLevel;
    /**
     * Constructor method for ArrayOfTranWorkFlowLevel
     * @uses ArrayOfTranWorkFlowLevel::setTranWorkFlowLevel()
     * @param \StructType\TranWorkFlowLevel[] $tranWorkFlowLevel
     */
    public function __construct(array $tranWorkFlowLevel = array())
    {
        $this
            ->setTranWorkFlowLevel($tranWorkFlowLevel);
    }
    /**
     * Get TranWorkFlowLevel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TranWorkFlowLevel[]|null
     */
    public function getTranWorkFlowLevel()
    {
        return isset($this->TranWorkFlowLevel) ? $this->TranWorkFlowLevel : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTranWorkFlowLevel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTranWorkFlowLevel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTranWorkFlowLevelForArrayConstraintsFromSetTranWorkFlowLevel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTranWorkFlowLevelTranWorkFlowLevelItem) {
            // validation for constraint: itemType
            if (!$arrayOfTranWorkFlowLevelTranWorkFlowLevelItem instanceof \StructType\TranWorkFlowLevel) {
                $invalidValues[] = is_object($arrayOfTranWorkFlowLevelTranWorkFlowLevelItem) ? get_class($arrayOfTranWorkFlowLevelTranWorkFlowLevelItem) : sprintf('%s(%s)', gettype($arrayOfTranWorkFlowLevelTranWorkFlowLevelItem), var_export($arrayOfTranWorkFlowLevelTranWorkFlowLevelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TranWorkFlowLevel property can only contain items of type \StructType\TranWorkFlowLevel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TranWorkFlowLevel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\TranWorkFlowLevel[] $tranWorkFlowLevel
     * @return \ArrayType\ArrayOfTranWorkFlowLevel
     */
    public function setTranWorkFlowLevel(array $tranWorkFlowLevel = array())
    {
        // validation for constraint: array
        if ('' !== ($tranWorkFlowLevelArrayErrorMessage = self::validateTranWorkFlowLevelForArrayConstraintsFromSetTranWorkFlowLevel($tranWorkFlowLevel))) {
            throw new \InvalidArgumentException($tranWorkFlowLevelArrayErrorMessage, __LINE__);
        }
        if (is_null($tranWorkFlowLevel) || (is_array($tranWorkFlowLevel) && empty($tranWorkFlowLevel))) {
            unset($this->TranWorkFlowLevel);
        } else {
            $this->TranWorkFlowLevel = $tranWorkFlowLevel;
        }
        return $this;
    }
    /**
     * Add item to TranWorkFlowLevel value
     * @throws \InvalidArgumentException
     * @param \StructType\TranWorkFlowLevel $item
     * @return \ArrayType\ArrayOfTranWorkFlowLevel
     */
    public function addToTranWorkFlowLevel(\StructType\TranWorkFlowLevel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TranWorkFlowLevel) {
            throw new \InvalidArgumentException(sprintf('The TranWorkFlowLevel property can only contain items of type \StructType\TranWorkFlowLevel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TranWorkFlowLevel[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TranWorkFlowLevel|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TranWorkFlowLevel|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TranWorkFlowLevel|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TranWorkFlowLevel|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TranWorkFlowLevel|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TranWorkFlowLevel
     */
    public function getAttributeName()
    {
        return 'TranWorkFlowLevel';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfTranWorkFlowLevel
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
