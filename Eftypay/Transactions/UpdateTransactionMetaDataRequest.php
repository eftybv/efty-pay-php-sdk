<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/transaction.proto

namespace Eftypay\Transactions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateTransactionMetaDataRequest contains the request details for updating a transaction meta data.
 *
 * Generated from protobuf message <code>eftypay.transactions.UpdateTransactionMetaDataRequest</code>
 */
class UpdateTransactionMetaDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * transactionId contains the transaction ID.
     *
     * Generated from protobuf field <code>.eftypay.common.Id transactionId = 1;</code>
     */
    protected $transactionId = null;
    /**
     * metaData contains the meta-data to set for a transaction.
     *
     * Generated from protobuf field <code>map<string, string> metaData = 2;</code>
     */
    private $metaData;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eftypay\Common\Id $transactionId
     *           transactionId contains the transaction ID.
     *     @type array|\Google\Protobuf\Internal\MapField $metaData
     *           metaData contains the meta-data to set for a transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Transactions\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * transactionId contains the transaction ID.
     *
     * Generated from protobuf field <code>.eftypay.common.Id transactionId = 1;</code>
     * @return \Eftypay\Common\Id|null
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    public function hasTransactionId()
    {
        return isset($this->transactionId);
    }

    public function clearTransactionId()
    {
        unset($this->transactionId);
    }

    /**
     * transactionId contains the transaction ID.
     *
     * Generated from protobuf field <code>.eftypay.common.Id transactionId = 1;</code>
     * @param \Eftypay\Common\Id $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkMessage($var, \Eftypay\Common\Id::class);
        $this->transactionId = $var;

        return $this;
    }

    /**
     * metaData contains the meta-data to set for a transaction.
     *
     * Generated from protobuf field <code>map<string, string> metaData = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * metaData contains the meta-data to set for a transaction.
     *
     * Generated from protobuf field <code>map<string, string> metaData = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetaData($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metaData = $arr;

        return $this;
    }

}
