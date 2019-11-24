<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBankBranch ArrayType
 * @subpackage Arrays
 */
class ArrayOfBankBranch extends AbstractStructArrayBase
{
    /**
     * The BankBranch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BankBranch[]
     */
    public $BankBranch;
    /**
     * Constructor method for ArrayOfBankBranch
     * @uses ArrayOfBankBranch::setBankBranch()
     * @param \StructType\BankBranch[] $bankBranch
     */
    public function __construct(array $bankBranch = array())
    {
        $this
            ->setBankBranch($bankBranch);
    }
    /**
     * Get BankBranch value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BankBranch[]|null
     */
    public function getBankBranch()
    {
        return isset($this->BankBranch) ? $this->BankBranch : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBankBranch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBankBranch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBankBranchForArrayConstraintsFromSetBankBranch(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBankBranchBankBranchItem) {
            // validation for constraint: itemType
            if (!$arrayOfBankBranchBankBranchItem instanceof \StructType\BankBranch) {
                $invalidValues[] = is_object($arrayOfBankBranchBankBranchItem) ? get_class($arrayOfBankBranchBankBranchItem) : sprintf('%s(%s)', gettype($arrayOfBankBranchBankBranchItem), var_export($arrayOfBankBranchBankBranchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BankBranch property can only contain items of type \StructType\BankBranch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set BankBranch value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\BankBranch[] $bankBranch
     * @return \ArrayType\ArrayOfBankBranch
     */
    public function setBankBranch(array $bankBranch = array())
    {
        // validation for constraint: array
        if ('' !== ($bankBranchArrayErrorMessage = self::validateBankBranchForArrayConstraintsFromSetBankBranch($bankBranch))) {
            throw new \InvalidArgumentException($bankBranchArrayErrorMessage, __LINE__);
        }
        if (is_null($bankBranch) || (is_array($bankBranch) && empty($bankBranch))) {
            unset($this->BankBranch);
        } else {
            $this->BankBranch = $bankBranch;
        }
        return $this;
    }
    /**
     * Add item to BankBranch value
     * @throws \InvalidArgumentException
     * @param \StructType\BankBranch $item
     * @return \ArrayType\ArrayOfBankBranch
     */
    public function addToBankBranch(\StructType\BankBranch $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BankBranch) {
            throw new \InvalidArgumentException(sprintf('The BankBranch property can only contain items of type \StructType\BankBranch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BankBranch[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BankBranch|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BankBranch|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BankBranch|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BankBranch|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BankBranch|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BankBranch
     */
    public function getAttributeName()
    {
        return 'BankBranch';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfBankBranch
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
