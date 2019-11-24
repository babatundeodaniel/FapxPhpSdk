<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgChannelCharge StructType
 * @subpackage Structs
 */
class OrgChannelCharge extends AbstractStructBase
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
     * The TransactionMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TransactionMode;
    /**
     * The C24Charge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $C24Charge;
    /**
     * The NEFTCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $NEFTCharge;
    /**
     * The FIPCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $FIPCharge;
    /**
     * The ETransactCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $ETransactCharge;
    /**
     * The InterSwitchCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $InterSwitchCharge;
    /**
     * The RTGSCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $RTGSCharge;
    /**
     * The SwiftCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $SwiftCharge;
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
     * Constructor method for OrgChannelCharge
     * @uses OrgChannelCharge::setID()
     * @uses OrgChannelCharge::setOrgID()
     * @uses OrgChannelCharge::setTransactionMode()
     * @uses OrgChannelCharge::setC24Charge()
     * @uses OrgChannelCharge::setNEFTCharge()
     * @uses OrgChannelCharge::setFIPCharge()
     * @uses OrgChannelCharge::setETransactCharge()
     * @uses OrgChannelCharge::setInterSwitchCharge()
     * @uses OrgChannelCharge::setRTGSCharge()
     * @uses OrgChannelCharge::setSwiftCharge()
     * @uses OrgChannelCharge::setStatus()
     * @uses OrgChannelCharge::setDateCreated()
     * @uses OrgChannelCharge::setDateModified()
     * @uses OrgChannelCharge::setInitiatorID()
     * @uses OrgChannelCharge::setVerifierID()
     * @uses OrgChannelCharge::setVerifiedDate()
     * @uses OrgChannelCharge::setMoveNext()
     * @uses OrgChannelCharge::setNextApproverUserID()
     * @uses OrgChannelCharge::setNextApproverRoleID()
     * @uses OrgChannelCharge::setWorkFlowTransactionID()
     * @uses OrgChannelCharge::setCreatedBy()
     * @uses OrgChannelCharge::setModifiedBy()
     * @uses OrgChannelCharge::setWorkFlowTransactionIDs()
     * @uses OrgChannelCharge::setOrganisation()
     * @param int $iD
     * @param int $orgID
     * @param int $transactionMode
     * @param float $c24Charge
     * @param float $nEFTCharge
     * @param float $fIPCharge
     * @param float $eTransactCharge
     * @param float $interSwitchCharge
     * @param float $rTGSCharge
     * @param float $swiftCharge
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
    public function __construct($iD = null, $orgID = null, $transactionMode = null, $c24Charge = null, $nEFTCharge = null, $fIPCharge = null, $eTransactCharge = null, $interSwitchCharge = null, $rTGSCharge = null, $swiftCharge = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \StructType\Organisation $organisation = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setTransactionMode($transactionMode)
            ->setC24Charge($c24Charge)
            ->setNEFTCharge($nEFTCharge)
            ->setFIPCharge($fIPCharge)
            ->setETransactCharge($eTransactCharge)
            ->setInterSwitchCharge($interSwitchCharge)
            ->setRTGSCharge($rTGSCharge)
            ->setSwiftCharge($swiftCharge)
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * Get TransactionMode value
     * @return int
     */
    public function getTransactionMode()
    {
        return $this->TransactionMode;
    }
    /**
     * Set TransactionMode value
     * @param int $transactionMode
     * @return \StructType\OrgChannelCharge
     */
    public function setTransactionMode($transactionMode = null)
    {
        // validation for constraint: int
        if (!is_null($transactionMode) && !(is_int($transactionMode) || ctype_digit($transactionMode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionMode, true), gettype($transactionMode)), __LINE__);
        }
        $this->TransactionMode = $transactionMode;
        return $this;
    }
    /**
     * Get C24Charge value
     * @return float
     */
    public function getC24Charge()
    {
        return $this->C24Charge;
    }
    /**
     * Set C24Charge value
     * @param float $c24Charge
     * @return \StructType\OrgChannelCharge
     */
    public function setC24Charge($c24Charge = null)
    {
        // validation for constraint: float
        if (!is_null($c24Charge) && !(is_float($c24Charge) || is_numeric($c24Charge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($c24Charge, true), gettype($c24Charge)), __LINE__);
        }
        $this->C24Charge = $c24Charge;
        return $this;
    }
    /**
     * Get NEFTCharge value
     * @return float
     */
    public function getNEFTCharge()
    {
        return $this->NEFTCharge;
    }
    /**
     * Set NEFTCharge value
     * @param float $nEFTCharge
     * @return \StructType\OrgChannelCharge
     */
    public function setNEFTCharge($nEFTCharge = null)
    {
        // validation for constraint: float
        if (!is_null($nEFTCharge) && !(is_float($nEFTCharge) || is_numeric($nEFTCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nEFTCharge, true), gettype($nEFTCharge)), __LINE__);
        }
        $this->NEFTCharge = $nEFTCharge;
        return $this;
    }
    /**
     * Get FIPCharge value
     * @return float
     */
    public function getFIPCharge()
    {
        return $this->FIPCharge;
    }
    /**
     * Set FIPCharge value
     * @param float $fIPCharge
     * @return \StructType\OrgChannelCharge
     */
    public function setFIPCharge($fIPCharge = null)
    {
        // validation for constraint: float
        if (!is_null($fIPCharge) && !(is_float($fIPCharge) || is_numeric($fIPCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fIPCharge, true), gettype($fIPCharge)), __LINE__);
        }
        $this->FIPCharge = $fIPCharge;
        return $this;
    }
    /**
     * Get ETransactCharge value
     * @return float
     */
    public function getETransactCharge()
    {
        return $this->ETransactCharge;
    }
    /**
     * Set ETransactCharge value
     * @param float $eTransactCharge
     * @return \StructType\OrgChannelCharge
     */
    public function setETransactCharge($eTransactCharge = null)
    {
        // validation for constraint: float
        if (!is_null($eTransactCharge) && !(is_float($eTransactCharge) || is_numeric($eTransactCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($eTransactCharge, true), gettype($eTransactCharge)), __LINE__);
        }
        $this->ETransactCharge = $eTransactCharge;
        return $this;
    }
    /**
     * Get InterSwitchCharge value
     * @return float
     */
    public function getInterSwitchCharge()
    {
        return $this->InterSwitchCharge;
    }
    /**
     * Set InterSwitchCharge value
     * @param float $interSwitchCharge
     * @return \StructType\OrgChannelCharge
     */
    public function setInterSwitchCharge($interSwitchCharge = null)
    {
        // validation for constraint: float
        if (!is_null($interSwitchCharge) && !(is_float($interSwitchCharge) || is_numeric($interSwitchCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($interSwitchCharge, true), gettype($interSwitchCharge)), __LINE__);
        }
        $this->InterSwitchCharge = $interSwitchCharge;
        return $this;
    }
    /**
     * Get RTGSCharge value
     * @return float
     */
    public function getRTGSCharge()
    {
        return $this->RTGSCharge;
    }
    /**
     * Set RTGSCharge value
     * @param float $rTGSCharge
     * @return \StructType\OrgChannelCharge
     */
    public function setRTGSCharge($rTGSCharge = null)
    {
        // validation for constraint: float
        if (!is_null($rTGSCharge) && !(is_float($rTGSCharge) || is_numeric($rTGSCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rTGSCharge, true), gettype($rTGSCharge)), __LINE__);
        }
        $this->RTGSCharge = $rTGSCharge;
        return $this;
    }
    /**
     * Get SwiftCharge value
     * @return float
     */
    public function getSwiftCharge()
    {
        return $this->SwiftCharge;
    }
    /**
     * Set SwiftCharge value
     * @param float $swiftCharge
     * @return \StructType\OrgChannelCharge
     */
    public function setSwiftCharge($swiftCharge = null)
    {
        // validation for constraint: float
        if (!is_null($swiftCharge) && !(is_float($swiftCharge) || is_numeric($swiftCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($swiftCharge, true), gettype($swiftCharge)), __LINE__);
        }
        $this->SwiftCharge = $swiftCharge;
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
     * @return \StructType\OrgChannelCharge
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
