<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSuspenseAccount ArrayType
 * @subpackage Arrays
 */
class ArrayOfSuspenseAccount extends AbstractStructArrayBase
{
    /**
     * The SuspenseAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SuspenseAccount[]
     */
    public $SuspenseAccount;
    /**
     * Constructor method for ArrayOfSuspenseAccount
     * @uses ArrayOfSuspenseAccount::setSuspenseAccount()
     * @param \StructType\SuspenseAccount[] $suspenseAccount
     */
    public function __construct(array $suspenseAccount = array())
    {
        $this
            ->setSuspenseAccount($suspenseAccount);
    }
    /**
     * Get SuspenseAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SuspenseAccount[]|null
     */
    public function getSuspenseAccount()
    {
        return isset($this->SuspenseAccount) ? $this->SuspenseAccount : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSuspenseAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuspenseAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuspenseAccountForArrayConstraintsFromSetSuspenseAccount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSuspenseAccountSuspenseAccountItem) {
            // validation for constraint: itemType
            if (!$arrayOfSuspenseAccountSuspenseAccountItem instanceof \StructType\SuspenseAccount) {
                $invalidValues[] = is_object($arrayOfSuspenseAccountSuspenseAccountItem) ? get_class($arrayOfSuspenseAccountSuspenseAccountItem) : sprintf('%s(%s)', gettype($arrayOfSuspenseAccountSuspenseAccountItem), var_export($arrayOfSuspenseAccountSuspenseAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SuspenseAccount property can only contain items of type \StructType\SuspenseAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SuspenseAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\SuspenseAccount[] $suspenseAccount
     * @return \ArrayType\ArrayOfSuspenseAccount
     */
    public function setSuspenseAccount(array $suspenseAccount = array())
    {
        // validation for constraint: array
        if ('' !== ($suspenseAccountArrayErrorMessage = self::validateSuspenseAccountForArrayConstraintsFromSetSuspenseAccount($suspenseAccount))) {
            throw new \InvalidArgumentException($suspenseAccountArrayErrorMessage, __LINE__);
        }
        if (is_null($suspenseAccount) || (is_array($suspenseAccount) && empty($suspenseAccount))) {
            unset($this->SuspenseAccount);
        } else {
            $this->SuspenseAccount = $suspenseAccount;
        }
        return $this;
    }
    /**
     * Add item to SuspenseAccount value
     * @throws \InvalidArgumentException
     * @param \StructType\SuspenseAccount $item
     * @return \ArrayType\ArrayOfSuspenseAccount
     */
    public function addToSuspenseAccount(\StructType\SuspenseAccount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SuspenseAccount) {
            throw new \InvalidArgumentException(sprintf('The SuspenseAccount property can only contain items of type \StructType\SuspenseAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SuspenseAccount[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SuspenseAccount|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SuspenseAccount|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SuspenseAccount|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SuspenseAccount|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SuspenseAccount|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SuspenseAccount
     */
    public function getAttributeName()
    {
        return 'SuspenseAccount';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfSuspenseAccount
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
