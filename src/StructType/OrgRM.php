<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgRM StructType
 * @subpackage Structs
 */
class OrgRM extends AbstractStructBase
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
     * The RMCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RMCategory;
    /**
     * The RMUserID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RMUserID;
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
     * The Organisation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Organisation
     */
    public $Organisation;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\User
     */
    public $User;
    /**
     * Constructor method for OrgRM
     * @uses OrgRM::setID()
     * @uses OrgRM::setOrgID()
     * @uses OrgRM::setRMCategory()
     * @uses OrgRM::setRMUserID()
     * @uses OrgRM::setStatus()
     * @uses OrgRM::setDateCreated()
     * @uses OrgRM::setDateModified()
     * @uses OrgRM::setInitiatorID()
     * @uses OrgRM::setVerifierID()
     * @uses OrgRM::setVerifiedDate()
     * @uses OrgRM::setMoveNext()
     * @uses OrgRM::setNextApproverUserID()
     * @uses OrgRM::setNextApproverRoleID()
     * @uses OrgRM::setWorkFlowTransactionID()
     * @uses OrgRM::setCreatedBy()
     * @uses OrgRM::setModifiedBy()
     * @uses OrgRM::setWorkFlowTransactionIDs()
     * @uses OrgRM::setOrganisation()
     * @uses OrgRM::setUser()
     * @param int $iD
     * @param int $orgID
     * @param int $rMCategory
     * @param int $rMUserID
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
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param \StructType\Organisation $organisation
     * @param \StructType\User $user
     */
    public function __construct($iD = null, $orgID = null, $rMCategory = null, $rMUserID = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \StructType\Organisation $organisation = null, \StructType\User $user = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setRMCategory($rMCategory)
            ->setRMUserID($rMUserID)
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
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setOrganisation($organisation)
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * Get RMCategory value
     * @return int
     */
    public function getRMCategory()
    {
        return $this->RMCategory;
    }
    /**
     * Set RMCategory value
     * @param int $rMCategory
     * @return \StructType\OrgRM
     */
    public function setRMCategory($rMCategory = null)
    {
        // validation for constraint: int
        if (!is_null($rMCategory) && !(is_int($rMCategory) || ctype_digit($rMCategory))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rMCategory, true), gettype($rMCategory)), __LINE__);
        }
        $this->RMCategory = $rMCategory;
        return $this;
    }
    /**
     * Get RMUserID value
     * @return int
     */
    public function getRMUserID()
    {
        return $this->RMUserID;
    }
    /**
     * Set RMUserID value
     * @param int $rMUserID
     * @return \StructType\OrgRM
     */
    public function setRMUserID($rMUserID = null)
    {
        // validation for constraint: int
        if (!is_null($rMUserID) && !(is_int($rMUserID) || ctype_digit($rMUserID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rMUserID, true), gettype($rMUserID)), __LINE__);
        }
        $this->RMUserID = $rMUserID;
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
     */
    public function setOrganisation(\StructType\Organisation $organisation = null)
    {
        $this->Organisation = $organisation;
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
     * @return \StructType\OrgRM
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
     * @return \StructType\OrgRM
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
