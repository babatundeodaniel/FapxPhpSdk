<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOrgRM ArrayType
 * @subpackage Arrays
 */
class ArrayOfOrgRM extends AbstractStructArrayBase
{
    /**
     * The OrgRM
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OrgRM[]
     */
    public $OrgRM;
    /**
     * Constructor method for ArrayOfOrgRM
     * @uses ArrayOfOrgRM::setOrgRM()
     * @param \StructType\OrgRM[] $orgRM
     */
    public function __construct(array $orgRM = array())
    {
        $this
            ->setOrgRM($orgRM);
    }
    /**
     * Get OrgRM value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OrgRM[]|null
     */
    public function getOrgRM()
    {
        return isset($this->OrgRM) ? $this->OrgRM : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgRM method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgRM method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgRMForArrayConstraintsFromSetOrgRM(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOrgRMOrgRMItem) {
            // validation for constraint: itemType
            if (!$arrayOfOrgRMOrgRMItem instanceof \StructType\OrgRM) {
                $invalidValues[] = is_object($arrayOfOrgRMOrgRMItem) ? get_class($arrayOfOrgRMOrgRMItem) : sprintf('%s(%s)', gettype($arrayOfOrgRMOrgRMItem), var_export($arrayOfOrgRMOrgRMItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OrgRM property can only contain items of type \StructType\OrgRM, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set OrgRM value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\OrgRM[] $orgRM
     * @return \ArrayType\ArrayOfOrgRM
     */
    public function setOrgRM(array $orgRM = array())
    {
        // validation for constraint: array
        if ('' !== ($orgRMArrayErrorMessage = self::validateOrgRMForArrayConstraintsFromSetOrgRM($orgRM))) {
            throw new \InvalidArgumentException($orgRMArrayErrorMessage, __LINE__);
        }
        if (is_null($orgRM) || (is_array($orgRM) && empty($orgRM))) {
            unset($this->OrgRM);
        } else {
            $this->OrgRM = $orgRM;
        }
        return $this;
    }
    /**
     * Add item to OrgRM value
     * @throws \InvalidArgumentException
     * @param \StructType\OrgRM $item
     * @return \ArrayType\ArrayOfOrgRM
     */
    public function addToOrgRM(\StructType\OrgRM $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OrgRM) {
            throw new \InvalidArgumentException(sprintf('The OrgRM property can only contain items of type \StructType\OrgRM, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->OrgRM[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\OrgRM|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\OrgRM|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\OrgRM|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\OrgRM|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\OrgRM|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OrgRM
     */
    public function getAttributeName()
    {
        return 'OrgRM';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfOrgRM
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
