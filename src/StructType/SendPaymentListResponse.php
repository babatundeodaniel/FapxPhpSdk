<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendPaymentListResponse StructType
 * @subpackage Structs
 */
class SendPaymentListResponse extends AbstractStructBase
{
    /**
     * The SendPaymentListResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $SendPaymentListResult;
    /**
     * Constructor method for SendPaymentListResponse
     * @uses SendPaymentListResponse::setSendPaymentListResult()
     * @param \StructType\FirstPayResponse $sendPaymentListResult
     */
    public function __construct(\StructType\FirstPayResponse $sendPaymentListResult = null)
    {
        $this
            ->setSendPaymentListResult($sendPaymentListResult);
    }
    /**
     * Get SendPaymentListResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getSendPaymentListResult()
    {
        return $this->SendPaymentListResult;
    }
    /**
     * Set SendPaymentListResult value
     * @param \StructType\FirstPayResponse $sendPaymentListResult
     * @return \StructType\SendPaymentListResponse
     */
    public function setSendPaymentListResult(\StructType\FirstPayResponse $sendPaymentListResult = null)
    {
        $this->SendPaymentListResult = $sendPaymentListResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendPaymentListResponse
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
