<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/domains/domain.proto

namespace Eftypay\Domains;

use UnexpectedValueException;

/**
 * DomainStatus contains domain name specific statuses.
 *
 * Protobuf type <code>eftypay.domains.DomainStatus</code>
 */
class DomainStatus
{
    /**
     * DOMAIN_STATUS_NONE is the default domain status (which is zero and not transmitted on the wire).
     *
     * Generated from protobuf enum <code>DOMAIN_STATUS_NONE = 0;</code>
     */
    const DOMAIN_STATUS_NONE = 0;
    /**
     * LOCKED means the domain is locked and the seller needs to remove the domain lock.
     *
     * Generated from protobuf enum <code>LOCKED = 1;</code>
     */
    const LOCKED = 1;
    /**
     * UNLOCKED means the domain is unlocked and the seller can now transfer the domain.
     *
     * Generated from protobuf enum <code>UNLOCKED = 2;</code>
     */
    const UNLOCKED = 2;

    private static $valueToName = [
        self::DOMAIN_STATUS_NONE => 'DOMAIN_STATUS_NONE',
        self::LOCKED => 'LOCKED',
        self::UNLOCKED => 'UNLOCKED',
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
