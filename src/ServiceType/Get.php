<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetTransactionUpdateXml
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTransactionUpdateXml $parameters
     * @return \StructType\GetTransactionUpdateXmlResponse|bool
     */
    public function GetTransactionUpdateXml(\StructType\GetTransactionUpdateXml $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTransactionUpdateXml($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTransactionUpdateList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTransactionUpdateList $parameters
     * @return \StructType\GetTransactionUpdateListResponse|bool
     */
    public function GetTransactionUpdateList(\StructType\GetTransactionUpdateList $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTransactionUpdateList($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTransaction
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: xHeader
     * - SOAPHeaderNamespaces: http://tempuri.org/
     * - SOAPHeaderTypes: \StructType\XHeader
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTransaction $parameters
     * @return \StructType\GetTransactionResponse|bool
     */
    public function GetTransaction(\StructType\GetTransaction $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTransaction($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetTransactionResponse|\StructType\GetTransactionUpdateListResponse|\StructType\GetTransactionUpdateXmlResponse
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
