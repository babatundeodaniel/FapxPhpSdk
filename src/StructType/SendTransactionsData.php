<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsData StructType
 * @subpackage Structs
 */
class SendTransactionsData extends AbstractStructBase
{
    /**
     * The TransData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TransData
     */
    public $TransData;
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
     * Constructor method for SendTransactionsData
     * @uses SendTransactionsData::setTransData()
     * @uses SendTransactionsData::setBatchDescription()
     * @uses SendTransactionsData::setCustomNarration()
     * @param \StructType\TransData $transData
     * @param string $batchDescription
     * @param string $customNarration
     */
    public function __construct(\StructType\TransData $transData = null, $batchDescription = null, $customNarration = null)
    {
        $this
            ->setTransData($transData)
            ->setBatchDescription($batchDescription)
            ->setCustomNarration($customNarration);
    }
    /**
     * Get TransData value
     * @return \StructType\TransData|null
     */
    public function getTransData()
    {
        return $this->TransData;
    }
    /**
     * Set TransData value
     * @param \StructType\TransData $transData
     * @return \StructType\SendTransactionsData
     */
    public function setTransData(\StructType\TransData $transData = null)
    {
        $this->TransData = $transData;
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
     * @return \StructType\SendTransactionsData
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
     * @return \StructType\SendTransactionsData
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
     * @return \StructType\SendTransactionsData
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
