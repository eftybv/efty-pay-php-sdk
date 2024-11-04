<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/payments/payment.proto

namespace Eftypay\Payments;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payments contains all relevant details about all payment partner integrations for the user.
 *
 * Generated from protobuf message <code>eftypay.payments.PaymentDetails</code>
 */
class PaymentDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * mangopayDetails contains the relevant Mangopay details for the user.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.MangopayDetails mangopayDetails = 1;</code>
     */
    protected $mangopayDetails = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eftypay\Payments\Mangopay\MangopayDetails $mangopayDetails
     *           mangopayDetails contains the relevant Mangopay details for the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Payments\Payment::initOnce();
        parent::__construct($data);
    }

    /**
     * mangopayDetails contains the relevant Mangopay details for the user.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.MangopayDetails mangopayDetails = 1;</code>
     * @return \Eftypay\Payments\Mangopay\MangopayDetails|null
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
     * mangopayDetails contains the relevant Mangopay details for the user.
     *
     * Generated from protobuf field <code>.eftypay.payments.mangopay.MangopayDetails mangopayDetails = 1;</code>
     * @param \Eftypay\Payments\Mangopay\MangopayDetails $var
     * @return $this
     */
    public function setMangopayDetails($var)
    {
        GPBUtil::checkMessage($var, \Eftypay\Payments\Mangopay\MangopayDetails::class);
        $this->mangopayDetails = $var;

        return $this;
    }

}

