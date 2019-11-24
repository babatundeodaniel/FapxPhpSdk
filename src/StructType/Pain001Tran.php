<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pain001Tran StructType
 * @subpackage Structs
 */
class Pain001Tran extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ID;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $Amount;
    /**
     * The Pain001UploadID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Pain001UploadID;
    /**
     * The TranMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranMode;
    /**
     * The DateCreated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DateCreated;
    /**
     * The ProcessedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ProcessedDate;
    /**
     * The VerificationStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $VerificationStatus;
    /**
     * The IsBeneficiaryAutoCreated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsBeneficiaryAutoCreated;
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
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    /**
     * The CorpName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CorpName;
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
     * The State
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $State;
    /**
     * The BenBankName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenBankName;
    /**
     * The PurposeOfTransfer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PurposeOfTransfer;
    /**
     * The ChargeBearer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChargeBearer;
    /**
     * The ServerIP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ServerIP;
    /**
     * The Pain001Upload
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Pain001Upload
     */
    public $Pain001Upload;
    /**
     * Constructor method for Pain001Tran
     * @uses Pain001Tran::setID()
     * @uses Pain001Tran::setAmount()
     * @uses Pain001Tran::setPain001UploadID()
     * @uses Pain001Tran::setTranMode()
     * @uses Pain001Tran::setDateCreated()
     * @uses Pain001Tran::setProcessedDate()
     * @uses Pain001Tran::setVerificationStatus()
     * @uses Pain001Tran::setIsBeneficiaryAutoCreated()
     * @uses Pain001Tran::setOrgCode()
     * @uses Pain001Tran::setOrgTranRefNo()
     * @uses Pain001Tran::setDebitBankCode()
     * @uses Pain001Tran::setDebitAccountNo()
     * @uses Pain001Tran::setBeneficiaryName()
     * @uses Pain001Tran::setNarration()
     * @uses Pain001Tran::setCreditBankCode()
     * @uses Pain001Tran::setCreditAccountNo()
     * @uses Pain001Tran::setPaymentDate()
     * @uses Pain001Tran::setErrorMessage()
     * @uses Pain001Tran::setOrgTranParticular()
     * @uses Pain001Tran::setCurrencyCode()
     * @uses Pain001Tran::setCorpName()
     * @uses Pain001Tran::setBenBankSwiftCode()
     * @uses Pain001Tran::setBenBankRoutingNo()
     * @uses Pain001Tran::setBenIBAN()
     * @uses Pain001Tran::setBenAddress1()
     * @uses Pain001Tran::setBenAddress2()
     * @uses Pain001Tran::setCountry()
     * @uses Pain001Tran::setIntmdBankSwiftCode()
     * @uses Pain001Tran::setIntmdBankIBAN()
     * @uses Pain001Tran::setIntmdBankRoutingNo()
     * @uses Pain001Tran::setIntmdBankAddress1()
     * @uses Pain001Tran::setIntmdBankAddress2()
     * @uses Pain001Tran::setIntmdBankName()
     * @uses Pain001Tran::setState()
     * @uses Pain001Tran::setBenBankName()
     * @uses Pain001Tran::setPurposeOfTransfer()
     * @uses Pain001Tran::setChargeBearer()
     * @uses Pain001Tran::setServerIP()
     * @uses Pain001Tran::setPain001Upload()
     * @param int $iD
     * @param float $amount
     * @param int $pain001UploadID
     * @param int $tranMode
     * @param string $dateCreated
     * @param string $processedDate
     * @param int $verificationStatus
     * @param bool $isBeneficiaryAutoCreated
     * @param string $orgCode
     * @param string $orgTranRefNo
     * @param string $debitBankCode
     * @param string $debitAccountNo
     * @param string $beneficiaryName
     * @param string $narration
     * @param string $creditBankCode
     * @param string $creditAccountNo
     * @param string $paymentDate
     * @param string $errorMessage
     * @param string $orgTranParticular
     * @param string $currencyCode
     * @param string $corpName
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
     * @param string $state
     * @param string $benBankName
     * @param string $purposeOfTransfer
     * @param string $chargeBearer
     * @param string $serverIP
     * @param \StructType\Pain001Upload $pain001Upload
     */
    public function __construct($iD = null, $amount = null, $pain001UploadID = null, $tranMode = null, $dateCreated = null, $processedDate = null, $verificationStatus = null, $isBeneficiaryAutoCreated = null, $orgCode = null, $orgTranRefNo = null, $debitBankCode = null, $debitAccountNo = null, $beneficiaryName = null, $narration = null, $creditBankCode = null, $creditAccountNo = null, $paymentDate = null, $errorMessage = null, $orgTranParticular = null, $currencyCode = null, $corpName = null, $benBankSwiftCode = null, $benBankRoutingNo = null, $benIBAN = null, $benAddress1 = null, $benAddress2 = null, $country = null, $intmdBankSwiftCode = null, $intmdBankIBAN = null, $intmdBankRoutingNo = null, $intmdBankAddress1 = null, $intmdBankAddress2 = null, $intmdBankName = null, $state = null, $benBankName = null, $purposeOfTransfer = null, $chargeBearer = null, $serverIP = null, \StructType\Pain001Upload $pain001Upload = null)
    {
        $this
            ->setID($iD)
            ->setAmount($amount)
            ->setPain001UploadID($pain001UploadID)
            ->setTranMode($tranMode)
            ->setDateCreated($dateCreated)
            ->setProcessedDate($processedDate)
            ->setVerificationStatus($verificationStatus)
            ->setIsBeneficiaryAutoCreated($isBeneficiaryAutoCreated)
            ->setOrgCode($orgCode)
            ->setOrgTranRefNo($orgTranRefNo)
            ->setDebitBankCode($debitBankCode)
            ->setDebitAccountNo($debitAccountNo)
            ->setBeneficiaryName($beneficiaryName)
            ->setNarration($narration)
            ->setCreditBankCode($creditBankCode)
            ->setCreditAccountNo($creditAccountNo)
            ->setPaymentDate($paymentDate)
            ->setErrorMessage($errorMessage)
            ->setOrgTranParticular($orgTranParticular)
            ->setCurrencyCode($currencyCode)
            ->setCorpName($corpName)
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
            ->setState($state)
            ->setBenBankName($benBankName)
            ->setPurposeOfTransfer($purposeOfTransfer)
            ->setChargeBearer($chargeBearer)
            ->setServerIP($serverIP)
            ->setPain001Upload($pain001Upload);
    }
    /**
     * Get ID value
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\Pain001Tran
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
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
     * @return \StructType\Pain001Tran
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
     * Get Pain001UploadID value
     * @return int
     */
    public function getPain001UploadID()
    {
        return $this->Pain001UploadID;
    }
    /**
     * Set Pain001UploadID value
     * @param int $pain001UploadID
     * @return \StructType\Pain001Tran
     */
    public function setPain001UploadID($pain001UploadID = null)
    {
        // validation for constraint: int
        if (!is_null($pain001UploadID) && !(is_int($pain001UploadID) || ctype_digit($pain001UploadID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pain001UploadID, true), gettype($pain001UploadID)), __LINE__);
        }
        $this->Pain001UploadID = $pain001UploadID;
        return $this;
    }
    /**
     * Get TranMode value
     * @return int
     */
    public function getTranMode()
    {
        return $this->TranMode;
    }
    /**
     * Set TranMode value
     * @param int $tranMode
     * @return \StructType\Pain001Tran
     */
    public function setTranMode($tranMode = null)
    {
        // validation for constraint: int
        if (!is_null($tranMode) && !(is_int($tranMode) || ctype_digit($tranMode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranMode, true), gettype($tranMode)), __LINE__);
        }
        $this->TranMode = $tranMode;
        return $this;
    }
    /**
     * Get DateCreated value
     * @return string
     */
    public function getDateCreated()
    {
        return $this->DateCreated;
    }
    /**
     * Set DateCreated value
     * @param string $dateCreated
     * @return \StructType\Pain001Tran
     */
    public function setDateCreated($dateCreated = null)
    {
        // validation for constraint: string
        if (!is_null($dateCreated) && !is_string($dateCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreated, true), gettype($dateCreated)), __LINE__);
        }
        $this->DateCreated = $dateCreated;
        return $this;
    }
    /**
     * Get ProcessedDate value
     * @return string
     */
    public function getProcessedDate()
    {
        return $this->ProcessedDate;
    }
    /**
     * Set ProcessedDate value
     * @param string $processedDate
     * @return \StructType\Pain001Tran
     */
    public function setProcessedDate($processedDate = null)
    {
        // validation for constraint: string
        if (!is_null($processedDate) && !is_string($processedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processedDate, true), gettype($processedDate)), __LINE__);
        }
        $this->ProcessedDate = $processedDate;
        return $this;
    }
    /**
     * Get VerificationStatus value
     * @return int
     */
    public function getVerificationStatus()
    {
        return $this->VerificationStatus;
    }
    /**
     * Set VerificationStatus value
     * @param int $verificationStatus
     * @return \StructType\Pain001Tran
     */
    public function setVerificationStatus($verificationStatus = null)
    {
        // validation for constraint: int
        if (!is_null($verificationStatus) && !(is_int($verificationStatus) || ctype_digit($verificationStatus))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verificationStatus, true), gettype($verificationStatus)), __LINE__);
        }
        $this->VerificationStatus = $verificationStatus;
        return $this;
    }
    /**
     * Get IsBeneficiaryAutoCreated value
     * @return bool
     */
    public function getIsBeneficiaryAutoCreated()
    {
        return $this->IsBeneficiaryAutoCreated;
    }
    /**
     * Set IsBeneficiaryAutoCreated value
     * @param bool $isBeneficiaryAutoCreated
     * @return \StructType\Pain001Tran
     */
    public function setIsBeneficiaryAutoCreated($isBeneficiaryAutoCreated = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBeneficiaryAutoCreated) && !is_bool($isBeneficiaryAutoCreated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isBeneficiaryAutoCreated, true), gettype($isBeneficiaryAutoCreated)), __LINE__);
        }
        $this->IsBeneficiaryAutoCreated = $isBeneficiaryAutoCreated;
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \StructType\Pain001Tran
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * @return \StructType\Pain001Tran
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
     * Get State value
     * @return string|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param string $state
     * @return \StructType\Pain001Tran
     */
    public function setState($state = null)
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->State = $state;
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
     * @return \StructType\Pain001Tran
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
     * Get PurposeOfTransfer value
     * @return string|null
     */
    public function getPurposeOfTransfer()
    {
        return $this->PurposeOfTransfer;
    }
    /**
     * Set PurposeOfTransfer value
     * @param string $purposeOfTransfer
     * @return \StructType\Pain001Tran
     */
    public function setPurposeOfTransfer($purposeOfTransfer = null)
    {
        // validation for constraint: string
        if (!is_null($purposeOfTransfer) && !is_string($purposeOfTransfer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purposeOfTransfer, true), gettype($purposeOfTransfer)), __LINE__);
        }
        $this->PurposeOfTransfer = $purposeOfTransfer;
        return $this;
    }
    /**
     * Get ChargeBearer value
     * @return string|null
     */
    public function getChargeBearer()
    {
        return $this->ChargeBearer;
    }
    /**
     * Set ChargeBearer value
     * @param string $chargeBearer
     * @return \StructType\Pain001Tran
     */
    public function setChargeBearer($chargeBearer = null)
    {
        // validation for constraint: string
        if (!is_null($chargeBearer) && !is_string($chargeBearer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($chargeBearer, true), gettype($chargeBearer)), __LINE__);
        }
        $this->ChargeBearer = $chargeBearer;
        return $this;
    }
    /**
     * Get ServerIP value
     * @return string|null
     */
    public function getServerIP()
    {
        return $this->ServerIP;
    }
    /**
     * Set ServerIP value
     * @param string $serverIP
     * @return \StructType\Pain001Tran
     */
    public function setServerIP($serverIP = null)
    {
        // validation for constraint: string
        if (!is_null($serverIP) && !is_string($serverIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverIP, true), gettype($serverIP)), __LINE__);
        }
        $this->ServerIP = $serverIP;
        return $this;
    }
    /**
     * Get Pain001Upload value
     * @return \StructType\Pain001Upload|null
     */
    public function getPain001Upload()
    {
        return $this->Pain001Upload;
    }
    /**
     * Set Pain001Upload value
     * @param \StructType\Pain001Upload $pain001Upload
     * @return \StructType\Pain001Tran
     */
    public function setPain001Upload(\StructType\Pain001Upload $pain001Upload = null)
    {
        $this->Pain001Upload = $pain001Upload;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Pain001Tran
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
