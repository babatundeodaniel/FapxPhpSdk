<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransaction StructType
 * @subpackage Structs
 */
class SendTransaction extends AbstractStructBase
{
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PaymentTrans
     */
    public $Transaction;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The CustomNarration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomNarration;
    /**
     * Constructor method for SendTransaction
     * @uses SendTransaction::setTransaction()
     * @uses SendTransaction::setDescription()
     * @uses SendTransaction::setCustomNarration()
     * @param \StructType\PaymentTrans $transaction
     * @param string $description
     * @param string $customNarration
     */
    public function __construct(\StructType\PaymentTrans $transaction = null, $description = null, $customNarration = null)
    {
        $this
            ->setTransaction($transaction)
            ->setDescription($description)
            ->setCustomNarration($customNarration);
    }
    /**
     * Get Transaction value
     * @return \StructType\PaymentTrans|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \StructType\PaymentTrans $transaction
     * @return \StructType\SendTransaction
     */
    public function setTransaction(\StructType\PaymentTrans $transaction = null)
    {
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\SendTransaction
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \StructType\SendTransaction
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
     * @return \StructType\SendTransaction
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
