<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPaymentTrans ArrayType
 * @subpackage Arrays
 */
class ArrayOfPaymentTrans extends AbstractStructArrayBase
{
    /**
     * The PaymentTrans
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PaymentTrans[]
     */
    public $PaymentTrans;
    /**
     * Constructor method for ArrayOfPaymentTrans
     * @uses ArrayOfPaymentTrans::setPaymentTrans()
     * @param \StructType\PaymentTrans[] $paymentTrans
     */
    public function __construct(array $paymentTrans = array())
    {
        $this
            ->setPaymentTrans($paymentTrans);
    }
    /**
     * Get PaymentTrans value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PaymentTrans[]|null
     */
    public function getPaymentTrans()
    {
        return isset($this->PaymentTrans) ? $this->PaymentTrans : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentTrans method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentTrans method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentTransForArrayConstraintsFromSetPaymentTrans(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPaymentTransPaymentTransItem) {
            // validation for constraint: itemType
            if (!$arrayOfPaymentTransPaymentTransItem instanceof \StructType\PaymentTrans) {
                $invalidValues[] = is_object($arrayOfPaymentTransPaymentTransItem) ? get_class($arrayOfPaymentTransPaymentTransItem) : sprintf('%s(%s)', gettype($arrayOfPaymentTransPaymentTransItem), var_export($arrayOfPaymentTransPaymentTransItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentTrans property can only contain items of type \StructType\PaymentTrans, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentTrans value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\PaymentTrans[] $paymentTrans
     * @return \ArrayType\ArrayOfPaymentTrans
     */
    public function setPaymentTrans(array $paymentTrans = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentTransArrayErrorMessage = self::validatePaymentTransForArrayConstraintsFromSetPaymentTrans($paymentTrans))) {
            throw new \InvalidArgumentException($paymentTransArrayErrorMessage, __LINE__);
        }
        if (is_null($paymentTrans) || (is_array($paymentTrans) && empty($paymentTrans))) {
            unset($this->PaymentTrans);
        } else {
            $this->PaymentTrans = $paymentTrans;
        }
        return $this;
    }
    /**
     * Add item to PaymentTrans value
     * @throws \InvalidArgumentException
     * @param \StructType\PaymentTrans $item
     * @return \ArrayType\ArrayOfPaymentTrans
     */
    public function addToPaymentTrans(\StructType\PaymentTrans $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PaymentTrans) {
            throw new \InvalidArgumentException(sprintf('The PaymentTrans property can only contain items of type \StructType\PaymentTrans, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentTrans[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PaymentTrans|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PaymentTrans|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PaymentTrans|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PaymentTrans|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PaymentTrans|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PaymentTrans
     */
    public function getAttributeName()
    {
        return 'PaymentTrans';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \ArrayType\ArrayOfPaymentTrans
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
