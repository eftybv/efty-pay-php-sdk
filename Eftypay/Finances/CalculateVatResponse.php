<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/finances/vat.proto

namespace Eftypay\Finances;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message is the response of the method CalculateVat.
 * It tells us if any VAT needs to be charged based on the request.
 * It also gives details regarding specific cases like OSS or Out of scope VAT.
 *
 * Generated from protobuf message <code>eftypay.finances.CalculateVatResponse</code>
 */
class CalculateVatResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * chargeVat tells us whether VAT should be charged; this is based on the country and legal status of the supplier (true in case of VAT country and if the supplier is a company).
     *
     * Generated from protobuf field <code>bool chargeVat = 1;</code>
     */
    protected $chargeVat = false;
    /**
     * vatOutOfScope tells us if the VAT is out of scope; this is true if the buyer is not in a VAT country.
     *
     * Generated from protobuf field <code>bool vatOutOfScope = 2;</code>
     */
    protected $vatOutOfScope = false;
    /**
     * vatReverseCharge tells us whether the VAT should be marked us a reverse charge. This is true if chargeVat = true, and the buyer & seller are both a company and in different VAT countries. In this case the VatAmount is nil.
     *
     * Generated from protobuf field <code>bool vatReverseCharge = 3;</code>
     */
    protected $vatReverseCharge = false;
    /**
     * vatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop). This is true if chargeVat = true and the seller is a company, and the buyer is a consumer in different VAT countries.
     *
     * Generated from protobuf field <code>bool vatOneStopShop = 4;</code>
     */
    protected $vatOneStopShop = false;
    /**
     * vatPercentage holds the actual VAT percentage that is applicable. vatPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 vatPercentage = 5;</code>
     */
    protected $vatPercentage = 0;
    /**
     * vatAmount holds the VAT amount in cents.
     *
     * Generated from protobuf field <code>int64 vatAmount = 6;</code>
     */
    protected $vatAmount = 0;
    /**
     * amountIncludingVat holds the amount including VAT (e.g. itemPriceWithoutVat from the request + the vatAmount from the response) in cents.
     *
     * Generated from protobuf field <code>int64 amountIncludingVat = 7;</code>
     */
    protected $amountIncludingVat = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $chargeVat
     *           chargeVat tells us whether VAT should be charged; this is based on the country and legal status of the supplier (true in case of VAT country and if the supplier is a company).
     *     @type bool $vatOutOfScope
     *           vatOutOfScope tells us if the VAT is out of scope; this is true if the buyer is not in a VAT country.
     *     @type bool $vatReverseCharge
     *           vatReverseCharge tells us whether the VAT should be marked us a reverse charge. This is true if chargeVat = true, and the buyer & seller are both a company and in different VAT countries. In this case the VatAmount is nil.
     *     @type bool $vatOneStopShop
     *           vatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop). This is true if chargeVat = true and the seller is a company, and the buyer is a consumer in different VAT countries.
     *     @type int|string $vatPercentage
     *           vatPercentage holds the actual VAT percentage that is applicable. vatPercentage in Basis Points (bps).
     *     @type int|string $vatAmount
     *           vatAmount holds the VAT amount in cents.
     *     @type int|string $amountIncludingVat
     *           amountIncludingVat holds the amount including VAT (e.g. itemPriceWithoutVat from the request + the vatAmount from the response) in cents.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Finances\Vat::initOnce();
        parent::__construct($data);
    }

    /**
     * chargeVat tells us whether VAT should be charged; this is based on the country and legal status of the supplier (true in case of VAT country and if the supplier is a company).
     *
     * Generated from protobuf field <code>bool chargeVat = 1;</code>
     * @return bool
     */
    public function getChargeVat()
    {
        return $this->chargeVat;
    }

    /**
     * chargeVat tells us whether VAT should be charged; this is based on the country and legal status of the supplier (true in case of VAT country and if the supplier is a company).
     *
     * Generated from protobuf field <code>bool chargeVat = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setChargeVat($var)
    {
        GPBUtil::checkBool($var);
        $this->chargeVat = $var;

        return $this;
    }

    /**
     * vatOutOfScope tells us if the VAT is out of scope; this is true if the buyer is not in a VAT country.
     *
     * Generated from protobuf field <code>bool vatOutOfScope = 2;</code>
     * @return bool
     */
    public function getVatOutOfScope()
    {
        return $this->vatOutOfScope;
    }

    /**
     * vatOutOfScope tells us if the VAT is out of scope; this is true if the buyer is not in a VAT country.
     *
     * Generated from protobuf field <code>bool vatOutOfScope = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setVatOutOfScope($var)
    {
        GPBUtil::checkBool($var);
        $this->vatOutOfScope = $var;

        return $this;
    }

    /**
     * vatReverseCharge tells us whether the VAT should be marked us a reverse charge. This is true if chargeVat = true, and the buyer & seller are both a company and in different VAT countries. In this case the VatAmount is nil.
     *
     * Generated from protobuf field <code>bool vatReverseCharge = 3;</code>
     * @return bool
     */
    public function getVatReverseCharge()
    {
        return $this->vatReverseCharge;
    }

    /**
     * vatReverseCharge tells us whether the VAT should be marked us a reverse charge. This is true if chargeVat = true, and the buyer & seller are both a company and in different VAT countries. In this case the VatAmount is nil.
     *
     * Generated from protobuf field <code>bool vatReverseCharge = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setVatReverseCharge($var)
    {
        GPBUtil::checkBool($var);
        $this->vatReverseCharge = $var;

        return $this;
    }

    /**
     * vatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop). This is true if chargeVat = true and the seller is a company, and the buyer is a consumer in different VAT countries.
     *
     * Generated from protobuf field <code>bool vatOneStopShop = 4;</code>
     * @return bool
     */
    public function getVatOneStopShop()
    {
        return $this->vatOneStopShop;
    }

    /**
     * vatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop). This is true if chargeVat = true and the seller is a company, and the buyer is a consumer in different VAT countries.
     *
     * Generated from protobuf field <code>bool vatOneStopShop = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setVatOneStopShop($var)
    {
        GPBUtil::checkBool($var);
        $this->vatOneStopShop = $var;

        return $this;
    }

    /**
     * vatPercentage holds the actual VAT percentage that is applicable. vatPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 vatPercentage = 5;</code>
     * @return int|string
     */
    public function getVatPercentage()
    {
        return $this->vatPercentage;
    }

    /**
     * vatPercentage holds the actual VAT percentage that is applicable. vatPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 vatPercentage = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatPercentage($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatPercentage = $var;

        return $this;
    }

    /**
     * vatAmount holds the VAT amount in cents.
     *
     * Generated from protobuf field <code>int64 vatAmount = 6;</code>
     * @return int|string
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * vatAmount holds the VAT amount in cents.
     *
     * Generated from protobuf field <code>int64 vatAmount = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatAmount = $var;

        return $this;
    }

    /**
     * amountIncludingVat holds the amount including VAT (e.g. itemPriceWithoutVat from the request + the vatAmount from the response) in cents.
     *
     * Generated from protobuf field <code>int64 amountIncludingVat = 7;</code>
     * @return int|string
     */
    public function getAmountIncludingVat()
    {
        return $this->amountIncludingVat;
    }

    /**
     * amountIncludingVat holds the amount including VAT (e.g. itemPriceWithoutVat from the request + the vatAmount from the response) in cents.
     *
     * Generated from protobuf field <code>int64 amountIncludingVat = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmountIncludingVat($var)
    {
        GPBUtil::checkInt64($var);
        $this->amountIncludingVat = $var;

        return $this;
    }

}

