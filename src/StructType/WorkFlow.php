<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkFlow StructType
 * @subpackage Structs
 */
class WorkFlow extends AbstractStructBase
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
     * The WorkFlowTypeID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $WorkFlowTypeID;
    /**
     * The ActionType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ActionType;
    /**
     * The NoOfLevels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $NoOfLevels;
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
     * The WorkFlowTitle
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WorkFlowTitle;
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
     * The WorkflowConfigs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkflowConfig
     */
    public $WorkflowConfigs;
    /**
     * The WorkFlowTransactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkFlowTransaction
     */
    public $WorkFlowTransactions;
    /**
     * The Organisation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Organisation
     */
    public $Organisation;
    /**
     * The WorkFlowType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\WorkFlowType
     */
    public $WorkFlowType;
    /**
     * Constructor method for WorkFlow
     * @uses WorkFlow::setID()
     * @uses WorkFlow::setOrgID()
     * @uses WorkFlow::setWorkFlowTypeID()
     * @uses WorkFlow::setActionType()
     * @uses WorkFlow::setNoOfLevels()
     * @uses WorkFlow::setStatus()
     * @uses WorkFlow::setDateCreated()
     * @uses WorkFlow::setDateModified()
     * @uses WorkFlow::setInitiatorID()
     * @uses WorkFlow::setVerifierID()
     * @uses WorkFlow::setVerifiedDate()
     * @uses WorkFlow::setWorkFlowTitle()
     * @uses WorkFlow::setDescription()
     * @uses WorkFlow::setCreatedBy()
     * @uses WorkFlow::setModifiedBy()
     * @uses WorkFlow::setWorkflowConfigs()
     * @uses WorkFlow::setWorkFlowTransactions()
     * @uses WorkFlow::setOrganisation()
     * @uses WorkFlow::setWorkFlowType()
     * @param int $iD
     * @param int $orgID
     * @param int $workFlowTypeID
     * @param int $actionType
     * @param int $noOfLevels
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $initiatorID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param string $workFlowTitle
     * @param string $description
     * @param string $createdBy
     * @param string $modifiedBy
     * @param \ArrayType\ArrayOfWorkflowConfig $workflowConfigs
     * @param \ArrayType\ArrayOfWorkFlowTransaction $workFlowTransactions
     * @param \StructType\Organisation $organisation
     * @param \StructType\WorkFlowType $workFlowType
     */
    public function __construct($iD = null, $orgID = null, $workFlowTypeID = null, $actionType = null, $noOfLevels = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $workFlowTitle = null, $description = null, $createdBy = null, $modifiedBy = null, \ArrayType\ArrayOfWorkflowConfig $workflowConfigs = null, \ArrayType\ArrayOfWorkFlowTransaction $workFlowTransactions = null, \StructType\Organisation $organisation = null, \StructType\WorkFlowType $workFlowType = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setWorkFlowTypeID($workFlowTypeID)
            ->setActionType($actionType)
            ->setNoOfLevels($noOfLevels)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setInitiatorID($initiatorID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setWorkFlowTitle($workFlowTitle)
            ->setDescription($description)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkflowConfigs($workflowConfigs)
            ->setWorkFlowTransactions($workFlowTransactions)
            ->setOrganisation($organisation)
            ->setWorkFlowType($workFlowType);
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * Get WorkFlowTypeID value
     * @return int
     */
    public function getWorkFlowTypeID()
    {
        return $this->WorkFlowTypeID;
    }
    /**
     * Set WorkFlowTypeID value
     * @param int $workFlowTypeID
     * @return \StructType\WorkFlow
     */
    public function setWorkFlowTypeID($workFlowTypeID = null)
    {
        // validation for constraint: int
        if (!is_null($workFlowTypeID) && !(is_int($workFlowTypeID) || ctype_digit($workFlowTypeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workFlowTypeID, true), gettype($workFlowTypeID)), __LINE__);
        }
        $this->WorkFlowTypeID = $workFlowTypeID;
        return $this;
    }
    /**
     * Get ActionType value
     * @return int
     */
    public function getActionType()
    {
        return $this->ActionType;
    }
    /**
     * Set ActionType value
     * @param int $actionType
     * @return \StructType\WorkFlow
     */
    public function setActionType($actionType = null)
    {
        // validation for constraint: int
        if (!is_null($actionType) && !(is_int($actionType) || ctype_digit($actionType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($actionType, true), gettype($actionType)), __LINE__);
        }
        $this->ActionType = $actionType;
        return $this;
    }
    /**
     * Get NoOfLevels value
     * @return int
     */
    public function getNoOfLevels()
    {
        return $this->NoOfLevels;
    }
    /**
     * Set NoOfLevels value
     * @param int $noOfLevels
     * @return \StructType\WorkFlow
     */
    public function setNoOfLevels($noOfLevels = null)
    {
        // validation for constraint: int
        if (!is_null($noOfLevels) && !(is_int($noOfLevels) || ctype_digit($noOfLevels))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfLevels, true), gettype($noOfLevels)), __LINE__);
        }
        $this->NoOfLevels = $noOfLevels;
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * Get WorkFlowTitle value
     * @return string|null
     */
    public function getWorkFlowTitle()
    {
        return $this->WorkFlowTitle;
    }
    /**
     * Set WorkFlowTitle value
     * @param string $workFlowTitle
     * @return \StructType\WorkFlow
     */
    public function setWorkFlowTitle($workFlowTitle = null)
    {
        // validation for constraint: string
        if (!is_null($workFlowTitle) && !is_string($workFlowTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workFlowTitle, true), gettype($workFlowTitle)), __LINE__);
        }
        $this->WorkFlowTitle = $workFlowTitle;
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
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
     * @return \StructType\WorkFlow
     */
    public function setWorkflowConfigs(\ArrayType\ArrayOfWorkflowConfig $workflowConfigs = null)
    {
        $this->WorkflowConfigs = $workflowConfigs;
        return $this;
    }
    /**
     * Get WorkFlowTransactions value
     * @return \ArrayType\ArrayOfWorkFlowTransaction|null
     */
    public function getWorkFlowTransactions()
    {
        return $this->WorkFlowTransactions;
    }
    /**
     * Set WorkFlowTransactions value
     * @param \ArrayType\ArrayOfWorkFlowTransaction $workFlowTransactions
     * @return \StructType\WorkFlow
     */
    public function setWorkFlowTransactions(\ArrayType\ArrayOfWorkFlowTransaction $workFlowTransactions = null)
    {
        $this->WorkFlowTransactions = $workFlowTransactions;
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
     * @return \StructType\WorkFlow
     */
    public function setOrganisation(\StructType\Organisation $organisation = null)
    {
        $this->Organisation = $organisation;
        return $this;
    }
    /**
     * Get WorkFlowType value
     * @return \StructType\WorkFlowType|null
     */
    public function getWorkFlowType()
    {
        return $this->WorkFlowType;
    }
    /**
     * Set WorkFlowType value
     * @param \StructType\WorkFlowType $workFlowType
     * @return \StructType\WorkFlow
     */
    public function setWorkFlowType(\StructType\WorkFlowType $workFlowType = null)
    {
        $this->WorkFlowType = $workFlowType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkFlow
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
