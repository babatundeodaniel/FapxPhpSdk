<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkFlowTransactionLog ArrayType
 * @subpackage Arrays
 */
class ArrayOfWorkFlowTransactionLog extends AbstractStructArrayBase
{
    /**
     * The WorkFlowTransactionLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkFlowTransactionLog[]
     */
    public $WorkFlowTransactionLog;
    /**
     * Constructor method for ArrayOfWorkFlowTransactionLog
     * @uses ArrayOfWorkFlowTransactionLog::setWorkFlowTransactionLog()
     * @param \StructType\WorkFlowTransactionLog[] $workFlowTransactionLog
     */
    public function __construct(array $workFlowTransactionLog = array())
    {
        $this
            ->setWorkFlowTransactionLog($workFlowTransactionLog);
    }
    /**
     * Get WorkFlowTransactionLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkFlowTransactionLog[]|null
     */
    public function getWorkFlowTransactionLog()
    {
        return isset($this->WorkFlowTransactionLog) ? $this->WorkFlowTransactionLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkFlowTransactionLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkFlowTransactionLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkFlowTransactionLogForArrayConstraintsFromSetWorkFlowTransactionLog(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkFlowTransactionLogWorkFlowTransactionLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkFlowTransactionLogWorkFlowTransactionLogItem instanceof \StructType\WorkFlowTransactionLog) {
                $invalidValues[] = is_object($arrayOfWorkFlowTransactionLogWorkFlowTransactionLogItem) ? get_class($arrayOfWorkFlowTransactionLogWorkFlowTransactionLogItem) : sprintf('%s(%s)', gettype($arrayOfWorkFlowTransactionLogWorkFlowTransactionLogItem), var_export($arrayOfWorkFlowTransactionLogWorkFlowTransactionLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkFlowTransactionLog property can only contain items of type \StructType\WorkFlowTransactionLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WorkFlowTransactionLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WorkFlowTransactionLog[] $workFlowTransactionLog
     * @return \ArrayType\ArrayOfWorkFlowTransactionLog
     */
    public function setWorkFlowTransactionLog(array $workFlowTransactionLog = array())
    {
        // validation for constraint: array
        if ('' !== ($workFlowTransactionLogArrayErrorMessage = self::validateWorkFlowTransactionLogForArrayConstraintsFromSetWorkFlowTransactionLog($workFlowTransactionLog))) {
            throw new \InvalidArgumentException($workFlowTransactionLogArrayErrorMessage, __LINE__);
        }
        if (is_null($workFlowTransactionLog) || (is_array($workFlowTransactionLog) && empty($workFlowTransactionLog))) {
            unset($this->WorkFlowTransactionLog);
        } else {
            $this->WorkFlowTransactionLog = $workFlowTransactionLog;
        }
        return $this;
    }
    /**
     * Add item to WorkFlowTransactionLog value
     * @throws \InvalidArgumentException
     * @param \StructType\WorkFlowTransactionLog $item
     * @return \ArrayType\ArrayOfWorkFlowTransactionLog
     */
    public function addToWorkFlowTransactionLog(\StructType\WorkFlowTransactionLog $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkFlowTransactionLog) {
            throw new \InvalidArgumentException(sprintf('The WorkFlowTransactionLog property can only contain items of type \StructType\WorkFlowTransactionLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WorkFlowTransactionLog[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkFlowTransactionLog|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkFlowTransactionLog|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkFlowTransactionLog|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkFlowTransactionLog|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkFlowTransactionLog|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkFlowTransactionLog
     */
    public function getAttributeName()
    {
        return 'WorkFlowTransactionLog';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfWorkFlowTransactionLog
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
