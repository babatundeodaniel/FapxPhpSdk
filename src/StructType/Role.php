<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Role StructType
 * @subpackage Structs
 */
class Role extends AbstractStructBase
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
     * The ParentRoleID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ParentRoleID;
    /**
     * The IsParent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsParent;
    /**
     * The RoleLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RoleLevel;
    /**
     * The AllowChannelSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $AllowChannelSelect;
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
     * The RoleCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RoleCode;
    /**
     * The RoleName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RoleName;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
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
     * The RoleMenuPages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRoleMenuPage
     */
    public $RoleMenuPages;
    /**
     * The TranWorkFlowLevelApprovers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTranWorkFlowLevelApprover
     */
    public $TranWorkFlowLevelApprovers;
    /**
     * The Users
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfUser
     */
    public $Users;
    /**
     * The WorkflowConfigs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkflowConfig
     */
    public $WorkflowConfigs;
    /**
     * The Organisation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Organisation
     */
    public $Organisation;
    /**
     * Constructor method for Role
     * @uses Role::setID()
     * @uses Role::setOrgID()
     * @uses Role::setParentRoleID()
     * @uses Role::setIsParent()
     * @uses Role::setRoleLevel()
     * @uses Role::setAllowChannelSelect()
     * @uses Role::setStatus()
     * @uses Role::setDateCreated()
     * @uses Role::setDateModified()
     * @uses Role::setInitiatorID()
     * @uses Role::setVerifierID()
     * @uses Role::setVerifiedDate()
     * @uses Role::setMoveNext()
     * @uses Role::setNextApproverUserID()
     * @uses Role::setNextApproverRoleID()
     * @uses Role::setWorkFlowTransactionID()
     * @uses Role::setRoleCode()
     * @uses Role::setRoleName()
     * @uses Role::setDescription()
     * @uses Role::setCreatedBy()
     * @uses Role::setModifiedBy()
     * @uses Role::setWorkFlowTransactionIDs()
     * @uses Role::setRoleMenuPages()
     * @uses Role::setTranWorkFlowLevelApprovers()
     * @uses Role::setUsers()
     * @uses Role::setWorkflowConfigs()
     * @uses Role::setOrganisation()
     * @param int $iD
     * @param int $orgID
     * @param int $parentRoleID
     * @param bool $isParent
     * @param int $roleLevel
     * @param bool $allowChannelSelect
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
     * @param string $roleCode
     * @param string $roleName
     * @param string $description
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param \ArrayType\ArrayOfRoleMenuPage $roleMenuPages
     * @param \ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers
     * @param \ArrayType\ArrayOfUser $users
     * @param \ArrayType\ArrayOfWorkflowConfig $workflowConfigs
     * @param \StructType\Organisation $organisation
     */
    public function __construct($iD = null, $orgID = null, $parentRoleID = null, $isParent = null, $roleLevel = null, $allowChannelSelect = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $roleCode = null, $roleName = null, $description = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \ArrayType\ArrayOfRoleMenuPage $roleMenuPages = null, \ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers = null, \ArrayType\ArrayOfUser $users = null, \ArrayType\ArrayOfWorkflowConfig $workflowConfigs = null, \StructType\Organisation $organisation = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setParentRoleID($parentRoleID)
            ->setIsParent($isParent)
            ->setRoleLevel($roleLevel)
            ->setAllowChannelSelect($allowChannelSelect)
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
            ->setRoleCode($roleCode)
            ->setRoleName($roleName)
            ->setDescription($description)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setRoleMenuPages($roleMenuPages)
            ->setTranWorkFlowLevelApprovers($tranWorkFlowLevelApprovers)
            ->setUsers($users)
            ->setWorkflowConfigs($workflowConfigs)
            ->setOrganisation($organisation);
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * Get ParentRoleID value
     * @return int
     */
    public function getParentRoleID()
    {
        return $this->ParentRoleID;
    }
    /**
     * Set ParentRoleID value
     * @param int $parentRoleID
     * @return \StructType\Role
     */
    public function setParentRoleID($parentRoleID = null)
    {
        // validation for constraint: int
        if (!is_null($parentRoleID) && !(is_int($parentRoleID) || ctype_digit($parentRoleID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentRoleID, true), gettype($parentRoleID)), __LINE__);
        }
        $this->ParentRoleID = $parentRoleID;
        return $this;
    }
    /**
     * Get IsParent value
     * @return bool
     */
    public function getIsParent()
    {
        return $this->IsParent;
    }
    /**
     * Set IsParent value
     * @param bool $isParent
     * @return \StructType\Role
     */
    public function setIsParent($isParent = null)
    {
        // validation for constraint: boolean
        if (!is_null($isParent) && !is_bool($isParent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isParent, true), gettype($isParent)), __LINE__);
        }
        $this->IsParent = $isParent;
        return $this;
    }
    /**
     * Get RoleLevel value
     * @return int
     */
    public function getRoleLevel()
    {
        return $this->RoleLevel;
    }
    /**
     * Set RoleLevel value
     * @param int $roleLevel
     * @return \StructType\Role
     */
    public function setRoleLevel($roleLevel = null)
    {
        // validation for constraint: int
        if (!is_null($roleLevel) && !(is_int($roleLevel) || ctype_digit($roleLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleLevel, true), gettype($roleLevel)), __LINE__);
        }
        $this->RoleLevel = $roleLevel;
        return $this;
    }
    /**
     * Get AllowChannelSelect value
     * @return bool
     */
    public function getAllowChannelSelect()
    {
        return $this->AllowChannelSelect;
    }
    /**
     * Set AllowChannelSelect value
     * @param bool $allowChannelSelect
     * @return \StructType\Role
     */
    public function setAllowChannelSelect($allowChannelSelect = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowChannelSelect) && !is_bool($allowChannelSelect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowChannelSelect, true), gettype($allowChannelSelect)), __LINE__);
        }
        $this->AllowChannelSelect = $allowChannelSelect;
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * Get RoleCode value
     * @return string|null
     */
    public function getRoleCode()
    {
        return $this->RoleCode;
    }
    /**
     * Set RoleCode value
     * @param string $roleCode
     * @return \StructType\Role
     */
    public function setRoleCode($roleCode = null)
    {
        // validation for constraint: string
        if (!is_null($roleCode) && !is_string($roleCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roleCode, true), gettype($roleCode)), __LINE__);
        }
        $this->RoleCode = $roleCode;
        return $this;
    }
    /**
     * Get RoleName value
     * @return string|null
     */
    public function getRoleName()
    {
        return $this->RoleName;
    }
    /**
     * Set RoleName value
     * @param string $roleName
     * @return \StructType\Role
     */
    public function setRoleName($roleName = null)
    {
        // validation for constraint: string
        if (!is_null($roleName) && !is_string($roleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roleName, true), gettype($roleName)), __LINE__);
        }
        $this->RoleName = $roleName;
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * @return \StructType\Role
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
     * Get RoleMenuPages value
     * @return \ArrayType\ArrayOfRoleMenuPage|null
     */
    public function getRoleMenuPages()
    {
        return $this->RoleMenuPages;
    }
    /**
     * Set RoleMenuPages value
     * @param \ArrayType\ArrayOfRoleMenuPage $roleMenuPages
     * @return \StructType\Role
     */
    public function setRoleMenuPages(\ArrayType\ArrayOfRoleMenuPage $roleMenuPages = null)
    {
        $this->RoleMenuPages = $roleMenuPages;
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
     * @return \StructType\Role
     */
    public function setTranWorkFlowLevelApprovers(\ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers = null)
    {
        $this->TranWorkFlowLevelApprovers = $tranWorkFlowLevelApprovers;
        return $this;
    }
    /**
     * Get Users value
     * @return \ArrayType\ArrayOfUser|null
     */
    public function getUsers()
    {
        return $this->Users;
    }
    /**
     * Set Users value
     * @param \ArrayType\ArrayOfUser $users
     * @return \StructType\Role
     */
    public function setUsers(\ArrayType\ArrayOfUser $users = null)
    {
        $this->Users = $users;
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
     * @return \StructType\Role
     */
    public function setWorkflowConfigs(\ArrayType\ArrayOfWorkflowConfig $workflowConfigs = null)
    {
        $this->WorkflowConfigs = $workflowConfigs;
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
     * @return \StructType\Role
     */
    public function setOrganisation(\StructType\Organisation $organisation = null)
    {
        $this->Organisation = $organisation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Role
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
