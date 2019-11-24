<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransaction StructType
 * @subpackage Structs
 */
class GetTransaction extends AbstractStructBase
{
    /**
     * The OrgTranRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OrgTranRefNo;
    /**
     * Constructor method for GetTransaction
     * @uses GetTransaction::setOrgTranRefNo()
     * @param string $orgTranRefNo
     */
    public function __construct($orgTranRefNo = null)
    {
        $this
            ->setOrgTranRefNo($orgTranRefNo);
    }
    /**
     * Get OrgTranRefNo value
     * @return string|null
     */
    public function getOrgTranRefNo()
    {
        return $this->OrgTranRefNo;
    }
    /**
     * Set OrgTranRefNo value
     * @param string $orgTranRefNo
     * @return \StructType\GetTransaction
     */
    public function setOrgTranRefNo($orgTranRefNo = null)
    {
        // validation for constraint: string
        if (!is_null($orgTranRefNo) && !is_string($orgTranRefNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgTranRefNo, true), gettype($orgTranRefNo)), __LINE__);
        }
        $this->OrgTranRefNo = $orgTranRefNo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTransaction
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
