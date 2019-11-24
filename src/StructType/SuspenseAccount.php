<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuspenseAccount StructType
 * @subpackage Structs
 */
class SuspenseAccount extends AbstractStructBase
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
     * The BankID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $BankID;
    /**
     * The CurrencyTypeID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $CurrencyTypeID;
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
     * The SuspenseAccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SuspenseAccountNo;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
    /**
     * The CallBackEmails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CallBackEmails;
    /**
     * The CardPAN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardPAN;
    /**
     * The ExpiryYear
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryYear;
    /**
     * The ExpiryMonth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryMonth;
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
     * The Bank
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Bank
     */
    public $Bank;
    /**
     * The CurrencyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CurrencyType
     */
    public $CurrencyType;
    /**
     * The Organisation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Organisation
     */
    public $Organisation;
    /**
     * The Connect24Error
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Connect24Error;
    /**
     * Constructor method for SuspenseAccount
     * @uses SuspenseAccount::setID()
     * @uses SuspenseAccount::setOrgID()
     * @uses SuspenseAccount::setBankID()
     * @uses SuspenseAccount::setCurrencyTypeID()
     * @uses SuspenseAccount::setStatus()
     * @uses SuspenseAccount::setDateCreated()
     * @uses SuspenseAccount::setDateModified()
     * @uses SuspenseAccount::setInitiatorID()
     * @uses SuspenseAccount::setVerifierID()
     * @uses SuspenseAccount::setVerifiedDate()
     * @uses SuspenseAccount::setMoveNext()
     * @uses SuspenseAccount::setNextApproverUserID()
     * @uses SuspenseAccount::setNextApproverRoleID()
     * @uses SuspenseAccount::setWorkFlowTransactionID()
     * @uses SuspenseAccount::setSuspenseAccountNo()
     * @uses SuspenseAccount::setAccountName()
     * @uses SuspenseAccount::setCallBackEmails()
     * @uses SuspenseAccount::setCardPAN()
     * @uses SuspenseAccount::setExpiryYear()
     * @uses SuspenseAccount::setExpiryMonth()
     * @uses SuspenseAccount::setCreatedBy()
     * @uses SuspenseAccount::setModifiedBy()
     * @uses SuspenseAccount::setWorkFlowTransactionIDs()
     * @uses SuspenseAccount::setBank()
     * @uses SuspenseAccount::setCurrencyType()
     * @uses SuspenseAccount::setOrganisation()
     * @uses SuspenseAccount::setConnect24Error()
     * @param int $iD
     * @param int $orgID
     * @param int $bankID
     * @param int $currencyTypeID
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
     * @param string $suspenseAccountNo
     * @param string $accountName
     * @param string $callBackEmails
     * @param string $cardPAN
     * @param string $expiryYear
     * @param string $expiryMonth
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param \StructType\Bank $bank
     * @param \StructType\CurrencyType $currencyType
     * @param \StructType\Organisation $organisation
     * @param string $connect24Error
     */
    public function __construct($iD = null, $orgID = null, $bankID = null, $currencyTypeID = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $suspenseAccountNo = null, $accountName = null, $callBackEmails = null, $cardPAN = null, $expiryYear = null, $expiryMonth = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \StructType\Bank $bank = null, \StructType\CurrencyType $currencyType = null, \StructType\Organisation $organisation = null, $connect24Error = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setBankID($bankID)
            ->setCurrencyTypeID($currencyTypeID)
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
            ->setSuspenseAccountNo($suspenseAccountNo)
            ->setAccountName($accountName)
            ->setCallBackEmails($callBackEmails)
            ->setCardPAN($cardPAN)
            ->setExpiryYear($expiryYear)
            ->setExpiryMonth($expiryMonth)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setBank($bank)
            ->setCurrencyType($currencyType)
            ->setOrganisation($organisation)
            ->setConnect24Error($connect24Error);
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * Get BankID value
     * @return int
     */
    public function getBankID()
    {
        return $this->BankID;
    }
    /**
     * Set BankID value
     * @param int $bankID
     * @return \StructType\SuspenseAccount
     */
    public function setBankID($bankID = null)
    {
        // validation for constraint: int
        if (!is_null($bankID) && !(is_int($bankID) || ctype_digit($bankID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bankID, true), gettype($bankID)), __LINE__);
        }
        $this->BankID = $bankID;
        return $this;
    }
    /**
     * Get CurrencyTypeID value
     * @return int
     */
    public function getCurrencyTypeID()
    {
        return $this->CurrencyTypeID;
    }
    /**
     * Set CurrencyTypeID value
     * @param int $currencyTypeID
     * @return \StructType\SuspenseAccount
     */
    public function setCurrencyTypeID($currencyTypeID = null)
    {
        // validation for constraint: int
        if (!is_null($currencyTypeID) && !(is_int($currencyTypeID) || ctype_digit($currencyTypeID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($currencyTypeID, true), gettype($currencyTypeID)), __LINE__);
        }
        $this->CurrencyTypeID = $currencyTypeID;
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * Get SuspenseAccountNo value
     * @return string|null
     */
    public function getSuspenseAccountNo()
    {
        return $this->SuspenseAccountNo;
    }
    /**
     * Set SuspenseAccountNo value
     * @param string $suspenseAccountNo
     * @return \StructType\SuspenseAccount
     */
    public function setSuspenseAccountNo($suspenseAccountNo = null)
    {
        // validation for constraint: string
        if (!is_null($suspenseAccountNo) && !is_string($suspenseAccountNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suspenseAccountNo, true), gettype($suspenseAccountNo)), __LINE__);
        }
        $this->SuspenseAccountNo = $suspenseAccountNo;
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \StructType\SuspenseAccount
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Get CallBackEmails value
     * @return string|null
     */
    public function getCallBackEmails()
    {
        return $this->CallBackEmails;
    }
    /**
     * Set CallBackEmails value
     * @param string $callBackEmails
     * @return \StructType\SuspenseAccount
     */
    public function setCallBackEmails($callBackEmails = null)
    {
        // validation for constraint: string
        if (!is_null($callBackEmails) && !is_string($callBackEmails)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($callBackEmails, true), gettype($callBackEmails)), __LINE__);
        }
        $this->CallBackEmails = $callBackEmails;
        return $this;
    }
    /**
     * Get CardPAN value
     * @return string|null
     */
    public function getCardPAN()
    {
        return $this->CardPAN;
    }
    /**
     * Set CardPAN value
     * @param string $cardPAN
     * @return \StructType\SuspenseAccount
     */
    public function setCardPAN($cardPAN = null)
    {
        // validation for constraint: string
        if (!is_null($cardPAN) && !is_string($cardPAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardPAN, true), gettype($cardPAN)), __LINE__);
        }
        $this->CardPAN = $cardPAN;
        return $this;
    }
    /**
     * Get ExpiryYear value
     * @return string|null
     */
    public function getExpiryYear()
    {
        return $this->ExpiryYear;
    }
    /**
     * Set ExpiryYear value
     * @param string $expiryYear
     * @return \StructType\SuspenseAccount
     */
    public function setExpiryYear($expiryYear = null)
    {
        // validation for constraint: string
        if (!is_null($expiryYear) && !is_string($expiryYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryYear, true), gettype($expiryYear)), __LINE__);
        }
        $this->ExpiryYear = $expiryYear;
        return $this;
    }
    /**
     * Get ExpiryMonth value
     * @return string|null
     */
    public function getExpiryMonth()
    {
        return $this->ExpiryMonth;
    }
    /**
     * Set ExpiryMonth value
     * @param string $expiryMonth
     * @return \StructType\SuspenseAccount
     */
    public function setExpiryMonth($expiryMonth = null)
    {
        // validation for constraint: string
        if (!is_null($expiryMonth) && !is_string($expiryMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryMonth, true), gettype($expiryMonth)), __LINE__);
        }
        $this->ExpiryMonth = $expiryMonth;
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * @return \StructType\SuspenseAccount
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
     * Get Bank value
     * @return \StructType\Bank|null
     */
    public function getBank()
    {
        return $this->Bank;
    }
    /**
     * Set Bank value
     * @param \StructType\Bank $bank
     * @return \StructType\SuspenseAccount
     */
    public function setBank(\StructType\Bank $bank = null)
    {
        $this->Bank = $bank;
        return $this;
    }
    /**
     * Get CurrencyType value
     * @return \StructType\CurrencyType|null
     */
    public function getCurrencyType()
    {
        return $this->CurrencyType;
    }
    /**
     * Set CurrencyType value
     * @param \StructType\CurrencyType $currencyType
     * @return \StructType\SuspenseAccount
     */
    public function setCurrencyType(\StructType\CurrencyType $currencyType = null)
    {
        $this->CurrencyType = $currencyType;
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
     * @return \StructType\SuspenseAccount
     */
    public function setOrganisation(\StructType\Organisation $organisation = null)
    {
        $this->Organisation = $organisation;
        return $this;
    }
    /**
     * Get Connect24Error value
     * @return string|null
     */
    public function getConnect24Error()
    {
        return $this->Connect24Error;
    }
    /**
     * Set Connect24Error value
     * @param string $connect24Error
     * @return \StructType\SuspenseAccount
     */
    public function setConnect24Error($connect24Error = null)
    {
        // validation for constraint: string
        if (!is_null($connect24Error) && !is_string($connect24Error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connect24Error, true), gettype($connect24Error)), __LINE__);
        }
        $this->Connect24Error = $connect24Error;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SuspenseAccount
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
