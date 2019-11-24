<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Organisation StructType
 * @subpackage Structs
 */
class Organisation extends AbstractStructBase
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
     * The MailSent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $MailSent;
    /**
     * The UseToken
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $UseToken;
    /**
     * The BusinessType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $BusinessType;
    /**
     * The TokenType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TokenType;
    /**
     * The EncryptTransactionFiles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $EncryptTransactionFiles;
    /**
     * The EncryptionType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $EncryptionType;
    /**
     * The IncludeRMApproval
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IncludeRMApproval;
    /**
     * The CreateFinalApprover
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $CreateFinalApprover;
    /**
     * The EnableReleaser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $EnableReleaser;
    /**
     * The ParentOrgID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ParentOrgID;
    /**
     * The TransactionCharge
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TransactionCharge;
    /**
     * The CorporateRatio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $CorporateRatio;
    /**
     * The ThirdPartyRatio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var float
     */
    public $ThirdPartyRatio;
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
     * The ApprovalLimitCheckType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $ApprovalLimitCheckType;
    /**
     * The PostTransactionsAsBulk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $PostTransactionsAsBulk;
    /**
     * The VerifyUserCreation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $VerifyUserCreation;
    /**
     * The EnablePowerUserRole
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $EnablePowerUserRole;
    /**
     * The EnableBranchSetup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $EnableBranchSetup;
    /**
     * The EnableMultipleWorkflow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $EnableMultipleWorkflow;
    /**
     * The AutoGenerateOrgTranRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $AutoGenerateOrgTranRefNo;
    /**
     * The IsSetupDefaultUploadTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsSetupDefaultUploadTemplate;
    /**
     * The IsSetupDefaultRoles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsSetupDefaultRoles;
    /**
     * The IsSetupDefaultMenus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsSetupDefaultMenus;
    /**
     * The IsSetupRoleMenuAccesses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsSetupRoleMenuAccesses;
    /**
     * The IsNew
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsNew;
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
     * The TokenUsageMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TokenUsageMode;
    /**
     * The RealTimeTransUploadThreshold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RealTimeTransUploadThreshold;
    /**
     * The RealTimeTransApprovalThreshold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $RealTimeTransApprovalThreshold;
    /**
     * The AutoCreateNewTransactionBeneficiary
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $AutoCreateNewTransactionBeneficiary;
    /**
     * The EnableAPIIntegration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $EnableAPIIntegration;
    /**
     * The OrgCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrgCode;
    /**
     * The OrganisationName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrganisationName;
    /**
     * The ContactEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContactEmail;
    /**
     * The ContactPhone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ContactPhone;
    /**
     * The EncryptionKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EncryptionKey;
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
     * The Batches
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfBatch
     */
    public $Batches;
    /**
     * The ChannelConfigurations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfChannelConfiguration
     */
    public $ChannelConfigurations;
    /**
     * The FapxOrgHeaders
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfFapxOrgHeader
     */
    public $FapxOrgHeaders;
    /**
     * The FileWatcherLogs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfFileWatcherLog
     */
    public $FileWatcherLogs;
    /**
     * The MenuPages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfMenuPage
     */
    public $MenuPages;
    /**
     * The OrgChannelCharges
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrgChannelCharge
     */
    public $OrgChannelCharges;
    /**
     * The OrgRMs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfOrgRM
     */
    public $OrgRMs;
    /**
     * The Roles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfRole
     */
    public $Roles;
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
     * The TranWorkflows
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTranWorkflow
     */
    public $TranWorkflows;
    /**
     * The Uploads
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfUpload
     */
    public $Uploads;
    /**
     * The WorkFlows
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfWorkFlow
     */
    public $WorkFlows;
    /**
     * Constructor method for Organisation
     * @uses Organisation::setID()
     * @uses Organisation::setMailSent()
     * @uses Organisation::setUseToken()
     * @uses Organisation::setBusinessType()
     * @uses Organisation::setTokenType()
     * @uses Organisation::setEncryptTransactionFiles()
     * @uses Organisation::setEncryptionType()
     * @uses Organisation::setIncludeRMApproval()
     * @uses Organisation::setCreateFinalApprover()
     * @uses Organisation::setEnableReleaser()
     * @uses Organisation::setParentOrgID()
     * @uses Organisation::setTransactionCharge()
     * @uses Organisation::setCorporateRatio()
     * @uses Organisation::setThirdPartyRatio()
     * @uses Organisation::setMandateType()
     * @uses Organisation::setApprovalLimitCheckType()
     * @uses Organisation::setPostTransactionsAsBulk()
     * @uses Organisation::setVerifyUserCreation()
     * @uses Organisation::setEnablePowerUserRole()
     * @uses Organisation::setEnableBranchSetup()
     * @uses Organisation::setEnableMultipleWorkflow()
     * @uses Organisation::setAutoGenerateOrgTranRefNo()
     * @uses Organisation::setIsSetupDefaultUploadTemplate()
     * @uses Organisation::setIsSetupDefaultRoles()
     * @uses Organisation::setIsSetupDefaultMenus()
     * @uses Organisation::setIsSetupRoleMenuAccesses()
     * @uses Organisation::setIsNew()
     * @uses Organisation::setStatus()
     * @uses Organisation::setDateCreated()
     * @uses Organisation::setDateModified()
     * @uses Organisation::setInitiatorID()
     * @uses Organisation::setVerifierID()
     * @uses Organisation::setVerifiedDate()
     * @uses Organisation::setMoveNext()
     * @uses Organisation::setNextApproverUserID()
     * @uses Organisation::setNextApproverRoleID()
     * @uses Organisation::setWorkFlowTransactionID()
     * @uses Organisation::setTokenUsageMode()
     * @uses Organisation::setRealTimeTransUploadThreshold()
     * @uses Organisation::setRealTimeTransApprovalThreshold()
     * @uses Organisation::setAutoCreateNewTransactionBeneficiary()
     * @uses Organisation::setEnableAPIIntegration()
     * @uses Organisation::setOrgCode()
     * @uses Organisation::setOrganisationName()
     * @uses Organisation::setContactEmail()
     * @uses Organisation::setContactPhone()
     * @uses Organisation::setEncryptionKey()
     * @uses Organisation::setCreatedBy()
     * @uses Organisation::setModifiedBy()
     * @uses Organisation::setWorkFlowTransactionIDs()
     * @uses Organisation::setAccounts()
     * @uses Organisation::setBatches()
     * @uses Organisation::setChannelConfigurations()
     * @uses Organisation::setFapxOrgHeaders()
     * @uses Organisation::setFileWatcherLogs()
     * @uses Organisation::setMenuPages()
     * @uses Organisation::setOrgChannelCharges()
     * @uses Organisation::setOrgRMs()
     * @uses Organisation::setRoles()
     * @uses Organisation::setSuspenseAccounts()
     * @uses Organisation::setThirdPartyAccounts()
     * @uses Organisation::setTranWorkflows()
     * @uses Organisation::setUploads()
     * @uses Organisation::setWorkFlows()
     * @param int $iD
     * @param bool $mailSent
     * @param bool $useToken
     * @param int $businessType
     * @param int $tokenType
     * @param bool $encryptTransactionFiles
     * @param int $encryptionType
     * @param bool $includeRMApproval
     * @param bool $createFinalApprover
     * @param bool $enableReleaser
     * @param int $parentOrgID
     * @param int $transactionCharge
     * @param float $corporateRatio
     * @param float $thirdPartyRatio
     * @param int $mandateType
     * @param int $approvalLimitCheckType
     * @param bool $postTransactionsAsBulk
     * @param bool $verifyUserCreation
     * @param bool $enablePowerUserRole
     * @param bool $enableBranchSetup
     * @param bool $enableMultipleWorkflow
     * @param bool $autoGenerateOrgTranRefNo
     * @param bool $isSetupDefaultUploadTemplate
     * @param bool $isSetupDefaultRoles
     * @param bool $isSetupDefaultMenus
     * @param bool $isSetupRoleMenuAccesses
     * @param bool $isNew
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
     * @param int $tokenUsageMode
     * @param int $realTimeTransUploadThreshold
     * @param int $realTimeTransApprovalThreshold
     * @param bool $autoCreateNewTransactionBeneficiary
     * @param bool $enableAPIIntegration
     * @param string $orgCode
     * @param string $organisationName
     * @param string $contactEmail
     * @param string $contactPhone
     * @param string $encryptionKey
     * @param string $createdBy
     * @param string $modifiedBy
     * @param string $workFlowTransactionIDs
     * @param \ArrayType\ArrayOfAccount $accounts
     * @param \ArrayType\ArrayOfBatch $batches
     * @param \ArrayType\ArrayOfChannelConfiguration $channelConfigurations
     * @param \ArrayType\ArrayOfFapxOrgHeader $fapxOrgHeaders
     * @param \ArrayType\ArrayOfFileWatcherLog $fileWatcherLogs
     * @param \ArrayType\ArrayOfMenuPage $menuPages
     * @param \ArrayType\ArrayOfOrgChannelCharge $orgChannelCharges
     * @param \ArrayType\ArrayOfOrgRM $orgRMs
     * @param \ArrayType\ArrayOfRole $roles
     * @param \ArrayType\ArrayOfSuspenseAccount $suspenseAccounts
     * @param \ArrayType\ArrayOfThirdPartyAccount $thirdPartyAccounts
     * @param \ArrayType\ArrayOfTranWorkflow $tranWorkflows
     * @param \ArrayType\ArrayOfUpload $uploads
     * @param \ArrayType\ArrayOfWorkFlow $workFlows
     */
    public function __construct($iD = null, $mailSent = null, $useToken = null, $businessType = null, $tokenType = null, $encryptTransactionFiles = null, $encryptionType = null, $includeRMApproval = null, $createFinalApprover = null, $enableReleaser = null, $parentOrgID = null, $transactionCharge = null, $corporateRatio = null, $thirdPartyRatio = null, $mandateType = null, $approvalLimitCheckType = null, $postTransactionsAsBulk = null, $verifyUserCreation = null, $enablePowerUserRole = null, $enableBranchSetup = null, $enableMultipleWorkflow = null, $autoGenerateOrgTranRefNo = null, $isSetupDefaultUploadTemplate = null, $isSetupDefaultRoles = null, $isSetupDefaultMenus = null, $isSetupRoleMenuAccesses = null, $isNew = null, $status = null, $dateCreated = null, $dateModified = null, $initiatorID = null, $verifierID = null, $verifiedDate = null, $moveNext = null, $nextApproverUserID = null, $nextApproverRoleID = null, $workFlowTransactionID = null, $tokenUsageMode = null, $realTimeTransUploadThreshold = null, $realTimeTransApprovalThreshold = null, $autoCreateNewTransactionBeneficiary = null, $enableAPIIntegration = null, $orgCode = null, $organisationName = null, $contactEmail = null, $contactPhone = null, $encryptionKey = null, $createdBy = null, $modifiedBy = null, $workFlowTransactionIDs = null, \ArrayType\ArrayOfAccount $accounts = null, \ArrayType\ArrayOfBatch $batches = null, \ArrayType\ArrayOfChannelConfiguration $channelConfigurations = null, \ArrayType\ArrayOfFapxOrgHeader $fapxOrgHeaders = null, \ArrayType\ArrayOfFileWatcherLog $fileWatcherLogs = null, \ArrayType\ArrayOfMenuPage $menuPages = null, \ArrayType\ArrayOfOrgChannelCharge $orgChannelCharges = null, \ArrayType\ArrayOfOrgRM $orgRMs = null, \ArrayType\ArrayOfRole $roles = null, \ArrayType\ArrayOfSuspenseAccount $suspenseAccounts = null, \ArrayType\ArrayOfThirdPartyAccount $thirdPartyAccounts = null, \ArrayType\ArrayOfTranWorkflow $tranWorkflows = null, \ArrayType\ArrayOfUpload $uploads = null, \ArrayType\ArrayOfWorkFlow $workFlows = null)
    {
        $this
            ->setID($iD)
            ->setMailSent($mailSent)
            ->setUseToken($useToken)
            ->setBusinessType($businessType)
            ->setTokenType($tokenType)
            ->setEncryptTransactionFiles($encryptTransactionFiles)
            ->setEncryptionType($encryptionType)
            ->setIncludeRMApproval($includeRMApproval)
            ->setCreateFinalApprover($createFinalApprover)
            ->setEnableReleaser($enableReleaser)
            ->setParentOrgID($parentOrgID)
            ->setTransactionCharge($transactionCharge)
            ->setCorporateRatio($corporateRatio)
            ->setThirdPartyRatio($thirdPartyRatio)
            ->setMandateType($mandateType)
            ->setApprovalLimitCheckType($approvalLimitCheckType)
            ->setPostTransactionsAsBulk($postTransactionsAsBulk)
            ->setVerifyUserCreation($verifyUserCreation)
            ->setEnablePowerUserRole($enablePowerUserRole)
            ->setEnableBranchSetup($enableBranchSetup)
            ->setEnableMultipleWorkflow($enableMultipleWorkflow)
            ->setAutoGenerateOrgTranRefNo($autoGenerateOrgTranRefNo)
            ->setIsSetupDefaultUploadTemplate($isSetupDefaultUploadTemplate)
            ->setIsSetupDefaultRoles($isSetupDefaultRoles)
            ->setIsSetupDefaultMenus($isSetupDefaultMenus)
            ->setIsSetupRoleMenuAccesses($isSetupRoleMenuAccesses)
            ->setIsNew($isNew)
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
            ->setTokenUsageMode($tokenUsageMode)
            ->setRealTimeTransUploadThreshold($realTimeTransUploadThreshold)
            ->setRealTimeTransApprovalThreshold($realTimeTransApprovalThreshold)
            ->setAutoCreateNewTransactionBeneficiary($autoCreateNewTransactionBeneficiary)
            ->setEnableAPIIntegration($enableAPIIntegration)
            ->setOrgCode($orgCode)
            ->setOrganisationName($organisationName)
            ->setContactEmail($contactEmail)
            ->setContactPhone($contactPhone)
            ->setEncryptionKey($encryptionKey)
            ->setCreatedBy($createdBy)
            ->setModifiedBy($modifiedBy)
            ->setWorkFlowTransactionIDs($workFlowTransactionIDs)
            ->setAccounts($accounts)
            ->setBatches($batches)
            ->setChannelConfigurations($channelConfigurations)
            ->setFapxOrgHeaders($fapxOrgHeaders)
            ->setFileWatcherLogs($fileWatcherLogs)
            ->setMenuPages($menuPages)
            ->setOrgChannelCharges($orgChannelCharges)
            ->setOrgRMs($orgRMs)
            ->setRoles($roles)
            ->setSuspenseAccounts($suspenseAccounts)
            ->setThirdPartyAccounts($thirdPartyAccounts)
            ->setTranWorkflows($tranWorkflows)
            ->setUploads($uploads)
            ->setWorkFlows($workFlows);
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
     * @return \StructType\Organisation
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
     * Get MailSent value
     * @return bool
     */
    public function getMailSent()
    {
        return $this->MailSent;
    }
    /**
     * Set MailSent value
     * @param bool $mailSent
     * @return \StructType\Organisation
     */
    public function setMailSent($mailSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($mailSent) && !is_bool($mailSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailSent, true), gettype($mailSent)), __LINE__);
        }
        $this->MailSent = $mailSent;
        return $this;
    }
    /**
     * Get UseToken value
     * @return bool
     */
    public function getUseToken()
    {
        return $this->UseToken;
    }
    /**
     * Set UseToken value
     * @param bool $useToken
     * @return \StructType\Organisation
     */
    public function setUseToken($useToken = null)
    {
        // validation for constraint: boolean
        if (!is_null($useToken) && !is_bool($useToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useToken, true), gettype($useToken)), __LINE__);
        }
        $this->UseToken = $useToken;
        return $this;
    }
    /**
     * Get BusinessType value
     * @return int
     */
    public function getBusinessType()
    {
        return $this->BusinessType;
    }
    /**
     * Set BusinessType value
     * @param int $businessType
     * @return \StructType\Organisation
     */
    public function setBusinessType($businessType = null)
    {
        // validation for constraint: int
        if (!is_null($businessType) && !(is_int($businessType) || ctype_digit($businessType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($businessType, true), gettype($businessType)), __LINE__);
        }
        $this->BusinessType = $businessType;
        return $this;
    }
    /**
     * Get TokenType value
     * @return int
     */
    public function getTokenType()
    {
        return $this->TokenType;
    }
    /**
     * Set TokenType value
     * @param int $tokenType
     * @return \StructType\Organisation
     */
    public function setTokenType($tokenType = null)
    {
        // validation for constraint: int
        if (!is_null($tokenType) && !(is_int($tokenType) || ctype_digit($tokenType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tokenType, true), gettype($tokenType)), __LINE__);
        }
        $this->TokenType = $tokenType;
        return $this;
    }
    /**
     * Get EncryptTransactionFiles value
     * @return bool
     */
    public function getEncryptTransactionFiles()
    {
        return $this->EncryptTransactionFiles;
    }
    /**
     * Set EncryptTransactionFiles value
     * @param bool $encryptTransactionFiles
     * @return \StructType\Organisation
     */
    public function setEncryptTransactionFiles($encryptTransactionFiles = null)
    {
        // validation for constraint: boolean
        if (!is_null($encryptTransactionFiles) && !is_bool($encryptTransactionFiles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($encryptTransactionFiles, true), gettype($encryptTransactionFiles)), __LINE__);
        }
        $this->EncryptTransactionFiles = $encryptTransactionFiles;
        return $this;
    }
    /**
     * Get EncryptionType value
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->EncryptionType;
    }
    /**
     * Set EncryptionType value
     * @param int $encryptionType
     * @return \StructType\Organisation
     */
    public function setEncryptionType($encryptionType = null)
    {
        // validation for constraint: int
        if (!is_null($encryptionType) && !(is_int($encryptionType) || ctype_digit($encryptionType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($encryptionType, true), gettype($encryptionType)), __LINE__);
        }
        $this->EncryptionType = $encryptionType;
        return $this;
    }
    /**
     * Get IncludeRMApproval value
     * @return bool
     */
    public function getIncludeRMApproval()
    {
        return $this->IncludeRMApproval;
    }
    /**
     * Set IncludeRMApproval value
     * @param bool $includeRMApproval
     * @return \StructType\Organisation
     */
    public function setIncludeRMApproval($includeRMApproval = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeRMApproval) && !is_bool($includeRMApproval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeRMApproval, true), gettype($includeRMApproval)), __LINE__);
        }
        $this->IncludeRMApproval = $includeRMApproval;
        return $this;
    }
    /**
     * Get CreateFinalApprover value
     * @return bool
     */
    public function getCreateFinalApprover()
    {
        return $this->CreateFinalApprover;
    }
    /**
     * Set CreateFinalApprover value
     * @param bool $createFinalApprover
     * @return \StructType\Organisation
     */
    public function setCreateFinalApprover($createFinalApprover = null)
    {
        // validation for constraint: boolean
        if (!is_null($createFinalApprover) && !is_bool($createFinalApprover)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createFinalApprover, true), gettype($createFinalApprover)), __LINE__);
        }
        $this->CreateFinalApprover = $createFinalApprover;
        return $this;
    }
    /**
     * Get EnableReleaser value
     * @return bool
     */
    public function getEnableReleaser()
    {
        return $this->EnableReleaser;
    }
    /**
     * Set EnableReleaser value
     * @param bool $enableReleaser
     * @return \StructType\Organisation
     */
    public function setEnableReleaser($enableReleaser = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableReleaser) && !is_bool($enableReleaser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableReleaser, true), gettype($enableReleaser)), __LINE__);
        }
        $this->EnableReleaser = $enableReleaser;
        return $this;
    }
    /**
     * Get ParentOrgID value
     * @return int
     */
    public function getParentOrgID()
    {
        return $this->ParentOrgID;
    }
    /**
     * Set ParentOrgID value
     * @param int $parentOrgID
     * @return \StructType\Organisation
     */
    public function setParentOrgID($parentOrgID = null)
    {
        // validation for constraint: int
        if (!is_null($parentOrgID) && !(is_int($parentOrgID) || ctype_digit($parentOrgID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentOrgID, true), gettype($parentOrgID)), __LINE__);
        }
        $this->ParentOrgID = $parentOrgID;
        return $this;
    }
    /**
     * Get TransactionCharge value
     * @return int
     */
    public function getTransactionCharge()
    {
        return $this->TransactionCharge;
    }
    /**
     * Set TransactionCharge value
     * @param int $transactionCharge
     * @return \StructType\Organisation
     */
    public function setTransactionCharge($transactionCharge = null)
    {
        // validation for constraint: int
        if (!is_null($transactionCharge) && !(is_int($transactionCharge) || ctype_digit($transactionCharge))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionCharge, true), gettype($transactionCharge)), __LINE__);
        }
        $this->TransactionCharge = $transactionCharge;
        return $this;
    }
    /**
     * Get CorporateRatio value
     * @return float
     */
    public function getCorporateRatio()
    {
        return $this->CorporateRatio;
    }
    /**
     * Set CorporateRatio value
     * @param float $corporateRatio
     * @return \StructType\Organisation
     */
    public function setCorporateRatio($corporateRatio = null)
    {
        // validation for constraint: float
        if (!is_null($corporateRatio) && !(is_float($corporateRatio) || is_numeric($corporateRatio))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($corporateRatio, true), gettype($corporateRatio)), __LINE__);
        }
        $this->CorporateRatio = $corporateRatio;
        return $this;
    }
    /**
     * Get ThirdPartyRatio value
     * @return float
     */
    public function getThirdPartyRatio()
    {
        return $this->ThirdPartyRatio;
    }
    /**
     * Set ThirdPartyRatio value
     * @param float $thirdPartyRatio
     * @return \StructType\Organisation
     */
    public function setThirdPartyRatio($thirdPartyRatio = null)
    {
        // validation for constraint: float
        if (!is_null($thirdPartyRatio) && !(is_float($thirdPartyRatio) || is_numeric($thirdPartyRatio))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($thirdPartyRatio, true), gettype($thirdPartyRatio)), __LINE__);
        }
        $this->ThirdPartyRatio = $thirdPartyRatio;
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
     * @return \StructType\Organisation
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
     * Get ApprovalLimitCheckType value
     * @return int
     */
    public function getApprovalLimitCheckType()
    {
        return $this->ApprovalLimitCheckType;
    }
    /**
     * Set ApprovalLimitCheckType value
     * @param int $approvalLimitCheckType
     * @return \StructType\Organisation
     */
    public function setApprovalLimitCheckType($approvalLimitCheckType = null)
    {
        // validation for constraint: int
        if (!is_null($approvalLimitCheckType) && !(is_int($approvalLimitCheckType) || ctype_digit($approvalLimitCheckType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($approvalLimitCheckType, true), gettype($approvalLimitCheckType)), __LINE__);
        }
        $this->ApprovalLimitCheckType = $approvalLimitCheckType;
        return $this;
    }
    /**
     * Get PostTransactionsAsBulk value
     * @return bool
     */
    public function getPostTransactionsAsBulk()
    {
        return $this->PostTransactionsAsBulk;
    }
    /**
     * Set PostTransactionsAsBulk value
     * @param bool $postTransactionsAsBulk
     * @return \StructType\Organisation
     */
    public function setPostTransactionsAsBulk($postTransactionsAsBulk = null)
    {
        // validation for constraint: boolean
        if (!is_null($postTransactionsAsBulk) && !is_bool($postTransactionsAsBulk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($postTransactionsAsBulk, true), gettype($postTransactionsAsBulk)), __LINE__);
        }
        $this->PostTransactionsAsBulk = $postTransactionsAsBulk;
        return $this;
    }
    /**
     * Get VerifyUserCreation value
     * @return bool
     */
    public function getVerifyUserCreation()
    {
        return $this->VerifyUserCreation;
    }
    /**
     * Set VerifyUserCreation value
     * @param bool $verifyUserCreation
     * @return \StructType\Organisation
     */
    public function setVerifyUserCreation($verifyUserCreation = null)
    {
        // validation for constraint: boolean
        if (!is_null($verifyUserCreation) && !is_bool($verifyUserCreation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($verifyUserCreation, true), gettype($verifyUserCreation)), __LINE__);
        }
        $this->VerifyUserCreation = $verifyUserCreation;
        return $this;
    }
    /**
     * Get EnablePowerUserRole value
     * @return bool
     */
    public function getEnablePowerUserRole()
    {
        return $this->EnablePowerUserRole;
    }
    /**
     * Set EnablePowerUserRole value
     * @param bool $enablePowerUserRole
     * @return \StructType\Organisation
     */
    public function setEnablePowerUserRole($enablePowerUserRole = null)
    {
        // validation for constraint: boolean
        if (!is_null($enablePowerUserRole) && !is_bool($enablePowerUserRole)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enablePowerUserRole, true), gettype($enablePowerUserRole)), __LINE__);
        }
        $this->EnablePowerUserRole = $enablePowerUserRole;
        return $this;
    }
    /**
     * Get EnableBranchSetup value
     * @return bool
     */
    public function getEnableBranchSetup()
    {
        return $this->EnableBranchSetup;
    }
    /**
     * Set EnableBranchSetup value
     * @param bool $enableBranchSetup
     * @return \StructType\Organisation
     */
    public function setEnableBranchSetup($enableBranchSetup = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableBranchSetup) && !is_bool($enableBranchSetup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableBranchSetup, true), gettype($enableBranchSetup)), __LINE__);
        }
        $this->EnableBranchSetup = $enableBranchSetup;
        return $this;
    }
    /**
     * Get EnableMultipleWorkflow value
     * @return bool
     */
    public function getEnableMultipleWorkflow()
    {
        return $this->EnableMultipleWorkflow;
    }
    /**
     * Set EnableMultipleWorkflow value
     * @param bool $enableMultipleWorkflow
     * @return \StructType\Organisation
     */
    public function setEnableMultipleWorkflow($enableMultipleWorkflow = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableMultipleWorkflow) && !is_bool($enableMultipleWorkflow)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableMultipleWorkflow, true), gettype($enableMultipleWorkflow)), __LINE__);
        }
        $this->EnableMultipleWorkflow = $enableMultipleWorkflow;
        return $this;
    }
    /**
     * Get AutoGenerateOrgTranRefNo value
     * @return bool
     */
    public function getAutoGenerateOrgTranRefNo()
    {
        return $this->AutoGenerateOrgTranRefNo;
    }
    /**
     * Set AutoGenerateOrgTranRefNo value
     * @param bool $autoGenerateOrgTranRefNo
     * @return \StructType\Organisation
     */
    public function setAutoGenerateOrgTranRefNo($autoGenerateOrgTranRefNo = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoGenerateOrgTranRefNo) && !is_bool($autoGenerateOrgTranRefNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoGenerateOrgTranRefNo, true), gettype($autoGenerateOrgTranRefNo)), __LINE__);
        }
        $this->AutoGenerateOrgTranRefNo = $autoGenerateOrgTranRefNo;
        return $this;
    }
    /**
     * Get IsSetupDefaultUploadTemplate value
     * @return bool
     */
    public function getIsSetupDefaultUploadTemplate()
    {
        return $this->IsSetupDefaultUploadTemplate;
    }
    /**
     * Set IsSetupDefaultUploadTemplate value
     * @param bool $isSetupDefaultUploadTemplate
     * @return \StructType\Organisation
     */
    public function setIsSetupDefaultUploadTemplate($isSetupDefaultUploadTemplate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSetupDefaultUploadTemplate) && !is_bool($isSetupDefaultUploadTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSetupDefaultUploadTemplate, true), gettype($isSetupDefaultUploadTemplate)), __LINE__);
        }
        $this->IsSetupDefaultUploadTemplate = $isSetupDefaultUploadTemplate;
        return $this;
    }
    /**
     * Get IsSetupDefaultRoles value
     * @return bool
     */
    public function getIsSetupDefaultRoles()
    {
        return $this->IsSetupDefaultRoles;
    }
    /**
     * Set IsSetupDefaultRoles value
     * @param bool $isSetupDefaultRoles
     * @return \StructType\Organisation
     */
    public function setIsSetupDefaultRoles($isSetupDefaultRoles = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSetupDefaultRoles) && !is_bool($isSetupDefaultRoles)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSetupDefaultRoles, true), gettype($isSetupDefaultRoles)), __LINE__);
        }
        $this->IsSetupDefaultRoles = $isSetupDefaultRoles;
        return $this;
    }
    /**
     * Get IsSetupDefaultMenus value
     * @return bool
     */
    public function getIsSetupDefaultMenus()
    {
        return $this->IsSetupDefaultMenus;
    }
    /**
     * Set IsSetupDefaultMenus value
     * @param bool $isSetupDefaultMenus
     * @return \StructType\Organisation
     */
    public function setIsSetupDefaultMenus($isSetupDefaultMenus = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSetupDefaultMenus) && !is_bool($isSetupDefaultMenus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSetupDefaultMenus, true), gettype($isSetupDefaultMenus)), __LINE__);
        }
        $this->IsSetupDefaultMenus = $isSetupDefaultMenus;
        return $this;
    }
    /**
     * Get IsSetupRoleMenuAccesses value
     * @return bool
     */
    public function getIsSetupRoleMenuAccesses()
    {
        return $this->IsSetupRoleMenuAccesses;
    }
    /**
     * Set IsSetupRoleMenuAccesses value
     * @param bool $isSetupRoleMenuAccesses
     * @return \StructType\Organisation
     */
    public function setIsSetupRoleMenuAccesses($isSetupRoleMenuAccesses = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSetupRoleMenuAccesses) && !is_bool($isSetupRoleMenuAccesses)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSetupRoleMenuAccesses, true), gettype($isSetupRoleMenuAccesses)), __LINE__);
        }
        $this->IsSetupRoleMenuAccesses = $isSetupRoleMenuAccesses;
        return $this;
    }
    /**
     * Get IsNew value
     * @return bool
     */
    public function getIsNew()
    {
        return $this->IsNew;
    }
    /**
     * Set IsNew value
     * @param bool $isNew
     * @return \StructType\Organisation
     */
    public function setIsNew($isNew = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNew) && !is_bool($isNew)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNew, true), gettype($isNew)), __LINE__);
        }
        $this->IsNew = $isNew;
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * Get TokenUsageMode value
     * @return int
     */
    public function getTokenUsageMode()
    {
        return $this->TokenUsageMode;
    }
    /**
     * Set TokenUsageMode value
     * @param int $tokenUsageMode
     * @return \StructType\Organisation
     */
    public function setTokenUsageMode($tokenUsageMode = null)
    {
        // validation for constraint: int
        if (!is_null($tokenUsageMode) && !(is_int($tokenUsageMode) || ctype_digit($tokenUsageMode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tokenUsageMode, true), gettype($tokenUsageMode)), __LINE__);
        }
        $this->TokenUsageMode = $tokenUsageMode;
        return $this;
    }
    /**
     * Get RealTimeTransUploadThreshold value
     * @return int
     */
    public function getRealTimeTransUploadThreshold()
    {
        return $this->RealTimeTransUploadThreshold;
    }
    /**
     * Set RealTimeTransUploadThreshold value
     * @param int $realTimeTransUploadThreshold
     * @return \StructType\Organisation
     */
    public function setRealTimeTransUploadThreshold($realTimeTransUploadThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($realTimeTransUploadThreshold) && !(is_int($realTimeTransUploadThreshold) || ctype_digit($realTimeTransUploadThreshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($realTimeTransUploadThreshold, true), gettype($realTimeTransUploadThreshold)), __LINE__);
        }
        $this->RealTimeTransUploadThreshold = $realTimeTransUploadThreshold;
        return $this;
    }
    /**
     * Get RealTimeTransApprovalThreshold value
     * @return int
     */
    public function getRealTimeTransApprovalThreshold()
    {
        return $this->RealTimeTransApprovalThreshold;
    }
    /**
     * Set RealTimeTransApprovalThreshold value
     * @param int $realTimeTransApprovalThreshold
     * @return \StructType\Organisation
     */
    public function setRealTimeTransApprovalThreshold($realTimeTransApprovalThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($realTimeTransApprovalThreshold) && !(is_int($realTimeTransApprovalThreshold) || ctype_digit($realTimeTransApprovalThreshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($realTimeTransApprovalThreshold, true), gettype($realTimeTransApprovalThreshold)), __LINE__);
        }
        $this->RealTimeTransApprovalThreshold = $realTimeTransApprovalThreshold;
        return $this;
    }
    /**
     * Get AutoCreateNewTransactionBeneficiary value
     * @return bool
     */
    public function getAutoCreateNewTransactionBeneficiary()
    {
        return $this->AutoCreateNewTransactionBeneficiary;
    }
    /**
     * Set AutoCreateNewTransactionBeneficiary value
     * @param bool $autoCreateNewTransactionBeneficiary
     * @return \StructType\Organisation
     */
    public function setAutoCreateNewTransactionBeneficiary($autoCreateNewTransactionBeneficiary = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoCreateNewTransactionBeneficiary) && !is_bool($autoCreateNewTransactionBeneficiary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoCreateNewTransactionBeneficiary, true), gettype($autoCreateNewTransactionBeneficiary)), __LINE__);
        }
        $this->AutoCreateNewTransactionBeneficiary = $autoCreateNewTransactionBeneficiary;
        return $this;
    }
    /**
     * Get EnableAPIIntegration value
     * @return bool
     */
    public function getEnableAPIIntegration()
    {
        return $this->EnableAPIIntegration;
    }
    /**
     * Set EnableAPIIntegration value
     * @param bool $enableAPIIntegration
     * @return \StructType\Organisation
     */
    public function setEnableAPIIntegration($enableAPIIntegration = null)
    {
        // validation for constraint: boolean
        if (!is_null($enableAPIIntegration) && !is_bool($enableAPIIntegration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enableAPIIntegration, true), gettype($enableAPIIntegration)), __LINE__);
        }
        $this->EnableAPIIntegration = $enableAPIIntegration;
        return $this;
    }
    /**
     * Get OrgCode value
     * @return string|null
     */
    public function getOrgCode()
    {
        return $this->OrgCode;
    }
    /**
     * Set OrgCode value
     * @param string $orgCode
     * @return \StructType\Organisation
     */
    public function setOrgCode($orgCode = null)
    {
        // validation for constraint: string
        if (!is_null($orgCode) && !is_string($orgCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgCode, true), gettype($orgCode)), __LINE__);
        }
        $this->OrgCode = $orgCode;
        return $this;
    }
    /**
     * Get OrganisationName value
     * @return string|null
     */
    public function getOrganisationName()
    {
        return $this->OrganisationName;
    }
    /**
     * Set OrganisationName value
     * @param string $organisationName
     * @return \StructType\Organisation
     */
    public function setOrganisationName($organisationName = null)
    {
        // validation for constraint: string
        if (!is_null($organisationName) && !is_string($organisationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationName, true), gettype($organisationName)), __LINE__);
        }
        $this->OrganisationName = $organisationName;
        return $this;
    }
    /**
     * Get ContactEmail value
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->ContactEmail;
    }
    /**
     * Set ContactEmail value
     * @param string $contactEmail
     * @return \StructType\Organisation
     */
    public function setContactEmail($contactEmail = null)
    {
        // validation for constraint: string
        if (!is_null($contactEmail) && !is_string($contactEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactEmail, true), gettype($contactEmail)), __LINE__);
        }
        $this->ContactEmail = $contactEmail;
        return $this;
    }
    /**
     * Get ContactPhone value
     * @return string|null
     */
    public function getContactPhone()
    {
        return $this->ContactPhone;
    }
    /**
     * Set ContactPhone value
     * @param string $contactPhone
     * @return \StructType\Organisation
     */
    public function setContactPhone($contactPhone = null)
    {
        // validation for constraint: string
        if (!is_null($contactPhone) && !is_string($contactPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPhone, true), gettype($contactPhone)), __LINE__);
        }
        $this->ContactPhone = $contactPhone;
        return $this;
    }
    /**
     * Get EncryptionKey value
     * @return string|null
     */
    public function getEncryptionKey()
    {
        return $this->EncryptionKey;
    }
    /**
     * Set EncryptionKey value
     * @param string $encryptionKey
     * @return \StructType\Organisation
     */
    public function setEncryptionKey($encryptionKey = null)
    {
        // validation for constraint: string
        if (!is_null($encryptionKey) && !is_string($encryptionKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptionKey, true), gettype($encryptionKey)), __LINE__);
        }
        $this->EncryptionKey = $encryptionKey;
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
     */
    public function setAccounts(\ArrayType\ArrayOfAccount $accounts = null)
    {
        $this->Accounts = $accounts;
        return $this;
    }
    /**
     * Get Batches value
     * @return \ArrayType\ArrayOfBatch|null
     */
    public function getBatches()
    {
        return $this->Batches;
    }
    /**
     * Set Batches value
     * @param \ArrayType\ArrayOfBatch $batches
     * @return \StructType\Organisation
     */
    public function setBatches(\ArrayType\ArrayOfBatch $batches = null)
    {
        $this->Batches = $batches;
        return $this;
    }
    /**
     * Get ChannelConfigurations value
     * @return \ArrayType\ArrayOfChannelConfiguration|null
     */
    public function getChannelConfigurations()
    {
        return $this->ChannelConfigurations;
    }
    /**
     * Set ChannelConfigurations value
     * @param \ArrayType\ArrayOfChannelConfiguration $channelConfigurations
     * @return \StructType\Organisation
     */
    public function setChannelConfigurations(\ArrayType\ArrayOfChannelConfiguration $channelConfigurations = null)
    {
        $this->ChannelConfigurations = $channelConfigurations;
        return $this;
    }
    /**
     * Get FapxOrgHeaders value
     * @return \ArrayType\ArrayOfFapxOrgHeader|null
     */
    public function getFapxOrgHeaders()
    {
        return $this->FapxOrgHeaders;
    }
    /**
     * Set FapxOrgHeaders value
     * @param \ArrayType\ArrayOfFapxOrgHeader $fapxOrgHeaders
     * @return \StructType\Organisation
     */
    public function setFapxOrgHeaders(\ArrayType\ArrayOfFapxOrgHeader $fapxOrgHeaders = null)
    {
        $this->FapxOrgHeaders = $fapxOrgHeaders;
        return $this;
    }
    /**
     * Get FileWatcherLogs value
     * @return \ArrayType\ArrayOfFileWatcherLog|null
     */
    public function getFileWatcherLogs()
    {
        return $this->FileWatcherLogs;
    }
    /**
     * Set FileWatcherLogs value
     * @param \ArrayType\ArrayOfFileWatcherLog $fileWatcherLogs
     * @return \StructType\Organisation
     */
    public function setFileWatcherLogs(\ArrayType\ArrayOfFileWatcherLog $fileWatcherLogs = null)
    {
        $this->FileWatcherLogs = $fileWatcherLogs;
        return $this;
    }
    /**
     * Get MenuPages value
     * @return \ArrayType\ArrayOfMenuPage|null
     */
    public function getMenuPages()
    {
        return $this->MenuPages;
    }
    /**
     * Set MenuPages value
     * @param \ArrayType\ArrayOfMenuPage $menuPages
     * @return \StructType\Organisation
     */
    public function setMenuPages(\ArrayType\ArrayOfMenuPage $menuPages = null)
    {
        $this->MenuPages = $menuPages;
        return $this;
    }
    /**
     * Get OrgChannelCharges value
     * @return \ArrayType\ArrayOfOrgChannelCharge|null
     */
    public function getOrgChannelCharges()
    {
        return $this->OrgChannelCharges;
    }
    /**
     * Set OrgChannelCharges value
     * @param \ArrayType\ArrayOfOrgChannelCharge $orgChannelCharges
     * @return \StructType\Organisation
     */
    public function setOrgChannelCharges(\ArrayType\ArrayOfOrgChannelCharge $orgChannelCharges = null)
    {
        $this->OrgChannelCharges = $orgChannelCharges;
        return $this;
    }
    /**
     * Get OrgRMs value
     * @return \ArrayType\ArrayOfOrgRM|null
     */
    public function getOrgRMs()
    {
        return $this->OrgRMs;
    }
    /**
     * Set OrgRMs value
     * @param \ArrayType\ArrayOfOrgRM $orgRMs
     * @return \StructType\Organisation
     */
    public function setOrgRMs(\ArrayType\ArrayOfOrgRM $orgRMs = null)
    {
        $this->OrgRMs = $orgRMs;
        return $this;
    }
    /**
     * Get Roles value
     * @return \ArrayType\ArrayOfRole|null
     */
    public function getRoles()
    {
        return $this->Roles;
    }
    /**
     * Set Roles value
     * @param \ArrayType\ArrayOfRole $roles
     * @return \StructType\Organisation
     */
    public function setRoles(\ArrayType\ArrayOfRole $roles = null)
    {
        $this->Roles = $roles;
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
     * @return \StructType\Organisation
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
     * @return \StructType\Organisation
     */
    public function setThirdPartyAccounts(\ArrayType\ArrayOfThirdPartyAccount $thirdPartyAccounts = null)
    {
        $this->ThirdPartyAccounts = $thirdPartyAccounts;
        return $this;
    }
    /**
     * Get TranWorkflows value
     * @return \ArrayType\ArrayOfTranWorkflow|null
     */
    public function getTranWorkflows()
    {
        return $this->TranWorkflows;
    }
    /**
     * Set TranWorkflows value
     * @param \ArrayType\ArrayOfTranWorkflow $tranWorkflows
     * @return \StructType\Organisation
     */
    public function setTranWorkflows(\ArrayType\ArrayOfTranWorkflow $tranWorkflows = null)
    {
        $this->TranWorkflows = $tranWorkflows;
        return $this;
    }
    /**
     * Get Uploads value
     * @return \ArrayType\ArrayOfUpload|null
     */
    public function getUploads()
    {
        return $this->Uploads;
    }
    /**
     * Set Uploads value
     * @param \ArrayType\ArrayOfUpload $uploads
     * @return \StructType\Organisation
     */
    public function setUploads(\ArrayType\ArrayOfUpload $uploads = null)
    {
        $this->Uploads = $uploads;
        return $this;
    }
    /**
     * Get WorkFlows value
     * @return \ArrayType\ArrayOfWorkFlow|null
     */
    public function getWorkFlows()
    {
        return $this->WorkFlows;
    }
    /**
     * Set WorkFlows value
     * @param \ArrayType\ArrayOfWorkFlow $workFlows
     * @return \StructType\Organisation
     */
    public function setWorkFlows(\ArrayType\ArrayOfWorkFlow $workFlows = null)
    {
        $this->WorkFlows = $workFlows;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Organisation
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
