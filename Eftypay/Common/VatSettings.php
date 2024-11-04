<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/finance.proto

namespace Eftypay\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VatSettings contains the VAT settings for a buyer, seller or integrator.
 * &#64;todo: VAT can be changed after invoicing / open transactions.
 *
 * Generated from protobuf message <code>eftypay.common.VatSettings</code>
 */
class VatSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * vatNumber is an optional VAT registration number. If set this is shown on the generated invoices.
     *
     * Generated from protobuf field <code>string vatNumber = 1;</code>
     */
    protected $vatNumber = '';
    /**
     * hasVat indicates that the party wants VAT added in the transaction. This is their own responsibility.
     *
     * Generated from protobuf field <code>bool hasVat = 2;</code>
     */
    protected $hasVat = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $vatNumber
     *           vatNumber is an optional VAT registration number. If set this is shown on the generated invoices.
     *     @type bool $hasVat
     *           hasVat indicates that the party wants VAT added in the transaction. This is their own responsibility.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common\Finance::initOnce();
        parent::__construct($data);
    }

    /**
     * vatNumber is an optional VAT registration number. If set this is shown on the generated invoices.
     *
     * Generated from protobuf field <code>string vatNumber = 1;</code>
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * vatNumber is an optional VAT registration number. If set this is shown on the generated invoices.
     *
     * Generated from protobuf field <code>string vatNumber = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVatNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->vatNumber = $var;

        return $this;
    }

    /**
     * hasVat indicates that the party wants VAT added in the transaction. This is their own responsibility.
     *
     * Generated from protobuf field <code>bool hasVat = 2;</code>
     * @return bool
     */
    public function getHasVat()
    {
        return $this->hasVat;
    }

    /**
     * hasVat indicates that the party wants VAT added in the transaction. This is their own responsibility.
     *
     * Generated from protobuf field <code>bool hasVat = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasVat($var)
    {
        GPBUtil::checkBool($var);
        $this->hasVat = $var;

        return $this;
    }

}

