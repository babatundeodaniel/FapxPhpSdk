<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMenuPage ArrayType
 * @subpackage Arrays
 */
class ArrayOfMenuPage extends AbstractStructArrayBase
{
    /**
     * The MenuPage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MenuPage[]
     */
    public $MenuPage;
    /**
     * Constructor method for ArrayOfMenuPage
     * @uses ArrayOfMenuPage::setMenuPage()
     * @param \StructType\MenuPage[] $menuPage
     */
    public function __construct(array $menuPage = array())
    {
        $this
            ->setMenuPage($menuPage);
    }
    /**
     * Get MenuPage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MenuPage[]|null
     */
    public function getMenuPage()
    {
        return isset($this->MenuPage) ? $this->MenuPage : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMenuPage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMenuPage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMenuPageForArrayConstraintsFromSetMenuPage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMenuPageMenuPageItem) {
            // validation for constraint: itemType
            if (!$arrayOfMenuPageMenuPageItem instanceof \StructType\MenuPage) {
                $invalidValues[] = is_object($arrayOfMenuPageMenuPageItem) ? get_class($arrayOfMenuPageMenuPageItem) : sprintf('%s(%s)', gettype($arrayOfMenuPageMenuPageItem), var_export($arrayOfMenuPageMenuPageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MenuPage property can only contain items of type \StructType\MenuPage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MenuPage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\MenuPage[] $menuPage
     * @return \ArrayType\ArrayOfMenuPage
     */
    public function setMenuPage(array $menuPage = array())
    {
        // validation for constraint: array
        if ('' !== ($menuPageArrayErrorMessage = self::validateMenuPageForArrayConstraintsFromSetMenuPage($menuPage))) {
            throw new \InvalidArgumentException($menuPageArrayErrorMessage, __LINE__);
        }
        if (is_null($menuPage) || (is_array($menuPage) && empty($menuPage))) {
            unset($this->MenuPage);
        } else {
            $this->MenuPage = $menuPage;
        }
        return $this;
    }
    /**
     * Add item to MenuPage value
     * @throws \InvalidArgumentException
     * @param \StructType\MenuPage $item
     * @return \ArrayType\ArrayOfMenuPage
     */
    public function addToMenuPage(\StructType\MenuPage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MenuPage) {
            throw new \InvalidArgumentException(sprintf('The MenuPage property can only contain items of type \StructType\MenuPage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MenuPage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\MenuPage|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\MenuPage|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\MenuPage|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\MenuPage|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\MenuPage|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MenuPage
     */
    public function getAttributeName()
    {
        return 'MenuPage';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfMenuPage
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
