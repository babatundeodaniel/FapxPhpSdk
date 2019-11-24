<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkFlowTransactionLog StructType
 * @subpackage Structs
 */
class WorkFlowTransactionLog extends AbstractStructBase
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
     * The WorkFlowTransactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $WorkFlowTransactionID;
    /**
     * The ApproverUserID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ApproverUserID;
    /**
     * The TransactionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $TransactionDate;
    /**
     * The WorkFlowAction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $WorkFlowAction;
    /**
     * The NoOfItems
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $NoOfItems;
    /**
     * The DeclineComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeclineComment;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\User
     */
    public $User;
    /**
     * The WorkFlowTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\WorkFlowTransaction
     */
    public $WorkFlowTransaction;
    /**
     * Constructor method for WorkFlowTransactionLog
     * @uses WorkFlowTransactionLog::setID()
     * @uses WorkFlowTransactionLog::setWorkFlowTransactionID()
     * @uses WorkFlowTransactionLog::setApproverUserID()
     * @uses WorkFlowTransactionLog::setTransactionDate()
     * @uses WorkFlowTransactionLog::setWorkFlowAction()
     * @uses WorkFlowTransactionLog::setNoOfItems()
     * @uses WorkFlowTransactionLog::setDeclineComment()
     * @uses WorkFlowTransactionLog::setUser()
     * @uses WorkFlowTransactionLog::setWorkFlowTransaction()
     * @param int $iD
     * @param int $workFlowTransactionID
     * @param int $approverUserID
     * @param string $transactionDate
     * @param int $workFlowAction
     * @param int $noOfItems
     * @param string $declineComment
     * @param \StructType\User $user
     * @param \StructType\WorkFlowTransaction $workFlowTransaction
     */
    public function __construct($iD = null, $workFlowTransactionID = null, $approverUserID = null, $transactionDate = null, $workFlowAction = null, $noOfItems = null, $declineComment = null, \StructType\User $user = null, \StructType\WorkFlowTransaction $workFlowTransaction = null)
    {
        $this
            ->setID($iD)
            ->setWorkFlowTransactionID($workFlowTransactionID)
            ->setApproverUserID($approverUserID)
            ->setTransactionDate($transactionDate)
            ->setWorkFlowAction($workFlowAction)
            ->setNoOfItems($noOfItems)
            ->setDeclineComment($declineComment)
            ->setUser($user)
            ->setWorkFlowTransaction($workFlowTransaction);
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
     * @return \StructType\WorkFlowTransactionLog
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
     * @return \StructType\WorkFlowTransactionLog
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
     * Get ApproverUserID value
     * @return int
     */
    public function getApproverUserID()
    {
        return $this->ApproverUserID;
    }
    /**
     * Set ApproverUserID value
     * @param int $approverUserID
     * @return \StructType\WorkFlowTransactionLog
     */
    public function setApproverUserID($approverUserID = null)
    {
        // validation for constraint: int
        if (!is_null($approverUserID) && !(is_int($approverUserID) || ctype_digit($approverUserID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($approverUserID, true), gettype($approverUserID)), __LINE__);
        }
        $this->ApproverUserID = $approverUserID;
        return $this;
    }
    /**
     * Get TransactionDate value
     * @return string
     */
    public function getTransactionDate()
    {
        return $this->TransactionDate;
    }
    /**
     * Set TransactionDate value
     * @param string $transactionDate
     * @return \StructType\WorkFlowTransactionLog
     */
    public function setTransactionDate($transactionDate = null)
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->TransactionDate = $transactionDate;
        return $this;
    }
    /**
     * Get WorkFlowAction value
     * @return int
     */
    public function getWorkFlowAction()
    {
        return $this->WorkFlowAction;
    }
    /**
     * Set WorkFlowAction value
     * @param int $workFlowAction
     * @return \StructType\WorkFlowTransactionLog
     */
    public function setWorkFlowAction($workFlowAction = null)
    {
        // validation for constraint: int
        if (!is_null($workFlowAction) && !(is_int($workFlowAction) || ctype_digit($workFlowAction))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workFlowAction, true), gettype($workFlowAction)), __LINE__);
        }
        $this->WorkFlowAction = $workFlowAction;
        return $this;
    }
    /**
     * Get NoOfItems value
     * @return int
     */
    public function getNoOfItems()
    {
        return $this->NoOfItems;
    }
    /**
     * Set NoOfItems value
     * @param int $noOfItems
     * @return \StructType\WorkFlowTransactionLog
     */
    public function setNoOfItems($noOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($noOfItems) && !(is_int($noOfItems) || ctype_digit($noOfItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfItems, true), gettype($noOfItems)), __LINE__);
        }
        $this->NoOfItems = $noOfItems;
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
     * @return \StructType\WorkFlowTransactionLog
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
     * @return \StructType\WorkFlowTransactionLog
     */
    public function setUser(\StructType\User $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Get WorkFlowTransaction value
     * @return \StructType\WorkFlowTransaction|null
     */
    public function getWorkFlowTransaction()
    {
        return $this->WorkFlowTransaction;
    }
    /**
     * Set WorkFlowTransaction value
     * @param \StructType\WorkFlowTransaction $workFlowTransaction
     * @return \StructType\WorkFlowTransactionLog
     */
    public function setWorkFlowTransaction(\StructType\WorkFlowTransaction $workFlowTransaction = null)
    {
        $this->WorkFlowTransaction = $workFlowTransaction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\WorkFlowTransactionLog
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
