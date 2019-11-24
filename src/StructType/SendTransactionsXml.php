<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsXml StructType
 * @subpackage Structs
 */
class SendTransactionsXml extends AbstractStructBase
{
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
     * Constructor method for SendTransactionsXml
     * @uses SendTransactionsXml::setTransactionXml()
     * @uses SendTransactionsXml::setBatchDescription()
     * @uses SendTransactionsXml::setCustomNarration()
     * @param string $transactionXml
     * @param string $batchDescription
     * @param string $customNarration
     */
    public function __construct($transactionXml = null, $batchDescription = null, $customNarration = null)
    {
        $this
            ->setTransactionXml($transactionXml)
            ->setBatchDescription($batchDescription)
            ->setCustomNarration($customNarration);
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
     * @return \StructType\SendTransactionsXml
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
     * @return \StructType\SendTransactionsXml
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
     * @return \StructType\SendTransactionsXml
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
     * @return \StructType\SendTransactionsXml
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
