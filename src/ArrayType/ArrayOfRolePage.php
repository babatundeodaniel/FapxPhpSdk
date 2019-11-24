<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRolePage ArrayType
 * @subpackage Arrays
 */
class ArrayOfRolePage extends AbstractStructArrayBase
{
    /**
     * The RolePage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RolePage[]
     */
    public $RolePage;
    /**
     * Constructor method for ArrayOfRolePage
     * @uses ArrayOfRolePage::setRolePage()
     * @param \StructType\RolePage[] $rolePage
     */
    public function __construct(array $rolePage = array())
    {
        $this
            ->setRolePage($rolePage);
    }
    /**
     * Get RolePage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RolePage[]|null
     */
    public function getRolePage()
    {
        return isset($this->RolePage) ? $this->RolePage : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRolePage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRolePage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRolePageForArrayConstraintsFromSetRolePage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRolePageRolePageItem) {
            // validation for constraint: itemType
            if (!$arrayOfRolePageRolePageItem instanceof \StructType\RolePage) {
                $invalidValues[] = is_object($arrayOfRolePageRolePageItem) ? get_class($arrayOfRolePageRolePageItem) : sprintf('%s(%s)', gettype($arrayOfRolePageRolePageItem), var_export($arrayOfRolePageRolePageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RolePage property can only contain items of type \StructType\RolePage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RolePage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\RolePage[] $rolePage
     * @return \ArrayType\ArrayOfRolePage
     */
    public function setRolePage(array $rolePage = array())
    {
        // validation for constraint: array
        if ('' !== ($rolePageArrayErrorMessage = self::validateRolePageForArrayConstraintsFromSetRolePage($rolePage))) {
            throw new \InvalidArgumentException($rolePageArrayErrorMessage, __LINE__);
        }
        if (is_null($rolePage) || (is_array($rolePage) && empty($rolePage))) {
            unset($this->RolePage);
        } else {
            $this->RolePage = $rolePage;
        }
        return $this;
    }
    /**
     * Add item to RolePage value
     * @throws \InvalidArgumentException
     * @param \StructType\RolePage $item
     * @return \ArrayType\ArrayOfRolePage
     */
    public function addToRolePage(\StructType\RolePage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RolePage) {
            throw new \InvalidArgumentException(sprintf('The RolePage property can only contain items of type \StructType\RolePage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RolePage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RolePage|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RolePage|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RolePage|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RolePage|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RolePage|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RolePage
     */
    public function getAttributeName()
    {
        return 'RolePage';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfRolePage
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
