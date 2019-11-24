<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransactionApprovalLog ArrayType
 * @subpackage Arrays
 */
class ArrayOfTransactionApprovalLog extends AbstractStructArrayBase
{
    /**
     * The TransactionApprovalLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TransactionApprovalLog[]
     */
    public $TransactionApprovalLog;
    /**
     * Constructor method for ArrayOfTransactionApprovalLog
     * @uses ArrayOfTransactionApprovalLog::setTransactionApprovalLog()
     * @param \StructType\TransactionApprovalLog[] $transactionApprovalLog
     */
    public function __construct(array $transactionApprovalLog = array())
    {
        $this
            ->setTransactionApprovalLog($transactionApprovalLog);
    }
    /**
     * Get TransactionApprovalLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TransactionApprovalLog[]|null
     */
    public function getTransactionApprovalLog()
    {
        return isset($this->TransactionApprovalLog) ? $this->TransactionApprovalLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTransactionApprovalLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransactionApprovalLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionApprovalLogForArrayConstraintsFromSetTransactionApprovalLog(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTransactionApprovalLogTransactionApprovalLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransactionApprovalLogTransactionApprovalLogItem instanceof \StructType\TransactionApprovalLog) {
                $invalidValues[] = is_object($arrayOfTransactionApprovalLogTransactionApprovalLogItem) ? get_class($arrayOfTransactionApprovalLogTransactionApprovalLogItem) : sprintf('%s(%s)', gettype($arrayOfTransactionApprovalLogTransactionApprovalLogItem), var_export($arrayOfTransactionApprovalLogTransactionApprovalLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TransactionApprovalLog property can only contain items of type \StructType\TransactionApprovalLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TransactionApprovalLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionApprovalLog[] $transactionApprovalLog
     * @return \ArrayType\ArrayOfTransactionApprovalLog
     */
    public function setTransactionApprovalLog(array $transactionApprovalLog = array())
    {
        // validation for constraint: array
        if ('' !== ($transactionApprovalLogArrayErrorMessage = self::validateTransactionApprovalLogForArrayConstraintsFromSetTransactionApprovalLog($transactionApprovalLog))) {
            throw new \InvalidArgumentException($transactionApprovalLogArrayErrorMessage, __LINE__);
        }
        if (is_null($transactionApprovalLog) || (is_array($transactionApprovalLog) && empty($transactionApprovalLog))) {
            unset($this->TransactionApprovalLog);
        } else {
            $this->TransactionApprovalLog = $transactionApprovalLog;
        }
        return $this;
    }
    /**
     * Add item to TransactionApprovalLog value
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionApprovalLog $item
     * @return \ArrayType\ArrayOfTransactionApprovalLog
     */
    public function addToTransactionApprovalLog(\StructType\TransactionApprovalLog $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TransactionApprovalLog) {
            throw new \InvalidArgumentException(sprintf('The TransactionApprovalLog property can only contain items of type \StructType\TransactionApprovalLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TransactionApprovalLog[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TransactionApprovalLog|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TransactionApprovalLog|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TransactionApprovalLog|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TransactionApprovalLog|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TransactionApprovalLog|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TransactionApprovalLog
     */
    public function getAttributeName()
    {
        return 'TransactionApprovalLog';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfTransactionApprovalLog
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
