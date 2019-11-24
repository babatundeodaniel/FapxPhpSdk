<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSuspenseTransaction ArrayType
 * @subpackage Arrays
 */
class ArrayOfSuspenseTransaction extends AbstractStructArrayBase
{
    /**
     * The SuspenseTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SuspenseTransaction[]
     */
    public $SuspenseTransaction;
    /**
     * Constructor method for ArrayOfSuspenseTransaction
     * @uses ArrayOfSuspenseTransaction::setSuspenseTransaction()
     * @param \StructType\SuspenseTransaction[] $suspenseTransaction
     */
    public function __construct(array $suspenseTransaction = array())
    {
        $this
            ->setSuspenseTransaction($suspenseTransaction);
    }
    /**
     * Get SuspenseTransaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SuspenseTransaction[]|null
     */
    public function getSuspenseTransaction()
    {
        return isset($this->SuspenseTransaction) ? $this->SuspenseTransaction : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSuspenseTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuspenseTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuspenseTransactionForArrayConstraintsFromSetSuspenseTransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSuspenseTransactionSuspenseTransactionItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuspenseTransactionSuspenseTransactionItem instanceof \StructType\SuspenseTransaction) {
                $invalidValues[] = is_object($arrayOfSuspenseTransactionSuspenseTransactionItem) ? get_class($arrayOfSuspenseTransactionSuspenseTransactionItem) : sprintf('%s(%s)', gettype($arrayOfSuspenseTransactionSuspenseTransactionItem), var_export($arrayOfSuspenseTransactionSuspenseTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SuspenseTransaction property can only contain items of type \StructType\SuspenseTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SuspenseTransaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\SuspenseTransaction[] $suspenseTransaction
     * @return \ArrayType\ArrayOfSuspenseTransaction
     */
    public function setSuspenseTransaction(array $suspenseTransaction = array())
    {
        // validation for constraint: array
        if ('' !== ($suspenseTransactionArrayErrorMessage = self::validateSuspenseTransactionForArrayConstraintsFromSetSuspenseTransaction($suspenseTransaction))) {
            throw new \InvalidArgumentException($suspenseTransactionArrayErrorMessage, __LINE__);
        }
        if (is_null($suspenseTransaction) || (is_array($suspenseTransaction) && empty($suspenseTransaction))) {
            unset($this->SuspenseTransaction);
        } else {
            $this->SuspenseTransaction = $suspenseTransaction;
        }
        return $this;
    }
    /**
     * Add item to SuspenseTransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\SuspenseTransaction $item
     * @return \ArrayType\ArrayOfSuspenseTransaction
     */
    public function addToSuspenseTransaction(\StructType\SuspenseTransaction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SuspenseTransaction) {
            throw new \InvalidArgumentException(sprintf('The SuspenseTransaction property can only contain items of type \StructType\SuspenseTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SuspenseTransaction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SuspenseTransaction|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SuspenseTransaction|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SuspenseTransaction|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SuspenseTransaction|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SuspenseTransaction|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SuspenseTransaction
     */
    public function getAttributeName()
    {
        return 'SuspenseTransaction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfSuspenseTransaction
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
