<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/transaction.proto

namespace Eftypay\Transactions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateTransactionWithEncryptPublicRequest contains the request details for updating a transaction
 *
 * Generated from protobuf message <code>eftypay.transactions.UpdateTransactionWithEncryptPublicRequest</code>
 */
class UpdateTransactionWithEncryptPublicRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * encryptedLinkDetails contains the encrypted link details.
     *
     * Generated from protobuf field <code>.eftypay.common.EncryptedLinkRequest encryptedLinkDetails = 1;</code>
     */
    protected $encryptedLinkDetails = null;
    /**
     * transaction optionally contains the transaction details in case of an update call by the front-end.
     *
     * Generated from protobuf field <code>.eftypay.transactions.Transaction transaction = 2;</code>
     */
    protected $transaction = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Eftypay\Common\EncryptedLinkRequest $encryptedLinkDetails
     *           encryptedLinkDetails contains the encrypted link details.
     *     @type \Eftypay\Transactions\Transaction $transaction
     *           transaction optionally contains the transaction details in case of an update call by the front-end.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Transactions\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * encryptedLinkDetails contains the encrypted link details.
     *
     * Generated from protobuf field <code>.eftypay.common.EncryptedLinkRequest encryptedLinkDetails = 1;</code>
     * @return \Eftypay\Common\EncryptedLinkRequest|null
     */
    public function getEncryptedLinkDetails()
    {
        return $this->encryptedLinkDetails;
    }

    public function hasEncryptedLinkDetails()
    {
        return isset($this->encryptedLinkDetails);
    }

    public function clearEncryptedLinkDetails()
    {
        unset($this->encryptedLinkDetails);
    }

    /**
     * encryptedLinkDetails contains the encrypted link details.
     *
     * Generated from protobuf field <code>.eftypay.common.EncryptedLinkRequest encryptedLinkDetails = 1;</code>
     * @param \Eftypay\Common\EncryptedLinkRequest $var
     * @return $this
     */
    public function setEncryptedLinkDetails($var)
    {
        GPBUtil::checkMessage($var, \Eftypay\Common\EncryptedLinkRequest::class);
        $this->encryptedLinkDetails = $var;

        return $this;
    }

    /**
     * transaction optionally contains the transaction details in case of an update call by the front-end.
     *
     * Generated from protobuf field <code>.eftypay.transactions.Transaction transaction = 2;</code>
     * @return \Eftypay\Transactions\Transaction|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    public function hasTransaction()
    {
        return isset($this->transaction);
    }

    public function clearTransaction()
    {
        unset($this->transaction);
    }

    /**
     * transaction optionally contains the transaction details in case of an update call by the front-end.
     *
     * Generated from protobuf field <code>.eftypay.transactions.Transaction transaction = 2;</code>
     * @param \Eftypay\Transactions\Transaction $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Eftypay\Transactions\Transaction::class);
        $this->transaction = $var;

        return $this;
    }

}

