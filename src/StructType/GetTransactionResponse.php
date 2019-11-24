<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionResponse StructType
 * @subpackage Structs
 */
class GetTransactionResponse extends AbstractStructBase
{
    /**
     * The GetTransactionResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $GetTransactionResult;
    /**
     * Constructor method for GetTransactionResponse
     * @uses GetTransactionResponse::setGetTransactionResult()
     * @param \StructType\FirstPayResponse $getTransactionResult
     */
    public function __construct(\StructType\FirstPayResponse $getTransactionResult = null)
    {
        $this
            ->setGetTransactionResult($getTransactionResult);
    }
    /**
     * Get GetTransactionResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getGetTransactionResult()
    {
        return $this->GetTransactionResult;
    }
    /**
     * Set GetTransactionResult value
     * @param \StructType\FirstPayResponse $getTransactionResult
     * @return \StructType\GetTransactionResponse
     */
    public function setGetTransactionResult(\StructType\FirstPayResponse $getTransactionResult = null)
    {
        $this->GetTransactionResult = $getTransactionResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTransactionResponse
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
