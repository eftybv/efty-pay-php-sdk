<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/activity/activity.proto

namespace Eftypay\Transactions\Activity;

use UnexpectedValueException;

/**
 * TransactionStatus indicates the status of the transaction. A transaction can only have one status at the time.
 * In terms of workflow, the transaction status only moves up (i.e. it's not possible to go back to a previous transaction status).
 *
 * Protobuf type <code>eftypay.transactions.activity.TransactionStatus</code>
 */
class TransactionStatus
{
    /**
     * TRANSACTION_NONE is the default status of a transaction (which is zero and not transmitted on the wire).
     *
     * Generated from protobuf enum <code>TRANSACTION_NONE = 0;</code>
     */
    const TRANSACTION_NONE = 0;
    /**
     * INITIATE_TRANSACTION means the transaction was initiated.
     *
     * Generated from protobuf enum <code>INITIATE_TRANSACTION = 1;</code>
     */
    const INITIATE_TRANSACTION = 1;
    /**
     * PAYMENT_TO_EFTY_PAY means Efty Pay has received the payment from the buyer.
     *
     * Generated from protobuf enum <code>PAYMENT_TO_EFTY_PAY = 2;</code>
     */
    const PAYMENT_TO_EFTY_PAY = 2;
    /**
     * TRANSFER_ASSET_TO_EFTY_PAY means the asset was successfully transferred and received by Efty Pay.
     *
     * Generated from protobuf enum <code>TRANSFER_ASSET_TO_EFTY_PAY = 3;</code>
     */
    const TRANSFER_ASSET_TO_EFTY_PAY = 3;
    /**
     * PAYOUT_TO_SELLER means that the payout was sent to to the seller.
     *
     * Generated from protobuf enum <code>PAYOUT_TO_SELLER = 4;</code>
     */
    const PAYOUT_TO_SELLER = 4;
    /**
     * TRANSFER_ASSET_TO_BUYER means the asset was successfully transferred to the buyer.
     *
     * Generated from protobuf enum <code>TRANSFER_ASSET_TO_BUYER = 5;</code>
     */
    const TRANSFER_ASSET_TO_BUYER = 5;
    /**
     * TRANSACTION_COMPLETE means the transaction successfully completed for both the seller and buyer: funds received & asset received by Efty Pay.
     *
     * Generated from protobuf enum <code>TRANSACTION_COMPLETE = 6;</code>
     */
    const TRANSACTION_COMPLETE = 6;
    /**
     * TRANSACTION_CANCELLED means the transaction was cancelled by either buyer or seller. No digital assets / funds were exchanged.
     *
     * Generated from protobuf enum <code>TRANSACTION_CANCELLED = 7;</code>
     */
    const TRANSACTION_CANCELLED = 7;

    private static $valueToName = [
        self::TRANSACTION_NONE => 'TRANSACTION_NONE',
        self::INITIATE_TRANSACTION => 'INITIATE_TRANSACTION',
        self::PAYMENT_TO_EFTY_PAY => 'PAYMENT_TO_EFTY_PAY',
        self::TRANSFER_ASSET_TO_EFTY_PAY => 'TRANSFER_ASSET_TO_EFTY_PAY',
        self::PAYOUT_TO_SELLER => 'PAYOUT_TO_SELLER',
        self::TRANSFER_ASSET_TO_BUYER => 'TRANSFER_ASSET_TO_BUYER',
        self::TRANSACTION_COMPLETE => 'TRANSACTION_COMPLETE',
        self::TRANSACTION_CANCELLED => 'TRANSACTION_CANCELLED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
