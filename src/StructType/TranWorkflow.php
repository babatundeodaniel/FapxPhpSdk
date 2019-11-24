<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TranWorkflow StructType
 * @subpackage Structs
 */
class TranWorkflow extends AbstractStructBase
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
     * The TransactionApprovalLogs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransactionApprovalLog
     */
    public $TransactionApprovalLogs;
    /**
     * The Transactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction
     */
    public $Transactions;
    /**
     * The TranWorkFlowLevels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTranWorkFlowLevel
     */
    public $TranWorkFlowLevels;
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
     * Constructor method for TranWorkflow
     * @uses TranWorkflow::setID()
     * @uses TranWorkflow::setOrgID()
     * @uses TranWorkflow::setWorkFlowTypeID()
     * @uses TranWorkflow::setActionType()
     * @uses TranWorkflow::setNoOfLevels()
     * @uses TranWorkflow::setMinApprovalLimit()
     * @uses TranWorkflow::setMaxApprovalLimit()
     * @uses TranWorkflow::setMinBatchApprovalLimit()
     * @uses TranWorkflow::setMaxBatchApprovalLimit()
     * @uses TranWorkflow::setStatus()
     * @uses TranWorkflow::setDateCreated()
     * @uses TranWorkflow::setDateModified()
     * @uses TranWorkflow::setInitiatorID()
     * @uses TranWorkflow::setVerifierID()
     * @uses TranWorkflow::setVerifiedDate()
     * @uses TranWorkflow::setWorkFlowTitle()
     * @uses TranWorkflow::setDescription()
     * @uses TranWorkflow::setCreatedBy()
     * @uses TranWorkflow::setModifiedBy()
     * @uses TranWorkflow::setTransactionApprovalLogs()
     * @uses TranWorkflow::setTransactions()
     * @uses TranWorkflow::setTranWorkFlowLevels()
     * @uses TranWorkflow::setOrganisation()
     * @uses TranWorkflow::setWorkFlowType()
     * @param int $iD
     * @param int $orgID
     * @param int $workFlowTypeID
     * @param int $actionType
     * @param int $noOfLevels
     * @param float $minApprovalLimit
     * @param float $maxApprovalLimit
     * @param float $minBatchApprovalLimit
     * @param float $maxBatchApprovalLimit
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
     * @param \ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs
     * @param \ArrayType\ArrayOfTransaction $transactions
     * @param \ArrayType\ArrayOfTranWorkFlowLevel $tranWorkFlowLevels
     * @param \StructType\Organisation $organisation
     * @param \StructType\WorkFlowType $workFlowType
     */
    public function __construct($iD = null, $orgID = null, $workFlowTypeID = null, $actionType = null, $noOfLevels = null, $minApprovalLimit = null, $maxApprovalLimit = null, $minBatchApprovalLimit = null, $maxBatchApprovalLimit = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $workFlowTitle = null, $description = null, $createdBy = null, $modifiedBy = null, \ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs = null, \ArrayType\ArrayOfTransaction $transactions = null, \ArrayType\ArrayOfTranWorkFlowLevel $tranWorkFlowLevels = null, \StructType\Organisation $organisation = null, \StructType\WorkFlowType $workFlowType = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setWorkFlowTypeID($workFlowTypeID)
            ->setActionType($actionType)
            ->setNoOfLevels($noOfLevels)
            ->setMinApprovalLimit($minApprovalLimit)
            ->setMaxApprovalLimit($maxApprovalLimit)
            ->setMinBatchApprovalLimit($minBatchApprovalLimit)
            ->setMaxBatchApprovalLimit($maxBatchApprovalLimit)
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
            ->setTransactionApprovalLogs($transactionApprovalLogs)
            ->setTransactions($transactions)
            ->setTranWorkFlowLevels($tranWorkFlowLevels)
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * Get TransactionApprovalLogs value
     * @return \ArrayType\ArrayOfTransactionApprovalLog|null
     */
    public function getTransactionApprovalLogs()
    {
        return $this->TransactionApprovalLogs;
    }
    /**
     * Set TransactionApprovalLogs value
     * @param \ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs
     * @return \StructType\TranWorkflow
     */
    public function setTransactionApprovalLogs(\ArrayType\ArrayOfTransactionApprovalLog $transactionApprovalLogs = null)
    {
        $this->TransactionApprovalLogs = $transactionApprovalLogs;
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
     * @return \StructType\TranWorkflow
     */
    public function setTransactions(\ArrayType\ArrayOfTransaction $transactions = null)
    {
        $this->Transactions = $transactions;
        return $this;
    }
    /**
     * Get TranWorkFlowLevels value
     * @return \ArrayType\ArrayOfTranWorkFlowLevel|null
     */
    public function getTranWorkFlowLevels()
    {
        return $this->TranWorkFlowLevels;
    }
    /**
     * Set TranWorkFlowLevels value
     * @param \ArrayType\ArrayOfTranWorkFlowLevel $tranWorkFlowLevels
     * @return \StructType\TranWorkflow
     */
    public function setTranWorkFlowLevels(\ArrayType\ArrayOfTranWorkFlowLevel $tranWorkFlowLevels = null)
    {
        $this->TranWorkFlowLevels = $tranWorkFlowLevels;
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
     * @return \StructType\TranWorkflow
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
