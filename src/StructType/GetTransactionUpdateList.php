<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTransactionUpdateList StructType
 * @subpackage Structs
 */
class GetTransactionUpdateList extends AbstractStructBase
{
    /**
     * The UploadRefNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UploadRefNo;
    /**
     * Constructor method for GetTransactionUpdateList
     * @uses GetTransactionUpdateList::setUploadRefNo()
     * @param string $uploadRefNo
     */
    public function __construct($uploadRefNo = null)
    {
        $this
            ->setUploadRefNo($uploadRefNo);
    }
    /**
     * Get UploadRefNo value
     * @return string|null
     */
    public function getUploadRefNo()
    {
        return $this->UploadRefNo;
    }
    /**
     * Set UploadRefNo value
     * @param string $uploadRefNo
     * @return \StructType\GetTransactionUpdateList
     */
    public function setUploadRefNo($uploadRefNo = null)
    {
        // validation for constraint: string
        if (!is_null($uploadRefNo) && !is_string($uploadRefNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadRefNo, true), gettype($uploadRefNo)), __LINE__);
        }
        $this->UploadRefNo = $uploadRefNo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GetTransactionUpdateList
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
