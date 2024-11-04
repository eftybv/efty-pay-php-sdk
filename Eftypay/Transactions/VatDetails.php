<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/transaction.proto

namespace Eftypay\Transactions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * VatDetails contains VAT details for the transaction, which is used in the invoicing module.
 * All fields are readonly and set and calculated by Efty Pay.
 *
 * Generated from protobuf message <code>eftypay.transactions.VatDetails</code>
 */
class VatDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * vatPercentageOnAssetAmount is the VAT percentage (in Basis Points - BPS) on the assetAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnAssetAmount = 1;</code>
     */
    protected $vatPercentageOnAssetAmount = 0;
    /**
     * vatAmountOnAssetAmount is the VAT amount (in cents) on the assetAmountExcVat. (e.g.: 100000)
     *
     * Generated from protobuf field <code>int64 vatAmountOnAssetAmount = 2;</code>
     */
    protected $vatAmountOnAssetAmount = 0;
    /**
     * assetAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool assetAmountChargeVat = 3;</code>
     */
    protected $assetAmountChargeVat = false;
    /**
     * assetAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool assetAmountVatOutOfScope = 4;</code>
     */
    protected $assetAmountVatOutOfScope = false;
    /**
     * assetAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool assetAmountVatReverseCharge = 5;</code>
     */
    protected $assetAmountVatReverseCharge = false;
    /**
     * assetAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool assetAmountVatOneStopShop = 6;</code>
     */
    protected $assetAmountVatOneStopShop = false;
    /**
     * vatPercentageOnExpressFeeAmount is the VAT percentage (in Basis Points - BPS) on the expressFeeAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnExpressFeeAmount = 7;</code>
     */
    protected $vatPercentageOnExpressFeeAmount = 0;
    /**
     * vatPercentageOnExpressFeeAmount is the VAT amount (in cents) on the expressFeeAmountExcVat. (e.g.: 500)
     *
     * Generated from protobuf field <code>int64 vatAmountOnExpressFeeAmount = 8;</code>
     */
    protected $vatAmountOnExpressFeeAmount = 0;
    /**
     * expressFeeAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool expressFeeAmountChargeVat = 9;</code>
     */
    protected $expressFeeAmountChargeVat = false;
    /**
     * expressFeeAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatOutOfScope = 10;</code>
     */
    protected $expressFeeAmountVatOutOfScope = false;
    /**
     * expressFeeAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatReverseCharge = 11;</code>
     */
    protected $expressFeeAmountVatReverseCharge = false;
    /**
     * expressFeeAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatOneStopShop = 12;</code>
     */
    protected $expressFeeAmountVatOneStopShop = false;
    /**
     * vatPercentageOnCommissionAmount is the VAT percentage (in Basis Points - BPS) on the commissionAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnCommissionAmount = 13;</code>
     */
    protected $vatPercentageOnCommissionAmount = 0;
    /**
     * vatAmountOnCommissionAmount is the VAT amount (in cents) on the commissionAmountExcVat. (e.g.: 500)
     *
     * Generated from protobuf field <code>int64 vatAmountOnCommissionAmount = 14;</code>
     */
    protected $vatAmountOnCommissionAmount = 0;
    /**
     * commissionAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool commissionAmountChargeVat = 15;</code>
     */
    protected $commissionAmountChargeVat = false;
    /**
     * commissionAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool commissionAmountVatOutOfScope = 16;</code>
     */
    protected $commissionAmountVatOutOfScope = false;
    /**
     * commissionAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool commissionAmountVatReverseCharge = 17;</code>
     */
    protected $commissionAmountVatReverseCharge = false;
    /**
     * commissionAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool commissionAmountVatOneStopShop = 18;</code>
     */
    protected $commissionAmountVatOneStopShop = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $vatPercentageOnAssetAmount
     *           vatPercentageOnAssetAmount is the VAT percentage (in Basis Points - BPS) on the assetAmountExcVat. (e.g.: 100 - 10%)
     *     @type int|string $vatAmountOnAssetAmount
     *           vatAmountOnAssetAmount is the VAT amount (in cents) on the assetAmountExcVat. (e.g.: 100000)
     *     @type bool $assetAmountChargeVat
     *           assetAmountChargeVat tells us whether VAT should be charged.
     *     @type bool $assetAmountVatOutOfScope
     *           assetAmountVatOutOfScope tells us if the VAT is out of scope.
     *     @type bool $assetAmountVatReverseCharge
     *           assetAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *     @type bool $assetAmountVatOneStopShop
     *           assetAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *     @type int|string $vatPercentageOnExpressFeeAmount
     *           vatPercentageOnExpressFeeAmount is the VAT percentage (in Basis Points - BPS) on the expressFeeAmountExcVat. (e.g.: 100 - 10%)
     *     @type int|string $vatAmountOnExpressFeeAmount
     *           vatPercentageOnExpressFeeAmount is the VAT amount (in cents) on the expressFeeAmountExcVat. (e.g.: 500)
     *     @type bool $expressFeeAmountChargeVat
     *           expressFeeAmountChargeVat tells us whether VAT should be charged.
     *     @type bool $expressFeeAmountVatOutOfScope
     *           expressFeeAmountVatOutOfScope tells us if the VAT is out of scope.
     *     @type bool $expressFeeAmountVatReverseCharge
     *           expressFeeAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *     @type bool $expressFeeAmountVatOneStopShop
     *           expressFeeAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *     @type int|string $vatPercentageOnCommissionAmount
     *           vatPercentageOnCommissionAmount is the VAT percentage (in Basis Points - BPS) on the commissionAmountExcVat. (e.g.: 100 - 10%)
     *     @type int|string $vatAmountOnCommissionAmount
     *           vatAmountOnCommissionAmount is the VAT amount (in cents) on the commissionAmountExcVat. (e.g.: 500)
     *     @type bool $commissionAmountChargeVat
     *           commissionAmountChargeVat tells us whether VAT should be charged.
     *     @type bool $commissionAmountVatOutOfScope
     *           commissionAmountVatOutOfScope tells us if the VAT is out of scope.
     *     @type bool $commissionAmountVatReverseCharge
     *           commissionAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *     @type bool $commissionAmountVatOneStopShop
     *           commissionAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Transactions\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * vatPercentageOnAssetAmount is the VAT percentage (in Basis Points - BPS) on the assetAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnAssetAmount = 1;</code>
     * @return int|string
     */
    public function getVatPercentageOnAssetAmount()
    {
        return $this->vatPercentageOnAssetAmount;
    }

    /**
     * vatPercentageOnAssetAmount is the VAT percentage (in Basis Points - BPS) on the assetAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnAssetAmount = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatPercentageOnAssetAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatPercentageOnAssetAmount = $var;

        return $this;
    }

    /**
     * vatAmountOnAssetAmount is the VAT amount (in cents) on the assetAmountExcVat. (e.g.: 100000)
     *
     * Generated from protobuf field <code>int64 vatAmountOnAssetAmount = 2;</code>
     * @return int|string
     */
    public function getVatAmountOnAssetAmount()
    {
        return $this->vatAmountOnAssetAmount;
    }

    /**
     * vatAmountOnAssetAmount is the VAT amount (in cents) on the assetAmountExcVat. (e.g.: 100000)
     *
     * Generated from protobuf field <code>int64 vatAmountOnAssetAmount = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatAmountOnAssetAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatAmountOnAssetAmount = $var;

        return $this;
    }

    /**
     * assetAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool assetAmountChargeVat = 3;</code>
     * @return bool
     */
    public function getAssetAmountChargeVat()
    {
        return $this->assetAmountChargeVat;
    }

    /**
     * assetAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool assetAmountChargeVat = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAssetAmountChargeVat($var)
    {
        GPBUtil::checkBool($var);
        $this->assetAmountChargeVat = $var;

        return $this;
    }

    /**
     * assetAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool assetAmountVatOutOfScope = 4;</code>
     * @return bool
     */
    public function getAssetAmountVatOutOfScope()
    {
        return $this->assetAmountVatOutOfScope;
    }

    /**
     * assetAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool assetAmountVatOutOfScope = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setAssetAmountVatOutOfScope($var)
    {
        GPBUtil::checkBool($var);
        $this->assetAmountVatOutOfScope = $var;

        return $this;
    }

    /**
     * assetAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool assetAmountVatReverseCharge = 5;</code>
     * @return bool
     */
    public function getAssetAmountVatReverseCharge()
    {
        return $this->assetAmountVatReverseCharge;
    }

    /**
     * assetAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool assetAmountVatReverseCharge = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAssetAmountVatReverseCharge($var)
    {
        GPBUtil::checkBool($var);
        $this->assetAmountVatReverseCharge = $var;

        return $this;
    }

    /**
     * assetAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool assetAmountVatOneStopShop = 6;</code>
     * @return bool
     */
    public function getAssetAmountVatOneStopShop()
    {
        return $this->assetAmountVatOneStopShop;
    }

    /**
     * assetAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool assetAmountVatOneStopShop = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setAssetAmountVatOneStopShop($var)
    {
        GPBUtil::checkBool($var);
        $this->assetAmountVatOneStopShop = $var;

        return $this;
    }

    /**
     * vatPercentageOnExpressFeeAmount is the VAT percentage (in Basis Points - BPS) on the expressFeeAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnExpressFeeAmount = 7;</code>
     * @return int|string
     */
    public function getVatPercentageOnExpressFeeAmount()
    {
        return $this->vatPercentageOnExpressFeeAmount;
    }

    /**
     * vatPercentageOnExpressFeeAmount is the VAT percentage (in Basis Points - BPS) on the expressFeeAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnExpressFeeAmount = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatPercentageOnExpressFeeAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatPercentageOnExpressFeeAmount = $var;

        return $this;
    }

    /**
     * vatPercentageOnExpressFeeAmount is the VAT amount (in cents) on the expressFeeAmountExcVat. (e.g.: 500)
     *
     * Generated from protobuf field <code>int64 vatAmountOnExpressFeeAmount = 8;</code>
     * @return int|string
     */
    public function getVatAmountOnExpressFeeAmount()
    {
        return $this->vatAmountOnExpressFeeAmount;
    }

    /**
     * vatPercentageOnExpressFeeAmount is the VAT amount (in cents) on the expressFeeAmountExcVat. (e.g.: 500)
     *
     * Generated from protobuf field <code>int64 vatAmountOnExpressFeeAmount = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatAmountOnExpressFeeAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatAmountOnExpressFeeAmount = $var;

        return $this;
    }

    /**
     * expressFeeAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool expressFeeAmountChargeVat = 9;</code>
     * @return bool
     */
    public function getExpressFeeAmountChargeVat()
    {
        return $this->expressFeeAmountChargeVat;
    }

    /**
     * expressFeeAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool expressFeeAmountChargeVat = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpressFeeAmountChargeVat($var)
    {
        GPBUtil::checkBool($var);
        $this->expressFeeAmountChargeVat = $var;

        return $this;
    }

    /**
     * expressFeeAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatOutOfScope = 10;</code>
     * @return bool
     */
    public function getExpressFeeAmountVatOutOfScope()
    {
        return $this->expressFeeAmountVatOutOfScope;
    }

    /**
     * expressFeeAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatOutOfScope = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpressFeeAmountVatOutOfScope($var)
    {
        GPBUtil::checkBool($var);
        $this->expressFeeAmountVatOutOfScope = $var;

        return $this;
    }

    /**
     * expressFeeAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatReverseCharge = 11;</code>
     * @return bool
     */
    public function getExpressFeeAmountVatReverseCharge()
    {
        return $this->expressFeeAmountVatReverseCharge;
    }

    /**
     * expressFeeAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatReverseCharge = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpressFeeAmountVatReverseCharge($var)
    {
        GPBUtil::checkBool($var);
        $this->expressFeeAmountVatReverseCharge = $var;

        return $this;
    }

    /**
     * expressFeeAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatOneStopShop = 12;</code>
     * @return bool
     */
    public function getExpressFeeAmountVatOneStopShop()
    {
        return $this->expressFeeAmountVatOneStopShop;
    }

    /**
     * expressFeeAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool expressFeeAmountVatOneStopShop = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setExpressFeeAmountVatOneStopShop($var)
    {
        GPBUtil::checkBool($var);
        $this->expressFeeAmountVatOneStopShop = $var;

        return $this;
    }

    /**
     * vatPercentageOnCommissionAmount is the VAT percentage (in Basis Points - BPS) on the commissionAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnCommissionAmount = 13;</code>
     * @return int|string
     */
    public function getVatPercentageOnCommissionAmount()
    {
        return $this->vatPercentageOnCommissionAmount;
    }

    /**
     * vatPercentageOnCommissionAmount is the VAT percentage (in Basis Points - BPS) on the commissionAmountExcVat. (e.g.: 100 - 10%)
     *
     * Generated from protobuf field <code>int64 vatPercentageOnCommissionAmount = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatPercentageOnCommissionAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatPercentageOnCommissionAmount = $var;

        return $this;
    }

    /**
     * vatAmountOnCommissionAmount is the VAT amount (in cents) on the commissionAmountExcVat. (e.g.: 500)
     *
     * Generated from protobuf field <code>int64 vatAmountOnCommissionAmount = 14;</code>
     * @return int|string
     */
    public function getVatAmountOnCommissionAmount()
    {
        return $this->vatAmountOnCommissionAmount;
    }

    /**
     * vatAmountOnCommissionAmount is the VAT amount (in cents) on the commissionAmountExcVat. (e.g.: 500)
     *
     * Generated from protobuf field <code>int64 vatAmountOnCommissionAmount = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVatAmountOnCommissionAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->vatAmountOnCommissionAmount = $var;

        return $this;
    }

    /**
     * commissionAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool commissionAmountChargeVat = 15;</code>
     * @return bool
     */
    public function getCommissionAmountChargeVat()
    {
        return $this->commissionAmountChargeVat;
    }

    /**
     * commissionAmountChargeVat tells us whether VAT should be charged.
     *
     * Generated from protobuf field <code>bool commissionAmountChargeVat = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setCommissionAmountChargeVat($var)
    {
        GPBUtil::checkBool($var);
        $this->commissionAmountChargeVat = $var;

        return $this;
    }

    /**
     * commissionAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool commissionAmountVatOutOfScope = 16;</code>
     * @return bool
     */
    public function getCommissionAmountVatOutOfScope()
    {
        return $this->commissionAmountVatOutOfScope;
    }

    /**
     * commissionAmountVatOutOfScope tells us if the VAT is out of scope.
     *
     * Generated from protobuf field <code>bool commissionAmountVatOutOfScope = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setCommissionAmountVatOutOfScope($var)
    {
        GPBUtil::checkBool($var);
        $this->commissionAmountVatOutOfScope = $var;

        return $this;
    }

    /**
     * commissionAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool commissionAmountVatReverseCharge = 17;</code>
     * @return bool
     */
    public function getCommissionAmountVatReverseCharge()
    {
        return $this->commissionAmountVatReverseCharge;
    }

    /**
     * commissionAmountVatReverseCharge tells us whether the VAT should be marked us a reverse charge.
     *
     * Generated from protobuf field <code>bool commissionAmountVatReverseCharge = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setCommissionAmountVatReverseCharge($var)
    {
        GPBUtil::checkBool($var);
        $this->commissionAmountVatReverseCharge = $var;

        return $this;
    }

    /**
     * commissionAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool commissionAmountVatOneStopShop = 18;</code>
     * @return bool
     */
    public function getCommissionAmountVatOneStopShop()
    {
        return $this->commissionAmountVatOneStopShop;
    }

    /**
     * commissionAmountVatOneStopShop tells us whether the VAT should be paid in the OSS (One Stop Shop).
     *
     * Generated from protobuf field <code>bool commissionAmountVatOneStopShop = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setCommissionAmountVatOneStopShop($var)
    {
        GPBUtil::checkBool($var);
        $this->commissionAmountVatOneStopShop = $var;

        return $this;
    }

}
