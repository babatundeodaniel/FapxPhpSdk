<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUpload ArrayType
 * @subpackage Arrays
 */
class ArrayOfUpload extends AbstractStructArrayBase
{
    /**
     * The Upload
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Upload[]
     */
    public $Upload;
    /**
     * Constructor method for ArrayOfUpload
     * @uses ArrayOfUpload::setUpload()
     * @param \StructType\Upload[] $upload
     */
    public function __construct(array $upload = array())
    {
        $this
            ->setUpload($upload);
    }
    /**
     * Get Upload value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Upload[]|null
     */
    public function getUpload()
    {
        return isset($this->Upload) ? $this->Upload : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUpload method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpload method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUploadForArrayConstraintsFromSetUpload(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUploadUploadItem) {
            // validation for constraint: itemType
            if (!$arrayOfUploadUploadItem instanceof \StructType\Upload) {
                $invalidValues[] = is_object($arrayOfUploadUploadItem) ? get_class($arrayOfUploadUploadItem) : sprintf('%s(%s)', gettype($arrayOfUploadUploadItem), var_export($arrayOfUploadUploadItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Upload property can only contain items of type \StructType\Upload, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Upload value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Upload[] $upload
     * @return \ArrayType\ArrayOfUpload
     */
    public function setUpload(array $upload = array())
    {
        // validation for constraint: array
        if ('' !== ($uploadArrayErrorMessage = self::validateUploadForArrayConstraintsFromSetUpload($upload))) {
            throw new \InvalidArgumentException($uploadArrayErrorMessage, __LINE__);
        }
        if (is_null($upload) || (is_array($upload) && empty($upload))) {
            unset($this->Upload);
        } else {
            $this->Upload = $upload;
        }
        return $this;
    }
    /**
     * Add item to Upload value
     * @throws \InvalidArgumentException
     * @param \StructType\Upload $item
     * @return \ArrayType\ArrayOfUpload
     */
    public function addToUpload(\StructType\Upload $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Upload) {
            throw new \InvalidArgumentException(sprintf('The Upload property can only contain items of type \StructType\Upload, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Upload[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Upload|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Upload|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Upload|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Upload|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Upload|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Upload
     */
    public function getAttributeName()
    {
        return 'Upload';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfUpload
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
