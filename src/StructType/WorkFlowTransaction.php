<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkFlowTransaction StructType
 * @subpackage Structs
 */
class WorkFlowTransaction extends AbstractStructBase
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
     * The InitiatorUserID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $InitiatorUserID;
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
     * The WorkFlowStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $WorkFlowStatus;
    /**
     * The ObjectID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ObjectID;
    /**
     * The NextReminderDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $NextReminderDate;
    /**
     * The FinalApproval
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $FinalApproval;
    /**
     * The HasPendingItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $HasPendingItems;
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
     * The Object
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Object;
    /**
     * The DeclineComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeclineComment;
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
     * The WorkFlowTransactionLogs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkFlowTransactionLog
     */
    public $WorkFlowTransactionLogs;
    /**
     * The WorkFlow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\WorkFlow
     */
    public $WorkFlow;
    /**
     * Constructor method for WorkFlowTransaction
     * @uses WorkFlowTransaction::setID()
     * @uses WorkFlowTransaction::setInitiatorUserID()
     * @uses WorkFlowTransaction::setWorkFlowID()
     * @uses WorkFlowTransaction::setNextApproverUserID()
     * @uses WorkFlowTransaction::setNextApproverRoleID()
     * @uses WorkFlowTransaction::setWorkFlowStatus()
     * @uses WorkFlowTransaction::setObjectID()
     * @uses WorkFlowTransaction::setNextReminderDate()
     * @uses WorkFlowTransaction::setFinalApproval()
     * @uses WorkFlowTransaction::setHasPendingItems()
     * @uses WorkFlowTransaction::setStatus()
     * @uses WorkFlowTransaction::setDateCreated()
     * @uses WorkFlowTransaction::setDateModified()
     * @uses WorkFlowTransaction::setObject()
     * @uses WorkFlowTransaction::setDeclineComment()
     * @uses WorkFlowTransaction::setCreatedBy()
     * @uses WorkFlowTransaction::setModifiedBy()
     * @uses WorkFlowTransaction::setWorkFlowTransactionLogs()
     * @uses WorkFlowTransaction::setWorkFlow()
     * @param int $iD
     * @param int $initiatorUserID
     * @param int $workFlowID
     * @param int $nextApproverUserID
     * @param int $nextApproverRoleID
     * @param int $workFlowStatus
     * @param int $objectID
     * @param string $nextReminderDate
     * @param bool $finalApproval
     * @param bool $hasPendingItems
     * @param int $status
     * @param string $dateCreated
     * @param string $dateModified
     * @param string $object
     * @param string $declineComment
     * @param string $createdBy
     * @param string $modifiedBy
     * @param \ArrayType\ArrayOfWorkFlowTransactionLog $workFlowTransactionLogs
     * @param \StructType\WorkFlow $workFlow
     */
    public function __construct($iD = null, $initiatorUserID = null, $workFlowID = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowStatus = null, $objectID = null, $nextReminderDate = null, $finalApproval = null, $hasPendingItems = null, $status = null, $dateCreated = null, $dateModified = null, $object = null, $declineComment = null, $createdBy = null, $modifiedBy = null, \ArrayType\ArrayOfWorkFlowTransactionLog $workFlowTransactionLogs = null, \StructType\WorkFlow $workFlow = null)
    {
        $this
            ->setID($iD)
            ->setInitiatorUserID($initiatorUserID)
            ->setWorkFlowID($workFlowID)
            ->setNextApproverUserID($nextApproverUserID)
            ->setNextApproverRoleID($nextApproverRoleID)
            ->setWorkFlowStatus($workFlowStatus)
            ->setObjectID($objectID)
            ->setNextReminderDate($nextReminderDate)
            ->setFinalApproval($finalApproval)
            ->setHasPendingItems($hasPendingItems)
            ->setStatus($status)
            ->setDateCreated($dateCreated)
            ->setDateModified($dateModified)
            ->setObject($object)
            ->setDeclineComment($declineComment)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionLogs($workFlowTransactionLogs)
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
     * @return \StructType\WorkFlowTransaction
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
     * Get InitiatorUserID value
     * @return int
     */
    public function getInitiatorUserID()
    {
        return $this->InitiatorUserID;
    }
    /**
     * Set InitiatorUserID value
     * @param int $initiatorUserID
     * @return \StructType\WorkFlowTransaction
     */
    public function setInitiatorUserID($initiatorUserID = null)
    {
        // validation for constraint: int
        if (!is_null($initiatorUserID) && !(is_int($initiatorUserID) || ctype_digit($initiatorUserID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($initiatorUserID, true), gettype($initiatorUserID)), __LINE__);
        }
        $this->InitiatorUserID = $initiatorUserID;
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
     * @return \StructType\WorkFlowTransaction
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
     * @return \StructType\WorkFlowTransaction
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
     * @return \StructType\WorkFlowTransaction
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
     * Get WorkFlowStatus value
     * @return int
     */
    public function getWorkFlowStatus()
    {
        return $this->WorkFlowStatus;
    }
    /**
     * Set WorkFlowStatus value
     * @param int $workFlowStatus
     * @return \StructType\WorkFlowTransaction
     */
    public function setWorkFlowStatus($workFlowStatus = null)
    {
        // validation for constraint: int
        if (!is_null($workFlowStatus) && !(is_int($workFlowStatus) || ctype_digit($workFlowStatus))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workFlowStatus, true), gettype($workFlowStatus)), __LINE__);
        }
        $this->WorkFlowStatus = $workFlowStatus;
        return $this;
    }
    /**
     * Get ObjectID value
     * @return int
     */
    public function getObjectID()
    {
        return $this->ObjectID;
    }
    /**
     * Set ObjectID value
     * @param int $objectID
     * @return \StructType\WorkFlowTransaction
     */
    public function setObjectID($objectID = null)
    {
        // validation for constraint: int
        if (!is_null($objectID) && !(is_int($objectID) || ctype_digit($objectID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($objectID, true), gettype($objectID)), __LINE__);
        }
        $this->ObjectID = $objectID;
        return $this;
    }
    /**
     * Get NextReminderDate value
     * @return string
     */
    public function getNextReminderDate()
    {
        return $this->NextReminderDate;
    }
    /**
     * Set NextReminderDate value
     * @param string $nextReminderDate
     * @return \StructType\WorkFlowTransaction
     */
    public function setNextReminderDate($nextReminderDate = null)
    {
        // validation for constraint: string
        if (!is_null($nextReminderDate) && !is_string($nextReminderDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextReminderDate, true), gettype($nextReminderDate)), __LINE__);
        }
        $this->NextReminderDate = $nextReminderDate;
        return $this;
    }
    /**
     * Get FinalApproval value
     * @return bool
     */
    public function getFinalApproval()
    {
        return $this->FinalApproval;
    }
    /**
     * Set FinalApproval value
     * @param bool $finalApproval
     * @return \StructType\WorkFlowTransaction
     */
    public function setFinalApproval($finalApproval = null)
    {
        // validation for constraint: boolean
        if (!is_null($finalApproval) && !is_bool($finalApproval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finalApproval, true), gettype($finalApproval)), __LINE__);
        }
        $this->FinalApproval = $finalApproval;
        return $this;
    }
    /**
     * Get HasPendingItems value
     * @return bool
     */
    public function getHasPendingItems()
    {
        return $this->HasPendingItems;
    }
    /**
     * Set HasPendingItems value
     * @param bool $hasPendingItems
     * @return \StructType\WorkFlowTransaction
     */
    public function setHasPendingItems($hasPendingItems = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasPendingItems) && !is_bool($hasPendingItems)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasPendingItems, true), gettype($hasPendingItems)), __LINE__);
        }
        $this->HasPendingItems = $hasPendingItems;
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
     * @return \StructType\WorkFlowTransaction
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
     * @return \StructType\WorkFlowTransaction
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
     * @return \StructType\WorkFlowTransaction
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
     * Get Object value
     * @return string|null
     */
    public function getObject()
    {
        return $this->Object;
    }
    /**
     * Set Object value
     * @param string $object
     * @return \StructType\WorkFlowTransaction
     */
    public function setObject($object = null)
    {
        // validation for constraint: string
        if (!is_null($object) && !is_string($object)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($object, true), gettype($object)), __LINE__);
        }
        $this->Object = $object;
        return $this;
    }
    /**
     * Get DeclineComment value
     * @return string|null
     */
    public function getDeclineComment()
    {
        return $this->DeclineComment;
    }
    /**
     * Set DeclineComment value
     * @param string $declineComment
     * @return \StructType\WorkFlowTransaction
     */
    public function setDeclineComment($declineComment = null)
    {
        // validation for constraint: string
        if (!is_null($declineComment) && !is_string($declineComment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($declineComment, true), gettype($declineComment)), __LINE__);
        }
        $this->DeclineComment = $declineComment;
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
     * @return \StructType\WorkFlowTransaction
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
     * @return \StructType\WorkFlowTransaction
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
     * @return \StructType\WorkFlowTransaction
     */
    public function setWorkFlowTransactionLogs(\ArrayType\ArrayOfWorkFlowTransactionLog $workFlowTransactionLogs = null)
    {
        $this->WorkFlowTransactionLogs = $workFlowTransactionLogs;
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
     * @return \StructType\WorkFlowTransaction
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
     * @return \StructType\WorkFlowTransaction
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
