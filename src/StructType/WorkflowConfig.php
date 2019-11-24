<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkflowConfig StructType
 * @subpackage Structs
 */
class WorkflowConfig extends AbstractStructBase
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
     * The ApprovalLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ApprovalLevel;
    /**
     * The ConfigCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ConfigCategory;
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
     * The RoleID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RoleID;
    /**
     * The WorkFlowID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $WorkFlowID;
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
     * The Role
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Role
     */
    public $Role;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\User
     */
    public $User;
    /**
     * The WorkFlow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\WorkFlow
     */
    public $WorkFlow;
    /**
     * Constructor method for WorkflowConfig
     * @uses WorkflowConfig::setID()
     * @uses WorkflowConfig::setApprovalLevel()
     * @uses WorkflowConfig::setConfigCategory()
     * @uses WorkflowConfig::setUserID()
     * @uses WorkflowConfig::setRoleID()
     * @uses WorkflowConfig::setWorkFlowID()
     * @uses WorkflowConfig::setStatus()
     * @uses WorkflowConfig::setDateCreated()
     * @uses WorkflowConfig::setDateModified()
     * @uses WorkflowConfig::setInitiatorID()
     * @uses WorkflowConfig::setVerifierID()
     * @uses WorkflowConfig::setVerifiedDate()
     * @uses WorkflowConfig::setCreatedBy()
     * @uses WorkflowConfig::setModifiedBy()
     * @uses WorkflowConfig::setRole()
     * @uses WorkflowConfig::setUser()
     * @uses WorkflowConfig::setWorkFlow()
     * @param int $iD
     * @param int $approvalLevel
     * @param int $configCategory
     * @param int $userID
     * @param int $roleID
     * @param int $workFlowID
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $initiatorID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param string $createdBy
     * @param string $modifiedBy
     * @param \StructType\Role $role
     * @param \StructType\User $user
     * @param \StructType\WorkFlow $workFlow
     */
    public function __construct($iD = null, $approvalLevel = null, $configCategory = null, $userID = null, $roleID = null, $workFlowID = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $createdBy = null, $modifiedBy = null, \StructType\Role $role = null, \StructType\User $user = null, \StructType\WorkFlow $workFlow = null)
    {
        $this
            ->setID($iD)
            ->setApprovalLevel($approvalLevel)
            ->setConfigCategory($configCategory)
            ->setUserID($userID)
            ->setRoleID($roleID)
            ->setWorkFlowID($workFlowID)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setInitiatorID($initiatorID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setRole($role)
            ->setUser($user)
            ->setWorkFlow($workFlow);
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
     * @return \StructType\WorkflowConfig
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
     * Get ApprovalLevel value
     * @return int
     */
    public function getApprovalLevel()
    {
        return $this->ApprovalLevel;
    }
    /**
     * Set ApprovalLevel value
     * @param int $approvalLevel
     * @return \StructType\WorkflowConfig
     */
    public function setApprovalLevel($approvalLevel = null)
    {
        // validation for constraint: int
        if (!is_null($approvalLevel) && !(is_int($approvalLevel) || ctype_digit($approvalLevel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($approvalLevel, true), gettype($approvalLevel)), __LINE__);
        }
        $this->ApprovalLevel = $approvalLevel;
        return $this;
    }
    /**
     * Get ConfigCategory value
     * @return int
     */
    public function getConfigCategory()
    {
        return $this->ConfigCategory;
    }
    /**
     * Set ConfigCategory value
     * @param int $configCategory
     * @return \StructType\WorkflowConfig
     */
    public function setConfigCategory($configCategory = null)
    {
        // validation for constraint: int
        if (!is_null($configCategory) && !(is_int($configCategory) || ctype_digit($configCategory))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($configCategory, true), gettype($configCategory)), __LINE__);
        }
        $this->ConfigCategory = $configCategory;
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * Get WorkFlowID value
     * @return int
     */
    public function getWorkFlowID()
    {
        return $this->WorkFlowID;
    }
    /**
     * Set WorkFlowID value
     * @param int $workFlowID
     * @return \StructType\WorkflowConfig
     */
    public function setWorkFlowID($workFlowID = null)
    {
        // validation for constraint: int
        if (!is_null($workFlowID) && !(is_int($workFlowID) || ctype_digit($workFlowID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workFlowID, true), gettype($workFlowID)), __LINE__);
        }
        $this->WorkFlowID = $workFlowID;
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
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
     * @return \StructType\WorkflowConfig
     */
    public function setRole(\StructType\Role $role = null)
    {
        $this->Role = $role;
        return $this;
    }
    /**
     * Get User value
     * @return \StructType\User|null
     */
    public function getUser()
    {
        return $this->User;
    }
    /**
     * Set User value
     * @param \StructType\User $user
     * @return \StructType\WorkflowConfig
     */
    public function setUser(\StructType\User $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Get WorkFlow value
     * @return \StructType\WorkFlow|null
     */
    public function getWorkFlow()
    {
        return $this->WorkFlow;
    }
    /**
     * Set WorkFlow value
     * @param \StructType\WorkFlow $workFlow
     * @return \StructType\WorkflowConfig
     */
    public function setWorkFlow(\StructType\WorkFlow $workFlow = null)
    {
        $this->WorkFlow = $workFlow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkflowConfig
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
