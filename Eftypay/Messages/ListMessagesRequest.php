<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/messages/message.proto

namespace Eftypay\Messages;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListMessagesRequest is used to get all messages for a transaction. Optionally a filter can be passed in to select only specific messages or allow for sorting.
 *
 * Generated from protobuf message <code>eftypay.messages.ListMessagesRequest</code>
 */
class ListMessagesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * transactionId is the transaction to return the messages for.
     *
     * Generated from protobuf field <code>string transactionId = 1;</code>
     */
    protected $transactionId = '';
    /**
     * listRequest contains a filter for filtering messages serverside.
     *
     * Generated from protobuf field <code>.eftypay.common.ListRequest listRequest = 2;</code>
     */
    protected $listRequest = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transactionId
     *           transactionId is the transaction to return the messages for.
     *     @type \Eftypay\Common\ListRequest $listRequest
     *           listRequest contains a filter for filtering messages serverside.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Messages\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * transactionId is the transaction to return the messages for.
     *
     * Generated from protobuf field <code>string transactionId = 1;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * transactionId is the transaction to return the messages for.
     *
     * Generated from protobuf field <code>string transactionId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transactionId = $var;

        return $this;
    }

    /**
     * listRequest contains a filter for filtering messages serverside.
     *
     * Generated from protobuf field <code>.eftypay.common.ListRequest listRequest = 2;</code>
     * @return \Eftypay\Common\ListRequest|null
     */
    public function getListRequest()
    {
        return $this->listRequest;
    }

    public function hasListRequest()
    {
        return isset($this->listRequest);
    }

    public function clearListRequest()
    {
        unset($this->listRequest);
    }

    /**
     * listRequest contains a filter for filtering messages serverside.
     *
     * Generated from protobuf field <code>.eftypay.common.ListRequest listRequest = 2;</code>
     * @param \Eftypay\Common\ListRequest $var
     * @return $this
     */
    public function setListRequest($var)
    {
        GPBUtil::checkMessage($var, \Eftypay\Common\ListRequest::class);
        $this->listRequest = $var;

        return $this;
    }

}
