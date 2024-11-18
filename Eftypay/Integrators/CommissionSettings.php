<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/integrators/integrator.proto

namespace Eftypay\Integrators;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CommissionSettings indicate how the commissions are calculated for the transaction.
 * These settings are automatically set based on the commercial agreement with the integrator.
 * The integrator can override the Integrator commission settings per transaction.
 * Efty Pay commission settings can only be changed on a transaction level by an Efty Pay administrator.
 *
 * Generated from protobuf message <code>eftypay.integrators.CommissionSettings</code>
 */
class CommissionSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * eftyPayFlatFeeAmount is the flat fee commission (in cents) paid to Efty Pay for the transaction.
     *
     * Generated from protobuf field <code>int64 eftyPayFlatFeeAmount = 1;</code>
     */
    protected $eftyPayFlatFeeAmount = 0;
    /**
     * eftyPayCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to Efty Pay.
     * eftyPayCommissionPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 eftyPayCommissionPercentage = 2;</code>
     */
    protected $eftyPayCommissionPercentage = 0;
    /**
     * integratorFlatFeeAmount is the flat fee commission (in cents) paid to the integrator for the transaction.
     *
     * Generated from protobuf field <code>int64 integratorFlatFeeAmount = 3;</code>
     */
    protected $integratorFlatFeeAmount = 0;
    /**
     * integratorCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to the integrator.
     * integratorCommissionPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 integratorCommissionPercentage = 4;</code>
     */
    protected $integratorCommissionPercentage = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $eftyPayFlatFeeAmount
     *           eftyPayFlatFeeAmount is the flat fee commission (in cents) paid to Efty Pay for the transaction.
     *     @type int|string $eftyPayCommissionPercentage
     *           eftyPayCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to Efty Pay.
     *           eftyPayCommissionPercentage in Basis Points (bps).
     *     @type int|string $integratorFlatFeeAmount
     *           integratorFlatFeeAmount is the flat fee commission (in cents) paid to the integrator for the transaction.
     *     @type int|string $integratorCommissionPercentage
     *           integratorCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to the integrator.
     *           integratorCommissionPercentage in Basis Points (bps).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Integrators\Integrator::initOnce();
        parent::__construct($data);
    }

    /**
     * eftyPayFlatFeeAmount is the flat fee commission (in cents) paid to Efty Pay for the transaction.
     *
     * Generated from protobuf field <code>int64 eftyPayFlatFeeAmount = 1;</code>
     * @return int|string
     */
    public function getEftyPayFlatFeeAmount()
    {
        return $this->eftyPayFlatFeeAmount;
    }

    /**
     * eftyPayFlatFeeAmount is the flat fee commission (in cents) paid to Efty Pay for the transaction.
     *
     * Generated from protobuf field <code>int64 eftyPayFlatFeeAmount = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEftyPayFlatFeeAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->eftyPayFlatFeeAmount = $var;

        return $this;
    }

    /**
     * eftyPayCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to Efty Pay.
     * eftyPayCommissionPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 eftyPayCommissionPercentage = 2;</code>
     * @return int|string
     */
    public function getEftyPayCommissionPercentage()
    {
        return $this->eftyPayCommissionPercentage;
    }

    /**
     * eftyPayCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to Efty Pay.
     * eftyPayCommissionPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 eftyPayCommissionPercentage = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEftyPayCommissionPercentage($var)
    {
        GPBUtil::checkInt64($var);
        $this->eftyPayCommissionPercentage = $var;

        return $this;
    }

    /**
     * integratorFlatFeeAmount is the flat fee commission (in cents) paid to the integrator for the transaction.
     *
     * Generated from protobuf field <code>int64 integratorFlatFeeAmount = 3;</code>
     * @return int|string
     */
    public function getIntegratorFlatFeeAmount()
    {
        return $this->integratorFlatFeeAmount;
    }

    /**
     * integratorFlatFeeAmount is the flat fee commission (in cents) paid to the integrator for the transaction.
     *
     * Generated from protobuf field <code>int64 integratorFlatFeeAmount = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntegratorFlatFeeAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->integratorFlatFeeAmount = $var;

        return $this;
    }

    /**
     * integratorCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to the integrator.
     * integratorCommissionPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 integratorCommissionPercentage = 4;</code>
     * @return int|string
     */
    public function getIntegratorCommissionPercentage()
    {
        return $this->integratorCommissionPercentage;
    }

    /**
     * integratorCommissionPercentage is the percentage used to calculated the dynamic commission based on the transaction amount, this amount is paid to the integrator.
     * integratorCommissionPercentage in Basis Points (bps).
     *
     * Generated from protobuf field <code>int64 integratorCommissionPercentage = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntegratorCommissionPercentage($var)
    {
        GPBUtil::checkInt64($var);
        $this->integratorCommissionPercentage = $var;

        return $this;
    }

}
