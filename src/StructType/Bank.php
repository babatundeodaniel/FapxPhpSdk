<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bank StructType
 * @subpackage Structs
 */
class Bank extends AbstractStructBase
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
     * The BankCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BankCode;
    /**
     * The BankRouteNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BankRouteNo;
    /**
     * The BankName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BankName;
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
     * The Accounts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfAccount
     */
    public $Accounts;
    /**
     * The BankBranches
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfBankBranch
     */
    public $BankBranches;
    /**
     * The SuspenseAccounts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfSuspenseAccount
     */
    public $SuspenseAccounts;
    /**
     * The ThirdPartyAccounts
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfThirdPartyAccount
     */
    public $ThirdPartyAccounts;
    /**
     * Constructor method for Bank
     * @uses Bank::setID()
     * @uses Bank::setStatus()
     * @uses Bank::setDateCreated()
     * @uses Bank::setDateModified()
     * @uses Bank::setInitiatorID()
     * @uses Bank::setVerifierID()
     * @uses Bank::setVerifiedDate()
     * @uses Bank::setMoveNext()
     * @uses Bank::setNextApproverUserID()
     * @uses Bank::setNextApproverRoleID()
     * @uses Bank::setWorkFlowTransactionID()
     * @uses Bank::setBankCode()
     * @uses Bank::setBankRouteNo()
     * @uses Bank::setBankName()
     * @uses Bank::setCreatedBy()
     * @uses Bank::setModifiedBy()
     * @uses Bank::setWorkFlowTransactionIDs()
     * @uses Bank::setAccounts()
     * @uses Bank::setBankBranches()
     * @uses Bank::setSuspenseAccounts()
     * @uses Bank::setThirdPartyAccounts()
     * @param int $iD
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
     * @param string $bankCode
     * @param string $bankRouteNo
     * @param string $bankName
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param \ArrayType\ArrayOfAccount $accounts
     * @param \ArrayType\ArrayOfBankBranch $bankBranches
     * @param \ArrayType\ArrayOfSuspenseAccount $suspenseAccounts
     * @param \ArrayType\ArrayOfThirdPartyAccount $thirdPartyAccounts
     */
    public function __construct($iD = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $bankCode = null, $bankRouteNo = null, $bankName = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \ArrayType\ArrayOfAccount $accounts = null, \ArrayType\ArrayOfBankBranch $bankBranches = null, \ArrayType\ArrayOfSuspenseAccount $suspenseAccounts = null, \ArrayType\ArrayOfThirdPartyAccount $thirdPartyAccounts = null)
    {
        $this
            ->setID($iD)
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
            ->setBankCode($bankCode)
            ->setBankRouteNo($bankRouteNo)
            ->setBankName($bankName)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setAccounts($accounts)
            ->setBankBranches($bankBranches)
            ->setSuspenseAccounts($suspenseAccounts)
            ->setThirdPartyAccounts($thirdPartyAccounts);
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * Get BankCode value
     * @return string|null
     */
    public function getBankCode()
    {
        return $this->BankCode;
    }
    /**
     * Set BankCode value
     * @param string $bankCode
     * @return \StructType\Bank
     */
    public function setBankCode($bankCode = null)
    {
        // validation for constraint: string
        if (!is_null($bankCode) && !is_string($bankCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankCode, true), gettype($bankCode)), __LINE__);
        }
        $this->BankCode = $bankCode;
        return $this;
    }
    /**
     * Get BankRouteNo value
     * @return string|null
     */
    public function getBankRouteNo()
    {
        return $this->BankRouteNo;
    }
    /**
     * Set BankRouteNo value
     * @param string $bankRouteNo
     * @return \StructType\Bank
     */
    public function setBankRouteNo($bankRouteNo = null)
    {
        // validation for constraint: string
        if (!is_null($bankRouteNo) && !is_string($bankRouteNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankRouteNo, true), gettype($bankRouteNo)), __LINE__);
        }
        $this->BankRouteNo = $bankRouteNo;
        return $this;
    }
    /**
     * Get BankName value
     * @return string|null
     */
    public function getBankName()
    {
        return $this->BankName;
    }
    /**
     * Set BankName value
     * @param string $bankName
     * @return \StructType\Bank
     */
    public function setBankName($bankName = null)
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->BankName = $bankName;
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * @return \StructType\Bank
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
     * Get Accounts value
     * @return \ArrayType\ArrayOfAccount|null
     */
    public function getAccounts()
    {
        return $this->Accounts;
    }
    /**
     * Set Accounts value
     * @param \ArrayType\ArrayOfAccount $accounts
     * @return \StructType\Bank
     */
    public function setAccounts(\ArrayType\ArrayOfAccount $accounts = null)
    {
        $this->Accounts = $accounts;
        return $this;
    }
    /**
     * Get BankBranches value
     * @return \ArrayType\ArrayOfBankBranch|null
     */
    public function getBankBranches()
    {
        return $this->BankBranches;
    }
    /**
     * Set BankBranches value
     * @param \ArrayType\ArrayOfBankBranch $bankBranches
     * @return \StructType\Bank
     */
    public function setBankBranches(\ArrayType\ArrayOfBankBranch $bankBranches = null)
    {
        $this->BankBranches = $bankBranches;
        return $this;
    }
    /**
     * Get SuspenseAccounts value
     * @return \ArrayType\ArrayOfSuspenseAccount|null
     */
    public function getSuspenseAccounts()
    {
        return $this->SuspenseAccounts;
    }
    /**
     * Set SuspenseAccounts value
     * @param \ArrayType\ArrayOfSuspenseAccount $suspenseAccounts
     * @return \StructType\Bank
     */
    public function setSuspenseAccounts(\ArrayType\ArrayOfSuspenseAccount $suspenseAccounts = null)
    {
        $this->SuspenseAccounts = $suspenseAccounts;
        return $this;
    }
    /**
     * Get ThirdPartyAccounts value
     * @return \ArrayType\ArrayOfThirdPartyAccount|null
     */
    public function getThirdPartyAccounts()
    {
        return $this->ThirdPartyAccounts;
    }
    /**
     * Set ThirdPartyAccounts value
     * @param \ArrayType\ArrayOfThirdPartyAccount $thirdPartyAccounts
     * @return \StructType\Bank
     */
    public function setThirdPartyAccounts(\ArrayType\ArrayOfThirdPartyAccount $thirdPartyAccounts = null)
    {
        $this->ThirdPartyAccounts = $thirdPartyAccounts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Bank
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
