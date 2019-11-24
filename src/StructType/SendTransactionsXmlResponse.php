<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendTransactionsXmlResponse StructType
 * @subpackage Structs
 */
class SendTransactionsXmlResponse extends AbstractStructBase
{
    /**
     * The SendTransactionsXmlResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FirstPayResponse
     */
    public $SendTransactionsXmlResult;
    /**
     * Constructor method for SendTransactionsXmlResponse
     * @uses SendTransactionsXmlResponse::setSendTransactionsXmlResult()
     * @param \StructType\FirstPayResponse $sendTransactionsXmlResult
     */
    public function __construct(\StructType\FirstPayResponse $sendTransactionsXmlResult = null)
    {
        $this
            ->setSendTransactionsXmlResult($sendTransactionsXmlResult);
    }
    /**
     * Get SendTransactionsXmlResult value
     * @return \StructType\FirstPayResponse|null
     */
    public function getSendTransactionsXmlResult()
    {
        return $this->SendTransactionsXmlResult;
    }
    /**
     * Set SendTransactionsXmlResult value
     * @param \StructType\FirstPayResponse $sendTransactionsXmlResult
     * @return \StructType\SendTransactionsXmlResponse
     */
    public function setSendTransactionsXmlResult(\StructType\FirstPayResponse $sendTransactionsXmlResult = null)
    {
        $this->SendTransactionsXmlResult = $sendTransactionsXmlResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SendTransactionsXmlResponse
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
