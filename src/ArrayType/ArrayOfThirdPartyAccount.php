<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfThirdPartyAccount ArrayType
 * @subpackage Arrays
 */
class ArrayOfThirdPartyAccount extends AbstractStructArrayBase
{
    /**
     * The ThirdPartyAccount
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ThirdPartyAccount[]
     */
    public $ThirdPartyAccount;
    /**
     * Constructor method for ArrayOfThirdPartyAccount
     * @uses ArrayOfThirdPartyAccount::setThirdPartyAccount()
     * @param \StructType\ThirdPartyAccount[] $thirdPartyAccount
     */
    public function __construct(array $thirdPartyAccount = array())
    {
        $this
            ->setThirdPartyAccount($thirdPartyAccount);
    }
    /**
     * Get ThirdPartyAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ThirdPartyAccount[]|null
     */
    public function getThirdPartyAccount()
    {
        return isset($this->ThirdPartyAccount) ? $this->ThirdPartyAccount : null;
    }
    /**
     * This method is responsible for validating the values passed to the setThirdPartyAccount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setThirdPartyAccount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateThirdPartyAccountForArrayConstraintsFromSetThirdPartyAccount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfThirdPartyAccountThirdPartyAccountItem) {
            // validation for constraint: itemType
            if (!$arrayOfThirdPartyAccountThirdPartyAccountItem instanceof \StructType\ThirdPartyAccount) {
                $invalidValues[] = is_object($arrayOfThirdPartyAccountThirdPartyAccountItem) ? get_class($arrayOfThirdPartyAccountThirdPartyAccountItem) : sprintf('%s(%s)', gettype($arrayOfThirdPartyAccountThirdPartyAccountItem), var_export($arrayOfThirdPartyAccountThirdPartyAccountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ThirdPartyAccount property can only contain items of type \StructType\ThirdPartyAccount, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ThirdPartyAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ThirdPartyAccount[] $thirdPartyAccount
     * @return \ArrayType\ArrayOfThirdPartyAccount
     */
    public function setThirdPartyAccount(array $thirdPartyAccount = array())
    {
        // validation for constraint: array
        if ('' !== ($thirdPartyAccountArrayErrorMessage = self::validateThirdPartyAccountForArrayConstraintsFromSetThirdPartyAccount($thirdPartyAccount))) {
            throw new \InvalidArgumentException($thirdPartyAccountArrayErrorMessage, __LINE__);
        }
        if (is_null($thirdPartyAccount) || (is_array($thirdPartyAccount) && empty($thirdPartyAccount))) {
            unset($this->ThirdPartyAccount);
        } else {
            $this->ThirdPartyAccount = $thirdPartyAccount;
        }
        return $this;
    }
    /**
     * Add item to ThirdPartyAccount value
     * @throws \InvalidArgumentException
     * @param \StructType\ThirdPartyAccount $item
     * @return \ArrayType\ArrayOfThirdPartyAccount
     */
    public function addToThirdPartyAccount(\StructType\ThirdPartyAccount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ThirdPartyAccount) {
            throw new \InvalidArgumentException(sprintf('The ThirdPartyAccount property can only contain items of type \StructType\ThirdPartyAccount, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ThirdPartyAccount[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ThirdPartyAccount|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ThirdPartyAccount|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ThirdPartyAccount|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ThirdPartyAccount|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ThirdPartyAccount|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ThirdPartyAccount
     */
    public function getAttributeName()
    {
        return 'ThirdPartyAccount';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfThirdPartyAccount
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
