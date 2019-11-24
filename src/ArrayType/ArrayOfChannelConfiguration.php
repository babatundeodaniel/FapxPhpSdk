<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfChannelConfiguration ArrayType
 * @subpackage Arrays
 */
class ArrayOfChannelConfiguration extends AbstractStructArrayBase
{
    /**
     * The ChannelConfiguration
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ChannelConfiguration[]
     */
    public $ChannelConfiguration;
    /**
     * Constructor method for ArrayOfChannelConfiguration
     * @uses ArrayOfChannelConfiguration::setChannelConfiguration()
     * @param \StructType\ChannelConfiguration[] $channelConfiguration
     */
    public function __construct(array $channelConfiguration = array())
    {
        $this
            ->setChannelConfiguration($channelConfiguration);
    }
    /**
     * Get ChannelConfiguration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ChannelConfiguration[]|null
     */
    public function getChannelConfiguration()
    {
        return isset($this->ChannelConfiguration) ? $this->ChannelConfiguration : null;
    }
    /**
     * This method is responsible for validating the values passed to the setChannelConfiguration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChannelConfiguration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateChannelConfigurationForArrayConstraintsFromSetChannelConfiguration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfChannelConfigurationChannelConfigurationItem) {
            // validation for constraint: itemType
            if (!$arrayOfChannelConfigurationChannelConfigurationItem instanceof \StructType\ChannelConfiguration) {
                $invalidValues[] = is_object($arrayOfChannelConfigurationChannelConfigurationItem) ? get_class($arrayOfChannelConfigurationChannelConfigurationItem) : sprintf('%s(%s)', gettype($arrayOfChannelConfigurationChannelConfigurationItem), var_export($arrayOfChannelConfigurationChannelConfigurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ChannelConfiguration property can only contain items of type \StructType\ChannelConfiguration, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ChannelConfiguration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ChannelConfiguration[] $channelConfiguration
     * @return \ArrayType\ArrayOfChannelConfiguration
     */
    public function setChannelConfiguration(array $channelConfiguration = array())
    {
        // validation for constraint: array
        if ('' !== ($channelConfigurationArrayErrorMessage = self::validateChannelConfigurationForArrayConstraintsFromSetChannelConfiguration($channelConfiguration))) {
            throw new \InvalidArgumentException($channelConfigurationArrayErrorMessage, __LINE__);
        }
        if (is_null($channelConfiguration) || (is_array($channelConfiguration) && empty($channelConfiguration))) {
            unset($this->ChannelConfiguration);
        } else {
            $this->ChannelConfiguration = $channelConfiguration;
        }
        return $this;
    }
    /**
     * Add item to ChannelConfiguration value
     * @throws \InvalidArgumentException
     * @param \StructType\ChannelConfiguration $item
     * @return \ArrayType\ArrayOfChannelConfiguration
     */
    public function addToChannelConfiguration(\StructType\ChannelConfiguration $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ChannelConfiguration) {
            throw new \InvalidArgumentException(sprintf('The ChannelConfiguration property can only contain items of type \StructType\ChannelConfiguration, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ChannelConfiguration[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ChannelConfiguration|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ChannelConfiguration|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ChannelConfiguration|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ChannelConfiguration|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ChannelConfiguration|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ChannelConfiguration
     */
    public function getAttributeName()
    {
        return 'ChannelConfiguration';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfChannelConfiguration
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
