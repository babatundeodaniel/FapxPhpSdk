<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Sets the XHeader SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\XHeader $xHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderXHeader(\StructType\XHeader $xHeader, $nameSpace = 'http://tempuri.org/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'xHeader', $xHeader, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named SendPaymentList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendPaymentList $parameters
     * @return \StructType\SendPaymentListResponse|bool
     */
    public function SendPaymentList(\StructType\SendPaymentList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendPaymentList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendTransactionsList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendTransactionsList $parameters
     * @return \StructType\SendTransactionsListResponse|bool
     */
    public function SendTransactionsList(\StructType\SendTransactionsList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendTransactionsList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendTransaction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendTransaction $parameters
     * @return \StructType\SendTransactionResponse|bool
     */
    public function SendTransaction(\StructType\SendTransaction $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendTransaction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendTransactionsData
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendTransactionsData $parameters
     * @return \StructType\SendTransactionsDataResponse|bool
     */
    public function SendTransactionsData(\StructType\SendTransactionsData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendTransactionsData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendTransactionsXml
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendTransactionsXml $parameters
     * @return \StructType\SendTransactionsXmlResponse|bool
     */
    public function SendTransactionsXml(\StructType\SendTransactionsXml $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendTransactionsXml($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SendTransactionsPostAsBulk
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendTransactionsPostAsBulk $parameters
     * @return \StructType\SendTransactionsPostAsBulkResponse|bool
     */
    public function SendTransactionsPostAsBulk(\StructType\SendTransactionsPostAsBulk $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendTransactionsPostAsBulk($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SendPaymentListResponse|\StructType\SendTransactionResponse|\StructType\SendTransactionsDataResponse|\StructType\SendTransactionsListResponse|\StructType\SendTransactionsPostAsBulkResponse|\StructType\SendTransactionsXmlResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
