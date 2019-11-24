<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionResponse StructType
 * @subpackage Structs
 */
class SendTransactionResponse extends AbstractStructBase
{
    /**
     * The SendTransactionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $SendTransactionResult;
    /**
     * Constructor method for SendTransactionResponse
     * @uses SendTransactionResponse::setSendTransactionResult()
     * @param \StructType\FirstPayResponse $sendTransactionResult
     */
    public function __construct(\StructType\FirstPayResponse $sendTransactionResult = null)
    {
        $this
            ->setSendTransactionResult($sendTransactionResult);
    }
    /**
     * Get SendTransactionResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getSendTransactionResult()
    {
        return $this->SendTransactionResult;
    }
    /**
     * Set SendTransactionResult value
     * @param \StructType\FirstPayResponse $sendTransactionResult
     * @return \StructType\SendTransactionResponse
     */
    public function setSendTransactionResult(\StructType\FirstPayResponse $sendTransactionResult = null)
    {
        $this->SendTransactionResult = $sendTransactionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionResponse
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
