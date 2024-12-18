<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/transaction.proto

namespace Eftypay\Transactions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TransactionMagicLinkResponse contains the buyer and / or seller magic links for a transaction.
 *
 * Generated from protobuf message <code>eftypay.transactions.TransactionMagicLinkResponse</code>
 */
class TransactionMagicLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * sellerLink contains the seller magic link.
     *
     * Generated from protobuf field <code>string sellerLink = 1;</code>
     */
    protected $sellerLink = '';
    /**
     * buyerLink contains the buyer magic link.
     *
     * Generated from protobuf field <code>string buyerLink = 2;</code>
     */
    protected $buyerLink = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sellerLink
     *           sellerLink contains the seller magic link.
     *     @type string $buyerLink
     *           buyerLink contains the buyer magic link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Transactions\Transaction::initOnce();
        parent::__construct($data);
    }

    /**
     * sellerLink contains the seller magic link.
     *
     * Generated from protobuf field <code>string sellerLink = 1;</code>
     * @return string
     */
    public function getSellerLink()
    {
        return $this->sellerLink;
    }

    /**
     * sellerLink contains the seller magic link.
     *
     * Generated from protobuf field <code>string sellerLink = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSellerLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->sellerLink = $var;

        return $this;
    }

    /**
     * buyerLink contains the buyer magic link.
     *
     * Generated from protobuf field <code>string buyerLink = 2;</code>
     * @return string
     */
    public function getBuyerLink()
    {
        return $this->buyerLink;
    }

    /**
     * buyerLink contains the buyer magic link.
     *
     * Generated from protobuf field <code>string buyerLink = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBuyerLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->buyerLink = $var;

        return $this;
    }

}

