<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrgChannelCharge ArrayType
 * @subpackage Arrays
 */
class ArrayOfOrgChannelCharge extends AbstractStructArrayBase
{
    /**
     * The OrgChannelCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OrgChannelCharge[]
     */
    public $OrgChannelCharge;
    /**
     * Constructor method for ArrayOfOrgChannelCharge
     * @uses ArrayOfOrgChannelCharge::setOrgChannelCharge()
     * @param \StructType\OrgChannelCharge[] $orgChannelCharge
     */
    public function __construct(array $orgChannelCharge = array())
    {
        $this
            ->setOrgChannelCharge($orgChannelCharge);
    }
    /**
     * Get OrgChannelCharge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OrgChannelCharge[]|null
     */
    public function getOrgChannelCharge()
    {
        return isset($this->OrgChannelCharge) ? $this->OrgChannelCharge : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgChannelCharge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgChannelCharge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgChannelChargeForArrayConstraintsFromSetOrgChannelCharge(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrgChannelChargeOrgChannelChargeItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrgChannelChargeOrgChannelChargeItem instanceof \StructType\OrgChannelCharge) {
                $invalidValues[] = is_object($arrayOfOrgChannelChargeOrgChannelChargeItem) ? get_class($arrayOfOrgChannelChargeOrgChannelChargeItem) : sprintf('%s(%s)', gettype($arrayOfOrgChannelChargeOrgChannelChargeItem), var_export($arrayOfOrgChannelChargeOrgChannelChargeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrgChannelCharge property can only contain items of type \StructType\OrgChannelCharge, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrgChannelCharge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\OrgChannelCharge[] $orgChannelCharge
     * @return \ArrayType\ArrayOfOrgChannelCharge
     */
    public function setOrgChannelCharge(array $orgChannelCharge = array())
    {
        // validation for constraint: array
        if ('' !== ($orgChannelChargeArrayErrorMessage = self::validateOrgChannelChargeForArrayConstraintsFromSetOrgChannelCharge($orgChannelCharge))) {
            throw new \InvalidArgumentException($orgChannelChargeArrayErrorMessage, __LINE__);
        }
        if (is_null($orgChannelCharge) || (is_array($orgChannelCharge) && empty($orgChannelCharge))) {
            unset($this->OrgChannelCharge);
        } else {
            $this->OrgChannelCharge = $orgChannelCharge;
        }
        return $this;
    }
    /**
     * Add item to OrgChannelCharge value
     * @throws \InvalidArgumentException
     * @param \StructType\OrgChannelCharge $item
     * @return \ArrayType\ArrayOfOrgChannelCharge
     */
    public function addToOrgChannelCharge(\StructType\OrgChannelCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrgChannelCharge) {
            throw new \InvalidArgumentException(sprintf('The OrgChannelCharge property can only contain items of type \StructType\OrgChannelCharge, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrgChannelCharge[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\OrgChannelCharge|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\OrgChannelCharge|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\OrgChannelCharge|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\OrgChannelCharge|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\OrgChannelCharge|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrgChannelCharge
     */
    public function getAttributeName()
    {
        return 'OrgChannelCharge';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfOrgChannelCharge
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
