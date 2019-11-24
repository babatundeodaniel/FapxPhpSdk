<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserSessionLog ArrayType
 * @subpackage Arrays
 */
class ArrayOfUserSessionLog extends AbstractStructArrayBase
{
    /**
     * The UserSessionLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\UserSessionLog[]
     */
    public $UserSessionLog;
    /**
     * Constructor method for ArrayOfUserSessionLog
     * @uses ArrayOfUserSessionLog::setUserSessionLog()
     * @param \StructType\UserSessionLog[] $userSessionLog
     */
    public function __construct(array $userSessionLog = array())
    {
        $this
            ->setUserSessionLog($userSessionLog);
    }
    /**
     * Get UserSessionLog value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\UserSessionLog[]|null
     */
    public function getUserSessionLog()
    {
        return isset($this->UserSessionLog) ? $this->UserSessionLog : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUserSessionLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserSessionLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserSessionLogForArrayConstraintsFromSetUserSessionLog(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUserSessionLogUserSessionLogItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserSessionLogUserSessionLogItem instanceof \StructType\UserSessionLog) {
                $invalidValues[] = is_object($arrayOfUserSessionLogUserSessionLogItem) ? get_class($arrayOfUserSessionLogUserSessionLogItem) : sprintf('%s(%s)', gettype($arrayOfUserSessionLogUserSessionLogItem), var_export($arrayOfUserSessionLogUserSessionLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserSessionLog property can only contain items of type \StructType\UserSessionLog, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set UserSessionLog value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\UserSessionLog[] $userSessionLog
     * @return \ArrayType\ArrayOfUserSessionLog
     */
    public function setUserSessionLog(array $userSessionLog = array())
    {
        // validation for constraint: array
        if ('' !== ($userSessionLogArrayErrorMessage = self::validateUserSessionLogForArrayConstraintsFromSetUserSessionLog($userSessionLog))) {
            throw new \InvalidArgumentException($userSessionLogArrayErrorMessage, __LINE__);
        }
        if (is_null($userSessionLog) || (is_array($userSessionLog) && empty($userSessionLog))) {
            unset($this->UserSessionLog);
        } else {
            $this->UserSessionLog = $userSessionLog;
        }
        return $this;
    }
    /**
     * Add item to UserSessionLog value
     * @throws \InvalidArgumentException
     * @param \StructType\UserSessionLog $item
     * @return \ArrayType\ArrayOfUserSessionLog
     */
    public function addToUserSessionLog(\StructType\UserSessionLog $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UserSessionLog) {
            throw new \InvalidArgumentException(sprintf('The UserSessionLog property can only contain items of type \StructType\UserSessionLog, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserSessionLog[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\UserSessionLog|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\UserSessionLog|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\UserSessionLog|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\UserSessionLog|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\UserSessionLog|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserSessionLog
     */
    public function getAttributeName()
    {
        return 'UserSessionLog';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfUserSessionLog
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
