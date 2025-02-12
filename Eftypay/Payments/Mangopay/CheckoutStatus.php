<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/payments/mangopay/checkout.proto

namespace Eftypay\Payments\Mangopay;

use UnexpectedValueException;

/**
 * CheckoutStatus indicates in which step of the checkout process a transaction is.
 *
 * Protobuf type <code>eftypay.payments.mangopay.CheckoutStatus</code>
 */
class CheckoutStatus
{
    /**
     * CHECKOUT_STATUS_NONE is the default checkout status (which is zero and not transmitted on the wire).
     *
     * Generated from protobuf enum <code>CHECKOUT_STATUS_NONE = 0;</code>
     */
    const CHECKOUT_STATUS_NONE = 0;
    /**
     * INITIATED is set the first time the checkout URL is visited.
     *
     * Generated from protobuf enum <code>INITIATED = 1;</code>
     */
    const INITIATED = 1;
    /**
     * BUYER_DETAILS_PROVIDED means the buyer details were provided, but the buyer user has not yet been created with Mangopay.
     *
     * Generated from protobuf enum <code>BUYER_DETAILS_PROVIDED = 2;</code>
     */
    const BUYER_DETAILS_PROVIDED = 2;
    /**
     * BUYER_CREATED_WITH_MANGOPAY means the buyer was created with Mangopay.
     *
     * Generated from protobuf enum <code>BUYER_CREATED_WITH_MANGOPAY = 3;</code>
     */
    const BUYER_CREATED_WITH_MANGOPAY = 3;
    /**
     * PAYMENT_METHOD_SELECTED means the payment method was selected.
     *
     * Generated from protobuf enum <code>PAYMENT_METHOD_SELECTED = 4;</code>
     */
    const PAYMENT_METHOD_SELECTED = 4;
    /**
     * PAYMENT_SUCCEEDED means the payment succeeded.
     *
     * Generated from protobuf enum <code>PAYMENT_SUCCEEDED = 5;</code>
     */
    const PAYMENT_SUCCEEDED = 5;
    /**
     * PAYMENT_FAILED means the payment failed.
     *
     * Generated from protobuf enum <code>PAYMENT_FAILED = 6;</code>
     */
    const PAYMENT_FAILED = 6;
    /**
     * COMPLETE means the checkout has been completed.
     *
     * Generated from protobuf enum <code>COMPLETE = 7;</code>
     */
    const COMPLETE = 7;

    private static $valueToName = [
        self::CHECKOUT_STATUS_NONE => 'CHECKOUT_STATUS_NONE',
        self::INITIATED => 'INITIATED',
        self::BUYER_DETAILS_PROVIDED => 'BUYER_DETAILS_PROVIDED',
        self::BUYER_CREATED_WITH_MANGOPAY => 'BUYER_CREATED_WITH_MANGOPAY',
        self::PAYMENT_METHOD_SELECTED => 'PAYMENT_METHOD_SELECTED',
        self::PAYMENT_SUCCEEDED => 'PAYMENT_SUCCEEDED',
        self::PAYMENT_FAILED => 'PAYMENT_FAILED',
        self::COMPLETE => 'COMPLETE',
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

