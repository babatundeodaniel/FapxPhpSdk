<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileWatcherLog StructType
 * @subpackage Structs
 */
class FileWatcherLog extends AbstractStructBase
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
     * The UploadStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $UploadStatus;
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
     * The LastActionDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LastActionDate;
    /**
     * The TryCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $TryCount;
    /**
     * The ProcessedDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $ProcessedDate;
    /**
     * The FilePath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FilePath;
    /**
     * The EncryptionKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EncryptionKey;
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Error;
    /**
     * The EncryptPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EncryptPath;
    /**
     * The ProcessedPath
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProcessedPath;
    /**
     * The Organisation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Organisation
     */
    public $Organisation;
    /**
     * Constructor method for FileWatcherLog
     * @uses FileWatcherLog::setID()
     * @uses FileWatcherLog::setOrgID()
     * @uses FileWatcherLog::setUploadStatus()
     * @uses FileWatcherLog::setActionDate()
     * @uses FileWatcherLog::setLastActionDate()
     * @uses FileWatcherLog::setTryCount()
     * @uses FileWatcherLog::setProcessedDate()
     * @uses FileWatcherLog::setFilePath()
     * @uses FileWatcherLog::setEncryptionKey()
     * @uses FileWatcherLog::setError()
     * @uses FileWatcherLog::setEncryptPath()
     * @uses FileWatcherLog::setProcessedPath()
     * @uses FileWatcherLog::setOrganisation()
     * @param int $iD
     * @param int $orgID
     * @param int $uploadStatus
     * @param string $actionDate
     * @param string $lastActionDate
     * @param int $tryCount
     * @param string $processedDate
     * @param string $filePath
     * @param string $encryptionKey
     * @param string $error
     * @param string $encryptPath
     * @param string $processedPath
     * @param \StructType\Organisation $organisation
     */
    public function __construct($iD = null, $orgID = null, $uploadStatus = null, $actionDate = null, $lastActionDate = null, $tryCount = null, $processedDate = null, $filePath = null, $encryptionKey = null, $error = null, $encryptPath = null, $processedPath = null, \StructType\Organisation $organisation = null)
    {
        $this
            ->setID($iD)
            ->setOrgID($orgID)
            ->setUploadStatus($uploadStatus)
            ->setActionDate($actionDate)
            ->setLastActionDate($lastActionDate)
            ->setTryCount($tryCount)
            ->setProcessedDate($processedDate)
            ->setFilePath($filePath)
            ->setEncryptionKey($encryptionKey)
            ->setError($error)
            ->setEncryptPath($encryptPath)
            ->setProcessedPath($processedPath)
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
     * @return \StructType\FileWatcherLog
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
     * @return \StructType\FileWatcherLog
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
     * Get UploadStatus value
     * @return int
     */
    public function getUploadStatus()
    {
        return $this->UploadStatus;
    }
    /**
     * Set UploadStatus value
     * @param int $uploadStatus
     * @return \StructType\FileWatcherLog
     */
    public function setUploadStatus($uploadStatus = null)
    {
        // validation for constraint: int
        if (!is_null($uploadStatus) && !(is_int($uploadStatus) || ctype_digit($uploadStatus))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($uploadStatus, true), gettype($uploadStatus)), __LINE__);
        }
        $this->UploadStatus = $uploadStatus;
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
     * @return \StructType\FileWatcherLog
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
     * Get LastActionDate value
     * @return string
     */
    public function getLastActionDate()
    {
        return $this->LastActionDate;
    }
    /**
     * Set LastActionDate value
     * @param string $lastActionDate
     * @return \StructType\FileWatcherLog
     */
    public function setLastActionDate($lastActionDate = null)
    {
        // validation for constraint: string
        if (!is_null($lastActionDate) && !is_string($lastActionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastActionDate, true), gettype($lastActionDate)), __LINE__);
        }
        $this->LastActionDate = $lastActionDate;
        return $this;
    }
    /**
     * Get TryCount value
     * @return int
     */
    public function getTryCount()
    {
        return $this->TryCount;
    }
    /**
     * Set TryCount value
     * @param int $tryCount
     * @return \StructType\FileWatcherLog
     */
    public function setTryCount($tryCount = null)
    {
        // validation for constraint: int
        if (!is_null($tryCount) && !(is_int($tryCount) || ctype_digit($tryCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tryCount, true), gettype($tryCount)), __LINE__);
        }
        $this->TryCount = $tryCount;
        return $this;
    }
    /**
     * Get ProcessedDate value
     * @return string
     */
    public function getProcessedDate()
    {
        return $this->ProcessedDate;
    }
    /**
     * Set ProcessedDate value
     * @param string $processedDate
     * @return \StructType\FileWatcherLog
     */
    public function setProcessedDate($processedDate = null)
    {
        // validation for constraint: string
        if (!is_null($processedDate) && !is_string($processedDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processedDate, true), gettype($processedDate)), __LINE__);
        }
        $this->ProcessedDate = $processedDate;
        return $this;
    }
    /**
     * Get FilePath value
     * @return string|null
     */
    public function getFilePath()
    {
        return $this->FilePath;
    }
    /**
     * Set FilePath value
     * @param string $filePath
     * @return \StructType\FileWatcherLog
     */
    public function setFilePath($filePath = null)
    {
        // validation for constraint: string
        if (!is_null($filePath) && !is_string($filePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filePath, true), gettype($filePath)), __LINE__);
        }
        $this->FilePath = $filePath;
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
     * @return \StructType\FileWatcherLog
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
     * Get Error value
     * @return string|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param string $error
     * @return \StructType\FileWatcherLog
     */
    public function setError($error = null)
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Get EncryptPath value
     * @return string|null
     */
    public function getEncryptPath()
    {
        return $this->EncryptPath;
    }
    /**
     * Set EncryptPath value
     * @param string $encryptPath
     * @return \StructType\FileWatcherLog
     */
    public function setEncryptPath($encryptPath = null)
    {
        // validation for constraint: string
        if (!is_null($encryptPath) && !is_string($encryptPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptPath, true), gettype($encryptPath)), __LINE__);
        }
        $this->EncryptPath = $encryptPath;
        return $this;
    }
    /**
     * Get ProcessedPath value
     * @return string|null
     */
    public function getProcessedPath()
    {
        return $this->ProcessedPath;
    }
    /**
     * Set ProcessedPath value
     * @param string $processedPath
     * @return \StructType\FileWatcherLog
     */
    public function setProcessedPath($processedPath = null)
    {
        // validation for constraint: string
        if (!is_null($processedPath) && !is_string($processedPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processedPath, true), gettype($processedPath)), __LINE__);
        }
        $this->ProcessedPath = $processedPath;
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
     * @return \StructType\FileWatcherLog
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
     * @return \StructType\FileWatcherLog
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
