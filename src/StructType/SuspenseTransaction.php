<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuspenseTransaction StructType
 * @subpackage Structs
 */
class SuspenseTransaction extends AbstractStructBase
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
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $Amount;
    /**
     * The TransactionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $TransactionDate;
    /**
     * The TransactionStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TransactionStatus;
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
     * The TranCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranCategory;
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
     * The TransactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TransactionID;
    /**
     * The IsReversal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsReversal;
    /**
     * The SubBatchID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $SubBatchID;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Status;
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
     * The InitiatorID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $InitiatorID;
    /**
     * The VerifierID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $VerifierID;
    /**
     * The VerifiedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $VerifiedDate;
    /**
     * The MoveNext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $MoveNext;
    /**
     * The NextApproverUserID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $NextApproverUserID;
    /**
     * The NextApproverRoleID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $NextApproverRoleID;
    /**
     * The WorkFlowTransactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $WorkFlowTransactionID;
    /**
     * The PostCounter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $PostCounter;
    /**
     * The AuditID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $AuditID;
    /**
     * The DebitAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebitAccountNo;
    /**
     * The CreditAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreditAccountNo;
    /**
     * The Narration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Narration;
    /**
     * The PostedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PostedDate;
    /**
     * The ChannelRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChannelRefNo;
    /**
     * The ChannelResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChannelResponse;
    /**
     * The ResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ResponseMessage;
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
     * The WorkFlowTransactionIDs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WorkFlowTransactionIDs;
    /**
     * The TranRemarkBuffer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TranRemarkBuffer;
    /**
     * The SubBatch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SubBatch
     */
    public $SubBatch;
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Transaction
     */
    public $Transaction;
    /**
     * Constructor method for SuspenseTransaction
     * @uses SuspenseTransaction::setID()
     * @uses SuspenseTransaction::setOrgID()
     * @uses SuspenseTransaction::setAmount()
     * @uses SuspenseTransaction::setTransactionDate()
     * @uses SuspenseTransaction::setTransactionStatus()
     * @uses SuspenseTransaction::setTryCount()
     * @uses SuspenseTransaction::setTranCategory()
     * @uses SuspenseTransaction::setChannelID()
     * @uses SuspenseTransaction::setTransactionID()
     * @uses SuspenseTransaction::setIsReversal()
     * @uses SuspenseTransaction::setSubBatchID()
     * @uses SuspenseTransaction::setStatus()
     * @uses SuspenseTransaction::setDateCreated()
     * @uses SuspenseTransaction::setDateModified()
     * @uses SuspenseTransaction::setInitiatorID()
     * @uses SuspenseTransaction::setVerifierID()
     * @uses SuspenseTransaction::setVerifiedDate()
     * @uses SuspenseTransaction::setMoveNext()
     * @uses SuspenseTransaction::setNextApproverUserID()
     * @uses SuspenseTransaction::setNextApproverRoleID()
     * @uses SuspenseTransaction::setWorkFlowTransactionID()
     * @uses SuspenseTransaction::setPostCounter()
     * @uses SuspenseTransaction::setAuditID()
     * @uses SuspenseTransaction::setDebitAccountNo()
     * @uses SuspenseTransaction::setCreditAccountNo()
     * @uses SuspenseTransaction::setNarration()
     * @uses SuspenseTransaction::setPostedDate()
     * @uses SuspenseTransaction::setChannelRefNo()
     * @uses SuspenseTransaction::setChannelResponse()
     * @uses SuspenseTransaction::setResponseMessage()
     * @uses SuspenseTransaction::setCreatedBy()
     * @uses SuspenseTransaction::setModifiedBy()
     * @uses SuspenseTransaction::setWorkFlowTransactionIDs()
     * @uses SuspenseTransaction::setTranRemarkBuffer()
     * @uses SuspenseTransaction::setSubBatch()
     * @uses SuspenseTransaction::setTransaction()
     * @param int $iD
     * @param int $orgID
     * @param float $amount
     * @param string $transactionDate
     * @param int $transactionStatus
     * @param int $tryCount
     * @param int $tranCategory
     * @param int $channelID
     * @param int $transactionID
     * @param bool $isReversal
     * @param int $subBatchID
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $initiatorID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param bool $moveNext
     * @param int $nextApproverUserID
     * @param int $nextApproverRoleID
     * @param int $workFlowTransactionID
     * @param int $postCounter
     * @param int $auditID
     * @param string $debitAccountNo
     * @param string $creditAccountNo
     * @param string $narration
     * @param string $postedDate
     * @param string $channelRefNo
     * @param string $channelResponse
     * @param string $responseMessage
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param string $tranRemarkBuffer
     * @param \StructType\SubBatch $subBatch
     * @param \StructType\Transaction $transaction
     */
    public function __construct($iD = null, $orgID = null, $amount = null, $transactionDate = null, $transactionStatus = null, $tryCount = null, $tranCategory = null, $channelID = null, $transactionID = null, $isReversal = null, $subBatchID = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $postCounter = null, $auditID = null, $debitAccountNo = null, $creditAccountNo = null, $narration = null, $postedDate = null, $channelRefNo = null, $channelResponse = null, $responseMessage = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, $tranRemarkBuffer = null, \StructType\SubBatch $subBatch = null, \StructType\Transaction $transaction = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setAmount($amount)
            ->setTransactionDate($transactionDate)
            ->setTransactionStatus($transactionStatus)
            ->setTryCount($tryCount)
            ->setTranCategory($tranCategory)
            ->setChannelID($channelID)
            ->setTransactionID($transactionID)
            ->setIsReversal($isReversal)
            ->setSubBatchID($subBatchID)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setInitiatorID($initiatorID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setMoveNext($moveNext)
            ->setNextApproverUserID($nextApproverUserID)
            ->setNextApproverRoleID($nextApproverRoleID)
            ->setWorkFlowTransactionID($workFlowTransactionID)
            ->setPostCounter($postCounter)
            ->setAuditID($auditID)
            ->setDebitAccountNo($debitAccountNo)
            ->setCreditAccountNo($creditAccountNo)
            ->setNarration($narration)
            ->setPostedDate($postedDate)
            ->setChannelRefNo($channelRefNo)
            ->setChannelResponse($channelResponse)
            ->setResponseMessage($responseMessage)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setTranRemarkBuffer($tranRemarkBuffer)
            ->setSubBatch($subBatch)
            ->setTransaction($transaction);
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
     * @return \StructType\SuspenseTransaction
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
     * @return \StructType\SuspenseTransaction
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
     * @return \StructType\SuspenseTransaction
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
     * Get TransactionDate value
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->TransactionDate;
    }
    /**
     * Set TransactionDate value
     * @param string $transactionDate
     * @return \StructType\SuspenseTransaction
     */
    public function setTransactionDate($transactionDate = null)
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->TransactionDate = $transactionDate;
        return $this;
    }
    /**
     * Get TransactionStatus value
     * @return int
     */
    public function getTransactionStatus()
    {
        return $this->TransactionStatus;
    }
    /**
     * Set TransactionStatus value
     * @param int $transactionStatus
     * @return \StructType\SuspenseTransaction
     */
    public function setTransactionStatus($transactionStatus = null)
    {
        // validation for constraint: int
        if (!is_null($transactionStatus) && !(is_int($transactionStatus) || ctype_digit($transactionStatus))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionStatus, true), gettype($transactionStatus)), __LINE__);
        }
        $this->TransactionStatus = $transactionStatus;
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
     * @return \StructType\SuspenseTransaction
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
     * Get TranCategory value
     * @return int
     */
    public function getTranCategory()
    {
        return $this->TranCategory;
    }
    /**
     * Set TranCategory value
     * @param int $tranCategory
     * @return \StructType\SuspenseTransaction
     */
    public function setTranCategory($tranCategory = null)
    {
        // validation for constraint: int
        if (!is_null($tranCategory) && !(is_int($tranCategory) || ctype_digit($tranCategory))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranCategory, true), gettype($tranCategory)), __LINE__);
        }
        $this->TranCategory = $tranCategory;
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
     * @return \StructType\SuspenseTransaction
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
     * @return \StructType\SuspenseTransaction
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
     * Get IsReversal value
     * @return bool
     */
    public function getIsReversal()
    {
        return $this->IsReversal;
    }
    /**
     * Set IsReversal value
     * @param bool $isReversal
     * @return \StructType\SuspenseTransaction
     */
    public function setIsReversal($isReversal = null)
    {
        // validation for constraint: boolean
        if (!is_null($isReversal) && !is_bool($isReversal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReversal, true), gettype($isReversal)), __LINE__);
        }
        $this->IsReversal = $isReversal;
        return $this;
    }
    /**
     * Get SubBatchID value
     * @return int
     */
    public function getSubBatchID()
    {
        return $this->SubBatchID;
    }
    /**
     * Set SubBatchID value
     * @param int $subBatchID
     * @return \StructType\SuspenseTransaction
     */
    public function setSubBatchID($subBatchID = null)
    {
        // validation for constraint: int
        if (!is_null($subBatchID) && !(is_int($subBatchID) || ctype_digit($subBatchID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subBatchID, true), gettype($subBatchID)), __LINE__);
        }
        $this->SubBatchID = $subBatchID;
        return $this;
    }
    /**
     * Get Status value
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param int $status
     * @return \StructType\SuspenseTransaction
     */
    public function setStatus($status = null)
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->Status = $status;
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
     * @return \StructType\SuspenseTransaction
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
     * @return \StructType\SuspenseTransaction
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
     * Get InitiatorID value
     * @return int
     */
    public function getInitiatorID()
    {
        return $this->InitiatorID;
    }
    /**
     * Set InitiatorID value
     * @param int $initiatorID
     * @return \StructType\SuspenseTransaction
     */
    public function setInitiatorID($initiatorID = null)
    {
        // validation for constraint: int
        if (!is_null($initiatorID) && !(is_int($initiatorID) || ctype_digit($initiatorID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($initiatorID, true), gettype($initiatorID)), __LINE__);
        }
        $this->InitiatorID = $initiatorID;
        return $this;
    }
    /**
     * Get VerifierID value
     * @return int
     */
    public function getVerifierID()
    {
        return $this->VerifierID;
    }
    /**
     * Set VerifierID value
     * @param int $verifierID
     * @return \StructType\SuspenseTransaction
     */
    public function setVerifierID($verifierID = null)
    {
        // validation for constraint: int
        if (!is_null($verifierID) && !(is_int($verifierID) || ctype_digit($verifierID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($verifierID, true), gettype($verifierID)), __LINE__);
        }
        $this->VerifierID = $verifierID;
        return $this;
    }
    /**
     * Get VerifiedDate value
     * @return string
     */
    public function getVerifiedDate()
    {
        return $this->VerifiedDate;
    }
    /**
     * Set VerifiedDate value
     * @param string $verifiedDate
     * @return \StructType\SuspenseTransaction
     */
    public function setVerifiedDate($verifiedDate = null)
    {
        // validation for constraint: string
        if (!is_null($verifiedDate) && !is_string($verifiedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verifiedDate, true), gettype($verifiedDate)), __LINE__);
        }
        $this->VerifiedDate = $verifiedDate;
        return $this;
    }
    /**
     * Get MoveNext value
     * @return bool
     */
    public function getMoveNext()
    {
        return $this->MoveNext;
    }
    /**
     * Set MoveNext value
     * @param bool $moveNext
     * @return \StructType\SuspenseTransaction
     */
    public function setMoveNext($moveNext = null)
    {
        // validation for constraint: boolean
        if (!is_null($moveNext) && !is_bool($moveNext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moveNext, true), gettype($moveNext)), __LINE__);
        }
        $this->MoveNext = $moveNext;
        return $this;
    }
    /**
     * Get NextApproverUserID value
     * @return int
     */
    public function getNextApproverUserID()
    {
        return $this->NextApproverUserID;
    }
    /**
     * Set NextApproverUserID value
     * @param int $nextApproverUserID
     * @return \StructType\SuspenseTransaction
     */
    public function setNextApproverUserID($nextApproverUserID = null)
    {
        // validation for constraint: int
        if (!is_null($nextApproverUserID) && !(is_int($nextApproverUserID) || ctype_digit($nextApproverUserID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nextApproverUserID, true), gettype($nextApproverUserID)), __LINE__);
        }
        $this->NextApproverUserID = $nextApproverUserID;
        return $this;
    }
    /**
     * Get NextApproverRoleID value
     * @return int
     */
    public function getNextApproverRoleID()
    {
        return $this->NextApproverRoleID;
    }
    /**
     * Set NextApproverRoleID value
     * @param int $nextApproverRoleID
     * @return \StructType\SuspenseTransaction
     */
    public function setNextApproverRoleID($nextApproverRoleID = null)
    {
        // validation for constraint: int
        if (!is_null($nextApproverRoleID) && !(is_int($nextApproverRoleID) || ctype_digit($nextApproverRoleID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nextApproverRoleID, true), gettype($nextApproverRoleID)), __LINE__);
        }
        $this->NextApproverRoleID = $nextApproverRoleID;
        return $this;
    }
    /**
     * Get WorkFlowTransactionID value
     * @return int
     */
    public function getWorkFlowTransactionID()
    {
        return $this->WorkFlowTransactionID;
    }
    /**
     * Set WorkFlowTransactionID value
     * @param int $workFlowTransactionID
     * @return \StructType\SuspenseTransaction
     */
    public function setWorkFlowTransactionID($workFlowTransactionID = null)
    {
        // validation for constraint: int
        if (!is_null($workFlowTransactionID) && !(is_int($workFlowTransactionID) || ctype_digit($workFlowTransactionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workFlowTransactionID, true), gettype($workFlowTransactionID)), __LINE__);
        }
        $this->WorkFlowTransactionID = $workFlowTransactionID;
        return $this;
    }
    /**
     * Get PostCounter value
     * @return int
     */
    public function getPostCounter()
    {
        return $this->PostCounter;
    }
    /**
     * Set PostCounter value
     * @param int $postCounter
     * @return \StructType\SuspenseTransaction
     */
    public function setPostCounter($postCounter = null)
    {
        // validation for constraint: int
        if (!is_null($postCounter) && !(is_int($postCounter) || ctype_digit($postCounter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($postCounter, true), gettype($postCounter)), __LINE__);
        }
        $this->PostCounter = $postCounter;
        return $this;
    }
    /**
     * Get AuditID value
     * @return int
     */
    public function getAuditID()
    {
        return $this->AuditID;
    }
    /**
     * Set AuditID value
     * @param int $auditID
     * @return \StructType\SuspenseTransaction
     */
    public function setAuditID($auditID = null)
    {
        // validation for constraint: int
        if (!is_null($auditID) && !(is_int($auditID) || ctype_digit($auditID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($auditID, true), gettype($auditID)), __LINE__);
        }
        $this->AuditID = $auditID;
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
     * @return \StructType\SuspenseTransaction
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
     * @return \StructType\SuspenseTransaction
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
     * @return \StructType\SuspenseTransaction
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
     * Get PostedDate value
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->PostedDate;
    }
    /**
     * Set PostedDate value
     * @param string $postedDate
     * @return \StructType\SuspenseTransaction
     */
    public function setPostedDate($postedDate = null)
    {
        // validation for constraint: string
        if (!is_null($postedDate) && !is_string($postedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postedDate, true), gettype($postedDate)), __LINE__);
        }
        $this->PostedDate = $postedDate;
        return $this;
    }
    /**
     * Get ChannelRefNo value
     * @return string|null
     */
    public function getChannelRefNo()
    {
        return $this->ChannelRefNo;
    }
    /**
     * Set ChannelRefNo value
     * @param string $channelRefNo
     * @return \StructType\SuspenseTransaction
     */
    public function setChannelRefNo($channelRefNo = null)
    {
        // validation for constraint: string
        if (!is_null($channelRefNo) && !is_string($channelRefNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelRefNo, true), gettype($channelRefNo)), __LINE__);
        }
        $this->ChannelRefNo = $channelRefNo;
        return $this;
    }
    /**
     * Get ChannelResponse value
     * @return string|null
     */
    public function getChannelResponse()
    {
        return $this->ChannelResponse;
    }
    /**
     * Set ChannelResponse value
     * @param string $channelResponse
     * @return \StructType\SuspenseTransaction
     */
    public function setChannelResponse($channelResponse = null)
    {
        // validation for constraint: string
        if (!is_null($channelResponse) && !is_string($channelResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelResponse, true), gettype($channelResponse)), __LINE__);
        }
        $this->ChannelResponse = $channelResponse;
        return $this;
    }
    /**
     * Get ResponseMessage value
     * @return string|null
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param string $responseMessage
     * @return \StructType\SuspenseTransaction
     */
    public function setResponseMessage($responseMessage = null)
    {
        // validation for constraint: string
        if (!is_null($responseMessage) && !is_string($responseMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseMessage, true), gettype($responseMessage)), __LINE__);
        }
        $this->ResponseMessage = $responseMessage;
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
     * @return \StructType\SuspenseTransaction
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
     * @return \StructType\SuspenseTransaction
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
     * Get WorkFlowTransactionIDs value
     * @return string|null
     */
    public function getWorkFlowTransactionIDs()
    {
        return $this->WorkFlowTransactionIDs;
    }
    /**
     * Set WorkFlowTransactionIDs value
     * @param string $workFlowTransactionIDs
     * @return \StructType\SuspenseTransaction
     */
    public function setWorkFlowTransactionIDs($workFlowTransactionIDs = null)
    {
        // validation for constraint: string
        if (!is_null($workFlowTransactionIDs) && !is_string($workFlowTransactionIDs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workFlowTransactionIDs, true), gettype($workFlowTransactionIDs)), __LINE__);
        }
        $this->WorkFlowTransactionIDs = $workFlowTransactionIDs;
        return $this;
    }
    /**
     * Get TranRemarkBuffer value
     * @return string|null
     */
    public function getTranRemarkBuffer()
    {
        return $this->TranRemarkBuffer;
    }
    /**
     * Set TranRemarkBuffer value
     * @param string $tranRemarkBuffer
     * @return \StructType\SuspenseTransaction
     */
    public function setTranRemarkBuffer($tranRemarkBuffer = null)
    {
        // validation for constraint: string
        if (!is_null($tranRemarkBuffer) && !is_string($tranRemarkBuffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tranRemarkBuffer, true), gettype($tranRemarkBuffer)), __LINE__);
        }
        $this->TranRemarkBuffer = $tranRemarkBuffer;
        return $this;
    }
    /**
     * Get SubBatch value
     * @return \StructType\SubBatch|null
     */
    public function getSubBatch()
    {
        return $this->SubBatch;
    }
    /**
     * Set SubBatch value
     * @param \StructType\SubBatch $subBatch
     * @return \StructType\SuspenseTransaction
     */
    public function setSubBatch(\StructType\SubBatch $subBatch = null)
    {
        $this->SubBatch = $subBatch;
        return $this;
    }
    /**
     * Get Transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\SuspenseTransaction
     */
    public function setTransaction(\StructType\Transaction $transaction = null)
    {
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SuspenseTransaction
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
