<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentTrans StructType
 * @subpackage Structs
 */
class PaymentTrans extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amount;
    /**
     * The TranMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TranMode;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $CurrencyCode;
    /**
     * The orgCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $orgCode;
    /**
     * The OrgTranRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrgTranRefNo;
    /**
     * The DebitBankCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebitBankCode;
    /**
     * The DebitAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebitAccountNo;
    /**
     * The BeneficiaryName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BeneficiaryName;
    /**
     * The Narration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Narration;
    /**
     * The CreditBankCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreditBankCode;
    /**
     * The CreditAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreditAccountNo;
    /**
     * The PaymentDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentDate;
    /**
     * The BenBankSwiftCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenBankSwiftCode;
    /**
     * The BenBankRoutingNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenBankRoutingNo;
    /**
     * The BenIBAN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenIBAN;
    /**
     * The BenAddress1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenAddress1;
    /**
     * The BenAddress2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenAddress2;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The IntmdBankSwiftCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IntmdBankSwiftCode;
    /**
     * The IntmdBankIBAN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IntmdBankIBAN;
    /**
     * The IntmdBankRoutingNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IntmdBankRoutingNo;
    /**
     * The IntmdBankAddress1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IntmdBankAddress1;
    /**
     * The IntmdBankAddress2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IntmdBankAddress2;
    /**
     * The IntmdBankName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IntmdBankName;
    /**
     * The BenBankName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenBankName;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * The OrgTranParticular
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrgTranParticular;
    /**
     * The CorpName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CorpName;
    /**
     * Constructor method for PaymentTrans
     * @uses PaymentTrans::setAmount()
     * @uses PaymentTrans::setTranMode()
     * @uses PaymentTrans::setCurrencyCode()
     * @uses PaymentTrans::setOrgCode()
     * @uses PaymentTrans::setOrgTranRefNo()
     * @uses PaymentTrans::setDebitBankCode()
     * @uses PaymentTrans::setDebitAccountNo()
     * @uses PaymentTrans::setBeneficiaryName()
     * @uses PaymentTrans::setNarration()
     * @uses PaymentTrans::setCreditBankCode()
     * @uses PaymentTrans::setCreditAccountNo()
     * @uses PaymentTrans::setPaymentDate()
     * @uses PaymentTrans::setBenBankSwiftCode()
     * @uses PaymentTrans::setBenBankRoutingNo()
     * @uses PaymentTrans::setBenIBAN()
     * @uses PaymentTrans::setBenAddress1()
     * @uses PaymentTrans::setBenAddress2()
     * @uses PaymentTrans::setCountry()
     * @uses PaymentTrans::setIntmdBankSwiftCode()
     * @uses PaymentTrans::setIntmdBankIBAN()
     * @uses PaymentTrans::setIntmdBankRoutingNo()
     * @uses PaymentTrans::setIntmdBankAddress1()
     * @uses PaymentTrans::setIntmdBankAddress2()
     * @uses PaymentTrans::setIntmdBankName()
     * @uses PaymentTrans::setBenBankName()
     * @uses PaymentTrans::setErrorMessage()
     * @uses PaymentTrans::setOrgTranParticular()
     * @uses PaymentTrans::setCorpName()
     * @param float $amount
     * @param string $tranMode
     * @param string $currencyCode
     * @param string $orgCode
     * @param string $orgTranRefNo
     * @param string $debitBankCode
     * @param string $debitAccountNo
     * @param string $beneficiaryName
     * @param string $narration
     * @param string $creditBankCode
     * @param string $creditAccountNo
     * @param string $paymentDate
     * @param string $benBankSwiftCode
     * @param string $benBankRoutingNo
     * @param string $benIBAN
     * @param string $benAddress1
     * @param string $benAddress2
     * @param string $country
     * @param string $intmdBankSwiftCode
     * @param string $intmdBankIBAN
     * @param string $intmdBankRoutingNo
     * @param string $intmdBankAddress1
     * @param string $intmdBankAddress2
     * @param string $intmdBankName
     * @param string $benBankName
     * @param string $errorMessage
     * @param string $orgTranParticular
     * @param string $corpName
     */
    public function __construct($amount = null, $tranMode = null, $currencyCode = null, $orgCode = null, $orgTranRefNo = null, $debitBankCode = null, $debitAccountNo = null, $beneficiaryName = null, $narration = null, $creditBankCode = null, $creditAccountNo = null, $paymentDate = null, $benBankSwiftCode = null, $benBankRoutingNo = null, $benIBAN = null, $benAddress1 = null, $benAddress2 = null, $country = null, $intmdBankSwiftCode = null, $intmdBankIBAN = null, $intmdBankRoutingNo = null, $intmdBankAddress1 = null, $intmdBankAddress2 = null, $intmdBankName = null, $benBankName = null, $errorMessage = null, $orgTranParticular = null, $corpName = null)
    {
        $this
            ->setAmount($amount)
            ->setTranMode($tranMode)
            ->setCurrencyCode($currencyCode)
            ->setOrgCode($orgCode)
            ->setOrgTranRefNo($orgTranRefNo)
            ->setDebitBankCode($debitBankCode)
            ->setDebitAccountNo($debitAccountNo)
            ->setBeneficiaryName($beneficiaryName)
            ->setNarration($narration)
            ->setCreditBankCode($creditBankCode)
            ->setCreditAccountNo($creditAccountNo)
            ->setPaymentDate($paymentDate)
            ->setBenBankSwiftCode($benBankSwiftCode)
            ->setBenBankRoutingNo($benBankRoutingNo)
            ->setBenIBAN($benIBAN)
            ->setBenAddress1($benAddress1)
            ->setBenAddress2($benAddress2)
            ->setCountry($country)
            ->setIntmdBankSwiftCode($intmdBankSwiftCode)
            ->setIntmdBankIBAN($intmdBankIBAN)
            ->setIntmdBankRoutingNo($intmdBankRoutingNo)
            ->setIntmdBankAddress1($intmdBankAddress1)
            ->setIntmdBankAddress2($intmdBankAddress2)
            ->setIntmdBankName($intmdBankName)
            ->setBenBankName($benBankName)
            ->setErrorMessage($errorMessage)
            ->setOrgTranParticular($orgTranParticular)
            ->setCorpName($corpName);
    }
    /**
     * Get Amount value
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \StructType\PaymentTrans
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get TranMode value
     * @return string
     */
    public function getTranMode()
    {
        return $this->TranMode;
    }
    /**
     * Set TranMode value
     * @uses \EnumType\TransactionMode::valueIsValid()
     * @uses \EnumType\TransactionMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tranMode
     * @return \StructType\PaymentTrans
     */
    public function setTranMode($tranMode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionMode::valueIsValid($tranMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionMode', is_array($tranMode) ? implode(', ', $tranMode) : var_export($tranMode, true), implode(', ', \EnumType\TransactionMode::getValidValues())), __LINE__);
        }
        $this->TranMode = $tranMode;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @uses \EnumType\CurrencyCode::valueIsValid()
     * @uses \EnumType\CurrencyCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $currencyCode
     * @return \StructType\PaymentTrans
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyCode::valueIsValid($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CurrencyCode', is_array($currencyCode) ? implode(', ', $currencyCode) : var_export($currencyCode, true), implode(', ', \EnumType\CurrencyCode::getValidValues())), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get orgCode value
     * @return string|null
     */
    public function getOrgCode()
    {
        return $this->orgCode;
    }
    /**
     * Set orgCode value
     * @param string $orgCode
     * @return \StructType\PaymentTrans
     */
    public function setOrgCode($orgCode = null)
    {
        // validation for constraint: string
        if (!is_null($orgCode) && !is_string($orgCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgCode, true), gettype($orgCode)), __LINE__);
        }
        $this->orgCode = $orgCode;
        return $this;
    }
    /**
     * Get OrgTranRefNo value
     * @return string|null
     */
    public function getOrgTranRefNo()
    {
        return $this->OrgTranRefNo;
    }
    /**
     * Set OrgTranRefNo value
     * @param string $orgTranRefNo
     * @return \StructType\PaymentTrans
     */
    public function setOrgTranRefNo($orgTranRefNo = null)
    {
        // validation for constraint: string
        if (!is_null($orgTranRefNo) && !is_string($orgTranRefNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgTranRefNo, true), gettype($orgTranRefNo)), __LINE__);
        }
        $this->OrgTranRefNo = $orgTranRefNo;
        return $this;
    }
    /**
     * Get DebitBankCode value
     * @return string|null
     */
    public function getDebitBankCode()
    {
        return $this->DebitBankCode;
    }
    /**
     * Set DebitBankCode value
     * @param string $debitBankCode
     * @return \StructType\PaymentTrans
     */
    public function setDebitBankCode($debitBankCode = null)
    {
        // validation for constraint: string
        if (!is_null($debitBankCode) && !is_string($debitBankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitBankCode, true), gettype($debitBankCode)), __LINE__);
        }
        $this->DebitBankCode = $debitBankCode;
        return $this;
    }
    /**
     * Get DebitAccountNo value
     * @return string|null
     */
    public function getDebitAccountNo()
    {
        return $this->DebitAccountNo;
    }
    /**
     * Set DebitAccountNo value
     * @param string $debitAccountNo
     * @return \StructType\PaymentTrans
     */
    public function setDebitAccountNo($debitAccountNo = null)
    {
        // validation for constraint: string
        if (!is_null($debitAccountNo) && !is_string($debitAccountNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitAccountNo, true), gettype($debitAccountNo)), __LINE__);
        }
        $this->DebitAccountNo = $debitAccountNo;
        return $this;
    }
    /**
     * Get BeneficiaryName value
     * @return string|null
     */
    public function getBeneficiaryName()
    {
        return $this->BeneficiaryName;
    }
    /**
     * Set BeneficiaryName value
     * @param string $beneficiaryName
     * @return \StructType\PaymentTrans
     */
    public function setBeneficiaryName($beneficiaryName = null)
    {
        // validation for constraint: string
        if (!is_null($beneficiaryName) && !is_string($beneficiaryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beneficiaryName, true), gettype($beneficiaryName)), __LINE__);
        }
        $this->BeneficiaryName = $beneficiaryName;
        return $this;
    }
    /**
     * Get Narration value
     * @return string|null
     */
    public function getNarration()
    {
        return $this->Narration;
    }
    /**
     * Set Narration value
     * @param string $narration
     * @return \StructType\PaymentTrans
     */
    public function setNarration($narration = null)
    {
        // validation for constraint: string
        if (!is_null($narration) && !is_string($narration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($narration, true), gettype($narration)), __LINE__);
        }
        $this->Narration = $narration;
        return $this;
    }
    /**
     * Get CreditBankCode value
     * @return string|null
     */
    public function getCreditBankCode()
    {
        return $this->CreditBankCode;
    }
    /**
     * Set CreditBankCode value
     * @param string $creditBankCode
     * @return \StructType\PaymentTrans
     */
    public function setCreditBankCode($creditBankCode = null)
    {
        // validation for constraint: string
        if (!is_null($creditBankCode) && !is_string($creditBankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditBankCode, true), gettype($creditBankCode)), __LINE__);
        }
        $this->CreditBankCode = $creditBankCode;
        return $this;
    }
    /**
     * Get CreditAccountNo value
     * @return string|null
     */
    public function getCreditAccountNo()
    {
        return $this->CreditAccountNo;
    }
    /**
     * Set CreditAccountNo value
     * @param string $creditAccountNo
     * @return \StructType\PaymentTrans
     */
    public function setCreditAccountNo($creditAccountNo = null)
    {
        // validation for constraint: string
        if (!is_null($creditAccountNo) && !is_string($creditAccountNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditAccountNo, true), gettype($creditAccountNo)), __LINE__);
        }
        $this->CreditAccountNo = $creditAccountNo;
        return $this;
    }
    /**
     * Get PaymentDate value
     * @return string|null
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
    /**
     * Set PaymentDate value
     * @param string $paymentDate
     * @return \StructType\PaymentTrans
     */
    public function setPaymentDate($paymentDate = null)
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->PaymentDate = $paymentDate;
        return $this;
    }
    /**
     * Get BenBankSwiftCode value
     * @return string|null
     */
    public function getBenBankSwiftCode()
    {
        return $this->BenBankSwiftCode;
    }
    /**
     * Set BenBankSwiftCode value
     * @param string $benBankSwiftCode
     * @return \StructType\PaymentTrans
     */
    public function setBenBankSwiftCode($benBankSwiftCode = null)
    {
        // validation for constraint: string
        if (!is_null($benBankSwiftCode) && !is_string($benBankSwiftCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benBankSwiftCode, true), gettype($benBankSwiftCode)), __LINE__);
        }
        $this->BenBankSwiftCode = $benBankSwiftCode;
        return $this;
    }
    /**
     * Get BenBankRoutingNo value
     * @return string|null
     */
    public function getBenBankRoutingNo()
    {
        return $this->BenBankRoutingNo;
    }
    /**
     * Set BenBankRoutingNo value
     * @param string $benBankRoutingNo
     * @return \StructType\PaymentTrans
     */
    public function setBenBankRoutingNo($benBankRoutingNo = null)
    {
        // validation for constraint: string
        if (!is_null($benBankRoutingNo) && !is_string($benBankRoutingNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benBankRoutingNo, true), gettype($benBankRoutingNo)), __LINE__);
        }
        $this->BenBankRoutingNo = $benBankRoutingNo;
        return $this;
    }
    /**
     * Get BenIBAN value
     * @return string|null
     */
    public function getBenIBAN()
    {
        return $this->BenIBAN;
    }
    /**
     * Set BenIBAN value
     * @param string $benIBAN
     * @return \StructType\PaymentTrans
     */
    public function setBenIBAN($benIBAN = null)
    {
        // validation for constraint: string
        if (!is_null($benIBAN) && !is_string($benIBAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benIBAN, true), gettype($benIBAN)), __LINE__);
        }
        $this->BenIBAN = $benIBAN;
        return $this;
    }
    /**
     * Get BenAddress1 value
     * @return string|null
     */
    public function getBenAddress1()
    {
        return $this->BenAddress1;
    }
    /**
     * Set BenAddress1 value
     * @param string $benAddress1
     * @return \StructType\PaymentTrans
     */
    public function setBenAddress1($benAddress1 = null)
    {
        // validation for constraint: string
        if (!is_null($benAddress1) && !is_string($benAddress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benAddress1, true), gettype($benAddress1)), __LINE__);
        }
        $this->BenAddress1 = $benAddress1;
        return $this;
    }
    /**
     * Get BenAddress2 value
     * @return string|null
     */
    public function getBenAddress2()
    {
        return $this->BenAddress2;
    }
    /**
     * Set BenAddress2 value
     * @param string $benAddress2
     * @return \StructType\PaymentTrans
     */
    public function setBenAddress2($benAddress2 = null)
    {
        // validation for constraint: string
        if (!is_null($benAddress2) && !is_string($benAddress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benAddress2, true), gettype($benAddress2)), __LINE__);
        }
        $this->BenAddress2 = $benAddress2;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \StructType\PaymentTrans
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get IntmdBankSwiftCode value
     * @return string|null
     */
    public function getIntmdBankSwiftCode()
    {
        return $this->IntmdBankSwiftCode;
    }
    /**
     * Set IntmdBankSwiftCode value
     * @param string $intmdBankSwiftCode
     * @return \StructType\PaymentTrans
     */
    public function setIntmdBankSwiftCode($intmdBankSwiftCode = null)
    {
        // validation for constraint: string
        if (!is_null($intmdBankSwiftCode) && !is_string($intmdBankSwiftCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intmdBankSwiftCode, true), gettype($intmdBankSwiftCode)), __LINE__);
        }
        $this->IntmdBankSwiftCode = $intmdBankSwiftCode;
        return $this;
    }
    /**
     * Get IntmdBankIBAN value
     * @return string|null
     */
    public function getIntmdBankIBAN()
    {
        return $this->IntmdBankIBAN;
    }
    /**
     * Set IntmdBankIBAN value
     * @param string $intmdBankIBAN
     * @return \StructType\PaymentTrans
     */
    public function setIntmdBankIBAN($intmdBankIBAN = null)
    {
        // validation for constraint: string
        if (!is_null($intmdBankIBAN) && !is_string($intmdBankIBAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intmdBankIBAN, true), gettype($intmdBankIBAN)), __LINE__);
        }
        $this->IntmdBankIBAN = $intmdBankIBAN;
        return $this;
    }
    /**
     * Get IntmdBankRoutingNo value
     * @return string|null
     */
    public function getIntmdBankRoutingNo()
    {
        return $this->IntmdBankRoutingNo;
    }
    /**
     * Set IntmdBankRoutingNo value
     * @param string $intmdBankRoutingNo
     * @return \StructType\PaymentTrans
     */
    public function setIntmdBankRoutingNo($intmdBankRoutingNo = null)
    {
        // validation for constraint: string
        if (!is_null($intmdBankRoutingNo) && !is_string($intmdBankRoutingNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intmdBankRoutingNo, true), gettype($intmdBankRoutingNo)), __LINE__);
        }
        $this->IntmdBankRoutingNo = $intmdBankRoutingNo;
        return $this;
    }
    /**
     * Get IntmdBankAddress1 value
     * @return string|null
     */
    public function getIntmdBankAddress1()
    {
        return $this->IntmdBankAddress1;
    }
    /**
     * Set IntmdBankAddress1 value
     * @param string $intmdBankAddress1
     * @return \StructType\PaymentTrans
     */
    public function setIntmdBankAddress1($intmdBankAddress1 = null)
    {
        // validation for constraint: string
        if (!is_null($intmdBankAddress1) && !is_string($intmdBankAddress1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intmdBankAddress1, true), gettype($intmdBankAddress1)), __LINE__);
        }
        $this->IntmdBankAddress1 = $intmdBankAddress1;
        return $this;
    }
    /**
     * Get IntmdBankAddress2 value
     * @return string|null
     */
    public function getIntmdBankAddress2()
    {
        return $this->IntmdBankAddress2;
    }
    /**
     * Set IntmdBankAddress2 value
     * @param string $intmdBankAddress2
     * @return \StructType\PaymentTrans
     */
    public function setIntmdBankAddress2($intmdBankAddress2 = null)
    {
        // validation for constraint: string
        if (!is_null($intmdBankAddress2) && !is_string($intmdBankAddress2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intmdBankAddress2, true), gettype($intmdBankAddress2)), __LINE__);
        }
        $this->IntmdBankAddress2 = $intmdBankAddress2;
        return $this;
    }
    /**
     * Get IntmdBankName value
     * @return string|null
     */
    public function getIntmdBankName()
    {
        return $this->IntmdBankName;
    }
    /**
     * Set IntmdBankName value
     * @param string $intmdBankName
     * @return \StructType\PaymentTrans
     */
    public function setIntmdBankName($intmdBankName = null)
    {
        // validation for constraint: string
        if (!is_null($intmdBankName) && !is_string($intmdBankName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intmdBankName, true), gettype($intmdBankName)), __LINE__);
        }
        $this->IntmdBankName = $intmdBankName;
        return $this;
    }
    /**
     * Get BenBankName value
     * @return string|null
     */
    public function getBenBankName()
    {
        return $this->BenBankName;
    }
    /**
     * Set BenBankName value
     * @param string $benBankName
     * @return \StructType\PaymentTrans
     */
    public function setBenBankName($benBankName = null)
    {
        // validation for constraint: string
        if (!is_null($benBankName) && !is_string($benBankName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($benBankName, true), gettype($benBankName)), __LINE__);
        }
        $this->BenBankName = $benBankName;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \StructType\PaymentTrans
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get OrgTranParticular value
     * @return string|null
     */
    public function getOrgTranParticular()
    {
        return $this->OrgTranParticular;
    }
    /**
     * Set OrgTranParticular value
     * @param string $orgTranParticular
     * @return \StructType\PaymentTrans
     */
    public function setOrgTranParticular($orgTranParticular = null)
    {
        // validation for constraint: string
        if (!is_null($orgTranParticular) && !is_string($orgTranParticular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgTranParticular, true), gettype($orgTranParticular)), __LINE__);
        }
        $this->OrgTranParticular = $orgTranParticular;
        return $this;
    }
    /**
     * Get CorpName value
     * @return string|null
     */
    public function getCorpName()
    {
        return $this->CorpName;
    }
    /**
     * Set CorpName value
     * @param string $corpName
     * @return \StructType\PaymentTrans
     */
    public function setCorpName($corpName = null)
    {
        // validation for constraint: string
        if (!is_null($corpName) && !is_string($corpName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($corpName, true), gettype($corpName)), __LINE__);
        }
        $this->CorpName = $corpName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PaymentTrans
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
