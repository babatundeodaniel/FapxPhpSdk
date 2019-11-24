<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction StructType
 * @subpackage Structs
 */
class Transaction extends AbstractStructBase
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
     * The UploadID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $UploadID;
    /**
     * The TranworkflowID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranworkflowID;
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
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $Amount;
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
     * The TransactionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $TransactionDate;
    /**
     * The PostedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $PostedDate;
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
     * The SubBatchID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $SubBatchID;
    /**
     * The IsAttachedToSubBatch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsAttachedToSubBatch;
    /**
     * The IsCorporateCharged
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsCorporateCharged;
    /**
     * The IsThirdPartyCharged
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsThirdPartyCharged;
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
     * The IsFAPXChargeToSuspenseAcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsFAPXChargeToSuspenseAcc;
    /**
     * The IsFAPXChargeToIncomeAcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsFAPXChargeToIncomeAcc;
    /**
     * The IsVATChargeTransferred
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsVATChargeTransferred;
    /**
     * The IsFAPXChargeLogged
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsFAPXChargeLogged;
    /**
     * The IsVATChargeLogged
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsVATChargeLogged;
    /**
     * The ApprovedByRM
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ApprovedByRM;
    /**
     * The ApprovedByFA
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ApprovedByFA;
    /**
     * The ApprovedFR
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ApprovedFR;
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
     * The DelayedTransUploadID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $DelayedTransUploadID;
    /**
     * The IsDelayed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsDelayed;
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
     * The MoveNext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $MoveNext;
    /**
     * The NextWorkflowLevelID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $NextWorkflowLevelID;
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
     * The InitiatorUserID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $InitiatorUserID;
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
     * The TheTotalCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $TheTotalCharge;
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
     * The IsBeneficiaryAutoCreated
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsBeneficiaryAutoCreated;
    /**
     * The TheSuspenseAmount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $TheSuspenseAmount;
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
     * The ChannelRefNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChannelRefNumber;
    /**
     * The ChannelResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ChannelResponse;
    /**
     * The AttachmentPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentPath;
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
     * The TheTransactionStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TheTransactionStatus;
    /**
     * The TheTransferStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TheTransferStatus;
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
     * The TheNextApprovers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TheNextApprovers;
    /**
     * The TranRemarkBuffer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TranRemarkBuffer;
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
     * The CorpName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CorpName;
    /**
     * The BenBankName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BenBankName;
    /**
     * The TransactionCurrencyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionCurrencyCode;
    /**
     * The SuspenseTransactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfSuspenseTransaction
     */
    public $SuspenseTransactions;
    /**
     * The TransactionApprovalLogs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransactionApprovalLog
     */
    public $TransactionApprovalLogs;
    /**
     * The Batch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Batch
     */
    public $Batch;
    /**
     * The SubBatch
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SubBatch
     */
    public $SubBatch;
    /**
     * The TranWorkflow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TranWorkflow
     */
    public $TranWorkflow;
    /**
     * The Upload
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Upload
     */
    public $Upload;
    /**
     * The OtherRMs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrgRM
     */
    public $OtherRMs;
    /**
     * Constructor method for Transaction
     * @uses Transaction::setID()
     * @uses Transaction::setOrgID()
     * @uses Transaction::setUploadID()
     * @uses Transaction::setTranworkflowID()
     * @uses Transaction::setBatchID()
     * @uses Transaction::setAmount()
     * @uses Transaction::setPaymentDate()
     * @uses Transaction::setSN()
     * @uses Transaction::setIsOnUs()
     * @uses Transaction::setTransactionDate()
     * @uses Transaction::setPostedDate()
     * @uses Transaction::setTransactionStatus()
     * @uses Transaction::setTryCount()
     * @uses Transaction::setChannelID()
     * @uses Transaction::setTranMode()
     * @uses Transaction::setSubBatchID()
     * @uses Transaction::setIsAttachedToSubBatch()
     * @uses Transaction::setIsCorporateCharged()
     * @uses Transaction::setIsThirdPartyCharged()
     * @uses Transaction::setIsReversal()
     * @uses Transaction::setIsFAPXChargeToSuspenseAcc()
     * @uses Transaction::setIsFAPXChargeToIncomeAcc()
     * @uses Transaction::setIsVATChargeTransferred()
     * @uses Transaction::setIsFAPXChargeLogged()
     * @uses Transaction::setIsVATChargeLogged()
     * @uses Transaction::setApprovedByRM()
     * @uses Transaction::setApprovedByFA()
     * @uses Transaction::setApprovedFR()
     * @uses Transaction::setFileAttached()
     * @uses Transaction::setDelayedTransUploadID()
     * @uses Transaction::setIsDelayed()
     * @uses Transaction::setStatus()
     * @uses Transaction::setDateCreated()
     * @uses Transaction::setDateModified()
     * @uses Transaction::setMoveNext()
     * @uses Transaction::setNextWorkflowLevelID()
     * @uses Transaction::setNextApproverUserID()
     * @uses Transaction::setNextApproverRoleID()
     * @uses Transaction::setInitiatorUserID()
     * @uses Transaction::setVerifierID()
     * @uses Transaction::setVerifiedDate()
     * @uses Transaction::setTheTotalCharge()
     * @uses Transaction::setPostCounter()
     * @uses Transaction::setIsBeneficiaryAutoCreated()
     * @uses Transaction::setTheSuspenseAmount()
     * @uses Transaction::setAuditID()
     * @uses Transaction::setOrgTranParticular()
     * @uses Transaction::setOrgTranRefNo()
     * @uses Transaction::setDebitAccountNo()
     * @uses Transaction::setDebitBankCode()
     * @uses Transaction::setCreditAccountNo()
     * @uses Transaction::setCreditBankCode()
     * @uses Transaction::setBeneficiaryName()
     * @uses Transaction::setNarration()
     * @uses Transaction::setChannelRefNumber()
     * @uses Transaction::setChannelResponse()
     * @uses Transaction::setAttachmentPath()
     * @uses Transaction::setCreatedBy()
     * @uses Transaction::setModifiedBy()
     * @uses Transaction::setTheOrgName()
     * @uses Transaction::setTheTransactionMode()
     * @uses Transaction::setTheChannelMode()
     * @uses Transaction::setTheTransactionStatus()
     * @uses Transaction::setTheTransferStatus()
     * @uses Transaction::setPurposeOfTransfer()
     * @uses Transaction::setChargeBearer()
     * @uses Transaction::setTheNextApprovers()
     * @uses Transaction::setTranRemarkBuffer()
     * @uses Transaction::setBenBankSwiftCode()
     * @uses Transaction::setBenBankRoutingNo()
     * @uses Transaction::setBenIBAN()
     * @uses Transaction::setBenAddress1()
     * @uses Transaction::setBenAddress2()
     * @uses Transaction::setCountry()
     * @uses Transaction::setIntmdBankSwiftCode()
     * @uses Transaction::setIntmdBankIBAN()
     * @uses Transaction::setIntmdBankRoutingNo()
     * @uses Transaction::setIntmdBankAddress1()
     * @uses Transaction::setIntmdBankAddress2()
     * @uses Transaction::setIntmdBankName()
     * @uses Transaction::setState()
     * @uses Transaction::setCorpName()
     * @uses Transaction::setBenBankName()
     * @uses Transaction::setTransactionCurrencyCode()
     * @uses Transaction::setSuspenseTransactions()
     * @uses Transaction::setTransactionApprovalLogs()
     * @uses Transaction::setBatch()
     * @uses Transaction::setSubBatch()
     * @uses Transaction::setTranWorkflow()
     * @uses Transaction::setUpload()
     * @uses Transaction::setOtherRMs()
     * @param int $iD
     * @param int $orgID
     * @param int $uploadID
     * @param int $tranworkflowID
     * @param int $batchID
     * @param float $amount
     * @param string $paymentDate
     * @param int $sN
     * @param bool $isOnUs
     * @param string $transactionDate
     * @param string $postedDate
     * @param int $transactionStatus
     * @param int $tryCount
     * @param int $channelID
     * @param int $tranMode
     * @param int $subBatchID
     * @param bool $isAttachedToSubBatch
     * @param bool $isCorporateCharged
     * @param bool $isThirdPartyCharged
     * @param bool $isReversal
     * @param bool $isFAPXChargeToSuspenseAcc
     * @param bool $isFAPXChargeToIncomeAcc
     * @param bool $isVATChargeTransferred
     * @param bool $isFAPXChargeLogged
     * @param bool $isVATChargeLogged
     * @param bool $approvedByRM
     * @param bool $approvedByFA
     * @param bool $approvedFR
     * @param bool $fileAttached
     * @param int $delayedTransUploadID
     * @param bool $isDelayed
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param bool $moveNext
     * @param int $nextWorkflowLevelID
     * @param int $nextApproverUserID
     * @param int $nextApproverRoleID
     * @param int $initiatorUserID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param float $theTotalCharge
     * @param int $postCounter
     * @param bool $isBeneficiaryAutoCreated
     * @param float $theSuspenseAmount
     * @param int $auditID
     * @param string $orgTranParticular
     * @param string $orgTranRefNo
     * @param string $debitAccountNo
     * @param string $debitBankCode
     * @param string $creditAccountNo
     * @param string $creditBankCode
     * @param string $beneficiaryName
     * @param string $narration
     * @param string $channelRefNumber
     * @param string $channelResponse
     * @param string $attachmentPath
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $theOrgName
     * @param string $theTransactionMode
     * @param string $theChannelMode
     * @param string $theTransactionStatus
     * @param string $theTransferStatus
     * @param string $purposeOfTransfer
     * @param string $chargeBearer
     * @param string $theNextApprovers
     * @param string $tranRemarkBuffer
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
     * @param string $corpName
     * @param string $benBankName
     * @param string $transactionCurrencyCode
     * @param \ArrayType\ArrayOfSuspenseTransaction $suspenseTransactions
     * @param \ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs
     * @param \StructType\Batch $batch
     * @param \StructType\SubBatch $subBatch
     * @param \StructType\TranWorkflow $tranWorkflow
     * @param \StructType\Upload $upload
     * @param \ArrayType\ArrayOfOrgRM $otherRMs
     */
    public function __construct($iD = null, $orgID = null, $uploadID = null, $tranworkflowID = null, $batchID = null, $amount = null, $paymentDate = null, $sN = null, $isOnUs = null, $transactionDate = null, $postedDate = null, $transactionStatus = null, $tryCount = null, $channelID = null, $tranMode = null, $subBatchID = null, $isAttachedToSubBatch = null, $isCorporateCharged = null, $isThirdPartyCharged = null, $isReversal = null, $isFAPXChargeToSuspenseAcc = null, $isFAPXChargeToIncomeAcc = null, $isVATChargeTransferred = null, $isFAPXChargeLogged = null, $isVATChargeLogged = null, $approvedByRM = null, $approvedByFA = null, $approvedFR = null, $fileAttached = null, $delayedTransUploadID = null, $isDelayed = null, $status = null, $dateCreated = null, $dateModified = null, $moveNext = null, $nextWorkflowLevelID = null, $nextApproverUserID = null, $nextApproverRoleID = null, $initiatorUserID = null, $verifierID = null, $verifiedDate = null, $theTotalCharge = null, $postCounter = null, $isBeneficiaryAutoCreated = null, $theSuspenseAmount = null, $auditID = null, $orgTranParticular = null, $orgTranRefNo = null, $debitAccountNo = null, $debitBankCode = null, $creditAccountNo = null, $creditBankCode = null, $beneficiaryName = null, $narration = null, $channelRefNumber = null, $channelResponse = null, $attachmentPath = null, $createdBy = null, $modifiedBy = null, $theOrgName = null, $theTransactionMode = null, $theChannelMode = null, $theTransactionStatus = null, $theTransferStatus = null, $purposeOfTransfer = null, $chargeBearer = null, $theNextApprovers = null, $tranRemarkBuffer = null, $benBankSwiftCode = null, $benBankRoutingNo = null, $benIBAN = null, $benAddress1 = null, $benAddress2 = null, $country = null, $intmdBankSwiftCode = null, $intmdBankIBAN = null, $intmdBankRoutingNo = null, $intmdBankAddress1 = null, $intmdBankAddress2 = null, $intmdBankName = null, $state = null, $corpName = null, $benBankName = null, $transactionCurrencyCode = null, \ArrayType\ArrayOfSuspenseTransaction $suspenseTransactions = null, \ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs = null, \StructType\Batch $batch = null, \StructType\SubBatch $subBatch = null, \StructType\TranWorkflow $tranWorkflow = null, \StructType\Upload $upload = null, \ArrayType\ArrayOfOrgRM $otherRMs = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setUploadID($uploadID)
            ->setTranworkflowID($tranworkflowID)
            ->setBatchID($batchID)
            ->setAmount($amount)
            ->setPaymentDate($paymentDate)
            ->setSN($sN)
            ->setIsOnUs($isOnUs)
            ->setTransactionDate($transactionDate)
            ->setPostedDate($postedDate)
            ->setTransactionStatus($transactionStatus)
            ->setTryCount($tryCount)
            ->setChannelID($channelID)
            ->setTranMode($tranMode)
            ->setSubBatchID($subBatchID)
            ->setIsAttachedToSubBatch($isAttachedToSubBatch)
            ->setIsCorporateCharged($isCorporateCharged)
            ->setIsThirdPartyCharged($isThirdPartyCharged)
            ->setIsReversal($isReversal)
            ->setIsFAPXChargeToSuspenseAcc($isFAPXChargeToSuspenseAcc)
            ->setIsFAPXChargeToIncomeAcc($isFAPXChargeToIncomeAcc)
            ->setIsVATChargeTransferred($isVATChargeTransferred)
            ->setIsFAPXChargeLogged($isFAPXChargeLogged)
            ->setIsVATChargeLogged($isVATChargeLogged)
            ->setApprovedByRM($approvedByRM)
            ->setApprovedByFA($approvedByFA)
            ->setApprovedFR($approvedFR)
            ->setFileAttached($fileAttached)
            ->setDelayedTransUploadID($delayedTransUploadID)
            ->setIsDelayed($isDelayed)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setMoveNext($moveNext)
            ->setNextWorkflowLevelID($nextWorkflowLevelID)
            ->setNextApproverUserID($nextApproverUserID)
            ->setNextApproverRoleID($nextApproverRoleID)
            ->setInitiatorUserID($initiatorUserID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setTheTotalCharge($theTotalCharge)
            ->setPostCounter($postCounter)
            ->setIsBeneficiaryAutoCreated($isBeneficiaryAutoCreated)
            ->setTheSuspenseAmount($theSuspenseAmount)
            ->setAuditID($auditID)
            ->setOrgTranParticular($orgTranParticular)
            ->setOrgTranRefNo($orgTranRefNo)
            ->setDebitAccountNo($debitAccountNo)
            ->setDebitBankCode($debitBankCode)
            ->setCreditAccountNo($creditAccountNo)
            ->setCreditBankCode($creditBankCode)
            ->setBeneficiaryName($beneficiaryName)
            ->setNarration($narration)
            ->setChannelRefNumber($channelRefNumber)
            ->setChannelResponse($channelResponse)
            ->setAttachmentPath($attachmentPath)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setTheOrgName($theOrgName)
            ->setTheTransactionMode($theTransactionMode)
            ->setTheChannelMode($theChannelMode)
            ->setTheTransactionStatus($theTransactionStatus)
            ->setTheTransferStatus($theTransferStatus)
            ->setPurposeOfTransfer($purposeOfTransfer)
            ->setChargeBearer($chargeBearer)
            ->setTheNextApprovers($theNextApprovers)
            ->setTranRemarkBuffer($tranRemarkBuffer)
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
            ->setCorpName($corpName)
            ->setBenBankName($benBankName)
            ->setTransactionCurrencyCode($transactionCurrencyCode)
            ->setSuspenseTransactions($suspenseTransactions)
            ->setTransactionApprovalLogs($transactionApprovalLogs)
            ->setBatch($batch)
            ->setSubBatch($subBatch)
            ->setTranWorkflow($tranWorkflow)
            ->setUpload($upload)
            ->setOtherRMs($otherRMs);
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get UploadID value
     * @return int
     */
    public function getUploadID()
    {
        return $this->UploadID;
    }
    /**
     * Set UploadID value
     * @param int $uploadID
     * @return \StructType\Transaction
     */
    public function setUploadID($uploadID = null)
    {
        // validation for constraint: int
        if (!is_null($uploadID) && !(is_int($uploadID) || ctype_digit($uploadID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uploadID, true), gettype($uploadID)), __LINE__);
        }
        $this->UploadID = $uploadID;
        return $this;
    }
    /**
     * Get TranworkflowID value
     * @return int
     */
    public function getTranworkflowID()
    {
        return $this->TranworkflowID;
    }
    /**
     * Set TranworkflowID value
     * @param int $tranworkflowID
     * @return \StructType\Transaction
     */
    public function setTranworkflowID($tranworkflowID = null)
    {
        // validation for constraint: int
        if (!is_null($tranworkflowID) && !(is_int($tranworkflowID) || ctype_digit($tranworkflowID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranworkflowID, true), gettype($tranworkflowID)), __LINE__);
        }
        $this->TranworkflowID = $tranworkflowID;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get PostedDate value
     * @return string
     */
    public function getPostedDate()
    {
        return $this->PostedDate;
    }
    /**
     * Set PostedDate value
     * @param string $postedDate
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get IsAttachedToSubBatch value
     * @return bool
     */
    public function getIsAttachedToSubBatch()
    {
        return $this->IsAttachedToSubBatch;
    }
    /**
     * Set IsAttachedToSubBatch value
     * @param bool $isAttachedToSubBatch
     * @return \StructType\Transaction
     */
    public function setIsAttachedToSubBatch($isAttachedToSubBatch = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAttachedToSubBatch) && !is_bool($isAttachedToSubBatch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAttachedToSubBatch, true), gettype($isAttachedToSubBatch)), __LINE__);
        }
        $this->IsAttachedToSubBatch = $isAttachedToSubBatch;
        return $this;
    }
    /**
     * Get IsCorporateCharged value
     * @return bool
     */
    public function getIsCorporateCharged()
    {
        return $this->IsCorporateCharged;
    }
    /**
     * Set IsCorporateCharged value
     * @param bool $isCorporateCharged
     * @return \StructType\Transaction
     */
    public function setIsCorporateCharged($isCorporateCharged = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCorporateCharged) && !is_bool($isCorporateCharged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCorporateCharged, true), gettype($isCorporateCharged)), __LINE__);
        }
        $this->IsCorporateCharged = $isCorporateCharged;
        return $this;
    }
    /**
     * Get IsThirdPartyCharged value
     * @return bool
     */
    public function getIsThirdPartyCharged()
    {
        return $this->IsThirdPartyCharged;
    }
    /**
     * Set IsThirdPartyCharged value
     * @param bool $isThirdPartyCharged
     * @return \StructType\Transaction
     */
    public function setIsThirdPartyCharged($isThirdPartyCharged = null)
    {
        // validation for constraint: boolean
        if (!is_null($isThirdPartyCharged) && !is_bool($isThirdPartyCharged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isThirdPartyCharged, true), gettype($isThirdPartyCharged)), __LINE__);
        }
        $this->IsThirdPartyCharged = $isThirdPartyCharged;
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
     * @return \StructType\Transaction
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
     * Get IsFAPXChargeToSuspenseAcc value
     * @return bool
     */
    public function getIsFAPXChargeToSuspenseAcc()
    {
        return $this->IsFAPXChargeToSuspenseAcc;
    }
    /**
     * Set IsFAPXChargeToSuspenseAcc value
     * @param bool $isFAPXChargeToSuspenseAcc
     * @return \StructType\Transaction
     */
    public function setIsFAPXChargeToSuspenseAcc($isFAPXChargeToSuspenseAcc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFAPXChargeToSuspenseAcc) && !is_bool($isFAPXChargeToSuspenseAcc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFAPXChargeToSuspenseAcc, true), gettype($isFAPXChargeToSuspenseAcc)), __LINE__);
        }
        $this->IsFAPXChargeToSuspenseAcc = $isFAPXChargeToSuspenseAcc;
        return $this;
    }
    /**
     * Get IsFAPXChargeToIncomeAcc value
     * @return bool
     */
    public function getIsFAPXChargeToIncomeAcc()
    {
        return $this->IsFAPXChargeToIncomeAcc;
    }
    /**
     * Set IsFAPXChargeToIncomeAcc value
     * @param bool $isFAPXChargeToIncomeAcc
     * @return \StructType\Transaction
     */
    public function setIsFAPXChargeToIncomeAcc($isFAPXChargeToIncomeAcc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFAPXChargeToIncomeAcc) && !is_bool($isFAPXChargeToIncomeAcc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFAPXChargeToIncomeAcc, true), gettype($isFAPXChargeToIncomeAcc)), __LINE__);
        }
        $this->IsFAPXChargeToIncomeAcc = $isFAPXChargeToIncomeAcc;
        return $this;
    }
    /**
     * Get IsVATChargeTransferred value
     * @return bool
     */
    public function getIsVATChargeTransferred()
    {
        return $this->IsVATChargeTransferred;
    }
    /**
     * Set IsVATChargeTransferred value
     * @param bool $isVATChargeTransferred
     * @return \StructType\Transaction
     */
    public function setIsVATChargeTransferred($isVATChargeTransferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVATChargeTransferred) && !is_bool($isVATChargeTransferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVATChargeTransferred, true), gettype($isVATChargeTransferred)), __LINE__);
        }
        $this->IsVATChargeTransferred = $isVATChargeTransferred;
        return $this;
    }
    /**
     * Get IsFAPXChargeLogged value
     * @return bool
     */
    public function getIsFAPXChargeLogged()
    {
        return $this->IsFAPXChargeLogged;
    }
    /**
     * Set IsFAPXChargeLogged value
     * @param bool $isFAPXChargeLogged
     * @return \StructType\Transaction
     */
    public function setIsFAPXChargeLogged($isFAPXChargeLogged = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFAPXChargeLogged) && !is_bool($isFAPXChargeLogged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFAPXChargeLogged, true), gettype($isFAPXChargeLogged)), __LINE__);
        }
        $this->IsFAPXChargeLogged = $isFAPXChargeLogged;
        return $this;
    }
    /**
     * Get IsVATChargeLogged value
     * @return bool
     */
    public function getIsVATChargeLogged()
    {
        return $this->IsVATChargeLogged;
    }
    /**
     * Set IsVATChargeLogged value
     * @param bool $isVATChargeLogged
     * @return \StructType\Transaction
     */
    public function setIsVATChargeLogged($isVATChargeLogged = null)
    {
        // validation for constraint: boolean
        if (!is_null($isVATChargeLogged) && !is_bool($isVATChargeLogged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVATChargeLogged, true), gettype($isVATChargeLogged)), __LINE__);
        }
        $this->IsVATChargeLogged = $isVATChargeLogged;
        return $this;
    }
    /**
     * Get ApprovedByRM value
     * @return bool
     */
    public function getApprovedByRM()
    {
        return $this->ApprovedByRM;
    }
    /**
     * Set ApprovedByRM value
     * @param bool $approvedByRM
     * @return \StructType\Transaction
     */
    public function setApprovedByRM($approvedByRM = null)
    {
        // validation for constraint: boolean
        if (!is_null($approvedByRM) && !is_bool($approvedByRM)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($approvedByRM, true), gettype($approvedByRM)), __LINE__);
        }
        $this->ApprovedByRM = $approvedByRM;
        return $this;
    }
    /**
     * Get ApprovedByFA value
     * @return bool
     */
    public function getApprovedByFA()
    {
        return $this->ApprovedByFA;
    }
    /**
     * Set ApprovedByFA value
     * @param bool $approvedByFA
     * @return \StructType\Transaction
     */
    public function setApprovedByFA($approvedByFA = null)
    {
        // validation for constraint: boolean
        if (!is_null($approvedByFA) && !is_bool($approvedByFA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($approvedByFA, true), gettype($approvedByFA)), __LINE__);
        }
        $this->ApprovedByFA = $approvedByFA;
        return $this;
    }
    /**
     * Get ApprovedFR value
     * @return bool
     */
    public function getApprovedFR()
    {
        return $this->ApprovedFR;
    }
    /**
     * Set ApprovedFR value
     * @param bool $approvedFR
     * @return \StructType\Transaction
     */
    public function setApprovedFR($approvedFR = null)
    {
        // validation for constraint: boolean
        if (!is_null($approvedFR) && !is_bool($approvedFR)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($approvedFR, true), gettype($approvedFR)), __LINE__);
        }
        $this->ApprovedFR = $approvedFR;
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
     * @return \StructType\Transaction
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
     * Get DelayedTransUploadID value
     * @return int
     */
    public function getDelayedTransUploadID()
    {
        return $this->DelayedTransUploadID;
    }
    /**
     * Set DelayedTransUploadID value
     * @param int $delayedTransUploadID
     * @return \StructType\Transaction
     */
    public function setDelayedTransUploadID($delayedTransUploadID = null)
    {
        // validation for constraint: int
        if (!is_null($delayedTransUploadID) && !(is_int($delayedTransUploadID) || ctype_digit($delayedTransUploadID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delayedTransUploadID, true), gettype($delayedTransUploadID)), __LINE__);
        }
        $this->DelayedTransUploadID = $delayedTransUploadID;
        return $this;
    }
    /**
     * Get IsDelayed value
     * @return bool
     */
    public function getIsDelayed()
    {
        return $this->IsDelayed;
    }
    /**
     * Set IsDelayed value
     * @param bool $isDelayed
     * @return \StructType\Transaction
     */
    public function setIsDelayed($isDelayed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDelayed) && !is_bool($isDelayed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDelayed, true), gettype($isDelayed)), __LINE__);
        }
        $this->IsDelayed = $isDelayed;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get NextWorkflowLevelID value
     * @return int
     */
    public function getNextWorkflowLevelID()
    {
        return $this->NextWorkflowLevelID;
    }
    /**
     * Set NextWorkflowLevelID value
     * @param int $nextWorkflowLevelID
     * @return \StructType\Transaction
     */
    public function setNextWorkflowLevelID($nextWorkflowLevelID = null)
    {
        // validation for constraint: int
        if (!is_null($nextWorkflowLevelID) && !(is_int($nextWorkflowLevelID) || ctype_digit($nextWorkflowLevelID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nextWorkflowLevelID, true), gettype($nextWorkflowLevelID)), __LINE__);
        }
        $this->NextWorkflowLevelID = $nextWorkflowLevelID;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get InitiatorUserID value
     * @return int
     */
    public function getInitiatorUserID()
    {
        return $this->InitiatorUserID;
    }
    /**
     * Set InitiatorUserID value
     * @param int $initiatorUserID
     * @return \StructType\Transaction
     */
    public function setInitiatorUserID($initiatorUserID = null)
    {
        // validation for constraint: int
        if (!is_null($initiatorUserID) && !(is_int($initiatorUserID) || ctype_digit($initiatorUserID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($initiatorUserID, true), gettype($initiatorUserID)), __LINE__);
        }
        $this->InitiatorUserID = $initiatorUserID;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get TheSuspenseAmount value
     * @return float
     */
    public function getTheSuspenseAmount()
    {
        return $this->TheSuspenseAmount;
    }
    /**
     * Set TheSuspenseAmount value
     * @param float $theSuspenseAmount
     * @return \StructType\Transaction
     */
    public function setTheSuspenseAmount($theSuspenseAmount = null)
    {
        // validation for constraint: float
        if (!is_null($theSuspenseAmount) && !(is_float($theSuspenseAmount) || is_numeric($theSuspenseAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($theSuspenseAmount, true), gettype($theSuspenseAmount)), __LINE__);
        }
        $this->TheSuspenseAmount = $theSuspenseAmount;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get ChannelRefNumber value
     * @return string|null
     */
    public function getChannelRefNumber()
    {
        return $this->ChannelRefNumber;
    }
    /**
     * Set ChannelRefNumber value
     * @param string $channelRefNumber
     * @return \StructType\Transaction
     */
    public function setChannelRefNumber($channelRefNumber = null)
    {
        // validation for constraint: string
        if (!is_null($channelRefNumber) && !is_string($channelRefNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelRefNumber, true), gettype($channelRefNumber)), __LINE__);
        }
        $this->ChannelRefNumber = $channelRefNumber;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get TheTransactionStatus value
     * @return string|null
     */
    public function getTheTransactionStatus()
    {
        return $this->TheTransactionStatus;
    }
    /**
     * Set TheTransactionStatus value
     * @param string $theTransactionStatus
     * @return \StructType\Transaction
     */
    public function setTheTransactionStatus($theTransactionStatus = null)
    {
        // validation for constraint: string
        if (!is_null($theTransactionStatus) && !is_string($theTransactionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theTransactionStatus, true), gettype($theTransactionStatus)), __LINE__);
        }
        $this->TheTransactionStatus = $theTransactionStatus;
        return $this;
    }
    /**
     * Get TheTransferStatus value
     * @return string|null
     */
    public function getTheTransferStatus()
    {
        return $this->TheTransferStatus;
    }
    /**
     * Set TheTransferStatus value
     * @param string $theTransferStatus
     * @return \StructType\Transaction
     */
    public function setTheTransferStatus($theTransferStatus = null)
    {
        // validation for constraint: string
        if (!is_null($theTransferStatus) && !is_string($theTransferStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theTransferStatus, true), gettype($theTransferStatus)), __LINE__);
        }
        $this->TheTransferStatus = $theTransferStatus;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get TheNextApprovers value
     * @return string|null
     */
    public function getTheNextApprovers()
    {
        return $this->TheNextApprovers;
    }
    /**
     * Set TheNextApprovers value
     * @param string $theNextApprovers
     * @return \StructType\Transaction
     */
    public function setTheNextApprovers($theNextApprovers = null)
    {
        // validation for constraint: string
        if (!is_null($theNextApprovers) && !is_string($theNextApprovers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($theNextApprovers, true), gettype($theNextApprovers)), __LINE__);
        }
        $this->TheNextApprovers = $theNextApprovers;
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * @return \StructType\Transaction
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
     * Get TransactionCurrencyCode value
     * @return string|null
     */
    public function getTransactionCurrencyCode()
    {
        return $this->TransactionCurrencyCode;
    }
    /**
     * Set TransactionCurrencyCode value
     * @param string $transactionCurrencyCode
     * @return \StructType\Transaction
     */
    public function setTransactionCurrencyCode($transactionCurrencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($transactionCurrencyCode) && !is_string($transactionCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionCurrencyCode, true), gettype($transactionCurrencyCode)), __LINE__);
        }
        $this->TransactionCurrencyCode = $transactionCurrencyCode;
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
     * @return \StructType\Transaction
     */
    public function setSuspenseTransactions(\ArrayType\ArrayOfSuspenseTransaction $suspenseTransactions = null)
    {
        $this->SuspenseTransactions = $suspenseTransactions;
        return $this;
    }
    /**
     * Get TransactionApprovalLogs value
     * @return \ArrayType\ArrayOfTransactionApprovalLog|null
     */
    public function getTransactionApprovalLogs()
    {
        return $this->TransactionApprovalLogs;
    }
    /**
     * Set TransactionApprovalLogs value
     * @param \ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs
     * @return \StructType\Transaction
     */
    public function setTransactionApprovalLogs(\ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs = null)
    {
        $this->TransactionApprovalLogs = $transactionApprovalLogs;
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
     * @return \StructType\Transaction
     */
    public function setBatch(\StructType\Batch $batch = null)
    {
        $this->Batch = $batch;
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
     * @return \StructType\Transaction
     */
    public function setSubBatch(\StructType\SubBatch $subBatch = null)
    {
        $this->SubBatch = $subBatch;
        return $this;
    }
    /**
     * Get TranWorkflow value
     * @return \StructType\TranWorkflow|null
     */
    public function getTranWorkflow()
    {
        return $this->TranWorkflow;
    }
    /**
     * Set TranWorkflow value
     * @param \StructType\TranWorkflow $tranWorkflow
     * @return \StructType\Transaction
     */
    public function setTranWorkflow(\StructType\TranWorkflow $tranWorkflow = null)
    {
        $this->TranWorkflow = $tranWorkflow;
        return $this;
    }
    /**
     * Get Upload value
     * @return \StructType\Upload|null
     */
    public function getUpload()
    {
        return $this->Upload;
    }
    /**
     * Set Upload value
     * @param \StructType\Upload $upload
     * @return \StructType\Transaction
     */
    public function setUpload(\StructType\Upload $upload = null)
    {
        $this->Upload = $upload;
        return $this;
    }
    /**
     * Get OtherRMs value
     * @return \ArrayType\ArrayOfOrgRM|null
     */
    public function getOtherRMs()
    {
        return $this->OtherRMs;
    }
    /**
     * Set OtherRMs value
     * @param \ArrayType\ArrayOfOrgRM $otherRMs
     * @return \StructType\Transaction
     */
    public function setOtherRMs(\ArrayType\ArrayOfOrgRM $otherRMs = null)
    {
        $this->OtherRMs = $otherRMs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Transaction
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
