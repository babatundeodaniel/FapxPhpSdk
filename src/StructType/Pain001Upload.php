<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pain001Upload StructType
 * @subpackage Structs
 */
class Pain001Upload extends AbstractStructBase
{
    /**
     * The ValidTransactionsCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ValidTransactionsCount;
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
     * The PrefAccountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $PrefAccountID;
    /**
     * The PreferedNextApproverUsername
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $PreferedNextApproverUsername;
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
     * The TryCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TryCount;
    /**
     * The ProcessAll
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ProcessAll;
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
     * The PostTransactionsAsBulk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $PostTransactionsAsBulk;
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
     * The APITransactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfAPITransaction
     */
    public $APITransactions;
    /**
     * The GetAllPendingTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfAPITransaction
     */
    public $GetAllPendingTrans;
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
     * The PrefAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrefAccountNo;
    /**
     * The PrefAccountBankCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrefAccountBankCode;
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
     * The FilePath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FilePath;
    /**
     * The UploadRouteDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UploadRouteDesc;
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
     * The ServerIP
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ServerIP;
    /**
     * The Pain001Trans
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfPain001Tran
     */
    public $Pain001Trans;
    /**
     * Constructor method for Pain001Upload
     * @uses Pain001Upload::setValidTransactionsCount()
     * @uses Pain001Upload::setID()
     * @uses Pain001Upload::setOrgID()
     * @uses Pain001Upload::setPrefAccountID()
     * @uses Pain001Upload::setPreferedNextApproverUsername()
     * @uses Pain001Upload::setPreferedNextApproverID()
     * @uses Pain001Upload::setPreferedInterBankChannel()
     * @uses Pain001Upload::setUploadDate()
     * @uses Pain001Upload::setTotalNoOfTrans()
     * @uses Pain001Upload::setFileAttached()
     * @uses Pain001Upload::setDelayedUpload()
     * @uses Pain001Upload::setUserID()
     * @uses Pain001Upload::setRecCount()
     * @uses Pain001Upload::setIsCompleted()
     * @uses Pain001Upload::setMailSent()
     * @uses Pain001Upload::setDateCompleted()
     * @uses Pain001Upload::setFileFormat()
     * @uses Pain001Upload::setDelimiter()
     * @uses Pain001Upload::setTryCount()
     * @uses Pain001Upload::setProcessAll()
     * @uses Pain001Upload::setUploadRoute()
     * @uses Pain001Upload::setPostTransactionsAsBulk()
     * @uses Pain001Upload::setStatus()
     * @uses Pain001Upload::setDateCreated()
     * @uses Pain001Upload::setDateModified()
     * @uses Pain001Upload::setInitiatorID()
     * @uses Pain001Upload::setVerifierID()
     * @uses Pain001Upload::setVerifiedDate()
     * @uses Pain001Upload::setMoveNext()
     * @uses Pain001Upload::setAPITransactions()
     * @uses Pain001Upload::setGetAllPendingTrans()
     * @uses Pain001Upload::setCustomNarration()
     * @uses Pain001Upload::setDescription()
     * @uses Pain001Upload::setPrefAccountNo()
     * @uses Pain001Upload::setPrefAccountBankCode()
     * @uses Pain001Upload::setUploadRefNo()
     * @uses Pain001Upload::setAttachmentPath()
     * @uses Pain001Upload::setArchivePath()
     * @uses Pain001Upload::setRunStatus()
     * @uses Pain001Upload::setErrorMsg()
     * @uses Pain001Upload::setFilePath()
     * @uses Pain001Upload::setUploadRouteDesc()
     * @uses Pain001Upload::setCreatedBy()
     * @uses Pain001Upload::setModifiedBy()
     * @uses Pain001Upload::setServerIP()
     * @uses Pain001Upload::setPain001Trans()
     * @param int $validTransactionsCount
     * @param int $iD
     * @param int $orgID
     * @param int $prefAccountID
     * @param int $preferedNextApproverUsername
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
     * @param int $tryCount
     * @param bool $processAll
     * @param int $uploadRoute
     * @param bool $postTransactionsAsBulk
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $initiatorID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param bool $moveNext
     * @param \ArrayType\ArrayOfAPITransaction $aPITransactions
     * @param \ArrayType\ArrayOfAPITransaction $getAllPendingTrans
     * @param string $customNarration
     * @param string $description
     * @param string $prefAccountNo
     * @param string $prefAccountBankCode
     * @param string $uploadRefNo
     * @param string $attachmentPath
     * @param string $archivePath
     * @param string $runStatus
     * @param string $errorMsg
     * @param string $filePath
     * @param string $uploadRouteDesc
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $serverIP
     * @param \ArrayType\ArrayOfPain001Tran $pain001Trans
     */
    public function __construct($validTransactionsCount = null, $iD = null, $orgID = null, $prefAccountID = null, $preferedNextApproverUsername = null, $preferedNextApproverID = null, $preferedInterBankChannel = null, $uploadDate = null, $totalNoOfTrans = null, $fileAttached = null, $delayedUpload = null, $userID = null, $recCount = null, $isCompleted = null, $mailSent = null, $dateCompleted = null, $fileFormat = null, $delimiter = null, $tryCount = null, $processAll = null, $uploadRoute = null, $postTransactionsAsBulk = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, \ArrayType\ArrayOfAPITransaction $aPITransactions = null, \ArrayType\ArrayOfAPITransaction $getAllPendingTrans = null, $customNarration = null, $description = null, $prefAccountNo = null, $prefAccountBankCode = null, $uploadRefNo = null, $attachmentPath = null, $archivePath = null, $runStatus = null, $errorMsg = null, $filePath = null, $uploadRouteDesc = null, $createdBy = null, $modifiedBy = null, $serverIP = null, \ArrayType\ArrayOfPain001Tran $pain001Trans = null)
    {
        $this
            ->setValidTransactionsCount($validTransactionsCount)
            ->setID($iD)
            ->setOrgID($orgID)
            ->setPrefAccountID($prefAccountID)
            ->setPreferedNextApproverUsername($preferedNextApproverUsername)
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
            ->setTryCount($tryCount)
            ->setProcessAll($processAll)
            ->setUploadRoute($uploadRoute)
            ->setPostTransactionsAsBulk($postTransactionsAsBulk)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setInitiatorID($initiatorID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setMoveNext($moveNext)
            ->setAPITransactions($aPITransactions)
            ->setGetAllPendingTrans($getAllPendingTrans)
            ->setCustomNarration($customNarration)
            ->setDescription($description)
            ->setPrefAccountNo($prefAccountNo)
            ->setPrefAccountBankCode($prefAccountBankCode)
            ->setUploadRefNo($uploadRefNo)
            ->setAttachmentPath($attachmentPath)
            ->setArchivePath($archivePath)
            ->setRunStatus($runStatus)
            ->setErrorMsg($errorMsg)
            ->setFilePath($filePath)
            ->setUploadRouteDesc($uploadRouteDesc)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setServerIP($serverIP)
            ->setPain001Trans($pain001Trans);
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * Get PrefAccountID value
     * @return int
     */
    public function getPrefAccountID()
    {
        return $this->PrefAccountID;
    }
    /**
     * Set PrefAccountID value
     * @param int $prefAccountID
     * @return \StructType\Pain001Upload
     */
    public function setPrefAccountID($prefAccountID = null)
    {
        // validation for constraint: int
        if (!is_null($prefAccountID) && !(is_int($prefAccountID) || ctype_digit($prefAccountID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($prefAccountID, true), gettype($prefAccountID)), __LINE__);
        }
        $this->PrefAccountID = $prefAccountID;
        return $this;
    }
    /**
     * Get PreferedNextApproverUsername value
     * @return int
     */
    public function getPreferedNextApproverUsername()
    {
        return $this->PreferedNextApproverUsername;
    }
    /**
     * Set PreferedNextApproverUsername value
     * @param int $preferedNextApproverUsername
     * @return \StructType\Pain001Upload
     */
    public function setPreferedNextApproverUsername($preferedNextApproverUsername = null)
    {
        // validation for constraint: int
        if (!is_null($preferedNextApproverUsername) && !(is_int($preferedNextApproverUsername) || ctype_digit($preferedNextApproverUsername))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preferedNextApproverUsername, true), gettype($preferedNextApproverUsername)), __LINE__);
        }
        $this->PreferedNextApproverUsername = $preferedNextApproverUsername;
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * Get ProcessAll value
     * @return bool
     */
    public function getProcessAll()
    {
        return $this->ProcessAll;
    }
    /**
     * Set ProcessAll value
     * @param bool $processAll
     * @return \StructType\Pain001Upload
     */
    public function setProcessAll($processAll = null)
    {
        // validation for constraint: boolean
        if (!is_null($processAll) && !is_bool($processAll)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processAll, true), gettype($processAll)), __LINE__);
        }
        $this->ProcessAll = $processAll;
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
     * @return \StructType\Pain001Upload
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
     * Get PostTransactionsAsBulk value
     * @return bool
     */
    public function getPostTransactionsAsBulk()
    {
        return $this->PostTransactionsAsBulk;
    }
    /**
     * Set PostTransactionsAsBulk value
     * @param bool $postTransactionsAsBulk
     * @return \StructType\Pain001Upload
     */
    public function setPostTransactionsAsBulk($postTransactionsAsBulk = null)
    {
        // validation for constraint: boolean
        if (!is_null($postTransactionsAsBulk) && !is_bool($postTransactionsAsBulk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($postTransactionsAsBulk, true), gettype($postTransactionsAsBulk)), __LINE__);
        }
        $this->PostTransactionsAsBulk = $postTransactionsAsBulk;
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * Get APITransactions value
     * @return \ArrayType\ArrayOfAPITransaction|null
     */
    public function getAPITransactions()
    {
        return $this->APITransactions;
    }
    /**
     * Set APITransactions value
     * @param \ArrayType\ArrayOfAPITransaction $aPITransactions
     * @return \StructType\Pain001Upload
     */
    public function setAPITransactions(\ArrayType\ArrayOfAPITransaction $aPITransactions = null)
    {
        $this->APITransactions = $aPITransactions;
        return $this;
    }
    /**
     * Get GetAllPendingTrans value
     * @return \ArrayType\ArrayOfAPITransaction|null
     */
    public function getGetAllPendingTrans()
    {
        return $this->GetAllPendingTrans;
    }
    /**
     * Set GetAllPendingTrans value
     * @param \ArrayType\ArrayOfAPITransaction $getAllPendingTrans
     * @return \StructType\Pain001Upload
     */
    public function setGetAllPendingTrans(\ArrayType\ArrayOfAPITransaction $getAllPendingTrans = null)
    {
        $this->GetAllPendingTrans = $getAllPendingTrans;
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * Get PrefAccountNo value
     * @return string|null
     */
    public function getPrefAccountNo()
    {
        return $this->PrefAccountNo;
    }
    /**
     * Set PrefAccountNo value
     * @param string $prefAccountNo
     * @return \StructType\Pain001Upload
     */
    public function setPrefAccountNo($prefAccountNo = null)
    {
        // validation for constraint: string
        if (!is_null($prefAccountNo) && !is_string($prefAccountNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefAccountNo, true), gettype($prefAccountNo)), __LINE__);
        }
        $this->PrefAccountNo = $prefAccountNo;
        return $this;
    }
    /**
     * Get PrefAccountBankCode value
     * @return string|null
     */
    public function getPrefAccountBankCode()
    {
        return $this->PrefAccountBankCode;
    }
    /**
     * Set PrefAccountBankCode value
     * @param string $prefAccountBankCode
     * @return \StructType\Pain001Upload
     */
    public function setPrefAccountBankCode($prefAccountBankCode = null)
    {
        // validation for constraint: string
        if (!is_null($prefAccountBankCode) && !is_string($prefAccountBankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prefAccountBankCode, true), gettype($prefAccountBankCode)), __LINE__);
        }
        $this->PrefAccountBankCode = $prefAccountBankCode;
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * @return \StructType\Pain001Upload
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
     * Get Pain001Trans value
     * @return \ArrayType\ArrayOfPain001Tran|null
     */
    public function getPain001Trans()
    {
        return $this->Pain001Trans;
    }
    /**
     * Set Pain001Trans value
     * @param \ArrayType\ArrayOfPain001Tran $pain001Trans
     * @return \StructType\Pain001Upload
     */
    public function setPain001Trans(\ArrayType\ArrayOfPain001Tran $pain001Trans = null)
    {
        $this->Pain001Trans = $pain001Trans;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Pain001Upload
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
