<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/finances/vat.proto

namespace Eftypay\Finances;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message is the request of the method CalculateVat.
 * It holds details re a supplier (seller) and buyer
 * This data is needed to calculate any VAT (if applicable)
 *
 * Generated from protobuf message <code>eftypay.finances.CalculateVatRequest</code>
 */
class CalculateVatRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * itemPriceWithoutVat is the amount in cents without VAT.
     *
     * Generated from protobuf field <code>int64 itemPriceWithoutVat = 1;</code>
     */
    protected $itemPriceWithoutVat = 0;
    /**
     * supplierChargesVat tells us wherever the supplier charges VAT. If set to false, no VAT is required.
     *
     * Generated from protobuf field <code>bool supplierChargesVat = 2;</code>
     */
    protected $supplierChargesVat = false;
    /**
     * supplierCountry is the ISO 3166 country code (e.g. NL or BE).
     *
     * Generated from protobuf field <code>.eftypay.common.CountryCode supplierCountry = 3;</code>
     */
    protected $supplierCountry = 0;
    /**
     * supplierRepresentsCompany tells us whether the supplier is a legal entity (company) or a natural person.
     *
     * Generated from protobuf field <code>bool supplierRepresentsCompany = 4;</code>
     */
    protected $supplierRepresentsCompany = false;
    /**
     * buyerCountry is the ISO 3166 country code (e.g. NL or BE).
     *
     * Generated from protobuf field <code>.eftypay.common.CountryCode buyerCountry = 5;</code>
     */
    protected $buyerCountry = 0;
    /**
     * buyerRepresentsCompany tells us whether the buyer is a legal entity (company) or a natural person.
     *
     * Generated from protobuf field <code>bool buyerRepresentsCompany = 6;</code>
     */
    protected $buyerRepresentsCompany = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $itemPriceWithoutVat
     *           itemPriceWithoutVat is the amount in cents without VAT.
     *     @type bool $supplierChargesVat
     *           supplierChargesVat tells us wherever the supplier charges VAT. If set to false, no VAT is required.
     *     @type int $supplierCountry
     *           supplierCountry is the ISO 3166 country code (e.g. NL or BE).
     *     @type bool $supplierRepresentsCompany
     *           supplierRepresentsCompany tells us whether the supplier is a legal entity (company) or a natural person.
     *     @type int $buyerCountry
     *           buyerCountry is the ISO 3166 country code (e.g. NL or BE).
     *     @type bool $buyerRepresentsCompany
     *           buyerRepresentsCompany tells us whether the buyer is a legal entity (company) or a natural person.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Finances\Vat::initOnce();
        parent::__construct($data);
    }

    /**
     * itemPriceWithoutVat is the amount in cents without VAT.
     *
     * Generated from protobuf field <code>int64 itemPriceWithoutVat = 1;</code>
     * @return int|string
     */
    public function getItemPriceWithoutVat()
    {
        return $this->itemPriceWithoutVat;
    }

    /**
     * itemPriceWithoutVat is the amount in cents without VAT.
     *
     * Generated from protobuf field <code>int64 itemPriceWithoutVat = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setItemPriceWithoutVat($var)
    {
        GPBUtil::checkInt64($var);
        $this->itemPriceWithoutVat = $var;

        return $this;
    }

    /**
     * supplierChargesVat tells us wherever the supplier charges VAT. If set to false, no VAT is required.
     *
     * Generated from protobuf field <code>bool supplierChargesVat = 2;</code>
     * @return bool
     */
    public function getSupplierChargesVat()
    {
        return $this->supplierChargesVat;
    }

    /**
     * supplierChargesVat tells us wherever the supplier charges VAT. If set to false, no VAT is required.
     *
     * Generated from protobuf field <code>bool supplierChargesVat = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupplierChargesVat($var)
    {
        GPBUtil::checkBool($var);
        $this->supplierChargesVat = $var;

        return $this;
    }

    /**
     * supplierCountry is the ISO 3166 country code (e.g. NL or BE).
     *
     * Generated from protobuf field <code>.eftypay.common.CountryCode supplierCountry = 3;</code>
     * @return int
     */
    public function getSupplierCountry()
    {
        return $this->supplierCountry;
    }

    /**
     * supplierCountry is the ISO 3166 country code (e.g. NL or BE).
     *
     * Generated from protobuf field <code>.eftypay.common.CountryCode supplierCountry = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSupplierCountry($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Common\CountryCode::class);
        $this->supplierCountry = $var;

        return $this;
    }

    /**
     * supplierRepresentsCompany tells us whether the supplier is a legal entity (company) or a natural person.
     *
     * Generated from protobuf field <code>bool supplierRepresentsCompany = 4;</code>
     * @return bool
     */
    public function getSupplierRepresentsCompany()
    {
        return $this->supplierRepresentsCompany;
    }

    /**
     * supplierRepresentsCompany tells us whether the supplier is a legal entity (company) or a natural person.
     *
     * Generated from protobuf field <code>bool supplierRepresentsCompany = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupplierRepresentsCompany($var)
    {
        GPBUtil::checkBool($var);
        $this->supplierRepresentsCompany = $var;

        return $this;
    }

    /**
     * buyerCountry is the ISO 3166 country code (e.g. NL or BE).
     *
     * Generated from protobuf field <code>.eftypay.common.CountryCode buyerCountry = 5;</code>
     * @return int
     */
    public function getBuyerCountry()
    {
        return $this->buyerCountry;
    }

    /**
     * buyerCountry is the ISO 3166 country code (e.g. NL or BE).
     *
     * Generated from protobuf field <code>.eftypay.common.CountryCode buyerCountry = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBuyerCountry($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Common\CountryCode::class);
        $this->buyerCountry = $var;

        return $this;
    }

    /**
     * buyerRepresentsCompany tells us whether the buyer is a legal entity (company) or a natural person.
     *
     * Generated from protobuf field <code>bool buyerRepresentsCompany = 6;</code>
     * @return bool
     */
    public function getBuyerRepresentsCompany()
    {
        return $this->buyerRepresentsCompany;
    }

    /**
     * buyerRepresentsCompany tells us whether the buyer is a legal entity (company) or a natural person.
     *
     * Generated from protobuf field <code>bool buyerRepresentsCompany = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setBuyerRepresentsCompany($var)
    {
        GPBUtil::checkBool($var);
        $this->buyerRepresentsCompany = $var;

        return $this;
    }

}

