<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for User StructType
 * @subpackage Structs
 */
class User extends AbstractStructBase
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
     * The RoleID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RoleID;
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
     * The AuthenticationType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $AuthenticationType;
    /**
     * The IsFirstLogin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsFirstLogin;
    /**
     * The IsAdmin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsAdmin;
    /**
     * The IsFBNStaff
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsFBNStaff;
    /**
     * The MinApprovalLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $MinApprovalLimit;
    /**
     * The MaxApprovalLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $MaxApprovalLimit;
    /**
     * The MinBatchApprovalLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $MinBatchApprovalLimit;
    /**
     * The MaxBatchApprovalLimit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $MaxBatchApprovalLimit;
    /**
     * The IsDefaultAdmin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsDefaultAdmin;
    /**
     * The RecieveAlert
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $RecieveAlert;
    /**
     * The LastPasswordChangeDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LastPasswordChangeDate;
    /**
     * The LastLoginDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LastLoginDate;
    /**
     * The LastLogoutDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LastLogoutDate;
    /**
     * The SecretQuestionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $SecretQuestionID;
    /**
     * The IsDormant
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsDormant;
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
     * The UseToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $UseToken;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The FullName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FullName;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The MobileNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MobileNo;
    /**
     * The PasswordHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PasswordHistory;
    /**
     * The OldData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OldData;
    /**
     * The SecretQuestionResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SecretQuestionResponse;
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
     * The OrgRMs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrgRM
     */
    public $OrgRMs;
    /**
     * The TranWorkFlowLevelApprovers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTranWorkFlowLevelApprover
     */
    public $TranWorkFlowLevelApprovers;
    /**
     * The UserSessionLogs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfUserSessionLog
     */
    public $UserSessionLogs;
    /**
     * The WorkflowConfigs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkflowConfig
     */
    public $WorkflowConfigs;
    /**
     * The WorkFlowTransactionLogs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkFlowTransactionLog
     */
    public $WorkFlowTransactionLogs;
    /**
     * The Role
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Role
     */
    public $Role;
    /**
     * Constructor method for User
     * @uses User::setID()
     * @uses User::setOrgID()
     * @uses User::setRoleID()
     * @uses User::setMailSent()
     * @uses User::setAuthenticationType()
     * @uses User::setIsFirstLogin()
     * @uses User::setIsAdmin()
     * @uses User::setIsFBNStaff()
     * @uses User::setMinApprovalLimit()
     * @uses User::setMaxApprovalLimit()
     * @uses User::setMinBatchApprovalLimit()
     * @uses User::setMaxBatchApprovalLimit()
     * @uses User::setIsDefaultAdmin()
     * @uses User::setRecieveAlert()
     * @uses User::setLastPasswordChangeDate()
     * @uses User::setLastLoginDate()
     * @uses User::setLastLogoutDate()
     * @uses User::setSecretQuestionID()
     * @uses User::setIsDormant()
     * @uses User::setStatus()
     * @uses User::setDateCreated()
     * @uses User::setDateModified()
     * @uses User::setInitiatorID()
     * @uses User::setVerifierID()
     * @uses User::setVerifiedDate()
     * @uses User::setMoveNext()
     * @uses User::setNextApproverUserID()
     * @uses User::setNextApproverRoleID()
     * @uses User::setWorkFlowTransactionID()
     * @uses User::setUseToken()
     * @uses User::setUsername()
     * @uses User::setPassword()
     * @uses User::setFullName()
     * @uses User::setEmail()
     * @uses User::setMobileNo()
     * @uses User::setPasswordHistory()
     * @uses User::setOldData()
     * @uses User::setSecretQuestionResponse()
     * @uses User::setCreatedBy()
     * @uses User::setModifiedBy()
     * @uses User::setWorkFlowTransactionIDs()
     * @uses User::setOrgRMs()
     * @uses User::setTranWorkFlowLevelApprovers()
     * @uses User::setUserSessionLogs()
     * @uses User::setWorkflowConfigs()
     * @uses User::setWorkFlowTransactionLogs()
     * @uses User::setRole()
     * @param int $iD
     * @param int $orgID
     * @param int $roleID
     * @param bool $mailSent
     * @param int $authenticationType
     * @param bool $isFirstLogin
     * @param bool $isAdmin
     * @param bool $isFBNStaff
     * @param float $minApprovalLimit
     * @param float $maxApprovalLimit
     * @param float $minBatchApprovalLimit
     * @param float $maxBatchApprovalLimit
     * @param bool $isDefaultAdmin
     * @param bool $recieveAlert
     * @param string $lastPasswordChangeDate
     * @param string $lastLoginDate
     * @param string $lastLogoutDate
     * @param int $secretQuestionID
     * @param bool $isDormant
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
     * @param bool $useToken
     * @param string $username
     * @param string $password
     * @param string $fullName
     * @param string $email
     * @param string $mobileNo
     * @param string $passwordHistory
     * @param string $oldData
     * @param string $secretQuestionResponse
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param \ArrayType\ArrayOfOrgRM $orgRMs
     * @param \ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers
     * @param \ArrayType\ArrayOfUserSessionLog $userSessionLogs
     * @param \ArrayType\ArrayOfWorkflowConfig $workflowConfigs
     * @param \ArrayType\ArrayOfWorkFlowTransactionLog $workFlowTransactionLogs
     * @param \StructType\Role $role
     */
    public function __construct($iD = null, $orgID = null, $roleID = null, $mailSent = null, $authenticationType = null, $isFirstLogin = null, $isAdmin = null, $isFBNStaff = null, $minApprovalLimit = null, $maxApprovalLimit = null, $minBatchApprovalLimit = null, $maxBatchApprovalLimit = null, $isDefaultAdmin = null, $recieveAlert = null, $lastPasswordChangeDate = null, $lastLoginDate = null, $lastLogoutDate = null, $secretQuestionID = null, $isDormant = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $useToken = null, $username = null, $password = null, $fullName = null, $email = null, $mobileNo = null, $passwordHistory = null, $oldData = null, $secretQuestionResponse = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \ArrayType\ArrayOfOrgRM $orgRMs = null, \ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers = null, \ArrayType\ArrayOfUserSessionLog $userSessionLogs = null, \ArrayType\ArrayOfWorkflowConfig $workflowConfigs = null, \ArrayType\ArrayOfWorkFlowTransactionLog $workFlowTransactionLogs = null, \StructType\Role $role = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setRoleID($roleID)
            ->setMailSent($mailSent)
            ->setAuthenticationType($authenticationType)
            ->setIsFirstLogin($isFirstLogin)
            ->setIsAdmin($isAdmin)
            ->setIsFBNStaff($isFBNStaff)
            ->setMinApprovalLimit($minApprovalLimit)
            ->setMaxApprovalLimit($maxApprovalLimit)
            ->setMinBatchApprovalLimit($minBatchApprovalLimit)
            ->setMaxBatchApprovalLimit($maxBatchApprovalLimit)
            ->setIsDefaultAdmin($isDefaultAdmin)
            ->setRecieveAlert($recieveAlert)
            ->setLastPasswordChangeDate($lastPasswordChangeDate)
            ->setLastLoginDate($lastLoginDate)
            ->setLastLogoutDate($lastLogoutDate)
            ->setSecretQuestionID($secretQuestionID)
            ->setIsDormant($isDormant)
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
            ->setUseToken($useToken)
            ->setUsername($username)
            ->setPassword($password)
            ->setFullName($fullName)
            ->setEmail($email)
            ->setMobileNo($mobileNo)
            ->setPasswordHistory($passwordHistory)
            ->setOldData($oldData)
            ->setSecretQuestionResponse($secretQuestionResponse)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setOrgRMs($orgRMs)
            ->setTranWorkFlowLevelApprovers($tranWorkFlowLevelApprovers)
            ->setUserSessionLogs($userSessionLogs)
            ->setWorkflowConfigs($workflowConfigs)
            ->setWorkFlowTransactionLogs($workFlowTransactionLogs)
            ->setRole($role);
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * Get RoleID value
     * @return int
     */
    public function getRoleID()
    {
        return $this->RoleID;
    }
    /**
     * Set RoleID value
     * @param int $roleID
     * @return \StructType\User
     */
    public function setRoleID($roleID = null)
    {
        // validation for constraint: int
        if (!is_null($roleID) && !(is_int($roleID) || ctype_digit($roleID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleID, true), gettype($roleID)), __LINE__);
        }
        $this->RoleID = $roleID;
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
     * @return \StructType\User
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
     * Get AuthenticationType value
     * @return int
     */
    public function getAuthenticationType()
    {
        return $this->AuthenticationType;
    }
    /**
     * Set AuthenticationType value
     * @param int $authenticationType
     * @return \StructType\User
     */
    public function setAuthenticationType($authenticationType = null)
    {
        // validation for constraint: int
        if (!is_null($authenticationType) && !(is_int($authenticationType) || ctype_digit($authenticationType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($authenticationType, true), gettype($authenticationType)), __LINE__);
        }
        $this->AuthenticationType = $authenticationType;
        return $this;
    }
    /**
     * Get IsFirstLogin value
     * @return bool
     */
    public function getIsFirstLogin()
    {
        return $this->IsFirstLogin;
    }
    /**
     * Set IsFirstLogin value
     * @param bool $isFirstLogin
     * @return \StructType\User
     */
    public function setIsFirstLogin($isFirstLogin = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFirstLogin) && !is_bool($isFirstLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFirstLogin, true), gettype($isFirstLogin)), __LINE__);
        }
        $this->IsFirstLogin = $isFirstLogin;
        return $this;
    }
    /**
     * Get IsAdmin value
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->IsAdmin;
    }
    /**
     * Set IsAdmin value
     * @param bool $isAdmin
     * @return \StructType\User
     */
    public function setIsAdmin($isAdmin = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAdmin) && !is_bool($isAdmin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdmin, true), gettype($isAdmin)), __LINE__);
        }
        $this->IsAdmin = $isAdmin;
        return $this;
    }
    /**
     * Get IsFBNStaff value
     * @return bool
     */
    public function getIsFBNStaff()
    {
        return $this->IsFBNStaff;
    }
    /**
     * Set IsFBNStaff value
     * @param bool $isFBNStaff
     * @return \StructType\User
     */
    public function setIsFBNStaff($isFBNStaff = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFBNStaff) && !is_bool($isFBNStaff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFBNStaff, true), gettype($isFBNStaff)), __LINE__);
        }
        $this->IsFBNStaff = $isFBNStaff;
        return $this;
    }
    /**
     * Get MinApprovalLimit value
     * @return float
     */
    public function getMinApprovalLimit()
    {
        return $this->MinApprovalLimit;
    }
    /**
     * Set MinApprovalLimit value
     * @param float $minApprovalLimit
     * @return \StructType\User
     */
    public function setMinApprovalLimit($minApprovalLimit = null)
    {
        // validation for constraint: float
        if (!is_null($minApprovalLimit) && !(is_float($minApprovalLimit) || is_numeric($minApprovalLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minApprovalLimit, true), gettype($minApprovalLimit)), __LINE__);
        }
        $this->MinApprovalLimit = $minApprovalLimit;
        return $this;
    }
    /**
     * Get MaxApprovalLimit value
     * @return float
     */
    public function getMaxApprovalLimit()
    {
        return $this->MaxApprovalLimit;
    }
    /**
     * Set MaxApprovalLimit value
     * @param float $maxApprovalLimit
     * @return \StructType\User
     */
    public function setMaxApprovalLimit($maxApprovalLimit = null)
    {
        // validation for constraint: float
        if (!is_null($maxApprovalLimit) && !(is_float($maxApprovalLimit) || is_numeric($maxApprovalLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxApprovalLimit, true), gettype($maxApprovalLimit)), __LINE__);
        }
        $this->MaxApprovalLimit = $maxApprovalLimit;
        return $this;
    }
    /**
     * Get MinBatchApprovalLimit value
     * @return float
     */
    public function getMinBatchApprovalLimit()
    {
        return $this->MinBatchApprovalLimit;
    }
    /**
     * Set MinBatchApprovalLimit value
     * @param float $minBatchApprovalLimit
     * @return \StructType\User
     */
    public function setMinBatchApprovalLimit($minBatchApprovalLimit = null)
    {
        // validation for constraint: float
        if (!is_null($minBatchApprovalLimit) && !(is_float($minBatchApprovalLimit) || is_numeric($minBatchApprovalLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minBatchApprovalLimit, true), gettype($minBatchApprovalLimit)), __LINE__);
        }
        $this->MinBatchApprovalLimit = $minBatchApprovalLimit;
        return $this;
    }
    /**
     * Get MaxBatchApprovalLimit value
     * @return float
     */
    public function getMaxBatchApprovalLimit()
    {
        return $this->MaxBatchApprovalLimit;
    }
    /**
     * Set MaxBatchApprovalLimit value
     * @param float $maxBatchApprovalLimit
     * @return \StructType\User
     */
    public function setMaxBatchApprovalLimit($maxBatchApprovalLimit = null)
    {
        // validation for constraint: float
        if (!is_null($maxBatchApprovalLimit) && !(is_float($maxBatchApprovalLimit) || is_numeric($maxBatchApprovalLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($maxBatchApprovalLimit, true), gettype($maxBatchApprovalLimit)), __LINE__);
        }
        $this->MaxBatchApprovalLimit = $maxBatchApprovalLimit;
        return $this;
    }
    /**
     * Get IsDefaultAdmin value
     * @return bool
     */
    public function getIsDefaultAdmin()
    {
        return $this->IsDefaultAdmin;
    }
    /**
     * Set IsDefaultAdmin value
     * @param bool $isDefaultAdmin
     * @return \StructType\User
     */
    public function setIsDefaultAdmin($isDefaultAdmin = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDefaultAdmin) && !is_bool($isDefaultAdmin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefaultAdmin, true), gettype($isDefaultAdmin)), __LINE__);
        }
        $this->IsDefaultAdmin = $isDefaultAdmin;
        return $this;
    }
    /**
     * Get RecieveAlert value
     * @return bool
     */
    public function getRecieveAlert()
    {
        return $this->RecieveAlert;
    }
    /**
     * Set RecieveAlert value
     * @param bool $recieveAlert
     * @return \StructType\User
     */
    public function setRecieveAlert($recieveAlert = null)
    {
        // validation for constraint: boolean
        if (!is_null($recieveAlert) && !is_bool($recieveAlert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recieveAlert, true), gettype($recieveAlert)), __LINE__);
        }
        $this->RecieveAlert = $recieveAlert;
        return $this;
    }
    /**
     * Get LastPasswordChangeDate value
     * @return string
     */
    public function getLastPasswordChangeDate()
    {
        return $this->LastPasswordChangeDate;
    }
    /**
     * Set LastPasswordChangeDate value
     * @param string $lastPasswordChangeDate
     * @return \StructType\User
     */
    public function setLastPasswordChangeDate($lastPasswordChangeDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastPasswordChangeDate) && !is_string($lastPasswordChangeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastPasswordChangeDate, true), gettype($lastPasswordChangeDate)), __LINE__);
        }
        $this->LastPasswordChangeDate = $lastPasswordChangeDate;
        return $this;
    }
    /**
     * Get LastLoginDate value
     * @return string
     */
    public function getLastLoginDate()
    {
        return $this->LastLoginDate;
    }
    /**
     * Set LastLoginDate value
     * @param string $lastLoginDate
     * @return \StructType\User
     */
    public function setLastLoginDate($lastLoginDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastLoginDate) && !is_string($lastLoginDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastLoginDate, true), gettype($lastLoginDate)), __LINE__);
        }
        $this->LastLoginDate = $lastLoginDate;
        return $this;
    }
    /**
     * Get LastLogoutDate value
     * @return string
     */
    public function getLastLogoutDate()
    {
        return $this->LastLogoutDate;
    }
    /**
     * Set LastLogoutDate value
     * @param string $lastLogoutDate
     * @return \StructType\User
     */
    public function setLastLogoutDate($lastLogoutDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastLogoutDate) && !is_string($lastLogoutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastLogoutDate, true), gettype($lastLogoutDate)), __LINE__);
        }
        $this->LastLogoutDate = $lastLogoutDate;
        return $this;
    }
    /**
     * Get SecretQuestionID value
     * @return int
     */
    public function getSecretQuestionID()
    {
        return $this->SecretQuestionID;
    }
    /**
     * Set SecretQuestionID value
     * @param int $secretQuestionID
     * @return \StructType\User
     */
    public function setSecretQuestionID($secretQuestionID = null)
    {
        // validation for constraint: int
        if (!is_null($secretQuestionID) && !(is_int($secretQuestionID) || ctype_digit($secretQuestionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($secretQuestionID, true), gettype($secretQuestionID)), __LINE__);
        }
        $this->SecretQuestionID = $secretQuestionID;
        return $this;
    }
    /**
     * Get IsDormant value
     * @return bool
     */
    public function getIsDormant()
    {
        return $this->IsDormant;
    }
    /**
     * Set IsDormant value
     * @param bool $isDormant
     * @return \StructType\User
     */
    public function setIsDormant($isDormant = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDormant) && !is_bool($isDormant)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDormant, true), gettype($isDormant)), __LINE__);
        }
        $this->IsDormant = $isDormant;
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * Get UseToken value
     * @return bool
     */
    public function getUseToken()
    {
        return $this->UseToken;
    }
    /**
     * Set UseToken value
     * @param bool $useToken
     * @return \StructType\User
     */
    public function setUseToken($useToken = null)
    {
        // validation for constraint: boolean
        if (!is_null($useToken) && !is_bool($useToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useToken, true), gettype($useToken)), __LINE__);
        }
        $this->UseToken = $useToken;
        return $this;
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \StructType\User
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \StructType\User
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get FullName value
     * @return string|null
     */
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set FullName value
     * @param string $fullName
     * @return \StructType\User
     */
    public function setFullName($fullName = null)
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        $this->FullName = $fullName;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\User
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get MobileNo value
     * @return string|null
     */
    public function getMobileNo()
    {
        return $this->MobileNo;
    }
    /**
     * Set MobileNo value
     * @param string $mobileNo
     * @return \StructType\User
     */
    public function setMobileNo($mobileNo = null)
    {
        // validation for constraint: string
        if (!is_null($mobileNo) && !is_string($mobileNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileNo, true), gettype($mobileNo)), __LINE__);
        }
        $this->MobileNo = $mobileNo;
        return $this;
    }
    /**
     * Get PasswordHistory value
     * @return string|null
     */
    public function getPasswordHistory()
    {
        return $this->PasswordHistory;
    }
    /**
     * Set PasswordHistory value
     * @param string $passwordHistory
     * @return \StructType\User
     */
    public function setPasswordHistory($passwordHistory = null)
    {
        // validation for constraint: string
        if (!is_null($passwordHistory) && !is_string($passwordHistory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordHistory, true), gettype($passwordHistory)), __LINE__);
        }
        $this->PasswordHistory = $passwordHistory;
        return $this;
    }
    /**
     * Get OldData value
     * @return string|null
     */
    public function getOldData()
    {
        return $this->OldData;
    }
    /**
     * Set OldData value
     * @param string $oldData
     * @return \StructType\User
     */
    public function setOldData($oldData = null)
    {
        // validation for constraint: string
        if (!is_null($oldData) && !is_string($oldData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldData, true), gettype($oldData)), __LINE__);
        }
        $this->OldData = $oldData;
        return $this;
    }
    /**
     * Get SecretQuestionResponse value
     * @return string|null
     */
    public function getSecretQuestionResponse()
    {
        return $this->SecretQuestionResponse;
    }
    /**
     * Set SecretQuestionResponse value
     * @param string $secretQuestionResponse
     * @return \StructType\User
     */
    public function setSecretQuestionResponse($secretQuestionResponse = null)
    {
        // validation for constraint: string
        if (!is_null($secretQuestionResponse) && !is_string($secretQuestionResponse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secretQuestionResponse, true), gettype($secretQuestionResponse)), __LINE__);
        }
        $this->SecretQuestionResponse = $secretQuestionResponse;
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * @return \StructType\User
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
     * Get OrgRMs value
     * @return \ArrayType\ArrayOfOrgRM|null
     */
    public function getOrgRMs()
    {
        return $this->OrgRMs;
    }
    /**
     * Set OrgRMs value
     * @param \ArrayType\ArrayOfOrgRM $orgRMs
     * @return \StructType\User
     */
    public function setOrgRMs(\ArrayType\ArrayOfOrgRM $orgRMs = null)
    {
        $this->OrgRMs = $orgRMs;
        return $this;
    }
    /**
     * Get TranWorkFlowLevelApprovers value
     * @return \ArrayType\ArrayOfTranWorkFlowLevelApprover|null
     */
    public function getTranWorkFlowLevelApprovers()
    {
        return $this->TranWorkFlowLevelApprovers;
    }
    /**
     * Set TranWorkFlowLevelApprovers value
     * @param \ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers
     * @return \StructType\User
     */
    public function setTranWorkFlowLevelApprovers(\ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers = null)
    {
        $this->TranWorkFlowLevelApprovers = $tranWorkFlowLevelApprovers;
        return $this;
    }
    /**
     * Get UserSessionLogs value
     * @return \ArrayType\ArrayOfUserSessionLog|null
     */
    public function getUserSessionLogs()
    {
        return $this->UserSessionLogs;
    }
    /**
     * Set UserSessionLogs value
     * @param \ArrayType\ArrayOfUserSessionLog $userSessionLogs
     * @return \StructType\User
     */
    public function setUserSessionLogs(\ArrayType\ArrayOfUserSessionLog $userSessionLogs = null)
    {
        $this->UserSessionLogs = $userSessionLogs;
        return $this;
    }
    /**
     * Get WorkflowConfigs value
     * @return \ArrayType\ArrayOfWorkflowConfig|null
     */
    public function getWorkflowConfigs()
    {
        return $this->WorkflowConfigs;
    }
    /**
     * Set WorkflowConfigs value
     * @param \ArrayType\ArrayOfWorkflowConfig $workflowConfigs
     * @return \StructType\User
     */
    public function setWorkflowConfigs(\ArrayType\ArrayOfWorkflowConfig $workflowConfigs = null)
    {
        $this->WorkflowConfigs = $workflowConfigs;
        return $this;
    }
    /**
     * Get WorkFlowTransactionLogs value
     * @return \ArrayType\ArrayOfWorkFlowTransactionLog|null
     */
    public function getWorkFlowTransactionLogs()
    {
        return $this->WorkFlowTransactionLogs;
    }
    /**
     * Set WorkFlowTransactionLogs value
     * @param \ArrayType\ArrayOfWorkFlowTransactionLog $workFlowTransactionLogs
     * @return \StructType\User
     */
    public function setWorkFlowTransactionLogs(\ArrayType\ArrayOfWorkFlowTransactionLog $workFlowTransactionLogs = null)
    {
        $this->WorkFlowTransactionLogs = $workFlowTransactionLogs;
        return $this;
    }
    /**
     * Get Role value
     * @return \StructType\Role|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @param \StructType\Role $role
     * @return \StructType\User
     */
    public function setRole(\StructType\Role $role = null)
    {
        $this->Role = $role;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\User
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
