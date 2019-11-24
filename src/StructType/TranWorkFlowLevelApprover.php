<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TranWorkFlowLevelApprover StructType
 * @subpackage Structs
 */
class TranWorkFlowLevelApprover extends AbstractStructBase
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
     * The TranWorkFlowLevelID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranWorkFlowLevelID;
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
     * The TranWorkFlowLevel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TranWorkFlowLevel
     */
    public $TranWorkFlowLevel;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\User
     */
    public $User;
    /**
     * Constructor method for TranWorkFlowLevelApprover
     * @uses TranWorkFlowLevelApprover::setID()
     * @uses TranWorkFlowLevelApprover::setTranWorkFlowLevelID()
     * @uses TranWorkFlowLevelApprover::setConfigCategory()
     * @uses TranWorkFlowLevelApprover::setUserID()
     * @uses TranWorkFlowLevelApprover::setRoleID()
     * @uses TranWorkFlowLevelApprover::setStatus()
     * @uses TranWorkFlowLevelApprover::setDateCreated()
     * @uses TranWorkFlowLevelApprover::setDateModified()
     * @uses TranWorkFlowLevelApprover::setInitiatorID()
     * @uses TranWorkFlowLevelApprover::setVerifierID()
     * @uses TranWorkFlowLevelApprover::setVerifiedDate()
     * @uses TranWorkFlowLevelApprover::setCreatedBy()
     * @uses TranWorkFlowLevelApprover::setModifiedBy()
     * @uses TranWorkFlowLevelApprover::setRole()
     * @uses TranWorkFlowLevelApprover::setTranWorkFlowLevel()
     * @uses TranWorkFlowLevelApprover::setUser()
     * @param int $iD
     * @param int $tranWorkFlowLevelID
     * @param int $configCategory
     * @param int $userID
     * @param int $roleID
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $initiatorID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param string $createdBy
     * @param string $modifiedBy
     * @param \StructType\Role $role
     * @param \StructType\TranWorkFlowLevel $tranWorkFlowLevel
     * @param \StructType\User $user
     */
    public function __construct($iD = null, $tranWorkFlowLevelID = null, $configCategory = null, $userID = null, $roleID = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $createdBy = null, $modifiedBy = null, \StructType\Role $role = null, \StructType\TranWorkFlowLevel $tranWorkFlowLevel = null, \StructType\User $user = null)
    {
        $this
            ->setID($iD)
            ->setTranWorkFlowLevelID($tranWorkFlowLevelID)
            ->setConfigCategory($configCategory)
            ->setUserID($userID)
            ->setRoleID($roleID)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setInitiatorID($initiatorID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setRole($role)
            ->setTranWorkFlowLevel($tranWorkFlowLevel)
            ->setUser($user);
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * Get TranWorkFlowLevelID value
     * @return int
     */
    public function getTranWorkFlowLevelID()
    {
        return $this->TranWorkFlowLevelID;
    }
    /**
     * Set TranWorkFlowLevelID value
     * @param int $tranWorkFlowLevelID
     * @return \StructType\TranWorkFlowLevelApprover
     */
    public function setTranWorkFlowLevelID($tranWorkFlowLevelID = null)
    {
        // validation for constraint: int
        if (!is_null($tranWorkFlowLevelID) && !(is_int($tranWorkFlowLevelID) || ctype_digit($tranWorkFlowLevelID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranWorkFlowLevelID, true), gettype($tranWorkFlowLevelID)), __LINE__);
        }
        $this->TranWorkFlowLevelID = $tranWorkFlowLevelID;
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
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
     * @return \StructType\TranWorkFlowLevelApprover
     */
    public function setRole(\StructType\Role $role = null)
    {
        $this->Role = $role;
        return $this;
    }
    /**
     * Get TranWorkFlowLevel value
     * @return \StructType\TranWorkFlowLevel|null
     */
    public function getTranWorkFlowLevel()
    {
        return $this->TranWorkFlowLevel;
    }
    /**
     * Set TranWorkFlowLevel value
     * @param \StructType\TranWorkFlowLevel $tranWorkFlowLevel
     * @return \StructType\TranWorkFlowLevelApprover
     */
    public function setTranWorkFlowLevel(\StructType\TranWorkFlowLevel $tranWorkFlowLevel = null)
    {
        $this->TranWorkFlowLevel = $tranWorkFlowLevel;
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
     * @return \StructType\TranWorkFlowLevelApprover
     */
    public function setUser(\StructType\User $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TranWorkFlowLevelApprover
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
