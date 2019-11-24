<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionUpdateXmlResponse StructType
 * @subpackage Structs
 */
class GetTransactionUpdateXmlResponse extends AbstractStructBase
{
    /**
     * The GetTransactionUpdateXmlResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $GetTransactionUpdateXmlResult;
    /**
     * Constructor method for GetTransactionUpdateXmlResponse
     * @uses GetTransactionUpdateXmlResponse::setGetTransactionUpdateXmlResult()
     * @param \StructType\FirstPayResponse $getTransactionUpdateXmlResult
     */
    public function __construct(\StructType\FirstPayResponse $getTransactionUpdateXmlResult = null)
    {
        $this
            ->setGetTransactionUpdateXmlResult($getTransactionUpdateXmlResult);
    }
    /**
     * Get GetTransactionUpdateXmlResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getGetTransactionUpdateXmlResult()
    {
        return $this->GetTransactionUpdateXmlResult;
    }
    /**
     * Set GetTransactionUpdateXmlResult value
     * @param \StructType\FirstPayResponse $getTransactionUpdateXmlResult
     * @return \StructType\GetTransactionUpdateXmlResponse
     */
    public function setGetTransactionUpdateXmlResult(\StructType\FirstPayResponse $getTransactionUpdateXmlResult = null)
    {
        $this->GetTransactionUpdateXmlResult = $getTransactionUpdateXmlResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTransactionUpdateXmlResponse
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
