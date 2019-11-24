<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPage ArrayType
 * @subpackage Arrays
 */
class ArrayOfPage extends AbstractStructArrayBase
{
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Page[]
     */
    public $Page;
    /**
     * Constructor method for ArrayOfPage
     * @uses ArrayOfPage::setPage()
     * @param \StructType\Page[] $page
     */
    public function __construct(array $page = array())
    {
        $this
            ->setPage($page);
    }
    /**
     * Get Page value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Page[]|null
     */
    public function getPage()
    {
        return isset($this->Page) ? $this->Page : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePageForArrayConstraintsFromSetPage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPagePageItem) {
            // validation for constraint: itemType
            if (!$arrayOfPagePageItem instanceof \StructType\Page) {
                $invalidValues[] = is_object($arrayOfPagePageItem) ? get_class($arrayOfPagePageItem) : sprintf('%s(%s)', gettype($arrayOfPagePageItem), var_export($arrayOfPagePageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Page property can only contain items of type \StructType\Page, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Page value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Page[] $page
     * @return \ArrayType\ArrayOfPage
     */
    public function setPage(array $page = array())
    {
        // validation for constraint: array
        if ('' !== ($pageArrayErrorMessage = self::validatePageForArrayConstraintsFromSetPage($page))) {
            throw new \InvalidArgumentException($pageArrayErrorMessage, __LINE__);
        }
        if (is_null($page) || (is_array($page) && empty($page))) {
            unset($this->Page);
        } else {
            $this->Page = $page;
        }
        return $this;
    }
    /**
     * Add item to Page value
     * @throws \InvalidArgumentException
     * @param \StructType\Page $item
     * @return \ArrayType\ArrayOfPage
     */
    public function addToPage(\StructType\Page $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Page) {
            throw new \InvalidArgumentException(sprintf('The Page property can only contain items of type \StructType\Page, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Page[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Page|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Page|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Page|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Page|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Page|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Page
     */
    public function getAttributeName()
    {
        return 'Page';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfPage
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
