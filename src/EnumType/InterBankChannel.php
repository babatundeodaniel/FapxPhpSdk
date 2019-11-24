<?php

namespace EnumType;

/**
 * This class stands for InterBankChannel EnumType
 * @subpackage Enumerations
 */
class InterBankChannel
{
    /**
     * Constant for value 'NEFT'
     * @return string 'NEFT'
     */
    const VALUE_NEFT = 'NEFT';
    /**
     * Constant for value 'RTGS'
     * @return string 'RTGS'
     */
    const VALUE_RTGS = 'RTGS';
    /**
     * Constant for value 'FIP'
     * @return string 'FIP'
     */
    const VALUE_FIP = 'FIP';
    /**
     * Constant for value 'FirstTrade'
     * @return string 'FirstTrade'
     */
    const VALUE_FIRST_TRADE = 'FirstTrade';
    /**
     * Constant for value 'FundGate'
     * @return string 'FundGate'
     */
    const VALUE_FUND_GATE = 'FundGate';
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
     * @uses self::VALUE_NEFT
     * @uses self::VALUE_RTGS
     * @uses self::VALUE_FIP
     * @uses self::VALUE_FIRST_TRADE
     * @uses self::VALUE_FUND_GATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NEFT,
            self::VALUE_RTGS,
            self::VALUE_FIP,
            self::VALUE_FIRST_TRADE,
            self::VALUE_FUND_GATE,
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
