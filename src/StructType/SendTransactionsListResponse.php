<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsListResponse StructType
 * @subpackage Structs
 */
class SendTransactionsListResponse extends AbstractStructBase
{
    /**
     * The SendTransactionsListResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $SendTransactionsListResult;
    /**
     * Constructor method for SendTransactionsListResponse
     * @uses SendTransactionsListResponse::setSendTransactionsListResult()
     * @param \StructType\FirstPayResponse $sendTransactionsListResult
     */
    public function __construct(\StructType\FirstPayResponse $sendTransactionsListResult = null)
    {
        $this
            ->setSendTransactionsListResult($sendTransactionsListResult);
    }
    /**
     * Get SendTransactionsListResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getSendTransactionsListResult()
    {
        return $this->SendTransactionsListResult;
    }
    /**
     * Set SendTransactionsListResult value
     * @param \StructType\FirstPayResponse $sendTransactionsListResult
     * @return \StructType\SendTransactionsListResponse
     */
    public function setSendTransactionsListResult(\StructType\FirstPayResponse $sendTransactionsListResult = null)
    {
        $this->SendTransactionsListResult = $sendTransactionsListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionsListResponse
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
