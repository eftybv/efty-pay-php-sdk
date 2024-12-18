<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/payments/payment.proto

namespace Eftypay\Payments;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CheckoutDetails contains all relevant details about all payment partner integrations for a transactions checkout status.
 *
 * Generated from protobuf message <code>eftypay.payments.CheckoutDetails</code>
 */
class CheckoutDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * checkoutUrl contains the public checkoutUrl for the transaction.
     *
     * Generated from protobuf field <code>string checkoutUrl = 1;</code>
     */
    protected $checkoutUrl = '';
    /**
     * mangopayDetails contains the relevant Mangopay details for the transaction checkout.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.MangopayCheckoutDetails mangopayDetails = 2;</code>
     */
    protected $mangopayDetails = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $checkoutUrl
     *           checkoutUrl contains the public checkoutUrl for the transaction.
     *     @type \Eftypay\Payments\Mangopay\MangopayCheckoutDetails $mangopayDetails
     *           mangopayDetails contains the relevant Mangopay details for the transaction checkout.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Payments\Payment::initOnce();
        parent::__construct($data);
    }

    /**
     * checkoutUrl contains the public checkoutUrl for the transaction.
     *
     * Generated from protobuf field <code>string checkoutUrl = 1;</code>
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->checkoutUrl;
    }

    /**
     * checkoutUrl contains the public checkoutUrl for the transaction.
     *
     * Generated from protobuf field <code>string checkoutUrl = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCheckoutUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->checkoutUrl = $var;

        return $this;
    }

    /**
     * mangopayDetails contains the relevant Mangopay details for the transaction checkout.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.MangopayCheckoutDetails mangopayDetails = 2;</code>
     * @return \Eftypay\Payments\Mangopay\MangopayCheckoutDetails|null
     */
    public function getMangopayDetails()
    {
        return $this->mangopayDetails;
    }

    public function hasMangopayDetails()
    {
        return isset($this->mangopayDetails);
    }

    public function clearMangopayDetails()
    {
        unset($this->mangopayDetails);
    }

    /**
     * mangopayDetails contains the relevant Mangopay details for the transaction checkout.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.MangopayCheckoutDetails mangopayDetails = 2;</code>
     * @param \Eftypay\Payments\Mangopay\MangopayCheckoutDetails $var
     * @return $this
     */
    public function setMangopayDetails($var)
    {
        GPBUtil::checkMessage($var, \Eftypay\Payments\Mangopay\MangopayCheckoutDetails::class);
        $this->mangopayDetails = $var;

        return $this;
    }

}

