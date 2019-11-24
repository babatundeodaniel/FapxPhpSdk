<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsPostAsBulkResponse StructType
 * @subpackage Structs
 */
class SendTransactionsPostAsBulkResponse extends AbstractStructBase
{
    /**
     * The SendTransactionsPostAsBulkResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $SendTransactionsPostAsBulkResult;
    /**
     * Constructor method for SendTransactionsPostAsBulkResponse
     * @uses SendTransactionsPostAsBulkResponse::setSendTransactionsPostAsBulkResult()
     * @param \StructType\FirstPayResponse $sendTransactionsPostAsBulkResult
     */
    public function __construct(\StructType\FirstPayResponse $sendTransactionsPostAsBulkResult = null)
    {
        $this
            ->setSendTransactionsPostAsBulkResult($sendTransactionsPostAsBulkResult);
    }
    /**
     * Get SendTransactionsPostAsBulkResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getSendTransactionsPostAsBulkResult()
    {
        return $this->SendTransactionsPostAsBulkResult;
    }
    /**
     * Set SendTransactionsPostAsBulkResult value
     * @param \StructType\FirstPayResponse $sendTransactionsPostAsBulkResult
     * @return \StructType\SendTransactionsPostAsBulkResponse
     */
    public function setSendTransactionsPostAsBulkResult(\StructType\FirstPayResponse $sendTransactionsPostAsBulkResult = null)
    {
        $this->SendTransactionsPostAsBulkResult = $sendTransactionsPostAsBulkResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionsPostAsBulkResponse
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
