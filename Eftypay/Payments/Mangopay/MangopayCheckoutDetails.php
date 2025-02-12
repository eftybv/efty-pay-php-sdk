<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/payments/mangopay/checkout.proto

namespace Eftypay\Payments\Mangopay;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MangopayCheckoutDetails contains the details used by the Efty Pay admin front-end to render the checkout page / widget.
 *
 * Generated from protobuf message <code>eftypay.payments.mangopay.MangopayCheckoutDetails</code>
 */
class MangopayCheckoutDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * mangopayPayInId contains the Mangopay pay-in ID. Legacy field; used before credit card payments were introduced.
     *
     * Generated from protobuf field <code>string mangopayPayInId = 1;</code>
     */
    protected $mangopayPayInId = '';
    /**
     * paymentMethod contains the latest Mangopay payment method that is used for the pay-in. If this is set to card payment, the express fee is added to the transaction.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.PaymentMethod paymentMethod = 2;</code>
     */
    protected $paymentMethod = 0;
    /**
     * checkoutStatus contains the Mangopay checkout status.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.CheckoutStatus checkoutStatus = 3;</code>
     */
    protected $checkoutStatus = 0;
    /**
     * payInDetails contains the Mangopay pay-in ID for a particular payment method. The key is the enum string of the PaymentMethod. The value is the Mangopay Pay-In ID.
     *
     * Generated from protobuf field <code>map<string, string> payInDetails = 4;</code>
     */
    private $payInDetails;
    /**
     * hasPayInAmountDiscrepancy is set to true if there is a pay-in discrepancy with the amount received by Mangopay.
     *
     * Generated from protobuf field <code>bool hasPayInAmountDiscrepancy = 5;</code>
     */
    protected $hasPayInAmountDiscrepancy = false;
    /**
     * amountReceivedByMangopay contains the exact amount that was received by Mangopay for the initial pay-in for this transaction.
     *
     * Generated from protobuf field <code>int64 amountReceivedByMangopay = 6;</code>
     */
    protected $amountReceivedByMangopay = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mangopayPayInId
     *           mangopayPayInId contains the Mangopay pay-in ID. Legacy field; used before credit card payments were introduced.
     *     @type int $paymentMethod
     *           paymentMethod contains the latest Mangopay payment method that is used for the pay-in. If this is set to card payment, the express fee is added to the transaction.
     *     @type int $checkoutStatus
     *           checkoutStatus contains the Mangopay checkout status.
     *     @type array|\Google\Protobuf\Internal\MapField $payInDetails
     *           payInDetails contains the Mangopay pay-in ID for a particular payment method. The key is the enum string of the PaymentMethod. The value is the Mangopay Pay-In ID.
     *     @type bool $hasPayInAmountDiscrepancy
     *           hasPayInAmountDiscrepancy is set to true if there is a pay-in discrepancy with the amount received by Mangopay.
     *     @type int|string $amountReceivedByMangopay
     *           amountReceivedByMangopay contains the exact amount that was received by Mangopay for the initial pay-in for this transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Payments\Mangopay\Checkout::initOnce();
        parent::__construct($data);
    }

    /**
     * mangopayPayInId contains the Mangopay pay-in ID. Legacy field; used before credit card payments were introduced.
     *
     * Generated from protobuf field <code>string mangopayPayInId = 1;</code>
     * @return string
     */
    public function getMangopayPayInId()
    {
        return $this->mangopayPayInId;
    }

    /**
     * mangopayPayInId contains the Mangopay pay-in ID. Legacy field; used before credit card payments were introduced.
     *
     * Generated from protobuf field <code>string mangopayPayInId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMangopayPayInId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mangopayPayInId = $var;

        return $this;
    }

    /**
     * paymentMethod contains the latest Mangopay payment method that is used for the pay-in. If this is set to card payment, the express fee is added to the transaction.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.PaymentMethod paymentMethod = 2;</code>
     * @return int
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * paymentMethod contains the latest Mangopay payment method that is used for the pay-in. If this is set to card payment, the express fee is added to the transaction.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.PaymentMethod paymentMethod = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPaymentMethod($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Payments\Mangopay\PaymentMethod::class);
        $this->paymentMethod = $var;

        return $this;
    }

    /**
     * checkoutStatus contains the Mangopay checkout status.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.CheckoutStatus checkoutStatus = 3;</code>
     * @return int
     */
    public function getCheckoutStatus()
    {
        return $this->checkoutStatus;
    }

    /**
     * checkoutStatus contains the Mangopay checkout status.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.CheckoutStatus checkoutStatus = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckoutStatus($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Payments\Mangopay\CheckoutStatus::class);
        $this->checkoutStatus = $var;

        return $this;
    }

    /**
     * payInDetails contains the Mangopay pay-in ID for a particular payment method. The key is the enum string of the PaymentMethod. The value is the Mangopay Pay-In ID.
     *
     * Generated from protobuf field <code>map<string, string> payInDetails = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPayInDetails()
    {
        return $this->payInDetails;
    }

    /**
     * payInDetails contains the Mangopay pay-in ID for a particular payment method. The key is the enum string of the PaymentMethod. The value is the Mangopay Pay-In ID.
     *
     * Generated from protobuf field <code>map<string, string> payInDetails = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPayInDetails($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->payInDetails = $arr;

        return $this;
    }

    /**
     * hasPayInAmountDiscrepancy is set to true if there is a pay-in discrepancy with the amount received by Mangopay.
     *
     * Generated from protobuf field <code>bool hasPayInAmountDiscrepancy = 5;</code>
     * @return bool
     */
    public function getHasPayInAmountDiscrepancy()
    {
        return $this->hasPayInAmountDiscrepancy;
    }

    /**
     * hasPayInAmountDiscrepancy is set to true if there is a pay-in discrepancy with the amount received by Mangopay.
     *
     * Generated from protobuf field <code>bool hasPayInAmountDiscrepancy = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasPayInAmountDiscrepancy($var)
    {
        GPBUtil::checkBool($var);
        $this->hasPayInAmountDiscrepancy = $var;

        return $this;
    }

    /**
     * amountReceivedByMangopay contains the exact amount that was received by Mangopay for the initial pay-in for this transaction.
     *
     * Generated from protobuf field <code>int64 amountReceivedByMangopay = 6;</code>
     * @return int|string
     */
    public function getAmountReceivedByMangopay()
    {
        return $this->amountReceivedByMangopay;
    }

    /**
     * amountReceivedByMangopay contains the exact amount that was received by Mangopay for the initial pay-in for this transaction.
     *
     * Generated from protobuf field <code>int64 amountReceivedByMangopay = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountReceivedByMangopay($var)
    {
        GPBUtil::checkInt64($var);
        $this->amountReceivedByMangopay = $var;

        return $this;
    }

}

