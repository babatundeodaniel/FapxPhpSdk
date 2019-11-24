<?php

namespace EnumType;

/**
 * This class stands for TransactionMode EnumType
 * @subpackage Enumerations
 */
class TransactionMode
{
    /**
     * Constant for value 'Payment'
     * @return string 'Payment'
     */
    const VALUE_PAYMENT = 'Payment';
    /**
     * Constant for value 'Collection'
     * @return string 'Collection'
     */
    const VALUE_COLLECTION = 'Collection';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_PAYMENT
     * @uses self::VALUE_COLLECTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PAYMENT,
            self::VALUE_COLLECTION,
        );
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
