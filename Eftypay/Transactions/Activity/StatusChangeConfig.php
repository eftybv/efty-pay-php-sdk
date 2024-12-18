<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/activity/activity.proto

namespace Eftypay\Transactions\Activity;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * StatusChangeConfig contains details about which user type can set a transaction status and sub-status (admin can set all).
 *
 * Generated from protobuf message <code>eftypay.transactions.activity.StatusChangeConfig</code>
 */
class StatusChangeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * mainStatus refers to the transaction main status.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionStatus mainStatus = 1;</code>
     */
    protected $mainStatus = 0;
    /**
     * subStatus refers to the transaction sub status.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionSubStatus subStatus = 2;</code>
     */
    protected $subStatus = 0;
    /**
     * canBeSetByIntegrator indicates the mainStatus & subStatus combination can be set by an integrator.
     *
     * Generated from protobuf field <code>bool canBeSetByIntegrator = 3;</code>
     */
    protected $canBeSetByIntegrator = false;
    /**
     * canBeSetByBuyerSeller indicates the mainStatus & subStatus combination can be set by a buyer or seller.
     *
     * Generated from protobuf field <code>bool canBeSetByBuyerSeller = 4;</code>
     */
    protected $canBeSetByBuyerSeller = false;
    /**
     * titleInEpUi is the title used in the Efty Pay UI when a transaction is in this status & sub-status.
     *
     * Generated from protobuf field <code>string titleInEpUi = 5;</code>
     */
    protected $titleInEpUi = '';
    /**
     * descriptionInEpUi is the description used in the Efty Pay UI when a transaction is in this status & sub-status.
     *
     * Generated from protobuf field <code>string descriptionInEpUi = 6;</code>
     */
    protected $descriptionInEpUi = '';
    /**
     * statusContext implies for which transaction parties this status is relevant (buyer, seller or both).
     *
     * Generated from protobuf field <code>repeated .eftypay.transactions.activity.TransactionParty statusContext = 7;</code>
     */
    private $statusContext;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $mainStatus
     *           mainStatus refers to the transaction main status.
     *     @type int $subStatus
     *           subStatus refers to the transaction sub status.
     *     @type bool $canBeSetByIntegrator
     *           canBeSetByIntegrator indicates the mainStatus & subStatus combination can be set by an integrator.
     *     @type bool $canBeSetByBuyerSeller
     *           canBeSetByBuyerSeller indicates the mainStatus & subStatus combination can be set by a buyer or seller.
     *     @type string $titleInEpUi
     *           titleInEpUi is the title used in the Efty Pay UI when a transaction is in this status & sub-status.
     *     @type string $descriptionInEpUi
     *           descriptionInEpUi is the description used in the Efty Pay UI when a transaction is in this status & sub-status.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $statusContext
     *           statusContext implies for which transaction parties this status is relevant (buyer, seller or both).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Transactions\Activity\Activity::initOnce();
        parent::__construct($data);
    }

    /**
     * mainStatus refers to the transaction main status.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionStatus mainStatus = 1;</code>
     * @return int
     */
    public function getMainStatus()
    {
        return $this->mainStatus;
    }

    /**
     * mainStatus refers to the transaction main status.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionStatus mainStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMainStatus($var)
    {
        GPBUtil::checkEnum($var, \Eftypay\Transactions\Activity\TransactionStatus::class);
        $this->mainStatus = $var;

        return $this;
    }

    /**
     * subStatus refers to the transaction sub status.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionSubStatus subStatus = 2;</code>
     * @return int
     */
    public function getSubStatus()
    {
        return $this->subStatus;
    }

    /**
     * subStatus refers to the transaction sub status.
     *
     * Generated from protobuf field <code>.eftypay.transactions.activity.TransactionSubStatus subStatus = 2;</code>
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
     * canBeSetByIntegrator indicates the mainStatus & subStatus combination can be set by an integrator.
     *
     * Generated from protobuf field <code>bool canBeSetByIntegrator = 3;</code>
     * @return bool
     */
    public function getCanBeSetByIntegrator()
    {
        return $this->canBeSetByIntegrator;
    }

    /**
     * canBeSetByIntegrator indicates the mainStatus & subStatus combination can be set by an integrator.
     *
     * Generated from protobuf field <code>bool canBeSetByIntegrator = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanBeSetByIntegrator($var)
    {
        GPBUtil::checkBool($var);
        $this->canBeSetByIntegrator = $var;

        return $this;
    }

    /**
     * canBeSetByBuyerSeller indicates the mainStatus & subStatus combination can be set by a buyer or seller.
     *
     * Generated from protobuf field <code>bool canBeSetByBuyerSeller = 4;</code>
     * @return bool
     */
    public function getCanBeSetByBuyerSeller()
    {
        return $this->canBeSetByBuyerSeller;
    }

    /**
     * canBeSetByBuyerSeller indicates the mainStatus & subStatus combination can be set by a buyer or seller.
     *
     * Generated from protobuf field <code>bool canBeSetByBuyerSeller = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanBeSetByBuyerSeller($var)
    {
        GPBUtil::checkBool($var);
        $this->canBeSetByBuyerSeller = $var;

        return $this;
    }

    /**
     * titleInEpUi is the title used in the Efty Pay UI when a transaction is in this status & sub-status.
     *
     * Generated from protobuf field <code>string titleInEpUi = 5;</code>
     * @return string
     */
    public function getTitleInEpUi()
    {
        return $this->titleInEpUi;
    }

    /**
     * titleInEpUi is the title used in the Efty Pay UI when a transaction is in this status & sub-status.
     *
     * Generated from protobuf field <code>string titleInEpUi = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTitleInEpUi($var)
    {
        GPBUtil::checkString($var, True);
        $this->titleInEpUi = $var;

        return $this;
    }

    /**
     * descriptionInEpUi is the description used in the Efty Pay UI when a transaction is in this status & sub-status.
     *
     * Generated from protobuf field <code>string descriptionInEpUi = 6;</code>
     * @return string
     */
    public function getDescriptionInEpUi()
    {
        return $this->descriptionInEpUi;
    }

    /**
     * descriptionInEpUi is the description used in the Efty Pay UI when a transaction is in this status & sub-status.
     *
     * Generated from protobuf field <code>string descriptionInEpUi = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptionInEpUi($var)
    {
        GPBUtil::checkString($var, True);
        $this->descriptionInEpUi = $var;

        return $this;
    }

    /**
     * statusContext implies for which transaction parties this status is relevant (buyer, seller or both).
     *
     * Generated from protobuf field <code>repeated .eftypay.transactions.activity.TransactionParty statusContext = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatusContext()
    {
        return $this->statusContext;
    }

    /**
     * statusContext implies for which transaction parties this status is relevant (buyer, seller or both).
     *
     * Generated from protobuf field <code>repeated .eftypay.transactions.activity.TransactionParty statusContext = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatusContext($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Eftypay\Transactions\Activity\TransactionParty::class);
        $this->statusContext = $arr;

        return $this;
    }

}

