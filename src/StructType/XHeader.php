<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for xHeader StructType
 * Meta information extracted from the WSDL
 * - type: tns:xHeader
 * @subpackage Structs
 */
class XHeader extends AbstractStructBase
{
    /**
     * The servicename
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $servicename;
    /**
     * The passkey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $passkey;
    /**
     * The OrgCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrgCode;
    /**
     * Constructor method for xHeader
     * @uses XHeader::setServicename()
     * @uses XHeader::setPasskey()
     * @uses XHeader::setOrgCode()
     * @param string $servicename
     * @param string $passkey
     * @param string $orgCode
     */
    public function __construct($servicename = null, $passkey = null, $orgCode = null)
    {
        $this
            ->setServicename($servicename)
            ->setPasskey($passkey)
            ->setOrgCode($orgCode);
    }
    /**
     * Get servicename value
     * @return string|null
     */
    public function getServicename()
    {
        return $this->servicename;
    }
    /**
     * Set servicename value
     * @param string $servicename
     * @return \StructType\XHeader
     */
    public function setServicename($servicename = null)
    {
        // validation for constraint: string
        if (!is_null($servicename) && !is_string($servicename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($servicename, true), gettype($servicename)), __LINE__);
        }
        $this->servicename = $servicename;
        return $this;
    }
    /**
     * Get passkey value
     * @return string|null
     */
    public function getPasskey()
    {
        return $this->passkey;
    }
    /**
     * Set passkey value
     * @param string $passkey
     * @return \StructType\XHeader
     */
    public function setPasskey($passkey = null)
    {
        // validation for constraint: string
        if (!is_null($passkey) && !is_string($passkey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passkey, true), gettype($passkey)), __LINE__);
        }
        $this->passkey = $passkey;
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
     * @return \StructType\XHeader
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\XHeader
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
