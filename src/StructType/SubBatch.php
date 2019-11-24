<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubBatch StructType
 * @subpackage Structs
 */
class SubBatch extends AbstractStructBase
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
     * The BatchID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $BatchID;
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
     * The TranCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranCount;
    /**
     * The TotalAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $TotalAmount;
    /**
     * The TransferredToSuspense
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $TransferredToSuspense;
    /**
     * The ISwitchResponseCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ISwitchResponseCode;
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
     * The ISwitchTryCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ISwitchTryCount;
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
     * The SuspenseTransferFailed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $SuspenseTransferFailed;
    /**
     * The Processed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $Processed;
    /**
     * The ValidTransactionsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ValidTransactionsCount;
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
     * The ChannelReferenceNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChannelReferenceNo;
    /**
     * The NEFTReferenceNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NEFTReferenceNo;
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
     * The SuspenseTransactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfSuspenseTransaction
     */
    public $SuspenseTransactions;
    /**
     * The Transactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction
     */
    public $Transactions;
    /**
     * The Batch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Batch
     */
    public $Batch;
    /**
     * The Trans
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction
     */
    public $Trans;
    /**
     * Constructor method for SubBatch
     * @uses SubBatch::setID()
     * @uses SubBatch::setBatchID()
     * @uses SubBatch::setChannelID()
     * @uses SubBatch::setTranMode()
     * @uses SubBatch::setTranCount()
     * @uses SubBatch::setTotalAmount()
     * @uses SubBatch::setTransferredToSuspense()
     * @uses SubBatch::setISwitchResponseCode()
     * @uses SubBatch::setPaymentDate()
     * @uses SubBatch::setISwitchTryCount()
     * @uses SubBatch::setStatus()
     * @uses SubBatch::setDateCreated()
     * @uses SubBatch::setDateModified()
     * @uses SubBatch::setInitiatorID()
     * @uses SubBatch::setVerifierID()
     * @uses SubBatch::setVerifiedDate()
     * @uses SubBatch::setMoveNext()
     * @uses SubBatch::setNextApproverUserID()
     * @uses SubBatch::setNextApproverRoleID()
     * @uses SubBatch::setWorkFlowTransactionID()
     * @uses SubBatch::setSuspenseTransferFailed()
     * @uses SubBatch::setProcessed()
     * @uses SubBatch::setValidTransactionsCount()
     * @uses SubBatch::setDebitAccountNo()
     * @uses SubBatch::setCreditAccountNo()
     * @uses SubBatch::setChannelReferenceNo()
     * @uses SubBatch::setNEFTReferenceNo()
     * @uses SubBatch::setCreatedBy()
     * @uses SubBatch::setModifiedBy()
     * @uses SubBatch::setWorkFlowTransactionIDs()
     * @uses SubBatch::setSuspenseTransactions()
     * @uses SubBatch::setTransactions()
     * @uses SubBatch::setBatch()
     * @uses SubBatch::setTrans()
     * @param int $iD
     * @param int $batchID
     * @param int $channelID
     * @param int $tranMode
     * @param int $tranCount
     * @param float $totalAmount
     * @param bool $transferredToSuspense
     * @param int $iSwitchResponseCode
     * @param string $paymentDate
     * @param int $iSwitchTryCount
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
     * @param bool $suspenseTransferFailed
     * @param bool $processed
     * @param int $validTransactionsCount
     * @param string $debitAccountNo
     * @param string $creditAccountNo
     * @param string $channelReferenceNo
     * @param string $nEFTReferenceNo
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param \ArrayType\ArrayOfSuspenseTransaction $suspenseTransactions
     * @param \ArrayType\ArrayOfTransaction $transactions
     * @param \StructType\Batch $batch
     * @param \ArrayType\ArrayOfTransaction $trans
     */
    public function __construct($iD = null, $batchID = null, $channelID = null, $tranMode = null, $tranCount = null, $totalAmount = null, $transferredToSuspense = null, $iSwitchResponseCode = null, $paymentDate = null, $iSwitchTryCount = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $suspenseTransferFailed = null, $processed = null, $validTransactionsCount = null, $debitAccountNo = null, $creditAccountNo = null, $channelReferenceNo = null, $nEFTReferenceNo = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \ArrayType\ArrayOfSuspenseTransaction $suspenseTransactions = null, \ArrayType\ArrayOfTransaction $transactions = null, \StructType\Batch $batch = null, \ArrayType\ArrayOfTransaction $trans = null)
    {
        $this
            ->setID($iD)
            ->setBatchID($batchID)
            ->setChannelID($channelID)
            ->setTranMode($tranMode)
            ->setTranCount($tranCount)
            ->setTotalAmount($totalAmount)
            ->setTransferredToSuspense($transferredToSuspense)
            ->setISwitchResponseCode($iSwitchResponseCode)
            ->setPaymentDate($paymentDate)
            ->setISwitchTryCount($iSwitchTryCount)
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
            ->setSuspenseTransferFailed($suspenseTransferFailed)
            ->setProcessed($processed)
            ->setValidTransactionsCount($validTransactionsCount)
            ->setDebitAccountNo($debitAccountNo)
            ->setCreditAccountNo($creditAccountNo)
            ->setChannelReferenceNo($channelReferenceNo)
            ->setNEFTReferenceNo($nEFTReferenceNo)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setSuspenseTransactions($suspenseTransactions)
            ->setTransactions($transactions)
            ->setBatch($batch)
            ->setTrans($trans);
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * Get TranCount value
     * @return int
     */
    public function getTranCount()
    {
        return $this->TranCount;
    }
    /**
     * Set TranCount value
     * @param int $tranCount
     * @return \StructType\SubBatch
     */
    public function setTranCount($tranCount = null)
    {
        // validation for constraint: int
        if (!is_null($tranCount) && !(is_int($tranCount) || ctype_digit($tranCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranCount, true), gettype($tranCount)), __LINE__);
        }
        $this->TranCount = $tranCount;
        return $this;
    }
    /**
     * Get TotalAmount value
     * @return float
     */
    public function getTotalAmount()
    {
        return $this->TotalAmount;
    }
    /**
     * Set TotalAmount value
     * @param float $totalAmount
     * @return \StructType\SubBatch
     */
    public function setTotalAmount($totalAmount = null)
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->TotalAmount = $totalAmount;
        return $this;
    }
    /**
     * Get TransferredToSuspense value
     * @return bool
     */
    public function getTransferredToSuspense()
    {
        return $this->TransferredToSuspense;
    }
    /**
     * Set TransferredToSuspense value
     * @param bool $transferredToSuspense
     * @return \StructType\SubBatch
     */
    public function setTransferredToSuspense($transferredToSuspense = null)
    {
        // validation for constraint: boolean
        if (!is_null($transferredToSuspense) && !is_bool($transferredToSuspense)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transferredToSuspense, true), gettype($transferredToSuspense)), __LINE__);
        }
        $this->TransferredToSuspense = $transferredToSuspense;
        return $this;
    }
    /**
     * Get ISwitchResponseCode value
     * @return int
     */
    public function getISwitchResponseCode()
    {
        return $this->ISwitchResponseCode;
    }
    /**
     * Set ISwitchResponseCode value
     * @param int $iSwitchResponseCode
     * @return \StructType\SubBatch
     */
    public function setISwitchResponseCode($iSwitchResponseCode = null)
    {
        // validation for constraint: int
        if (!is_null($iSwitchResponseCode) && !(is_int($iSwitchResponseCode) || ctype_digit($iSwitchResponseCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iSwitchResponseCode, true), gettype($iSwitchResponseCode)), __LINE__);
        }
        $this->ISwitchResponseCode = $iSwitchResponseCode;
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
     * @return \StructType\SubBatch
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
     * Get ISwitchTryCount value
     * @return int
     */
    public function getISwitchTryCount()
    {
        return $this->ISwitchTryCount;
    }
    /**
     * Set ISwitchTryCount value
     * @param int $iSwitchTryCount
     * @return \StructType\SubBatch
     */
    public function setISwitchTryCount($iSwitchTryCount = null)
    {
        // validation for constraint: int
        if (!is_null($iSwitchTryCount) && !(is_int($iSwitchTryCount) || ctype_digit($iSwitchTryCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iSwitchTryCount, true), gettype($iSwitchTryCount)), __LINE__);
        }
        $this->ISwitchTryCount = $iSwitchTryCount;
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * Get SuspenseTransferFailed value
     * @return bool
     */
    public function getSuspenseTransferFailed()
    {
        return $this->SuspenseTransferFailed;
    }
    /**
     * Set SuspenseTransferFailed value
     * @param bool $suspenseTransferFailed
     * @return \StructType\SubBatch
     */
    public function setSuspenseTransferFailed($suspenseTransferFailed = null)
    {
        // validation for constraint: boolean
        if (!is_null($suspenseTransferFailed) && !is_bool($suspenseTransferFailed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suspenseTransferFailed, true), gettype($suspenseTransferFailed)), __LINE__);
        }
        $this->SuspenseTransferFailed = $suspenseTransferFailed;
        return $this;
    }
    /**
     * Get Processed value
     * @return bool
     */
    public function getProcessed()
    {
        return $this->Processed;
    }
    /**
     * Set Processed value
     * @param bool $processed
     * @return \StructType\SubBatch
     */
    public function setProcessed($processed = null)
    {
        // validation for constraint: boolean
        if (!is_null($processed) && !is_bool($processed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processed, true), gettype($processed)), __LINE__);
        }
        $this->Processed = $processed;
        return $this;
    }
    /**
     * Get ValidTransactionsCount value
     * @return int
     */
    public function getValidTransactionsCount()
    {
        return $this->ValidTransactionsCount;
    }
    /**
     * Set ValidTransactionsCount value
     * @param int $validTransactionsCount
     * @return \StructType\SubBatch
     */
    public function setValidTransactionsCount($validTransactionsCount = null)
    {
        // validation for constraint: int
        if (!is_null($validTransactionsCount) && !(is_int($validTransactionsCount) || ctype_digit($validTransactionsCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validTransactionsCount, true), gettype($validTransactionsCount)), __LINE__);
        }
        $this->ValidTransactionsCount = $validTransactionsCount;
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * Get ChannelReferenceNo value
     * @return string|null
     */
    public function getChannelReferenceNo()
    {
        return $this->ChannelReferenceNo;
    }
    /**
     * Set ChannelReferenceNo value
     * @param string $channelReferenceNo
     * @return \StructType\SubBatch
     */
    public function setChannelReferenceNo($channelReferenceNo = null)
    {
        // validation for constraint: string
        if (!is_null($channelReferenceNo) && !is_string($channelReferenceNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelReferenceNo, true), gettype($channelReferenceNo)), __LINE__);
        }
        $this->ChannelReferenceNo = $channelReferenceNo;
        return $this;
    }
    /**
     * Get NEFTReferenceNo value
     * @return string|null
     */
    public function getNEFTReferenceNo()
    {
        return $this->NEFTReferenceNo;
    }
    /**
     * Set NEFTReferenceNo value
     * @param string $nEFTReferenceNo
     * @return \StructType\SubBatch
     */
    public function setNEFTReferenceNo($nEFTReferenceNo = null)
    {
        // validation for constraint: string
        if (!is_null($nEFTReferenceNo) && !is_string($nEFTReferenceNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nEFTReferenceNo, true), gettype($nEFTReferenceNo)), __LINE__);
        }
        $this->NEFTReferenceNo = $nEFTReferenceNo;
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * @return \StructType\SubBatch
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
     * Get SuspenseTransactions value
     * @return \ArrayType\ArrayOfSuspenseTransaction|null
     */
    public function getSuspenseTransactions()
    {
        return $this->SuspenseTransactions;
    }
    /**
     * Set SuspenseTransactions value
     * @param \ArrayType\ArrayOfSuspenseTransaction $suspenseTransactions
     * @return \StructType\SubBatch
     */
    public function setSuspenseTransactions(\ArrayType\ArrayOfSuspenseTransaction $suspenseTransactions = null)
    {
        $this->SuspenseTransactions = $suspenseTransactions;
        return $this;
    }
    /**
     * Get Transactions value
     * @return \ArrayType\ArrayOfTransaction|null
     */
    public function getTransactions()
    {
        return $this->Transactions;
    }
    /**
     * Set Transactions value
     * @param \ArrayType\ArrayOfTransaction $transactions
     * @return \StructType\SubBatch
     */
    public function setTransactions(\ArrayType\ArrayOfTransaction $transactions = null)
    {
        $this->Transactions = $transactions;
        return $this;
    }
    /**
     * Get Batch value
     * @return \StructType\Batch|null
     */
    public function getBatch()
    {
        return $this->Batch;
    }
    /**
     * Set Batch value
     * @param \StructType\Batch $batch
     * @return \StructType\SubBatch
     */
    public function setBatch(\StructType\Batch $batch = null)
    {
        $this->Batch = $batch;
        return $this;
    }
    /**
     * Get Trans value
     * @return \ArrayType\ArrayOfTransaction|null
     */
    public function getTrans()
    {
        return $this->Trans;
    }
    /**
     * Set Trans value
     * @param \ArrayType\ArrayOfTransaction $trans
     * @return \StructType\SubBatch
     */
    public function setTrans(\ArrayType\ArrayOfTransaction $trans = null)
    {
        $this->Trans = $trans;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SubBatch
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
