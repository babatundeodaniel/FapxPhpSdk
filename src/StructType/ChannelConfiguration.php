<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChannelConfiguration StructType
 * @subpackage Structs
 */
class ChannelConfiguration extends AbstractStructBase
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
     * The IsActive
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsActive;
    /**
     * The IntraBankPreferredChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $IntraBankPreferredChannel;
    /**
     * The InterBankPreferredChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $InterBankPreferredChannel;
    /**
     * The Above50MillionPreferredChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Above50MillionPreferredChannel;
    /**
     * The IntraBankFailOverChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $IntraBankFailOverChannel;
    /**
     * The InterBankFailOverChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $InterBankFailOverChannel;
    /**
     * The Above50MillionFailOverChannel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $Above50MillionFailOverChannel;
    /**
     * The NoOfTrials
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $NoOfTrials;
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
     * Constructor method for ChannelConfiguration
     * @uses ChannelConfiguration::setID()
     * @uses ChannelConfiguration::setOrgID()
     * @uses ChannelConfiguration::setIsActive()
     * @uses ChannelConfiguration::setIntraBankPreferredChannel()
     * @uses ChannelConfiguration::setInterBankPreferredChannel()
     * @uses ChannelConfiguration::setAbove50MillionPreferredChannel()
     * @uses ChannelConfiguration::setIntraBankFailOverChannel()
     * @uses ChannelConfiguration::setInterBankFailOverChannel()
     * @uses ChannelConfiguration::setAbove50MillionFailOverChannel()
     * @uses ChannelConfiguration::setNoOfTrials()
     * @uses ChannelConfiguration::setStatus()
     * @uses ChannelConfiguration::setDateCreated()
     * @uses ChannelConfiguration::setDateModified()
     * @uses ChannelConfiguration::setInitiatorID()
     * @uses ChannelConfiguration::setVerifierID()
     * @uses ChannelConfiguration::setVerifiedDate()
     * @uses ChannelConfiguration::setMoveNext()
     * @uses ChannelConfiguration::setNextApproverUserID()
     * @uses ChannelConfiguration::setNextApproverRoleID()
     * @uses ChannelConfiguration::setWorkFlowTransactionID()
     * @uses ChannelConfiguration::setCreatedBy()
     * @uses ChannelConfiguration::setModifiedBy()
     * @uses ChannelConfiguration::setWorkFlowTransactionIDs()
     * @uses ChannelConfiguration::setOrganisation()
     * @param int $iD
     * @param int $orgID
     * @param bool $isActive
     * @param int $intraBankPreferredChannel
     * @param int $interBankPreferredChannel
     * @param int $above50MillionPreferredChannel
     * @param int $intraBankFailOverChannel
     * @param int $interBankFailOverChannel
     * @param int $above50MillionFailOverChannel
     * @param int $noOfTrials
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
     */
    public function __construct($iD = null, $orgID = null, $isActive = null, $intraBankPreferredChannel = null, $interBankPreferredChannel = null, $above50MillionPreferredChannel = null, $intraBankFailOverChannel = null, $interBankFailOverChannel = null, $above50MillionFailOverChannel = null, $noOfTrials = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \StructType\Organisation $organisation = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setIsActive($isActive)
            ->setIntraBankPreferredChannel($intraBankPreferredChannel)
            ->setInterBankPreferredChannel($interBankPreferredChannel)
            ->setAbove50MillionPreferredChannel($above50MillionPreferredChannel)
            ->setIntraBankFailOverChannel($intraBankFailOverChannel)
            ->setInterBankFailOverChannel($interBankFailOverChannel)
            ->setAbove50MillionFailOverChannel($above50MillionFailOverChannel)
            ->setNoOfTrials($noOfTrials)
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
            ->setOrganisation($organisation);
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * Get IsActive value
     * @return bool
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }
    /**
     * Set IsActive value
     * @param bool $isActive
     * @return \StructType\ChannelConfiguration
     */
    public function setIsActive($isActive = null)
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->IsActive = $isActive;
        return $this;
    }
    /**
     * Get IntraBankPreferredChannel value
     * @return int
     */
    public function getIntraBankPreferredChannel()
    {
        return $this->IntraBankPreferredChannel;
    }
    /**
     * Set IntraBankPreferredChannel value
     * @param int $intraBankPreferredChannel
     * @return \StructType\ChannelConfiguration
     */
    public function setIntraBankPreferredChannel($intraBankPreferredChannel = null)
    {
        // validation for constraint: int
        if (!is_null($intraBankPreferredChannel) && !(is_int($intraBankPreferredChannel) || ctype_digit($intraBankPreferredChannel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intraBankPreferredChannel, true), gettype($intraBankPreferredChannel)), __LINE__);
        }
        $this->IntraBankPreferredChannel = $intraBankPreferredChannel;
        return $this;
    }
    /**
     * Get InterBankPreferredChannel value
     * @return int
     */
    public function getInterBankPreferredChannel()
    {
        return $this->InterBankPreferredChannel;
    }
    /**
     * Set InterBankPreferredChannel value
     * @param int $interBankPreferredChannel
     * @return \StructType\ChannelConfiguration
     */
    public function setInterBankPreferredChannel($interBankPreferredChannel = null)
    {
        // validation for constraint: int
        if (!is_null($interBankPreferredChannel) && !(is_int($interBankPreferredChannel) || ctype_digit($interBankPreferredChannel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($interBankPreferredChannel, true), gettype($interBankPreferredChannel)), __LINE__);
        }
        $this->InterBankPreferredChannel = $interBankPreferredChannel;
        return $this;
    }
    /**
     * Get Above50MillionPreferredChannel value
     * @return int
     */
    public function getAbove50MillionPreferredChannel()
    {
        return $this->Above50MillionPreferredChannel;
    }
    /**
     * Set Above50MillionPreferredChannel value
     * @param int $above50MillionPreferredChannel
     * @return \StructType\ChannelConfiguration
     */
    public function setAbove50MillionPreferredChannel($above50MillionPreferredChannel = null)
    {
        // validation for constraint: int
        if (!is_null($above50MillionPreferredChannel) && !(is_int($above50MillionPreferredChannel) || ctype_digit($above50MillionPreferredChannel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($above50MillionPreferredChannel, true), gettype($above50MillionPreferredChannel)), __LINE__);
        }
        $this->Above50MillionPreferredChannel = $above50MillionPreferredChannel;
        return $this;
    }
    /**
     * Get IntraBankFailOverChannel value
     * @return int
     */
    public function getIntraBankFailOverChannel()
    {
        return $this->IntraBankFailOverChannel;
    }
    /**
     * Set IntraBankFailOverChannel value
     * @param int $intraBankFailOverChannel
     * @return \StructType\ChannelConfiguration
     */
    public function setIntraBankFailOverChannel($intraBankFailOverChannel = null)
    {
        // validation for constraint: int
        if (!is_null($intraBankFailOverChannel) && !(is_int($intraBankFailOverChannel) || ctype_digit($intraBankFailOverChannel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($intraBankFailOverChannel, true), gettype($intraBankFailOverChannel)), __LINE__);
        }
        $this->IntraBankFailOverChannel = $intraBankFailOverChannel;
        return $this;
    }
    /**
     * Get InterBankFailOverChannel value
     * @return int
     */
    public function getInterBankFailOverChannel()
    {
        return $this->InterBankFailOverChannel;
    }
    /**
     * Set InterBankFailOverChannel value
     * @param int $interBankFailOverChannel
     * @return \StructType\ChannelConfiguration
     */
    public function setInterBankFailOverChannel($interBankFailOverChannel = null)
    {
        // validation for constraint: int
        if (!is_null($interBankFailOverChannel) && !(is_int($interBankFailOverChannel) || ctype_digit($interBankFailOverChannel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($interBankFailOverChannel, true), gettype($interBankFailOverChannel)), __LINE__);
        }
        $this->InterBankFailOverChannel = $interBankFailOverChannel;
        return $this;
    }
    /**
     * Get Above50MillionFailOverChannel value
     * @return int
     */
    public function getAbove50MillionFailOverChannel()
    {
        return $this->Above50MillionFailOverChannel;
    }
    /**
     * Set Above50MillionFailOverChannel value
     * @param int $above50MillionFailOverChannel
     * @return \StructType\ChannelConfiguration
     */
    public function setAbove50MillionFailOverChannel($above50MillionFailOverChannel = null)
    {
        // validation for constraint: int
        if (!is_null($above50MillionFailOverChannel) && !(is_int($above50MillionFailOverChannel) || ctype_digit($above50MillionFailOverChannel))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($above50MillionFailOverChannel, true), gettype($above50MillionFailOverChannel)), __LINE__);
        }
        $this->Above50MillionFailOverChannel = $above50MillionFailOverChannel;
        return $this;
    }
    /**
     * Get NoOfTrials value
     * @return int
     */
    public function getNoOfTrials()
    {
        return $this->NoOfTrials;
    }
    /**
     * Set NoOfTrials value
     * @param int $noOfTrials
     * @return \StructType\ChannelConfiguration
     */
    public function setNoOfTrials($noOfTrials = null)
    {
        // validation for constraint: int
        if (!is_null($noOfTrials) && !(is_int($noOfTrials) || ctype_digit($noOfTrials))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfTrials, true), gettype($noOfTrials)), __LINE__);
        }
        $this->NoOfTrials = $noOfTrials;
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
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
     * @return \StructType\ChannelConfiguration
     */
    public function setOrganisation(\StructType\Organisation $organisation = null)
    {
        $this->Organisation = $organisation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ChannelConfiguration
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
