<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserSessionLog StructType
 * @subpackage Structs
 */
class UserSessionLog extends AbstractStructBase
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
     * The UserID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var int
     */
    public $UserID;
    /**
     * The LoginTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LoginTime;
    /**
     * The LogoutTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var string
     */
    public $LogoutTime;
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
     * The IsActive
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     * @var bool
     */
    public $IsActive;
    /**
     * The ClientName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClientName;
    /**
     * The IPAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IPAddress;
    /**
     * The MAC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MAC;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\User
     */
    public $User;
    /**
     * Constructor method for UserSessionLog
     * @uses UserSessionLog::setID()
     * @uses UserSessionLog::setUserID()
     * @uses UserSessionLog::setLoginTime()
     * @uses UserSessionLog::setLogoutTime()
     * @uses UserSessionLog::setLastActionDate()
     * @uses UserSessionLog::setIsActive()
     * @uses UserSessionLog::setClientName()
     * @uses UserSessionLog::setIPAddress()
     * @uses UserSessionLog::setMAC()
     * @uses UserSessionLog::setUser()
     * @param int $iD
     * @param int $userID
     * @param string $loginTime
     * @param string $logoutTime
     * @param string $lastActionDate
     * @param bool $isActive
     * @param string $clientName
     * @param string $iPAddress
     * @param string $mAC
     * @param \StructType\User $user
     */
    public function __construct($iD = null, $userID = null, $loginTime = null, $logoutTime = null, $lastActionDate = null, $isActive = null, $clientName = null, $iPAddress = null, $mAC = null, \StructType\User $user = null)
    {
        $this
            ->setID($iD)
            ->setUserID($userID)
            ->setLoginTime($loginTime)
            ->setLogoutTime($logoutTime)
            ->setLastActionDate($lastActionDate)
            ->setIsActive($isActive)
            ->setClientName($clientName)
            ->setIPAddress($iPAddress)
            ->setMAC($mAC)
            ->setUser($user);
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
     * @return \StructType\UserSessionLog
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
     * Get UserID value
     * @return int
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param int $userID
     * @return \StructType\UserSessionLog
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: int
        if (!is_null($userID) && !(is_int($userID) || ctype_digit($userID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get LoginTime value
     * @return string
     */
    public function getLoginTime()
    {
        return $this->LoginTime;
    }
    /**
     * Set LoginTime value
     * @param string $loginTime
     * @return \StructType\UserSessionLog
     */
    public function setLoginTime($loginTime = null)
    {
        // validation for constraint: string
        if (!is_null($loginTime) && !is_string($loginTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($loginTime, true), gettype($loginTime)), __LINE__);
        }
        $this->LoginTime = $loginTime;
        return $this;
    }
    /**
     * Get LogoutTime value
     * @return string
     */
    public function getLogoutTime()
    {
        return $this->LogoutTime;
    }
    /**
     * Set LogoutTime value
     * @param string $logoutTime
     * @return \StructType\UserSessionLog
     */
    public function setLogoutTime($logoutTime = null)
    {
        // validation for constraint: string
        if (!is_null($logoutTime) && !is_string($logoutTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoutTime, true), gettype($logoutTime)), __LINE__);
        }
        $this->LogoutTime = $logoutTime;
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
     * @return \StructType\UserSessionLog
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
     * @return \StructType\UserSessionLog
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
     * Get ClientName value
     * @return string|null
     */
    public function getClientName()
    {
        return $this->ClientName;
    }
    /**
     * Set ClientName value
     * @param string $clientName
     * @return \StructType\UserSessionLog
     */
    public function setClientName($clientName = null)
    {
        // validation for constraint: string
        if (!is_null($clientName) && !is_string($clientName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientName, true), gettype($clientName)), __LINE__);
        }
        $this->ClientName = $clientName;
        return $this;
    }
    /**
     * Get IPAddress value
     * @return string|null
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }
    /**
     * Set IPAddress value
     * @param string $iPAddress
     * @return \StructType\UserSessionLog
     */
    public function setIPAddress($iPAddress = null)
    {
        // validation for constraint: string
        if (!is_null($iPAddress) && !is_string($iPAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iPAddress, true), gettype($iPAddress)), __LINE__);
        }
        $this->IPAddress = $iPAddress;
        return $this;
    }
    /**
     * Get MAC value
     * @return string|null
     */
    public function getMAC()
    {
        return $this->MAC;
    }
    /**
     * Set MAC value
     * @param string $mAC
     * @return \StructType\UserSessionLog
     */
    public function setMAC($mAC = null)
    {
        // validation for constraint: string
        if (!is_null($mAC) && !is_string($mAC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mAC, true), gettype($mAC)), __LINE__);
        }
        $this->MAC = $mAC;
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
     * @return \StructType\UserSessionLog
     */
    public function setUser(\StructType\User $user = null)
    {
        $this->User = $user;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\UserSessionLog
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
