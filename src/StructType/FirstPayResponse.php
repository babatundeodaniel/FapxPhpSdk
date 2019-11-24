<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FirstPayResponse StructType
 * @subpackage Structs
 */
class FirstPayResponse extends AbstractStructBase
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
     * The failedXml
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $failedXml;
    /**
     * The SuccessXml
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SuccessXml;
    /**
     * The FailedTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction
     */
    public $FailedTrans;
    /**
     * The SuccessTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction
     */
    public $SuccessTrans;
    /**
     * The uploadList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfUpload
     */
    public $uploadList;
    /**
     * The Transaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Transaction
     */
    public $Transaction;
    /**
     * The upload
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Upload
     */
    public $upload;
    /**
     * The BulkUpload
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Pain001Upload
     */
    public $BulkUpload;
    /**
     * The ErrorMsg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ErrorMsg;
    /**
     * The OtherMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OtherMessage;
    /**
     * Constructor method for FirstPayResponse
     * @uses FirstPayResponse::setUploadRefNo()
     * @uses FirstPayResponse::setFailedXml()
     * @uses FirstPayResponse::setSuccessXml()
     * @uses FirstPayResponse::setFailedTrans()
     * @uses FirstPayResponse::setSuccessTrans()
     * @uses FirstPayResponse::setUploadList()
     * @uses FirstPayResponse::setTransaction()
     * @uses FirstPayResponse::setUpload()
     * @uses FirstPayResponse::setBulkUpload()
     * @uses FirstPayResponse::setErrorMsg()
     * @uses FirstPayResponse::setOtherMessage()
     * @param string $uploadRefNo
     * @param string $failedXml
     * @param string $successXml
     * @param \ArrayType\ArrayOfTransaction $failedTrans
     * @param \ArrayType\ArrayOfTransaction $successTrans
     * @param \ArrayType\ArrayOfUpload $uploadList
     * @param \StructType\Transaction $transaction
     * @param \StructType\Upload $upload
     * @param \StructType\Pain001Upload $bulkUpload
     * @param string $errorMsg
     * @param string $otherMessage
     */
    public function __construct($uploadRefNo = null, $failedXml = null, $successXml = null, \ArrayType\ArrayOfTransaction $failedTrans = null, \ArrayType\ArrayOfTransaction $successTrans = null, \ArrayType\ArrayOfUpload $uploadList = null, \StructType\Transaction $transaction = null, \StructType\Upload $upload = null, \StructType\Pain001Upload $bulkUpload = null, $errorMsg = null, $otherMessage = null)
    {
        $this
            ->setUploadRefNo($uploadRefNo)
            ->setFailedXml($failedXml)
            ->setSuccessXml($successXml)
            ->setFailedTrans($failedTrans)
            ->setSuccessTrans($successTrans)
            ->setUploadList($uploadList)
            ->setTransaction($transaction)
            ->setUpload($upload)
            ->setBulkUpload($bulkUpload)
            ->setErrorMsg($errorMsg)
            ->setOtherMessage($otherMessage);
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
     * @return \StructType\FirstPayResponse
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
     * Get failedXml value
     * @return string|null
     */
    public function getFailedXml()
    {
        return $this->failedXml;
    }
    /**
     * Set failedXml value
     * @param string $failedXml
     * @return \StructType\FirstPayResponse
     */
    public function setFailedXml($failedXml = null)
    {
        // validation for constraint: string
        if (!is_null($failedXml) && !is_string($failedXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($failedXml, true), gettype($failedXml)), __LINE__);
        }
        $this->failedXml = $failedXml;
        return $this;
    }
    /**
     * Get SuccessXml value
     * @return string|null
     */
    public function getSuccessXml()
    {
        return $this->SuccessXml;
    }
    /**
     * Set SuccessXml value
     * @param string $successXml
     * @return \StructType\FirstPayResponse
     */
    public function setSuccessXml($successXml = null)
    {
        // validation for constraint: string
        if (!is_null($successXml) && !is_string($successXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($successXml, true), gettype($successXml)), __LINE__);
        }
        $this->SuccessXml = $successXml;
        return $this;
    }
    /**
     * Get FailedTrans value
     * @return \ArrayType\ArrayOfTransaction|null
     */
    public function getFailedTrans()
    {
        return $this->FailedTrans;
    }
    /**
     * Set FailedTrans value
     * @param \ArrayType\ArrayOfTransaction $failedTrans
     * @return \StructType\FirstPayResponse
     */
    public function setFailedTrans(\ArrayType\ArrayOfTransaction $failedTrans = null)
    {
        $this->FailedTrans = $failedTrans;
        return $this;
    }
    /**
     * Get SuccessTrans value
     * @return \ArrayType\ArrayOfTransaction|null
     */
    public function getSuccessTrans()
    {
        return $this->SuccessTrans;
    }
    /**
     * Set SuccessTrans value
     * @param \ArrayType\ArrayOfTransaction $successTrans
     * @return \StructType\FirstPayResponse
     */
    public function setSuccessTrans(\ArrayType\ArrayOfTransaction $successTrans = null)
    {
        $this->SuccessTrans = $successTrans;
        return $this;
    }
    /**
     * Get uploadList value
     * @return \ArrayType\ArrayOfUpload|null
     */
    public function getUploadList()
    {
        return $this->uploadList;
    }
    /**
     * Set uploadList value
     * @param \ArrayType\ArrayOfUpload $uploadList
     * @return \StructType\FirstPayResponse
     */
    public function setUploadList(\ArrayType\ArrayOfUpload $uploadList = null)
    {
        $this->uploadList = $uploadList;
        return $this;
    }
    /**
     * Get Transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\FirstPayResponse
     */
    public function setTransaction(\StructType\Transaction $transaction = null)
    {
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Get upload value
     * @return \StructType\Upload|null
     */
    public function getUpload()
    {
        return $this->upload;
    }
    /**
     * Set upload value
     * @param \StructType\Upload $upload
     * @return \StructType\FirstPayResponse
     */
    public function setUpload(\StructType\Upload $upload = null)
    {
        $this->upload = $upload;
        return $this;
    }
    /**
     * Get BulkUpload value
     * @return \StructType\Pain001Upload|null
     */
    public function getBulkUpload()
    {
        return $this->BulkUpload;
    }
    /**
     * Set BulkUpload value
     * @param \StructType\Pain001Upload $bulkUpload
     * @return \StructType\FirstPayResponse
     */
    public function setBulkUpload(\StructType\Pain001Upload $bulkUpload = null)
    {
        $this->BulkUpload = $bulkUpload;
        return $this;
    }
    /**
     * Get ErrorMsg value
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->ErrorMsg;
    }
    /**
     * Set ErrorMsg value
     * @param string $errorMsg
     * @return \StructType\FirstPayResponse
     */
    public function setErrorMsg($errorMsg = null)
    {
        // validation for constraint: string
        if (!is_null($errorMsg) && !is_string($errorMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMsg, true), gettype($errorMsg)), __LINE__);
        }
        $this->ErrorMsg = $errorMsg;
        return $this;
    }
    /**
     * Get OtherMessage value
     * @return string|null
     */
    public function getOtherMessage()
    {
        return $this->OtherMessage;
    }
    /**
     * Set OtherMessage value
     * @param string $otherMessage
     * @return \StructType\FirstPayResponse
     */
    public function setOtherMessage($otherMessage = null)
    {
        // validation for constraint: string
        if (!is_null($otherMessage) && !is_string($otherMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherMessage, true), gettype($otherMessage)), __LINE__);
        }
        $this->OtherMessage = $otherMessage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FirstPayResponse
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
