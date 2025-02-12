<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Eftypay\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Condition is a search condition for an individual field.
 *
 * Generated from protobuf message <code>eftypay.common.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * field indicates the field name.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    /**
     * operator indicates the comparison operator to use for the field.
     *
     * Generated from protobuf field <code>.eftypay.common.ComparisonOperator operator = 2;</code>
     */
    protected $operator = 0;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           field indicates the field name.
     *     @type int $operator
     *           operator indicates the comparison operator to use for the field.
     *     @type string $stringValue
     *           stringValue is used when comparing a string.
     *     @type int|string $intValue
     *           intValue is used when comparing an int.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * field indicates the field name.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * field indicates the field name.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * operator indicates the comparison operator to use for the field.
     *
     * Generated from protobuf field <code>.eftypay.common.ComparisonOperator operator = 2;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * operator indicates the comparison operator to use for the field.
     *
     * Generated from protobuf field <code>.eftypay.common.ComparisonOperator operator = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Common\ComparisonOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * stringValue is used when comparing a string.
     *
     * Generated from protobuf field <code>string stringValue = 3;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(3);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * stringValue is used when comparing a string.
     *
     * Generated from protobuf field <code>string stringValue = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * intValue is used when comparing an int.
     *
     * Generated from protobuf field <code>int64 intValue = 4;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(4);
    }

    public function hasIntValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * intValue is used when comparing an int.
     *
     * Generated from protobuf field <code>int64 intValue = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

