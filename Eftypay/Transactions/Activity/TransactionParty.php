<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/transactions/activity/activity.proto

namespace Eftypay\Transactions\Activity;

use UnexpectedValueException;

/**
 * TransactionParty is an ENUM of parties that can be involved with a transaction.
 *
 * Protobuf type <code>eftypay.transactions.activity.TransactionParty</code>
 */
class TransactionParty
{
    /**
     * TRANSACTION_PARTY_NONE is the default transaction party type (which is zero and not transmitted on the wire).
     *
     * Generated from protobuf enum <code>TRANSACTION_PARTY_NONE = 0;</code>
     */
    const TRANSACTION_PARTY_NONE = 0;
    /**
     * BUYER refers to the buyer related to the transaction for a digital asset.
     *
     * Generated from protobuf enum <code>BUYER = 1;</code>
     */
    const BUYER = 1;
    /**
     * SELLER refers to the seller related to the transaction for a digital asset.
     *
     * Generated from protobuf enum <code>SELLER = 2;</code>
     */
    const SELLER = 2;
    /**
     * BROKER refers to the broker that can be involved in the transaction.
     *
     * Generated from protobuf enum <code>BROKER = 3;</code>
     */
    const BROKER = 3;
    /**
     * ADMIN refers to an Efty Pay administrator.
     *
     * Generated from protobuf enum <code>ADMIN = 4;</code>
     */
    const ADMIN = 4;

    private static $valueToName = [
        self::TRANSACTION_PARTY_NONE => 'TRANSACTION_PARTY_NONE',
        self::BUYER => 'BUYER',
        self::SELLER => 'SELLER',
        self::BROKER => 'BROKER',
        self::ADMIN => 'ADMIN',
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

