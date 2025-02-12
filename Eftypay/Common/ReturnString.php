<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Eftypay\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ReturnString is an object for methods that return a string.
 *
 * Generated from protobuf message <code>eftypay.common.ReturnString</code>
 */
class ReturnString extends \Google\Protobuf\Internal\Message
{
    /**
     * value is the of what is being returned.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           value is the of what is being returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * value is the of what is being returned.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * value is the of what is being returned.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

