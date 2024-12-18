<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/payments/mangopay/onboarding.proto

namespace Eftypay\Payments\Mangopay;

use UnexpectedValueException;

/**
 * OnboardingType contains the different onboarding types supported by Mangopay.
 *
 * Protobuf type <code>eftypay.payments.mangopay.OnboardingType</code>
 */
class OnboardingType
{
    /**
     * ONBOARDING_TYPE_NONE is the default on-boarding type (which is zero and not transmitted on the wire).
     *
     * Generated from protobuf enum <code>ONBOARDING_TYPE_NONE = 0;</code>
     */
    const ONBOARDING_TYPE_NONE = 0;
    /**
     * NATURAL_USER is the on-boarding type for a natural person (an individual not acting as a legal entity).
     *
     * Generated from protobuf enum <code>NATURAL_USER = 1;</code>
     */
    const NATURAL_USER = 1;
    /**
     * LEGAL_USER is the on-boarding type for a legal user (legal entity).
     *
     * Generated from protobuf enum <code>LEGAL_USER = 2;</code>
     */
    const LEGAL_USER = 2;

    private static $valueToName = [
        self::ONBOARDING_TYPE_NONE => 'ONBOARDING_TYPE_NONE',
        self::NATURAL_USER => 'NATURAL_USER',
        self::LEGAL_USER => 'LEGAL_USER',
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

