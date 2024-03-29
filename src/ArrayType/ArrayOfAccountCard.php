<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAccountCard ArrayType
 * @subpackage Arrays
 */
class ArrayOfAccountCard extends AbstractStructArrayBase
{
    /**
     * The AccountCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccountCard[]
     */
    public $AccountCard;
    /**
     * Constructor method for ArrayOfAccountCard
     * @uses ArrayOfAccountCard::setAccountCard()
     * @param \StructType\AccountCard[] $accountCard
     */
    public function __construct(array $accountCard = array())
    {
        $this
            ->setAccountCard($accountCard);
    }
    /**
     * Get AccountCard value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccountCard[]|null
     */
    public function getAccountCard()
    {
        return isset($this->AccountCard) ? $this->AccountCard : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountCardForArrayConstraintsFromSetAccountCard(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAccountCardAccountCardItem) {
            // validation for constraint: itemType
            if (!$arrayOfAccountCardAccountCardItem instanceof \StructType\AccountCard) {
                $invalidValues[] = is_object($arrayOfAccountCardAccountCardItem) ? get_class($arrayOfAccountCardAccountCardItem) : sprintf('%s(%s)', gettype($arrayOfAccountCardAccountCardItem), var_export($arrayOfAccountCardAccountCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountCard property can only contain items of type \StructType\AccountCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AccountCard value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\AccountCard[] $accountCard
     * @return \ArrayType\ArrayOfAccountCard
     */
    public function setAccountCard(array $accountCard = array())
    {
        // validation for constraint: array
        if ('' !== ($accountCardArrayErrorMessage = self::validateAccountCardForArrayConstraintsFromSetAccountCard($accountCard))) {
            throw new \InvalidArgumentException($accountCardArrayErrorMessage, __LINE__);
        }
        if (is_null($accountCard) || (is_array($accountCard) && empty($accountCard))) {
            unset($this->AccountCard);
        } else {
            $this->AccountCard = $accountCard;
        }
        return $this;
    }
    /**
     * Add item to AccountCard value
     * @throws \InvalidArgumentException
     * @param \StructType\AccountCard $item
     * @return \ArrayType\ArrayOfAccountCard
     */
    public function addToAccountCard(\StructType\AccountCard $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AccountCard) {
            throw new \InvalidArgumentException(sprintf('The AccountCard property can only contain items of type \StructType\AccountCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AccountCard[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AccountCard|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AccountCard|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AccountCard|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AccountCard|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AccountCard|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AccountCard
     */
    public function getAttributeName()
    {
        return 'AccountCard';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfAccountCard
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
