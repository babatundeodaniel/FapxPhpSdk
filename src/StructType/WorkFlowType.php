<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkFlowType StructType
 * @subpackage Structs
 */
class WorkFlowType extends AbstractStructBase
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
     * The IsFBN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsFBN;
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
     * The EntityType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EntityType;
    /**
     * The EntityFullName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EntityFullName;
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
     * The TranWorkflows
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTranWorkflow
     */
    public $TranWorkflows;
    /**
     * The WorkFlows
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkFlow
     */
    public $WorkFlows;
    /**
     * Constructor method for WorkFlowType
     * @uses WorkFlowType::setID()
     * @uses WorkFlowType::setIsFBN()
     * @uses WorkFlowType::setStatus()
     * @uses WorkFlowType::setDateCreated()
     * @uses WorkFlowType::setDateModified()
     * @uses WorkFlowType::setInitiatorID()
     * @uses WorkFlowType::setVerifierID()
     * @uses WorkFlowType::setVerifiedDate()
     * @uses WorkFlowType::setEntityType()
     * @uses WorkFlowType::setEntityFullName()
     * @uses WorkFlowType::setDescription()
     * @uses WorkFlowType::setCreatedBy()
     * @uses WorkFlowType::setModifiedBy()
     * @uses WorkFlowType::setTranWorkflows()
     * @uses WorkFlowType::setWorkFlows()
     * @param int $iD
     * @param bool $isFBN
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param int $initiatorID
     * @param int $verifierID
     * @param string $verifiedDate
     * @param string $entityType
     * @param string $entityFullName
     * @param string $description
     * @param string $createdBy
     * @param string $modifiedBy
     * @param \ArrayType\ArrayOfTranWorkflow $tranWorkflows
     * @param \ArrayType\ArrayOfWorkFlow $workFlows
     */
    public function __construct($iD = null, $isFBN = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $entityType = null, $entityFullName = null, $description = null, $createdBy = null, $modifiedBy = null, \ArrayType\ArrayOfTranWorkflow $tranWorkflows = null, \ArrayType\ArrayOfWorkFlow $workFlows = null)
    {
        $this
            ->setID($iD)
            ->setIsFBN($isFBN)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setInitiatorID($initiatorID)
            ->setVerifierID($verifierID)
            ->setVerifiedDate($verifiedDate)
            ->setEntityType($entityType)
            ->setEntityFullName($entityFullName)
            ->setDescription($description)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setTranWorkflows($tranWorkflows)
            ->setWorkFlows($workFlows);
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
     * @return \StructType\WorkFlowType
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
     * Get IsFBN value
     * @return bool
     */
    public function getIsFBN()
    {
        return $this->IsFBN;
    }
    /**
     * Set IsFBN value
     * @param bool $isFBN
     * @return \StructType\WorkFlowType
     */
    public function setIsFBN($isFBN = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFBN) && !is_bool($isFBN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFBN, true), gettype($isFBN)), __LINE__);
        }
        $this->IsFBN = $isFBN;
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
     * @return \StructType\WorkFlowType
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
     * @return \StructType\WorkFlowType
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
     * @return \StructType\WorkFlowType
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
     * @return \StructType\WorkFlowType
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
     * @return \StructType\WorkFlowType
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
     * @return \StructType\WorkFlowType
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
     * Get EntityType value
     * @return string|null
     */
    public function getEntityType()
    {
        return $this->EntityType;
    }
    /**
     * Set EntityType value
     * @param string $entityType
     * @return \StructType\WorkFlowType
     */
    public function setEntityType($entityType = null)
    {
        // validation for constraint: string
        if (!is_null($entityType) && !is_string($entityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityType, true), gettype($entityType)), __LINE__);
        }
        $this->EntityType = $entityType;
        return $this;
    }
    /**
     * Get EntityFullName value
     * @return string|null
     */
    public function getEntityFullName()
    {
        return $this->EntityFullName;
    }
    /**
     * Set EntityFullName value
     * @param string $entityFullName
     * @return \StructType\WorkFlowType
     */
    public function setEntityFullName($entityFullName = null)
    {
        // validation for constraint: string
        if (!is_null($entityFullName) && !is_string($entityFullName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entityFullName, true), gettype($entityFullName)), __LINE__);
        }
        $this->EntityFullName = $entityFullName;
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
     * @return \StructType\WorkFlowType
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
     * @return \StructType\WorkFlowType
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
     * @return \StructType\WorkFlowType
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
     * Get TranWorkflows value
     * @return \ArrayType\ArrayOfTranWorkflow|null
     */
    public function getTranWorkflows()
    {
        return $this->TranWorkflows;
    }
    /**
     * Set TranWorkflows value
     * @param \ArrayType\ArrayOfTranWorkflow $tranWorkflows
     * @return \StructType\WorkFlowType
     */
    public function setTranWorkflows(\ArrayType\ArrayOfTranWorkflow $tranWorkflows = null)
    {
        $this->TranWorkflows = $tranWorkflows;
        return $this;
    }
    /**
     * Get WorkFlows value
     * @return \ArrayType\ArrayOfWorkFlow|null
     */
    public function getWorkFlows()
    {
        return $this->WorkFlows;
    }
    /**
     * Set WorkFlows value
     * @param \ArrayType\ArrayOfWorkFlow $workFlows
     * @return \StructType\WorkFlowType
     */
    public function setWorkFlows(\ArrayType\ArrayOfWorkFlow $workFlows = null)
    {
        $this->WorkFlows = $workFlows;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkFlowType
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
