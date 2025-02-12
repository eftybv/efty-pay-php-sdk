<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/finance.proto

namespace Eftypay\Common;

use UnexpectedValueException;

/**
 * StripeConnectedAccountStatus indicates the onboarding status of the Stripe Connected account.
 *
 * Protobuf type <code>eftypay.common.StripeConnectedAccountStatus</code>
 */
class StripeConnectedAccountStatus
{
    /**
     * Generated from protobuf enum <code>ACCOUNT_STATUS_NONE = 0;</code>
     */
    const ACCOUNT_STATUS_NONE = 0;
    /**
     * Generated from protobuf enum <code>ONBOARDING_COMPLETED = 1;</code>
     */
    const ONBOARDING_COMPLETED = 1;
    /**
     * Generated from protobuf enum <code>ONBOARDING_IN_PROGRESS = 2;</code>
     */
    const ONBOARDING_IN_PROGRESS = 2;

    private static $valueToName = [
        self::ACCOUNT_STATUS_NONE => 'ACCOUNT_STATUS_NONE',
        self::ONBOARDING_COMPLETED => 'ONBOARDING_COMPLETED',
        self::ONBOARDING_IN_PROGRESS => 'ONBOARDING_IN_PROGRESS',
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

