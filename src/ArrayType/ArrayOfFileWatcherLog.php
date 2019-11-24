<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFileWatcherLog ArrayType
 * @subpackage Arrays
 */
class ArrayOfFileWatcherLog extends AbstractStructArrayBase
{
    /**
     * The FileWatcherLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FileWatcherLog[]
     */
    public $FileWatcherLog;
    /**
     * Constructor method for ArrayOfFileWatcherLog
     * @uses ArrayOfFileWatcherLog::setFileWatcherLog()
     * @param \StructType\FileWatcherLog[] $fileWatcherLog
     */
    public function __construct(array $fileWatcherLog = array())
    {
        $this
            ->setFileWatcherLog($fileWatcherLog);
    }
    /**
     * Get FileWatcherLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FileWatcherLog[]|null
     */
    public function getFileWatcherLog()
    {
        return isset($this->FileWatcherLog) ? $this->FileWatcherLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFileWatcherLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileWatcherLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileWatcherLogForArrayConstraintsFromSetFileWatcherLog(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFileWatcherLogFileWatcherLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfFileWatcherLogFileWatcherLogItem instanceof \StructType\FileWatcherLog) {
                $invalidValues[] = is_object($arrayOfFileWatcherLogFileWatcherLogItem) ? get_class($arrayOfFileWatcherLogFileWatcherLogItem) : sprintf('%s(%s)', gettype($arrayOfFileWatcherLogFileWatcherLogItem), var_export($arrayOfFileWatcherLogFileWatcherLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FileWatcherLog property can only contain items of type \StructType\FileWatcherLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FileWatcherLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\FileWatcherLog[] $fileWatcherLog
     * @return \ArrayType\ArrayOfFileWatcherLog
     */
    public function setFileWatcherLog(array $fileWatcherLog = array())
    {
        // validation for constraint: array
        if ('' !== ($fileWatcherLogArrayErrorMessage = self::validateFileWatcherLogForArrayConstraintsFromSetFileWatcherLog($fileWatcherLog))) {
            throw new \InvalidArgumentException($fileWatcherLogArrayErrorMessage, __LINE__);
        }
        if (is_null($fileWatcherLog) || (is_array($fileWatcherLog) && empty($fileWatcherLog))) {
            unset($this->FileWatcherLog);
        } else {
            $this->FileWatcherLog = $fileWatcherLog;
        }
        return $this;
    }
    /**
     * Add item to FileWatcherLog value
     * @throws \InvalidArgumentException
     * @param \StructType\FileWatcherLog $item
     * @return \ArrayType\ArrayOfFileWatcherLog
     */
    public function addToFileWatcherLog(\StructType\FileWatcherLog $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FileWatcherLog) {
            throw new \InvalidArgumentException(sprintf('The FileWatcherLog property can only contain items of type \StructType\FileWatcherLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FileWatcherLog[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FileWatcherLog|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FileWatcherLog|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FileWatcherLog|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FileWatcherLog|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FileWatcherLog|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FileWatcherLog
     */
    public function getAttributeName()
    {
        return 'FileWatcherLog';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfFileWatcherLog
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
