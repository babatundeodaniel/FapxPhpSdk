<?php

namespace EnumType;

/**
 * This class stands for CurrencyCode EnumType
 * @subpackage Enumerations
 */
class CurrencyCode
{
    /**
     * Constant for value 'NGN'
     * @return string 'NGN'
     */
    const VALUE_NGN = 'NGN';
    /**
     * Constant for value 'GBP'
     * @return string 'GBP'
     */
    const VALUE_GBP = 'GBP';
    /**
     * Constant for value 'EUR'
     * @return string 'EUR'
     */
    const VALUE_EUR = 'EUR';
    /**
     * Constant for value 'USD'
     * @return string 'USD'
     */
    const VALUE_USD = 'USD';
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
     * @uses self::VALUE_NGN
     * @uses self::VALUE_GBP
     * @uses self::VALUE_EUR
     * @uses self::VALUE_USD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NGN,
            self::VALUE_GBP,
            self::VALUE_EUR,
            self::VALUE_USD,
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
