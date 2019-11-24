# FapxPhpSdk
<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://localhost/firstpay_integration/public/FapxConnect.xml',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://localhost/firstpay_integration/public/FapxConnect.xml',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
$get->setSoapHeaderXHeader(new \StructType\XHeader());
/**
 * Sample call for GetTransactionUpdateXml operation/method
 */
if ($get->GetTransactionUpdateXml(new \StructType\GetTransactionUpdateXml()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTransactionUpdateList operation/method
 */
if ($get->GetTransactionUpdateList(new \StructType\GetTransactionUpdateList()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetTransaction operation/method
 */
if ($get->GetTransaction(new \StructType\GetTransaction()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Send ServiceType
 */
$send = new \ServiceType\Send($options);
$send->setSoapHeaderXHeader(new \StructType\XHeader());
/**
 * Sample call for SendPaymentList operation/method
 */
if ($send->SendPaymentList(new \StructType\SendPaymentList()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendTransactionsList operation/method
 */
if ($send->SendTransactionsList(new \StructType\SendTransactionsList()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendTransaction operation/method
 */
if ($send->SendTransaction(new \StructType\SendTransaction()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendTransactionsData operation/method
 */
if ($send->SendTransactionsData(new \StructType\SendTransactionsData()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendTransactionsXml operation/method
 */
if ($send->SendTransactionsXml(new \StructType\SendTransactionsXml()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
/**
 * Sample call for SendTransactionsPostAsBulk operation/method
 */
if ($send->SendTransactionsPostAsBulk(new \StructType\SendTransactionsPostAsBulk()) !== false) {
    print_r($send->getResult());
} else {
    print_r($send->getLastError());
}
