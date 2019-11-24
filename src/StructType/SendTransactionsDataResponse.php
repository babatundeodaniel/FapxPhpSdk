<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsDataResponse StructType
 * @subpackage Structs
 */
class SendTransactionsDataResponse extends AbstractStructBase
{
    /**
     * The SendTransactionsDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $SendTransactionsDataResult;
    /**
     * Constructor method for SendTransactionsDataResponse
     * @uses SendTransactionsDataResponse::setSendTransactionsDataResult()
     * @param \StructType\FirstPayResponse $sendTransactionsDataResult
     */
    public function __construct(\StructType\FirstPayResponse $sendTransactionsDataResult = null)
    {
        $this
            ->setSendTransactionsDataResult($sendTransactionsDataResult);
    }
    /**
     * Get SendTransactionsDataResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getSendTransactionsDataResult()
    {
        return $this->SendTransactionsDataResult;
    }
    /**
     * Set SendTransactionsDataResult value
     * @param \StructType\FirstPayResponse $sendTransactionsDataResult
     * @return \StructType\SendTransactionsDataResponse
     */
    public function setSendTransactionsDataResult(\StructType\FirstPayResponse $sendTransactionsDataResult = null)
    {
        $this->SendTransactionsDataResult = $sendTransactionsDataResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionsDataResponse
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
