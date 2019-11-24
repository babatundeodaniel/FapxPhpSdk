<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Account StructType
 * @subpackage Structs
 */
class Account extends AbstractStructBase
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
     * The IsDelayed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsDelayed;
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
     * The AccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountNo;
    /**
     * The AccountName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
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
     * The SwiftCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SwiftCode;
    /**
     * The RoutingNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RoutingNo;
    /**
     * The IBAN
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IBAN;
    /**
     * The Address1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address1;
    /**
     * The Address2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address2;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Country;
    /**
     * The AccountCards
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfAccountCard
     */
    public $AccountCards;
    /**
     * The eTranzactCards
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfETranzactCard
     */
    public $eTranzactCards;
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
     * Constructor method for Account
     * @uses Account::setID()
     * @uses Account::setOrgID()
     * @uses Account::setBankID()
     * @uses Account::setCurrencyTypeID()
     * @uses Account::setIsDelayed()
     * @uses Account::setStatus()
     * @uses Account::setDateCreated()
     * @uses Account::setDateModified()
     * @uses Account::setInitiatorID()
     * @uses Account::setVerifierID()
     * @uses Account::setVerifiedDate()
     * @uses Account::setMoveNext()
     * @uses Account::setNextApproverUserID()
     * @uses Account::setNextApproverRoleID()
     * @uses Account::setWorkFlowTransactionID()
     * @uses Account::setAccountNo()
     * @uses Account::setAccountName()
     * @uses Account::setCreatedBy()
     * @uses Account::setModifiedBy()
     * @uses Account::setWorkFlowTransactionIDs()
     * @uses Account::setSwiftCode()
     * @uses Account::setRoutingNo()
     * @uses Account::setIBAN()
     * @uses Account::setAddress1()
     * @uses Account::setAddress2()
     * @uses Account::setCountry()
     * @uses Account::setAccountCards()
     * @uses Account::setETranzactCards()
     * @uses Account::setBank()
     * @uses Account::setCurrencyType()
     * @uses Account::setOrganisation()
     * @uses Account::setConnect24Error()
     * @param int $iD
     * @param int $orgID
     * @param int $bankID
     * @param int $currencyTypeID
     * @param bool $isDelayed
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
     * @param string $accountNo
     * @param string $accountName
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param string $swiftCode
     * @param string $routingNo
     * @param string $iBAN
     * @param string $address1
     * @param string $address2
     * @param string $country
     * @param \ArrayType\ArrayOfAccountCard $accountCards
     * @param \ArrayType\ArrayOfETranzactCard $eTranzactCards
     * @param \StructType\Bank $bank
     * @param \StructType\CurrencyType $currencyType
     * @param \StructType\Organisation $organisation
     * @param string $connect24Error
     */
    public function __construct($iD = null, $orgID = null, $bankID = null, $currencyTypeID = null, $isDelayed = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $accountNo = null, $accountName = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, $swiftCode = null, $routingNo = null, $iBAN = null, $address1 = null, $address2 = null, $country = null, \ArrayType\ArrayOfAccountCard $accountCards = null, \ArrayType\ArrayOfETranzactCard $eTranzactCards = null, \StructType\Bank $bank = null, \StructType\CurrencyType $currencyType = null, \StructType\Organisation $organisation = null, $connect24Error = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setBankID($bankID)
            ->setCurrencyTypeID($currencyTypeID)
            ->setIsDelayed($isDelayed)
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
            ->setAccountNo($accountNo)
            ->setAccountName($accountName)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setSwiftCode($swiftCode)
            ->setRoutingNo($routingNo)
            ->setIBAN($iBAN)
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setCountry($country)
            ->setAccountCards($accountCards)
            ->setETranzactCards($eTranzactCards)
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * Get IsDelayed value
     * @return bool
     */
    public function getIsDelayed()
    {
        return $this->IsDelayed;
    }
    /**
     * Set IsDelayed value
     * @param bool $isDelayed
     * @return \StructType\Account
     */
    public function setIsDelayed($isDelayed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDelayed) && !is_bool($isDelayed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDelayed, true), gettype($isDelayed)), __LINE__);
        }
        $this->IsDelayed = $isDelayed;
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * Get AccountNo value
     * @return string|null
     */
    public function getAccountNo()
    {
        return $this->AccountNo;
    }
    /**
     * Set AccountNo value
     * @param string $accountNo
     * @return \StructType\Account
     */
    public function setAccountNo($accountNo = null)
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->AccountNo = $accountNo;
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * Get SwiftCode value
     * @return string|null
     */
    public function getSwiftCode()
    {
        return $this->SwiftCode;
    }
    /**
     * Set SwiftCode value
     * @param string $swiftCode
     * @return \StructType\Account
     */
    public function setSwiftCode($swiftCode = null)
    {
        // validation for constraint: string
        if (!is_null($swiftCode) && !is_string($swiftCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiftCode, true), gettype($swiftCode)), __LINE__);
        }
        $this->SwiftCode = $swiftCode;
        return $this;
    }
    /**
     * Get RoutingNo value
     * @return string|null
     */
    public function getRoutingNo()
    {
        return $this->RoutingNo;
    }
    /**
     * Set RoutingNo value
     * @param string $routingNo
     * @return \StructType\Account
     */
    public function setRoutingNo($routingNo = null)
    {
        // validation for constraint: string
        if (!is_null($routingNo) && !is_string($routingNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingNo, true), gettype($routingNo)), __LINE__);
        }
        $this->RoutingNo = $routingNo;
        return $this;
    }
    /**
     * Get IBAN value
     * @return string|null
     */
    public function getIBAN()
    {
        return $this->IBAN;
    }
    /**
     * Set IBAN value
     * @param string $iBAN
     * @return \StructType\Account
     */
    public function setIBAN($iBAN = null)
    {
        // validation for constraint: string
        if (!is_null($iBAN) && !is_string($iBAN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iBAN, true), gettype($iBAN)), __LINE__);
        }
        $this->IBAN = $iBAN;
        return $this;
    }
    /**
     * Get Address1 value
     * @return string|null
     */
    public function getAddress1()
    {
        return $this->Address1;
    }
    /**
     * Set Address1 value
     * @param string $address1
     * @return \StructType\Account
     */
    public function setAddress1($address1 = null)
    {
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address1, true), gettype($address1)), __LINE__);
        }
        $this->Address1 = $address1;
        return $this;
    }
    /**
     * Get Address2 value
     * @return string|null
     */
    public function getAddress2()
    {
        return $this->Address2;
    }
    /**
     * Set Address2 value
     * @param string $address2
     * @return \StructType\Account
     */
    public function setAddress2($address2 = null)
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address2, true), gettype($address2)), __LINE__);
        }
        $this->Address2 = $address2;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \StructType\Account
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get AccountCards value
     * @return \ArrayType\ArrayOfAccountCard|null
     */
    public function getAccountCards()
    {
        return $this->AccountCards;
    }
    /**
     * Set AccountCards value
     * @param \ArrayType\ArrayOfAccountCard $accountCards
     * @return \StructType\Account
     */
    public function setAccountCards(\ArrayType\ArrayOfAccountCard $accountCards = null)
    {
        $this->AccountCards = $accountCards;
        return $this;
    }
    /**
     * Get eTranzactCards value
     * @return \ArrayType\ArrayOfETranzactCard|null
     */
    public function getETranzactCards()
    {
        return $this->eTranzactCards;
    }
    /**
     * Set eTranzactCards value
     * @param \ArrayType\ArrayOfETranzactCard $eTranzactCards
     * @return \StructType\Account
     */
    public function setETranzactCards(\ArrayType\ArrayOfETranzactCard $eTranzactCards = null)
    {
        $this->eTranzactCards = $eTranzactCards;
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
     * @return \StructType\Account
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
