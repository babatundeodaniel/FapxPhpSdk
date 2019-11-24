<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsPostAsBulk StructType
 * @subpackage Structs
 */
class SendTransactionsPostAsBulk extends AbstractStructBase
{
    /**
     * The PreferredInterBankChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $PreferredInterBankChannel;
    /**
     * The TransactionXml
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionXml;
    /**
     * The BatchDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BatchDescription;
    /**
     * The CustomNarration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomNarration;
    /**
     * Constructor method for SendTransactionsPostAsBulk
     * @uses SendTransactionsPostAsBulk::setPreferredInterBankChannel()
     * @uses SendTransactionsPostAsBulk::setTransactionXml()
     * @uses SendTransactionsPostAsBulk::setBatchDescription()
     * @uses SendTransactionsPostAsBulk::setCustomNarration()
     * @param string $preferredInterBankChannel
     * @param string $transactionXml
     * @param string $batchDescription
     * @param string $customNarration
     */
    public function __construct($preferredInterBankChannel = null, $transactionXml = null, $batchDescription = null, $customNarration = null)
    {
        $this
            ->setPreferredInterBankChannel($preferredInterBankChannel)
            ->setTransactionXml($transactionXml)
            ->setBatchDescription($batchDescription)
            ->setCustomNarration($customNarration);
    }
    /**
     * Get PreferredInterBankChannel value
     * @return string
     */
    public function getPreferredInterBankChannel()
    {
        return $this->PreferredInterBankChannel;
    }
    /**
     * Set PreferredInterBankChannel value
     * @uses \EnumType\InterBankChannel::valueIsValid()
     * @uses \EnumType\InterBankChannel::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $preferredInterBankChannel
     * @return \StructType\SendTransactionsPostAsBulk
     */
    public function setPreferredInterBankChannel($preferredInterBankChannel = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\InterBankChannel::valueIsValid($preferredInterBankChannel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\InterBankChannel', is_array($preferredInterBankChannel) ? implode(', ', $preferredInterBankChannel) : var_export($preferredInterBankChannel, true), implode(', ', \EnumType\InterBankChannel::getValidValues())), __LINE__);
        }
        $this->PreferredInterBankChannel = $preferredInterBankChannel;
        return $this;
    }
    /**
     * Get TransactionXml value
     * @return string|null
     */
    public function getTransactionXml()
    {
        return $this->TransactionXml;
    }
    /**
     * Set TransactionXml value
     * @param string $transactionXml
     * @return \StructType\SendTransactionsPostAsBulk
     */
    public function setTransactionXml($transactionXml = null)
    {
        // validation for constraint: string
        if (!is_null($transactionXml) && !is_string($transactionXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionXml, true), gettype($transactionXml)), __LINE__);
        }
        $this->TransactionXml = $transactionXml;
        return $this;
    }
    /**
     * Get BatchDescription value
     * @return string|null
     */
    public function getBatchDescription()
    {
        return $this->BatchDescription;
    }
    /**
     * Set BatchDescription value
     * @param string $batchDescription
     * @return \StructType\SendTransactionsPostAsBulk
     */
    public function setBatchDescription($batchDescription = null)
    {
        // validation for constraint: string
        if (!is_null($batchDescription) && !is_string($batchDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($batchDescription, true), gettype($batchDescription)), __LINE__);
        }
        $this->BatchDescription = $batchDescription;
        return $this;
    }
    /**
     * Get CustomNarration value
     * @return string|null
     */
    public function getCustomNarration()
    {
        return $this->CustomNarration;
    }
    /**
     * Set CustomNarration value
     * @param string $customNarration
     * @return \StructType\SendTransactionsPostAsBulk
     */
    public function setCustomNarration($customNarration = null)
    {
        // validation for constraint: string
        if (!is_null($customNarration) && !is_string($customNarration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customNarration, true), gettype($customNarration)), __LINE__);
        }
        $this->CustomNarration = $customNarration;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionsPostAsBulk
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
