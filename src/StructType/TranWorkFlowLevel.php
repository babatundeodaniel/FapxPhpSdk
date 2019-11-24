<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TranWorkFlowLevel StructType
 * @subpackage Structs
 */
class TranWorkFlowLevel extends AbstractStructBase
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
     * The TranWorkFlowID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranWorkFlowID;
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
     * The TranWorkFlowLevelApprovers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTranWorkFlowLevelApprover
     */
    public $TranWorkFlowLevelApprovers;
    /**
     * The TranWorkflow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TranWorkflow
     */
    public $TranWorkflow;
    /**
     * Constructor method for TranWorkFlowLevel
     * @uses TranWorkFlowLevel::setID()
     * @uses TranWorkFlowLevel::setTranWorkFlowID()
     * @uses TranWorkFlowLevel::setApprovalLevel()
     * @uses TranWorkFlowLevel::setStatus()
     * @uses TranWorkFlowLevel::setDateCreated()
     * @uses TranWorkFlowLevel::setDateModified()
     * @uses TranWorkFlowLevel::setInitiatorID()
     * @uses TranWorkFlowLevel::setVerifierID()
     * @uses TranWorkFlowLevel::setVerifiedDate()
     * @uses TranWorkFlowLevel::setCreatedBy()
     * @uses TranWorkFlowLevel::setModifiedBy()
     * @uses TranWorkFlowLevel::setTranWorkFlowLevelApprovers()
     * @uses TranWorkFlowLevel::setTranWorkflow()
     * @param int $iD
     * @param int $tranWorkFlowID
     * @param int $approvalLevel
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $initiatorID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param string $createdBy
     * @param string $modifiedBy
     * @param \ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers
     * @param \StructType\TranWorkflow $tranWorkflow
     */
    public function __construct($iD = null, $tranWorkFlowID = null, $approvalLevel = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $createdBy = null, $modifiedBy = null, \ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers = null, \StructType\TranWorkflow $tranWorkflow = null)
    {
        $this
            ->setID($iD)
            ->setTranWorkFlowID($tranWorkFlowID)
            ->setApprovalLevel($approvalLevel)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setInitiatorID($initiatorID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setTranWorkFlowLevelApprovers($tranWorkFlowLevelApprovers)
            ->setTranWorkflow($tranWorkflow);
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
     * @return \StructType\TranWorkFlowLevel
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
     * Get TranWorkFlowID value
     * @return int
     */
    public function getTranWorkFlowID()
    {
        return $this->TranWorkFlowID;
    }
    /**
     * Set TranWorkFlowID value
     * @param int $tranWorkFlowID
     * @return \StructType\TranWorkFlowLevel
     */
    public function setTranWorkFlowID($tranWorkFlowID = null)
    {
        // validation for constraint: int
        if (!is_null($tranWorkFlowID) && !(is_int($tranWorkFlowID) || ctype_digit($tranWorkFlowID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranWorkFlowID, true), gettype($tranWorkFlowID)), __LINE__);
        }
        $this->TranWorkFlowID = $tranWorkFlowID;
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
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
     * @return \StructType\TranWorkFlowLevel
     */
    public function setTranWorkFlowLevelApprovers(\ArrayType\ArrayOfTranWorkFlowLevelApprover $tranWorkFlowLevelApprovers = null)
    {
        $this->TranWorkFlowLevelApprovers = $tranWorkFlowLevelApprovers;
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
     * @return \StructType\TranWorkFlowLevel
     */
    public function setTranWorkflow(\StructType\TranWorkflow $tranWorkflow = null)
    {
        $this->TranWorkflow = $tranWorkflow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TranWorkFlowLevel
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
