<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ThirdPartyAccount StructType
 * @subpackage Structs
 */
class ThirdPartyAccount extends AbstractStructBase
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
     * The CurrencyTypeID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $CurrencyTypeID;
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
     * The MandateType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $MandateType;
    /**
     * The AccountType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $AccountType;
    /**
     * The ApproveDirectDebit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $ApproveDirectDebit;
    /**
     * The BenAccountUploadID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $BenAccountUploadID;
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
     * The ThirdPartyName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ThirdPartyName;
    /**
     * The AccountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AccountNo;
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
     * Constructor method for ThirdPartyAccount
     * @uses ThirdPartyAccount::setID()
     * @uses ThirdPartyAccount::setOrgID()
     * @uses ThirdPartyAccount::setCurrencyTypeID()
     * @uses ThirdPartyAccount::setBankID()
     * @uses ThirdPartyAccount::setMandateType()
     * @uses ThirdPartyAccount::setAccountType()
     * @uses ThirdPartyAccount::setApproveDirectDebit()
     * @uses ThirdPartyAccount::setBenAccountUploadID()
     * @uses ThirdPartyAccount::setStatus()
     * @uses ThirdPartyAccount::setDateCreated()
     * @uses ThirdPartyAccount::setDateModified()
     * @uses ThirdPartyAccount::setInitiatorID()
     * @uses ThirdPartyAccount::setVerifierID()
     * @uses ThirdPartyAccount::setVerifiedDate()
     * @uses ThirdPartyAccount::setMoveNext()
     * @uses ThirdPartyAccount::setNextApproverUserID()
     * @uses ThirdPartyAccount::setNextApproverRoleID()
     * @uses ThirdPartyAccount::setWorkFlowTransactionID()
     * @uses ThirdPartyAccount::setThirdPartyName()
     * @uses ThirdPartyAccount::setAccountNo()
     * @uses ThirdPartyAccount::setCreatedBy()
     * @uses ThirdPartyAccount::setModifiedBy()
     * @uses ThirdPartyAccount::setWorkFlowTransactionIDs()
     * @uses ThirdPartyAccount::setSwiftCode()
     * @uses ThirdPartyAccount::setRoutingNo()
     * @uses ThirdPartyAccount::setIBAN()
     * @uses ThirdPartyAccount::setAddress1()
     * @uses ThirdPartyAccount::setAddress2()
     * @uses ThirdPartyAccount::setCountry()
     * @uses ThirdPartyAccount::setBank()
     * @uses ThirdPartyAccount::setCurrencyType()
     * @uses ThirdPartyAccount::setOrganisation()
     * @param int $iD
     * @param int $orgID
     * @param int $currencyTypeID
     * @param int $bankID
     * @param int $mandateType
     * @param int $accountType
     * @param bool $approveDirectDebit
     * @param int $benAccountUploadID
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
     * @param string $thirdPartyName
     * @param string $accountNo
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param string $swiftCode
     * @param string $routingNo
     * @param string $iBAN
     * @param string $address1
     * @param string $address2
     * @param string $country
     * @param \StructType\Bank $bank
     * @param \StructType\CurrencyType $currencyType
     * @param \StructType\Organisation $organisation
     */
    public function __construct($iD = null, $orgID = null, $currencyTypeID = null, $bankID = null, $mandateType = null, $accountType = null, $approveDirectDebit = null, $benAccountUploadID = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $thirdPartyName = null, $accountNo = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, $swiftCode = null, $routingNo = null, $iBAN = null, $address1 = null, $address2 = null, $country = null, \StructType\Bank $bank = null, \StructType\CurrencyType $currencyType = null, \StructType\Organisation $organisation = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setCurrencyTypeID($currencyTypeID)
            ->setBankID($bankID)
            ->setMandateType($mandateType)
            ->setAccountType($accountType)
            ->setApproveDirectDebit($approveDirectDebit)
            ->setBenAccountUploadID($benAccountUploadID)
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
            ->setThirdPartyName($thirdPartyName)
            ->setAccountNo($accountNo)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setSwiftCode($swiftCode)
            ->setRoutingNo($routingNo)
            ->setIBAN($iBAN)
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setCountry($country)
            ->setBank($bank)
            ->setCurrencyType($currencyType)
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * Get MandateType value
     * @return int
     */
    public function getMandateType()
    {
        return $this->MandateType;
    }
    /**
     * Set MandateType value
     * @param int $mandateType
     * @return \StructType\ThirdPartyAccount
     */
    public function setMandateType($mandateType = null)
    {
        // validation for constraint: int
        if (!is_null($mandateType) && !(is_int($mandateType) || ctype_digit($mandateType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateType, true), gettype($mandateType)), __LINE__);
        }
        $this->MandateType = $mandateType;
        return $this;
    }
    /**
     * Get AccountType value
     * @return int
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }
    /**
     * Set AccountType value
     * @param int $accountType
     * @return \StructType\ThirdPartyAccount
     */
    public function setAccountType($accountType = null)
    {
        // validation for constraint: int
        if (!is_null($accountType) && !(is_int($accountType) || ctype_digit($accountType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->AccountType = $accountType;
        return $this;
    }
    /**
     * Get ApproveDirectDebit value
     * @return bool
     */
    public function getApproveDirectDebit()
    {
        return $this->ApproveDirectDebit;
    }
    /**
     * Set ApproveDirectDebit value
     * @param bool $approveDirectDebit
     * @return \StructType\ThirdPartyAccount
     */
    public function setApproveDirectDebit($approveDirectDebit = null)
    {
        // validation for constraint: boolean
        if (!is_null($approveDirectDebit) && !is_bool($approveDirectDebit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($approveDirectDebit, true), gettype($approveDirectDebit)), __LINE__);
        }
        $this->ApproveDirectDebit = $approveDirectDebit;
        return $this;
    }
    /**
     * Get BenAccountUploadID value
     * @return int
     */
    public function getBenAccountUploadID()
    {
        return $this->BenAccountUploadID;
    }
    /**
     * Set BenAccountUploadID value
     * @param int $benAccountUploadID
     * @return \StructType\ThirdPartyAccount
     */
    public function setBenAccountUploadID($benAccountUploadID = null)
    {
        // validation for constraint: int
        if (!is_null($benAccountUploadID) && !(is_int($benAccountUploadID) || ctype_digit($benAccountUploadID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($benAccountUploadID, true), gettype($benAccountUploadID)), __LINE__);
        }
        $this->BenAccountUploadID = $benAccountUploadID;
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * Get ThirdPartyName value
     * @return string|null
     */
    public function getThirdPartyName()
    {
        return $this->ThirdPartyName;
    }
    /**
     * Set ThirdPartyName value
     * @param string $thirdPartyName
     * @return \StructType\ThirdPartyAccount
     */
    public function setThirdPartyName($thirdPartyName = null)
    {
        // validation for constraint: string
        if (!is_null($thirdPartyName) && !is_string($thirdPartyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thirdPartyName, true), gettype($thirdPartyName)), __LINE__);
        }
        $this->ThirdPartyName = $thirdPartyName;
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
     * @return \StructType\ThirdPartyAccount
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
