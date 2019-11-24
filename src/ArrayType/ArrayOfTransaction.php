<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTransaction ArrayType
 * @subpackage Arrays
 */
class ArrayOfTransaction extends AbstractStructArrayBase
{
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Transaction[]
     */
    public $Transaction;
    /**
     * Constructor method for ArrayOfTransaction
     * @uses ArrayOfTransaction::setTransaction()
     * @param \StructType\Transaction[] $transaction
     */
    public function __construct(array $transaction = array())
    {
        $this
            ->setTransaction($transaction);
    }
    /**
     * Get Transaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Transaction[]|null
     */
    public function getTransaction()
    {
        return isset($this->Transaction) ? $this->Transaction : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionForArrayConstraintsFromSetTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTransactionTransactionItem) {
            // validation for constraint: itemType
            if (!$arrayOfTransactionTransactionItem instanceof \StructType\Transaction) {
                $invalidValues[] = is_object($arrayOfTransactionTransactionItem) ? get_class($arrayOfTransactionTransactionItem) : sprintf('%s(%s)', gettype($arrayOfTransactionTransactionItem), var_export($arrayOfTransactionTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Transaction property can only contain items of type \StructType\Transaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Transaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction[] $transaction
     * @return \ArrayType\ArrayOfTransaction
     */
    public function setTransaction(array $transaction = array())
    {
        // validation for constraint: array
        if ('' !== ($transactionArrayErrorMessage = self::validateTransactionForArrayConstraintsFromSetTransaction($transaction))) {
            throw new \InvalidArgumentException($transactionArrayErrorMessage, __LINE__);
        }
        if (is_null($transaction) || (is_array($transaction) && empty($transaction))) {
            unset($this->Transaction);
        } else {
            $this->Transaction = $transaction;
        }
        return $this;
    }
    /**
     * Add item to Transaction value
     * @throws \InvalidArgumentException
     * @param \StructType\Transaction $item
     * @return \ArrayType\ArrayOfTransaction
     */
    public function addToTransaction(\StructType\Transaction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Transaction) {
            throw new \InvalidArgumentException(sprintf('The Transaction property can only contain items of type \StructType\Transaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Transaction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Transaction|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Transaction|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Transaction|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Transaction|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Transaction|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Transaction
     */
    public function getAttributeName()
    {
        return 'Transaction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfTransaction
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
