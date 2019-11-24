<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionApprovalLog StructType
 * @subpackage Structs
 */
class TransactionApprovalLog extends AbstractStructBase
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
     * The TranWorkflowID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TranWorkflowID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TransactionID;
    /**
     * The BatchID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $BatchID;
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
     * The ActionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ActionDate;
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
     * The DeclineComment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeclineComment;
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Transaction
     */
    public $Transaction;
    /**
     * The TranWorkflow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TranWorkflow
     */
    public $TranWorkflow;
    /**
     * Constructor method for TransactionApprovalLog
     * @uses TransactionApprovalLog::setID()
     * @uses TransactionApprovalLog::setTranWorkflowID()
     * @uses TransactionApprovalLog::setTransactionID()
     * @uses TransactionApprovalLog::setBatchID()
     * @uses TransactionApprovalLog::setApproverUserID()
     * @uses TransactionApprovalLog::setActionDate()
     * @uses TransactionApprovalLog::setWorkFlowAction()
     * @uses TransactionApprovalLog::setDeclineComment()
     * @uses TransactionApprovalLog::setTransaction()
     * @uses TransactionApprovalLog::setTranWorkflow()
     * @param int $iD
     * @param int $tranWorkflowID
     * @param int $transactionID
     * @param int $batchID
     * @param int $approverUserID
     * @param string $actionDate
     * @param int $workFlowAction
     * @param string $declineComment
     * @param \StructType\Transaction $transaction
     * @param \StructType\TranWorkflow $tranWorkflow
     */
    public function __construct($iD = null, $tranWorkflowID = null, $transactionID = null, $batchID = null, $approverUserID = null, $actionDate = null, $workFlowAction = null, $declineComment = null, \StructType\Transaction $transaction = null, \StructType\TranWorkflow $tranWorkflow = null)
    {
        $this
            ->setID($iD)
            ->setTranWorkflowID($tranWorkflowID)
            ->setTransactionID($transactionID)
            ->setBatchID($batchID)
            ->setApproverUserID($approverUserID)
            ->setActionDate($actionDate)
            ->setWorkFlowAction($workFlowAction)
            ->setDeclineComment($declineComment)
            ->setTransaction($transaction)
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
     * @return \StructType\TransactionApprovalLog
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
     * Get TranWorkflowID value
     * @return int
     */
    public function getTranWorkflowID()
    {
        return $this->TranWorkflowID;
    }
    /**
     * Set TranWorkflowID value
     * @param int $tranWorkflowID
     * @return \StructType\TransactionApprovalLog
     */
    public function setTranWorkflowID($tranWorkflowID = null)
    {
        // validation for constraint: int
        if (!is_null($tranWorkflowID) && !(is_int($tranWorkflowID) || ctype_digit($tranWorkflowID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tranWorkflowID, true), gettype($tranWorkflowID)), __LINE__);
        }
        $this->TranWorkflowID = $tranWorkflowID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return int
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param int $transactionID
     * @return \StructType\TransactionApprovalLog
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: int
        if (!is_null($transactionID) && !(is_int($transactionID) || ctype_digit($transactionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get BatchID value
     * @return int
     */
    public function getBatchID()
    {
        return $this->BatchID;
    }
    /**
     * Set BatchID value
     * @param int $batchID
     * @return \StructType\TransactionApprovalLog
     */
    public function setBatchID($batchID = null)
    {
        // validation for constraint: int
        if (!is_null($batchID) && !(is_int($batchID) || ctype_digit($batchID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($batchID, true), gettype($batchID)), __LINE__);
        }
        $this->BatchID = $batchID;
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
     * @return \StructType\TransactionApprovalLog
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
     * Get ActionDate value
     * @return string
     */
    public function getActionDate()
    {
        return $this->ActionDate;
    }
    /**
     * Set ActionDate value
     * @param string $actionDate
     * @return \StructType\TransactionApprovalLog
     */
    public function setActionDate($actionDate = null)
    {
        // validation for constraint: string
        if (!is_null($actionDate) && !is_string($actionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionDate, true), gettype($actionDate)), __LINE__);
        }
        $this->ActionDate = $actionDate;
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
     * @return \StructType\TransactionApprovalLog
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
     * @return \StructType\TransactionApprovalLog
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
     * Get Transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\TransactionApprovalLog
     */
    public function setTransaction(\StructType\Transaction $transaction = null)
    {
        $this->Transaction = $transaction;
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
     * @return \StructType\TransactionApprovalLog
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
     * @return \StructType\TransactionApprovalLog
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
