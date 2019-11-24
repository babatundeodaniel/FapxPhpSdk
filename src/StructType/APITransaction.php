<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for APITransaction StructType
 * @subpackage Structs
 */
class APITransaction extends AbstractStructBase
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
     * The OrgID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $OrgID;
    /**
     * The APIUploadID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $APIUploadID;
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
     * The SN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $SN;
    /**
     * The IsOnUs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsOnUs;
    /**
     * The PaymentDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $PaymentDate;
    /**
     * The TryCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TryCount;
    /**
     * The ChannelID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ChannelID;
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
     * The FileAttached
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $FileAttached;
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
     * The Transferred
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $Transferred;
    /**
     * The TransferredDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $TransferredDate;
    /**
     * The BatchID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $BatchID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TransactionID;
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
     * The DateModified
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DateModified;
    /**
     * The ReturnedToOrg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ReturnedToOrg;
    /**
     * The TheTotalCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $TheTotalCharge;
    /**
     * The OrgTranParticular
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrgTranParticular;
    /**
     * The OrgTranRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrgTranRefNo;
    /**
     * The DebitAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebitAccountNo;
    /**
     * The DebitBankCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebitBankCode;
    /**
     * The CreditAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreditAccountNo;
    /**
     * The CreditBankCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreditBankCode;
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
     * The AttachmentPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentPath;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMessage;
    /**
     * The UploadRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UploadRefNo;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The CreatedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreatedBy;
    /**
     * The ModifiedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ModifiedBy;
    /**
     * The DeclineComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeclineComment;
    /**
     * The TheOrgName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TheOrgName;
    /**
     * The TheTransactionMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TheTransactionMode;
    /**
     * The TheChannelMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TheChannelMode;
    /**
     * Constructor method for APITransaction
     * @uses APITransaction::setID()
     * @uses APITransaction::setOrgID()
     * @uses APITransaction::setAPIUploadID()
     * @uses APITransaction::setAmount()
     * @uses APITransaction::setSN()
     * @uses APITransaction::setIsOnUs()
     * @uses APITransaction::setPaymentDate()
     * @uses APITransaction::setTryCount()
     * @uses APITransaction::setChannelID()
     * @uses APITransaction::setTranMode()
     * @uses APITransaction::setFileAttached()
     * @uses APITransaction::setVerificationStatus()
     * @uses APITransaction::setTransferred()
     * @uses APITransaction::setTransferredDate()
     * @uses APITransaction::setBatchID()
     * @uses APITransaction::setTransactionID()
     * @uses APITransaction::setDateCreated()
     * @uses APITransaction::setDateModified()
     * @uses APITransaction::setReturnedToOrg()
     * @uses APITransaction::setTheTotalCharge()
     * @uses APITransaction::setOrgTranParticular()
     * @uses APITransaction::setOrgTranRefNo()
     * @uses APITransaction::setDebitAccountNo()
     * @uses APITransaction::setDebitBankCode()
     * @uses APITransaction::setCreditAccountNo()
     * @uses APITransaction::setCreditBankCode()
     * @uses APITransaction::setBeneficiaryName()
     * @uses APITransaction::setNarration()
     * @uses APITransaction::setAttachmentPath()
     * @uses APITransaction::setErrorMessage()
     * @uses APITransaction::setUploadRefNo()
     * @uses APITransaction::setStatus()
     * @uses APITransaction::setCreatedBy()
     * @uses APITransaction::setModifiedBy()
     * @uses APITransaction::setDeclineComment()
     * @uses APITransaction::setTheOrgName()
     * @uses APITransaction::setTheTransactionMode()
     * @uses APITransaction::setTheChannelMode()
     * @param int $iD
     * @param int $orgID
     * @param int $aPIUploadID
     * @param float $amount
     * @param int $sN
     * @param bool $isOnUs
     * @param string $paymentDate
     * @param int $tryCount
     * @param int $channelID
     * @param int $tranMode
     * @param bool $fileAttached
     * @param int $verificationStatus
     * @param bool $transferred
     * @param string $transferredDate
     * @param int $batchID
     * @param int $transactionID
     * @param string $dateCreated
     * @param string $dateModified
     * @param bool $returnedToOrg
     * @param float $theTotalCharge
     * @param string $orgTranParticular
     * @param string $orgTranRefNo
     * @param string $debitAccountNo
     * @param string $debitBankCode
     * @param string $creditAccountNo
     * @param string $creditBankCode
     * @param string $beneficiaryName
     * @param string $narration
     * @param string $attachmentPath
     * @param string $errorMessage
     * @param string $uploadRefNo
     * @param string $status
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $declineComment
     * @param string $theOrgName
     * @param string $theTransactionMode
     * @param string $theChannelMode
     */
    public function __construct($iD = null, $orgID = null, $aPIUploadID = null, $amount = null, $sN = null, $isOnUs = null, $paymentDate = null, $tryCount = null, $channelID = null, $tranMode = null, $fileAttached = null, $verificationStatus = null, $transferred = null, $transferredDate = null, $batchID = null, $transactionID = null, $dateCreated = null, $dateModified = null, $returnedToOrg = null, $theTotalCharge = null, $orgTranParticular = null, $orgTranRefNo = null, $debitAccountNo = null, $debitBankCode = null, $creditAccountNo = null, $creditBankCode = null, $beneficiaryName = null, $narration = null, $attachmentPath = null, $errorMessage = null, $uploadRefNo = null, $status = null, $createdBy = null, $modifiedBy = null, $declineComment = null, $theOrgName = null, $theTransactionMode = null, $theChannelMode = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setAPIUploadID($aPIUploadID)
            ->setAmount($amount)
            ->setSN($sN)
            ->setIsOnUs($isOnUs)
            ->setPaymentDate($paymentDate)
            ->setTryCount($tryCount)
            ->setChannelID($channelID)
            ->setTranMode($tranMode)
            ->setFileAttached($fileAttached)
            ->setVerificationStatus($verificationStatus)
            ->setTransferred($transferred)
            ->setTransferredDate($transferredDate)
            ->setBatchID($batchID)
            ->setTransactionID($transactionID)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setReturnedToOrg($returnedToOrg)
            ->setTheTotalCharge($theTotalCharge)
            ->setOrgTranParticular($orgTranParticular)
            ->setOrgTranRefNo($orgTranRefNo)
            ->setDebitAccountNo($debitAccountNo)
            ->setDebitBankCode($debitBankCode)
            ->setCreditAccountNo($creditAccountNo)
            ->setCreditBankCode($creditBankCode)
            ->setBeneficiaryName($beneficiaryName)
            ->setNarration($narration)
            ->setAttachmentPath($attachmentPath)
            ->setErrorMessage($errorMessage)
            ->setUploadRefNo($uploadRefNo)
            ->setStatus($status)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setDeclineComment($declineComment)
            ->setTheOrgName($theOrgName)
            ->setTheTransactionMode($theTransactionMode)
            ->setTheChannelMode($theChannelMode);
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
     * @return \StructType\APITransaction
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
     * Get OrgID value
     * @return int
     */
    public function getOrgID()
    {
        return $this->OrgID;
    }
    /**
     * Set OrgID value
     * @param int $orgID
     * @return \StructType\APITransaction
     */
    public function setOrgID($orgID = null)
    {
        // validation for constraint: int
        if (!is_null($orgID) && !(is_int($orgID) || ctype_digit($orgID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orgID, true), gettype($orgID)), __LINE__);
        }
        $this->OrgID = $orgID;
        return $this;
    }
    /**
     * Get APIUploadID value
     * @return int
     */
    public function getAPIUploadID()
    {
        return $this->APIUploadID;
    }
    /**
     * Set APIUploadID value
     * @param int $aPIUploadID
     * @return \StructType\APITransaction
     */
    public function setAPIUploadID($aPIUploadID = null)
    {
        // validation for constraint: int
        if (!is_null($aPIUploadID) && !(is_int($aPIUploadID) || ctype_digit($aPIUploadID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($aPIUploadID, true), gettype($aPIUploadID)), __LINE__);
        }
        $this->APIUploadID = $aPIUploadID;
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
     * @return \StructType\APITransaction
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
     * Get SN value
     * @return int
     */
    public function getSN()
    {
        return $this->SN;
    }
    /**
     * Set SN value
     * @param int $sN
     * @return \StructType\APITransaction
     */
    public function setSN($sN = null)
    {
        // validation for constraint: int
        if (!is_null($sN) && !(is_int($sN) || ctype_digit($sN))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sN, true), gettype($sN)), __LINE__);
        }
        $this->SN = $sN;
        return $this;
    }
    /**
     * Get IsOnUs value
     * @return bool
     */
    public function getIsOnUs()
    {
        return $this->IsOnUs;
    }
    /**
     * Set IsOnUs value
     * @param bool $isOnUs
     * @return \StructType\APITransaction
     */
    public function setIsOnUs($isOnUs = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOnUs) && !is_bool($isOnUs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOnUs, true), gettype($isOnUs)), __LINE__);
        }
        $this->IsOnUs = $isOnUs;
        return $this;
    }
    /**
     * Get PaymentDate value
     * @return string
     */
    public function getPaymentDate()
    {
        return $this->PaymentDate;
    }
    /**
     * Set PaymentDate value
     * @param string $paymentDate
     * @return \StructType\APITransaction
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
     * Get TryCount value
     * @return int
     */
    public function getTryCount()
    {
        return $this->TryCount;
    }
    /**
     * Set TryCount value
     * @param int $tryCount
     * @return \StructType\APITransaction
     */
    public function setTryCount($tryCount = null)
    {
        // validation for constraint: int
        if (!is_null($tryCount) && !(is_int($tryCount) || ctype_digit($tryCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tryCount, true), gettype($tryCount)), __LINE__);
        }
        $this->TryCount = $tryCount;
        return $this;
    }
    /**
     * Get ChannelID value
     * @return int
     */
    public function getChannelID()
    {
        return $this->ChannelID;
    }
    /**
     * Set ChannelID value
     * @param int $channelID
     * @return \StructType\APITransaction
     */
    public function setChannelID($channelID = null)
    {
        // validation for constraint: int
        if (!is_null($channelID) && !(is_int($channelID) || ctype_digit($channelID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($channelID, true), gettype($channelID)), __LINE__);
        }
        $this->ChannelID = $channelID;
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
     * @return \StructType\APITransaction
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
     * Get FileAttached value
     * @return bool
     */
    public function getFileAttached()
    {
        return $this->FileAttached;
    }
    /**
     * Set FileAttached value
     * @param bool $fileAttached
     * @return \StructType\APITransaction
     */
    public function setFileAttached($fileAttached = null)
    {
        // validation for constraint: boolean
        if (!is_null($fileAttached) && !is_bool($fileAttached)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($fileAttached, true), gettype($fileAttached)), __LINE__);
        }
        $this->FileAttached = $fileAttached;
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
     * @return \StructType\APITransaction
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
     * Get Transferred value
     * @return bool
     */
    public function getTransferred()
    {
        return $this->Transferred;
    }
    /**
     * Set Transferred value
     * @param bool $transferred
     * @return \StructType\APITransaction
     */
    public function setTransferred($transferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($transferred) && !is_bool($transferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transferred, true), gettype($transferred)), __LINE__);
        }
        $this->Transferred = $transferred;
        return $this;
    }
    /**
     * Get TransferredDate value
     * @return string
     */
    public function getTransferredDate()
    {
        return $this->TransferredDate;
    }
    /**
     * Set TransferredDate value
     * @param string $transferredDate
     * @return \StructType\APITransaction
     */
    public function setTransferredDate($transferredDate = null)
    {
        // validation for constraint: string
        if (!is_null($transferredDate) && !is_string($transferredDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transferredDate, true), gettype($transferredDate)), __LINE__);
        }
        $this->TransferredDate = $transferredDate;
        return $this;
    }
    /**
     * Get BatchID value
     * @return int
     */
    public function getBatchID()
    {
        return $this->BatchID;
    }
    /**
     * Set BatchID value
     * @param int $batchID
     * @return \StructType\APITransaction
     */
    public function setBatchID($batchID = null)
    {
        // validation for constraint: int
        if (!is_null($batchID) && !(is_int($batchID) || ctype_digit($batchID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchID, true), gettype($batchID)), __LINE__);
        }
        $this->BatchID = $batchID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return int
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param int $transactionID
     * @return \StructType\APITransaction
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !(is_int($transactionID) || ctype_digit($transactionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
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
     * @return \StructType\APITransaction
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
     * Get DateModified value
     * @return string
     */
    public function getDateModified()
    {
        return $this->DateModified;
    }
    /**
     * Set DateModified value
     * @param string $dateModified
     * @return \StructType\APITransaction
     */
    public function setDateModified($dateModified = null)
    {
        // validation for constraint: string
        if (!is_null($dateModified) && !is_string($dateModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateModified, true), gettype($dateModified)), __LINE__);
        }
        $this->DateModified = $dateModified;
        return $this;
    }
    /**
     * Get ReturnedToOrg value
     * @return bool
     */
    public function getReturnedToOrg()
    {
        return $this->ReturnedToOrg;
    }
    /**
     * Set ReturnedToOrg value
     * @param bool $returnedToOrg
     * @return \StructType\APITransaction
     */
    public function setReturnedToOrg($returnedToOrg = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnedToOrg) && !is_bool($returnedToOrg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnedToOrg, true), gettype($returnedToOrg)), __LINE__);
        }
        $this->ReturnedToOrg = $returnedToOrg;
        return $this;
    }
    /**
     * Get TheTotalCharge value
     * @return float
     */
    public function getTheTotalCharge()
    {
        return $this->TheTotalCharge;
    }
    /**
     * Set TheTotalCharge value
     * @param float $theTotalCharge
     * @return \StructType\APITransaction
     */
    public function setTheTotalCharge($theTotalCharge = null)
    {
        // validation for constraint: float
        if (!is_null($theTotalCharge) && !(is_float($theTotalCharge) || is_numeric($theTotalCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($theTotalCharge, true), gettype($theTotalCharge)), __LINE__);
        }
        $this->TheTotalCharge = $theTotalCharge;
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
     * @return \StructType\APITransaction
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
     * @return \StructType\APITransaction
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
     * @return \StructType\APITransaction
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
     * @return \StructType\APITransaction
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
     * @return \StructType\APITransaction
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
     * @return \StructType\APITransaction
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
     * @return \StructType\APITransaction
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
     * @return \StructType\APITransaction
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
     * Get AttachmentPath value
     * @return string|null
     */
    public function getAttachmentPath()
    {
        return $this->AttachmentPath;
    }
    /**
     * Set AttachmentPath value
     * @param string $attachmentPath
     * @return \StructType\APITransaction
     */
    public function setAttachmentPath($attachmentPath = null)
    {
        // validation for constraint: string
        if (!is_null($attachmentPath) && !is_string($attachmentPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attachmentPath, true), gettype($attachmentPath)), __LINE__);
        }
        $this->AttachmentPath = $attachmentPath;
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
     * @return \StructType\APITransaction
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
     * Get UploadRefNo value
     * @return string|null
     */
    public function getUploadRefNo()
    {
        return $this->UploadRefNo;
    }
    /**
     * Set UploadRefNo value
     * @param string $uploadRefNo
     * @return \StructType\APITransaction
     */
    public function setUploadRefNo($uploadRefNo = null)
    {
        // validation for constraint: string
        if (!is_null($uploadRefNo) && !is_string($uploadRefNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadRefNo, true), gettype($uploadRefNo)), __LINE__);
        }
        $this->UploadRefNo = $uploadRefNo;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\APITransaction
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \StructType\APITransaction
     */
    public function setCreatedBy($createdBy = null)
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        return $this;
    }
    /**
     * Get ModifiedBy value
     * @return string|null
     */
    public function getModifiedBy()
    {
        return $this->ModifiedBy;
    }
    /**
     * Set ModifiedBy value
     * @param string $modifiedBy
     * @return \StructType\APITransaction
     */
    public function setModifiedBy($modifiedBy = null)
    {
        // validation for constraint: string
        if (!is_null($modifiedBy) && !is_string($modifiedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedBy, true), gettype($modifiedBy)), __LINE__);
        }
        $this->ModifiedBy = $modifiedBy;
        return $this;
    }
    /**
     * Get DeclineComment value
     * @return string|null
     */
    public function getDeclineComment()
    {
        return $this->DeclineComment;
    }
    /**
     * Set DeclineComment value
     * @param string $declineComment
     * @return \StructType\APITransaction
     */
    public function setDeclineComment($declineComment = null)
    {
        // validation for constraint: string
        if (!is_null($declineComment) && !is_string($declineComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declineComment, true), gettype($declineComment)), __LINE__);
        }
        $this->DeclineComment = $declineComment;
        return $this;
    }
    /**
     * Get TheOrgName value
     * @return string|null
     */
    public function getTheOrgName()
    {
        return $this->TheOrgName;
    }
    /**
     * Set TheOrgName value
     * @param string $theOrgName
     * @return \StructType\APITransaction
     */
    public function setTheOrgName($theOrgName = null)
    {
        // validation for constraint: string
        if (!is_null($theOrgName) && !is_string($theOrgName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theOrgName, true), gettype($theOrgName)), __LINE__);
        }
        $this->TheOrgName = $theOrgName;
        return $this;
    }
    /**
     * Get TheTransactionMode value
     * @return string|null
     */
    public function getTheTransactionMode()
    {
        return $this->TheTransactionMode;
    }
    /**
     * Set TheTransactionMode value
     * @param string $theTransactionMode
     * @return \StructType\APITransaction
     */
    public function setTheTransactionMode($theTransactionMode = null)
    {
        // validation for constraint: string
        if (!is_null($theTransactionMode) && !is_string($theTransactionMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theTransactionMode, true), gettype($theTransactionMode)), __LINE__);
        }
        $this->TheTransactionMode = $theTransactionMode;
        return $this;
    }
    /**
     * Get TheChannelMode value
     * @return string|null
     */
    public function getTheChannelMode()
    {
        return $this->TheChannelMode;
    }
    /**
     * Set TheChannelMode value
     * @param string $theChannelMode
     * @return \StructType\APITransaction
     */
    public function setTheChannelMode($theChannelMode = null)
    {
        // validation for constraint: string
        if (!is_null($theChannelMode) && !is_string($theChannelMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theChannelMode, true), gettype($theChannelMode)), __LINE__);
        }
        $this->TheChannelMode = $theChannelMode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\APITransaction
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
