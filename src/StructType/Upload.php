<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Upload StructType
 * @subpackage Structs
 */
class Upload extends AbstractStructBase
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
     * @var int
     */
    public $OrgID;
    /**
     * The PreferedNextApproverID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $PreferedNextApproverID;
    /**
     * The PreferedInterBankChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $PreferedInterBankChannel;
    /**
     * The UploadDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $UploadDate;
    /**
     * The TotalNoOfTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TotalNoOfTrans;
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
     * The DelayedUpload
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $DelayedUpload;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $UserID;
    /**
     * The RecCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RecCount;
    /**
     * The IsCompleted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsCompleted;
    /**
     * The MailSent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $MailSent;
    /**
     * The DateCompleted
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $DateCompleted;
    /**
     * The FileFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $FileFormat;
    /**
     * The Delimiter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Delimiter;
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
     * The DelayedTransUploadID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $DelayedTransUploadID;
    /**
     * The TranWorkflowID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranWorkflowID;
    /**
     * The UploadRoute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $UploadRoute;
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
     * The PostAsBulk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $PostAsBulk;
    /**
     * The ValidTransactionsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ValidTransactionsCount;
    /**
     * The CustomNarration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomNarration;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The UploadRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UploadRefNo;
    /**
     * The AttachmentPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AttachmentPath;
    /**
     * The ArchivePath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ArchivePath;
    /**
     * The RunStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RunStatus;
    /**
     * The ErrorMsg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMsg;
    /**
     * The UploadResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UploadResult;
    /**
     * The FilePath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FilePath;
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
     * The UploadRouteDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UploadRouteDesc;
    /**
     * The ServerIP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ServerIP;
    /**
     * The Batches
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfBatch
     */
    public $Batches;
    /**
     * The Transactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction
     */
    public $Transactions;
    /**
     * The Organisation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Organisation
     */
    public $Organisation;
    /**
     * The GetAllPendingTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction
     */
    public $GetAllPendingTrans;
    /**
     * Constructor method for Upload
     * @uses Upload::setID()
     * @uses Upload::setOrgID()
     * @uses Upload::setPreferedNextApproverID()
     * @uses Upload::setPreferedInterBankChannel()
     * @uses Upload::setUploadDate()
     * @uses Upload::setTotalNoOfTrans()
     * @uses Upload::setFileAttached()
     * @uses Upload::setDelayedUpload()
     * @uses Upload::setUserID()
     * @uses Upload::setRecCount()
     * @uses Upload::setIsCompleted()
     * @uses Upload::setMailSent()
     * @uses Upload::setDateCompleted()
     * @uses Upload::setFileFormat()
     * @uses Upload::setDelimiter()
     * @uses Upload::setStatus()
     * @uses Upload::setDateCreated()
     * @uses Upload::setDateModified()
     * @uses Upload::setInitiatorID()
     * @uses Upload::setVerifierID()
     * @uses Upload::setVerifiedDate()
     * @uses Upload::setMoveNext()
     * @uses Upload::setNextApproverUserID()
     * @uses Upload::setNextApproverRoleID()
     * @uses Upload::setWorkFlowTransactionID()
     * @uses Upload::setDelayedTransUploadID()
     * @uses Upload::setTranWorkflowID()
     * @uses Upload::setUploadRoute()
     * @uses Upload::setTranMode()
     * @uses Upload::setPostAsBulk()
     * @uses Upload::setValidTransactionsCount()
     * @uses Upload::setCustomNarration()
     * @uses Upload::setDescription()
     * @uses Upload::setUploadRefNo()
     * @uses Upload::setAttachmentPath()
     * @uses Upload::setArchivePath()
     * @uses Upload::setRunStatus()
     * @uses Upload::setErrorMsg()
     * @uses Upload::setUploadResult()
     * @uses Upload::setFilePath()
     * @uses Upload::setCreatedBy()
     * @uses Upload::setModifiedBy()
     * @uses Upload::setWorkFlowTransactionIDs()
     * @uses Upload::setUploadRouteDesc()
     * @uses Upload::setServerIP()
     * @uses Upload::setBatches()
     * @uses Upload::setTransactions()
     * @uses Upload::setOrganisation()
     * @uses Upload::setGetAllPendingTrans()
     * @param int $iD
     * @param int $orgID
     * @param int $preferedNextApproverID
     * @param int $preferedInterBankChannel
     * @param string $uploadDate
     * @param int $totalNoOfTrans
     * @param bool $fileAttached
     * @param bool $delayedUpload
     * @param int $userID
     * @param int $recCount
     * @param bool $isCompleted
     * @param bool $mailSent
     * @param string $dateCompleted
     * @param int $fileFormat
     * @param int $delimiter
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
     * @param int $delayedTransUploadID
     * @param int $tranWorkflowID
     * @param int $uploadRoute
     * @param int $tranMode
     * @param bool $postAsBulk
     * @param int $validTransactionsCount
     * @param string $customNarration
     * @param string $description
     * @param string $uploadRefNo
     * @param string $attachmentPath
     * @param string $archivePath
     * @param string $runStatus
     * @param string $errorMsg
     * @param string $uploadResult
     * @param string $filePath
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param string $uploadRouteDesc
     * @param string $serverIP
     * @param \ArrayType\ArrayOfBatch $batches
     * @param \ArrayType\ArrayOfTransaction $transactions
     * @param \StructType\Organisation $organisation
     * @param \ArrayType\ArrayOfTransaction $getAllPendingTrans
     */
    public function __construct($iD = null, $orgID = null, $preferedNextApproverID = null, $preferedInterBankChannel = null, $uploadDate = null, $totalNoOfTrans = null, $fileAttached = null, $delayedUpload = null, $userID = null, $recCount = null, $isCompleted = null, $mailSent = null, $dateCompleted = null, $fileFormat = null, $delimiter = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $delayedTransUploadID = null, $tranWorkflowID = null, $uploadRoute = null, $tranMode = null, $postAsBulk = null, $validTransactionsCount = null, $customNarration = null, $description = null, $uploadRefNo = null, $attachmentPath = null, $archivePath = null, $runStatus = null, $errorMsg = null, $uploadResult = null, $filePath = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, $uploadRouteDesc = null, $serverIP = null, \ArrayType\ArrayOfBatch $batches = null, \ArrayType\ArrayOfTransaction $transactions = null, \StructType\Organisation $organisation = null, \ArrayType\ArrayOfTransaction $getAllPendingTrans = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setPreferedNextApproverID($preferedNextApproverID)
            ->setPreferedInterBankChannel($preferedInterBankChannel)
            ->setUploadDate($uploadDate)
            ->setTotalNoOfTrans($totalNoOfTrans)
            ->setFileAttached($fileAttached)
            ->setDelayedUpload($delayedUpload)
            ->setUserID($userID)
            ->setRecCount($recCount)
            ->setIsCompleted($isCompleted)
            ->setMailSent($mailSent)
            ->setDateCompleted($dateCompleted)
            ->setFileFormat($fileFormat)
            ->setDelimiter($delimiter)
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
            ->setDelayedTransUploadID($delayedTransUploadID)
            ->setTranWorkflowID($tranWorkflowID)
            ->setUploadRoute($uploadRoute)
            ->setTranMode($tranMode)
            ->setPostAsBulk($postAsBulk)
            ->setValidTransactionsCount($validTransactionsCount)
            ->setCustomNarration($customNarration)
            ->setDescription($description)
            ->setUploadRefNo($uploadRefNo)
            ->setAttachmentPath($attachmentPath)
            ->setArchivePath($archivePath)
            ->setRunStatus($runStatus)
            ->setErrorMsg($errorMsg)
            ->setUploadResult($uploadResult)
            ->setFilePath($filePath)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setUploadRouteDesc($uploadRouteDesc)
            ->setServerIP($serverIP)
            ->setBatches($batches)
            ->setTransactions($transactions)
            ->setOrganisation($organisation)
            ->setGetAllPendingTrans($getAllPendingTrans);
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * Get PreferedNextApproverID value
     * @return int
     */
    public function getPreferedNextApproverID()
    {
        return $this->PreferedNextApproverID;
    }
    /**
     * Set PreferedNextApproverID value
     * @param int $preferedNextApproverID
     * @return \StructType\Upload
     */
    public function setPreferedNextApproverID($preferedNextApproverID = null)
    {
        // validation for constraint: int
        if (!is_null($preferedNextApproverID) && !(is_int($preferedNextApproverID) || ctype_digit($preferedNextApproverID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preferedNextApproverID, true), gettype($preferedNextApproverID)), __LINE__);
        }
        $this->PreferedNextApproverID = $preferedNextApproverID;
        return $this;
    }
    /**
     * Get PreferedInterBankChannel value
     * @return int
     */
    public function getPreferedInterBankChannel()
    {
        return $this->PreferedInterBankChannel;
    }
    /**
     * Set PreferedInterBankChannel value
     * @param int $preferedInterBankChannel
     * @return \StructType\Upload
     */
    public function setPreferedInterBankChannel($preferedInterBankChannel = null)
    {
        // validation for constraint: int
        if (!is_null($preferedInterBankChannel) && !(is_int($preferedInterBankChannel) || ctype_digit($preferedInterBankChannel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preferedInterBankChannel, true), gettype($preferedInterBankChannel)), __LINE__);
        }
        $this->PreferedInterBankChannel = $preferedInterBankChannel;
        return $this;
    }
    /**
     * Get UploadDate value
     * @return string
     */
    public function getUploadDate()
    {
        return $this->UploadDate;
    }
    /**
     * Set UploadDate value
     * @param string $uploadDate
     * @return \StructType\Upload
     */
    public function setUploadDate($uploadDate = null)
    {
        // validation for constraint: string
        if (!is_null($uploadDate) && !is_string($uploadDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadDate, true), gettype($uploadDate)), __LINE__);
        }
        $this->UploadDate = $uploadDate;
        return $this;
    }
    /**
     * Get TotalNoOfTrans value
     * @return int
     */
    public function getTotalNoOfTrans()
    {
        return $this->TotalNoOfTrans;
    }
    /**
     * Set TotalNoOfTrans value
     * @param int $totalNoOfTrans
     * @return \StructType\Upload
     */
    public function setTotalNoOfTrans($totalNoOfTrans = null)
    {
        // validation for constraint: int
        if (!is_null($totalNoOfTrans) && !(is_int($totalNoOfTrans) || ctype_digit($totalNoOfTrans))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfTrans, true), gettype($totalNoOfTrans)), __LINE__);
        }
        $this->TotalNoOfTrans = $totalNoOfTrans;
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
     * @return \StructType\Upload
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
     * Get DelayedUpload value
     * @return bool
     */
    public function getDelayedUpload()
    {
        return $this->DelayedUpload;
    }
    /**
     * Set DelayedUpload value
     * @param bool $delayedUpload
     * @return \StructType\Upload
     */
    public function setDelayedUpload($delayedUpload = null)
    {
        // validation for constraint: boolean
        if (!is_null($delayedUpload) && !is_bool($delayedUpload)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delayedUpload, true), gettype($delayedUpload)), __LINE__);
        }
        $this->DelayedUpload = $delayedUpload;
        return $this;
    }
    /**
     * Get UserID value
     * @return int
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param int $userID
     * @return \StructType\Upload
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: int
        if (!is_null($userID) && !(is_int($userID) || ctype_digit($userID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get RecCount value
     * @return int
     */
    public function getRecCount()
    {
        return $this->RecCount;
    }
    /**
     * Set RecCount value
     * @param int $recCount
     * @return \StructType\Upload
     */
    public function setRecCount($recCount = null)
    {
        // validation for constraint: int
        if (!is_null($recCount) && !(is_int($recCount) || ctype_digit($recCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recCount, true), gettype($recCount)), __LINE__);
        }
        $this->RecCount = $recCount;
        return $this;
    }
    /**
     * Get IsCompleted value
     * @return bool
     */
    public function getIsCompleted()
    {
        return $this->IsCompleted;
    }
    /**
     * Set IsCompleted value
     * @param bool $isCompleted
     * @return \StructType\Upload
     */
    public function setIsCompleted($isCompleted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompleted) && !is_bool($isCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCompleted, true), gettype($isCompleted)), __LINE__);
        }
        $this->IsCompleted = $isCompleted;
        return $this;
    }
    /**
     * Get MailSent value
     * @return bool
     */
    public function getMailSent()
    {
        return $this->MailSent;
    }
    /**
     * Set MailSent value
     * @param bool $mailSent
     * @return \StructType\Upload
     */
    public function setMailSent($mailSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailSent) && !is_bool($mailSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailSent, true), gettype($mailSent)), __LINE__);
        }
        $this->MailSent = $mailSent;
        return $this;
    }
    /**
     * Get DateCompleted value
     * @return string
     */
    public function getDateCompleted()
    {
        return $this->DateCompleted;
    }
    /**
     * Set DateCompleted value
     * @param string $dateCompleted
     * @return \StructType\Upload
     */
    public function setDateCompleted($dateCompleted = null)
    {
        // validation for constraint: string
        if (!is_null($dateCompleted) && !is_string($dateCompleted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCompleted, true), gettype($dateCompleted)), __LINE__);
        }
        $this->DateCompleted = $dateCompleted;
        return $this;
    }
    /**
     * Get FileFormat value
     * @return int
     */
    public function getFileFormat()
    {
        return $this->FileFormat;
    }
    /**
     * Set FileFormat value
     * @param int $fileFormat
     * @return \StructType\Upload
     */
    public function setFileFormat($fileFormat = null)
    {
        // validation for constraint: int
        if (!is_null($fileFormat) && !(is_int($fileFormat) || ctype_digit($fileFormat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($fileFormat, true), gettype($fileFormat)), __LINE__);
        }
        $this->FileFormat = $fileFormat;
        return $this;
    }
    /**
     * Get Delimiter value
     * @return int
     */
    public function getDelimiter()
    {
        return $this->Delimiter;
    }
    /**
     * Set Delimiter value
     * @param int $delimiter
     * @return \StructType\Upload
     */
    public function setDelimiter($delimiter = null)
    {
        // validation for constraint: int
        if (!is_null($delimiter) && !(is_int($delimiter) || ctype_digit($delimiter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delimiter, true), gettype($delimiter)), __LINE__);
        }
        $this->Delimiter = $delimiter;
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * Get TranWorkflowID value
     * @return int
     */
    public function getTranWorkflowID()
    {
        return $this->TranWorkflowID;
    }
    /**
     * Set TranWorkflowID value
     * @param int $tranWorkflowID
     * @return \StructType\Upload
     */
    public function setTranWorkflowID($tranWorkflowID = null)
    {
        // validation for constraint: int
        if (!is_null($tranWorkflowID) && !(is_int($tranWorkflowID) || ctype_digit($tranWorkflowID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranWorkflowID, true), gettype($tranWorkflowID)), __LINE__);
        }
        $this->TranWorkflowID = $tranWorkflowID;
        return $this;
    }
    /**
     * Get UploadRoute value
     * @return int
     */
    public function getUploadRoute()
    {
        return $this->UploadRoute;
    }
    /**
     * Set UploadRoute value
     * @param int $uploadRoute
     * @return \StructType\Upload
     */
    public function setUploadRoute($uploadRoute = null)
    {
        // validation for constraint: int
        if (!is_null($uploadRoute) && !(is_int($uploadRoute) || ctype_digit($uploadRoute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uploadRoute, true), gettype($uploadRoute)), __LINE__);
        }
        $this->UploadRoute = $uploadRoute;
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
     * @return \StructType\Upload
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
     * Get PostAsBulk value
     * @return bool
     */
    public function getPostAsBulk()
    {
        return $this->PostAsBulk;
    }
    /**
     * Set PostAsBulk value
     * @param bool $postAsBulk
     * @return \StructType\Upload
     */
    public function setPostAsBulk($postAsBulk = null)
    {
        // validation for constraint: boolean
        if (!is_null($postAsBulk) && !is_bool($postAsBulk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($postAsBulk, true), gettype($postAsBulk)), __LINE__);
        }
        $this->PostAsBulk = $postAsBulk;
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
     * @return \StructType\Upload
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
     * Get CustomNarration value
     * @return string|null
     */
    public function getCustomNarration()
    {
        return $this->CustomNarration;
    }
    /**
     * Set CustomNarration value
     * @param string $customNarration
     * @return \StructType\Upload
     */
    public function setCustomNarration($customNarration = null)
    {
        // validation for constraint: string
        if (!is_null($customNarration) && !is_string($customNarration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customNarration, true), gettype($customNarration)), __LINE__);
        }
        $this->CustomNarration = $customNarration;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\Upload
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * Get ArchivePath value
     * @return string|null
     */
    public function getArchivePath()
    {
        return $this->ArchivePath;
    }
    /**
     * Set ArchivePath value
     * @param string $archivePath
     * @return \StructType\Upload
     */
    public function setArchivePath($archivePath = null)
    {
        // validation for constraint: string
        if (!is_null($archivePath) && !is_string($archivePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($archivePath, true), gettype($archivePath)), __LINE__);
        }
        $this->ArchivePath = $archivePath;
        return $this;
    }
    /**
     * Get RunStatus value
     * @return string|null
     */
    public function getRunStatus()
    {
        return $this->RunStatus;
    }
    /**
     * Set RunStatus value
     * @param string $runStatus
     * @return \StructType\Upload
     */
    public function setRunStatus($runStatus = null)
    {
        // validation for constraint: string
        if (!is_null($runStatus) && !is_string($runStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($runStatus, true), gettype($runStatus)), __LINE__);
        }
        $this->RunStatus = $runStatus;
        return $this;
    }
    /**
     * Get ErrorMsg value
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->ErrorMsg;
    }
    /**
     * Set ErrorMsg value
     * @param string $errorMsg
     * @return \StructType\Upload
     */
    public function setErrorMsg($errorMsg = null)
    {
        // validation for constraint: string
        if (!is_null($errorMsg) && !is_string($errorMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMsg, true), gettype($errorMsg)), __LINE__);
        }
        $this->ErrorMsg = $errorMsg;
        return $this;
    }
    /**
     * Get UploadResult value
     * @return string|null
     */
    public function getUploadResult()
    {
        return $this->UploadResult;
    }
    /**
     * Set UploadResult value
     * @param string $uploadResult
     * @return \StructType\Upload
     */
    public function setUploadResult($uploadResult = null)
    {
        // validation for constraint: string
        if (!is_null($uploadResult) && !is_string($uploadResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadResult, true), gettype($uploadResult)), __LINE__);
        }
        $this->UploadResult = $uploadResult;
        return $this;
    }
    /**
     * Get FilePath value
     * @return string|null
     */
    public function getFilePath()
    {
        return $this->FilePath;
    }
    /**
     * Set FilePath value
     * @param string $filePath
     * @return \StructType\Upload
     */
    public function setFilePath($filePath = null)
    {
        // validation for constraint: string
        if (!is_null($filePath) && !is_string($filePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filePath, true), gettype($filePath)), __LINE__);
        }
        $this->FilePath = $filePath;
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * @return \StructType\Upload
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
     * Get UploadRouteDesc value
     * @return string|null
     */
    public function getUploadRouteDesc()
    {
        return $this->UploadRouteDesc;
    }
    /**
     * Set UploadRouteDesc value
     * @param string $uploadRouteDesc
     * @return \StructType\Upload
     */
    public function setUploadRouteDesc($uploadRouteDesc = null)
    {
        // validation for constraint: string
        if (!is_null($uploadRouteDesc) && !is_string($uploadRouteDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadRouteDesc, true), gettype($uploadRouteDesc)), __LINE__);
        }
        $this->UploadRouteDesc = $uploadRouteDesc;
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
     * @return \StructType\Upload
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
     * Get Batches value
     * @return \ArrayType\ArrayOfBatch|null
     */
    public function getBatches()
    {
        return $this->Batches;
    }
    /**
     * Set Batches value
     * @param \ArrayType\ArrayOfBatch $batches
     * @return \StructType\Upload
     */
    public function setBatches(\ArrayType\ArrayOfBatch $batches = null)
    {
        $this->Batches = $batches;
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
     * @return \StructType\Upload
     */
    public function setTransactions(\ArrayType\ArrayOfTransaction $transactions = null)
    {
        $this->Transactions = $transactions;
        return $this;
    }
    /**
     * Get Organisation value
     * @return \StructType\Organisation|null
     */
    public function getOrganisation()
    {
        return $this->Organisation;
    }
    /**
     * Set Organisation value
     * @param \StructType\Organisation $organisation
     * @return \StructType\Upload
     */
    public function setOrganisation(\StructType\Organisation $organisation = null)
    {
        $this->Organisation = $organisation;
        return $this;
    }
    /**
     * Get GetAllPendingTrans value
     * @return \ArrayType\ArrayOfTransaction|null
     */
    public function getGetAllPendingTrans()
    {
        return $this->GetAllPendingTrans;
    }
    /**
     * Set GetAllPendingTrans value
     * @param \ArrayType\ArrayOfTransaction $getAllPendingTrans
     * @return \StructType\Upload
     */
    public function setGetAllPendingTrans(\ArrayType\ArrayOfTransaction $getAllPendingTrans = null)
    {
        $this->GetAllPendingTrans = $getAllPendingTrans;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Upload
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
