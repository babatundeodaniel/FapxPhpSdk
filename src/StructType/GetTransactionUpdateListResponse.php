<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionUpdateListResponse StructType
 * @subpackage Structs
 */
class GetTransactionUpdateListResponse extends AbstractStructBase
{
    /**
     * The GetTransactionUpdateListResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $GetTransactionUpdateListResult;
    /**
     * Constructor method for GetTransactionUpdateListResponse
     * @uses GetTransactionUpdateListResponse::setGetTransactionUpdateListResult()
     * @param \StructType\FirstPayResponse $getTransactionUpdateListResult
     */
    public function __construct(\StructType\FirstPayResponse $getTransactionUpdateListResult = null)
    {
        $this
            ->setGetTransactionUpdateListResult($getTransactionUpdateListResult);
    }
    /**
     * Get GetTransactionUpdateListResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getGetTransactionUpdateListResult()
    {
        return $this->GetTransactionUpdateListResult;
    }
    /**
     * Set GetTransactionUpdateListResult value
     * @param \StructType\FirstPayResponse $getTransactionUpdateListResult
     * @return \StructType\GetTransactionUpdateListResponse
     */
    public function setGetTransactionUpdateListResult(\StructType\FirstPayResponse $getTransactionUpdateListResult = null)
    {
        $this->GetTransactionUpdateListResult = $getTransactionUpdateListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTransactionUpdateListResponse
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
