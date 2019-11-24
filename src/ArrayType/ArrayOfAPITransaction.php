<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAPITransaction ArrayType
 * @subpackage Arrays
 */
class ArrayOfAPITransaction extends AbstractStructArrayBase
{
    /**
     * The APITransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\APITransaction[]
     */
    public $APITransaction;
    /**
     * Constructor method for ArrayOfAPITransaction
     * @uses ArrayOfAPITransaction::setAPITransaction()
     * @param \StructType\APITransaction[] $aPITransaction
     */
    public function __construct(array $aPITransaction = array())
    {
        $this
            ->setAPITransaction($aPITransaction);
    }
    /**
     * Get APITransaction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\APITransaction[]|null
     */
    public function getAPITransaction()
    {
        return isset($this->APITransaction) ? $this->APITransaction : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAPITransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAPITransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAPITransactionForArrayConstraintsFromSetAPITransaction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAPITransactionAPITransactionItem) {
            // validation for constraint: itemType
            if (!$arrayOfAPITransactionAPITransactionItem instanceof \StructType\APITransaction) {
                $invalidValues[] = is_object($arrayOfAPITransactionAPITransactionItem) ? get_class($arrayOfAPITransactionAPITransactionItem) : sprintf('%s(%s)', gettype($arrayOfAPITransactionAPITransactionItem), var_export($arrayOfAPITransactionAPITransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The APITransaction property can only contain items of type \StructType\APITransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set APITransaction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\APITransaction[] $aPITransaction
     * @return \ArrayType\ArrayOfAPITransaction
     */
    public function setAPITransaction(array $aPITransaction = array())
    {
        // validation for constraint: array
        if ('' !== ($aPITransactionArrayErrorMessage = self::validateAPITransactionForArrayConstraintsFromSetAPITransaction($aPITransaction))) {
            throw new \InvalidArgumentException($aPITransactionArrayErrorMessage, __LINE__);
        }
        if (is_null($aPITransaction) || (is_array($aPITransaction) && empty($aPITransaction))) {
            unset($this->APITransaction);
        } else {
            $this->APITransaction = $aPITransaction;
        }
        return $this;
    }
    /**
     * Add item to APITransaction value
     * @throws \InvalidArgumentException
     * @param \StructType\APITransaction $item
     * @return \ArrayType\ArrayOfAPITransaction
     */
    public function addToAPITransaction(\StructType\APITransaction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\APITransaction) {
            throw new \InvalidArgumentException(sprintf('The APITransaction property can only contain items of type \StructType\APITransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->APITransaction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\APITransaction|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\APITransaction|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\APITransaction|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\APITransaction|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\APITransaction|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string APITransaction
     */
    public function getAttributeName()
    {
        return 'APITransaction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfAPITransaction
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
