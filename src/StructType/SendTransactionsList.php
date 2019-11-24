<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsList StructType
 * @subpackage Structs
 */
class SendTransactionsList extends AbstractStructBase
{
    /**
     * The Transactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfPaymentTrans
     */
    public $Transactions;
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
     * Constructor method for SendTransactionsList
     * @uses SendTransactionsList::setTransactions()
     * @uses SendTransactionsList::setBatchDescription()
     * @uses SendTransactionsList::setCustomNarration()
     * @param \ArrayType\ArrayOfPaymentTrans $transactions
     * @param string $batchDescription
     * @param string $customNarration
     */
    public function __construct(\ArrayType\ArrayOfPaymentTrans $transactions = null, $batchDescription = null, $customNarration = null)
    {
        $this
            ->setTransactions($transactions)
            ->setBatchDescription($batchDescription)
            ->setCustomNarration($customNarration);
    }
    /**
     * Get Transactions value
     * @return \ArrayType\ArrayOfPaymentTrans|null
     */
    public function getTransactions()
    {
        return $this->Transactions;
    }
    /**
     * Set Transactions value
     * @param \ArrayType\ArrayOfPaymentTrans $transactions
     * @return \StructType\SendTransactionsList
     */
    public function setTransactions(\ArrayType\ArrayOfPaymentTrans $transactions = null)
    {
        $this->Transactions = $transactions;
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
     * @return \StructType\SendTransactionsList
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
     * @return \StructType\SendTransactionsList
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
     * @return \StructType\SendTransactionsList
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
