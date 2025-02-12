<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/activity/activity.proto

namespace Eftypay\Transactions\Activity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TransactionActivity contains details of a transaction change (i.e. status change, amount change, etc).
 * Activities are immutable.
 *
 * Generated from protobuf message <code>eftypay.transactions.activity.TransactionActivity</code>
 */
class TransactionActivity extends \Google\Protobuf\Internal\Message
{
    /**
     * id is the unique ID of the transaction activity. The ID is a compressed 22 character UUID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * status is the transaction status the transaction transitioned into.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionStatus status = 2;</code>
     */
    protected $status = 0;
    /**
     * subStatus is the transaction sub-status the transaction transitioned into.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionSubStatus subStatus = 5;</code>
     */
    protected $subStatus = 0;
    /**
     * date is the date of the activity.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     */
    protected $date = null;
    /**
     * activityOwner indicates which user initiated the activity (can be an admin).
     *
     * Generated from protobuf field <code>.eftypay.users.User activityOwner = 7;</code>
     */
    protected $activityOwner = null;
    /**
     * notes contains optional and relevant notes for the transaction.
     *
     * Generated from protobuf field <code>string notes = 8;</code>
     */
    protected $notes = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           id is the unique ID of the transaction activity. The ID is a compressed 22 character UUID.
     *     @type int $status
     *           status is the transaction status the transaction transitioned into.
     *     @type int $subStatus
     *           subStatus is the transaction sub-status the transaction transitioned into.
     *     @type \Google\Protobuf\Timestamp $date
     *           date is the date of the activity.
     *     @type \Eftypay\Users\User $activityOwner
     *           activityOwner indicates which user initiated the activity (can be an admin).
     *     @type string $notes
     *           notes contains optional and relevant notes for the transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Transactions\Activity\Activity::initOnce();
        parent::__construct($data);
    }

    /**
     * id is the unique ID of the transaction activity. The ID is a compressed 22 character UUID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * id is the unique ID of the transaction activity. The ID is a compressed 22 character UUID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * status is the transaction status the transaction transitioned into.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionStatus status = 2;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * status is the transaction status the transaction transitioned into.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionStatus status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Transactions\Activity\TransactionStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * subStatus is the transaction sub-status the transaction transitioned into.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionSubStatus subStatus = 5;</code>
     * @return int
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * subStatus is the transaction sub-status the transaction transitioned into.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionSubStatus subStatus = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSubStatus($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Transactions\Activity\TransactionSubStatus::class);
        $this->subStatus = $var;

        return $this;
    }

    /**
     * date is the date of the activity.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDate()
    {
        return $this->date;
    }

    public function hasDate()
    {
        return isset($this->date);
    }

    public function clearDate()
    {
        unset($this->date);
    }

    /**
     * date is the date of the activity.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date = $var;

        return $this;
    }

    /**
     * activityOwner indicates which user initiated the activity (can be an admin).
     *
     * Generated from protobuf field <code>.eftypay.users.User activityOwner = 7;</code>
     * @return \Eftypay\Users\User|null
     */
    public function getActivityOwner()
    {
        return $this->activityOwner;
    }

    public function hasActivityOwner()
    {
        return isset($this->activityOwner);
    }

    public function clearActivityOwner()
    {
        unset($this->activityOwner);
    }

    /**
     * activityOwner indicates which user initiated the activity (can be an admin).
     *
     * Generated from protobuf field <code>.eftypay.users.User activityOwner = 7;</code>
     * @param \Eftypay\Users\User $var
     * @return $this
     */
    public function setActivityOwner($var)
    {
        GPBUtil::checkMessage($var, \Eftypay\Users\User::class);
        $this->activityOwner = $var;

        return $this;
    }

    /**
     * notes contains optional and relevant notes for the transaction.
     *
     * Generated from protobuf field <code>string notes = 8;</code>
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * notes contains optional and relevant notes for the transaction.
     *
     * Generated from protobuf field <code>string notes = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->notes = $var;

        return $this;
    }

}

