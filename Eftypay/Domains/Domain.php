<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/domains/domain.proto

namespace Eftypay\Domains;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Domain contains the domain and WHOIS information about the domain.
 *
 * Generated from protobuf message <code>eftypay.domains.Domain</code>
 */
class Domain extends \Google\Protobuf\Internal\Message
{
    /**
     * domainName is the full naked domain name, i.e. efty.com.
     *
     * Generated from protobuf field <code>string domainName = 1;</code>
     */
    protected $domainName = '';
    /**
     * whois lookups contains information about the domain that is needed to facilitate the transaction.
     *
     * Generated from protobuf field <code>repeated .eftypay.domains.Whois whoisLookups = 2;</code>
     */
    private $whoisLookups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domainName
     *           domainName is the full naked domain name, i.e. efty.com.
     *     @type array<\Eftypay\Domains\Whois>|\Google\Protobuf\Internal\RepeatedField $whoisLookups
     *           whois lookups contains information about the domain that is needed to facilitate the transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBPublic\Domains\Domain::initOnce();
        parent::__construct($data);
    }

    /**
     * domainName is the full naked domain name, i.e. efty.com.
     *
     * Generated from protobuf field <code>string domainName = 1;</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * domainName is the full naked domain name, i.e. efty.com.
     *
     * Generated from protobuf field <code>string domainName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->domainName = $var;

        return $this;
    }

    /**
     * whois lookups contains information about the domain that is needed to facilitate the transaction.
     *
     * Generated from protobuf field <code>repeated .eftypay.domains.Whois whoisLookups = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWhoisLookups()
    {
        return $this->whoisLookups;
    }

    /**
     * whois lookups contains information about the domain that is needed to facilitate the transaction.
     *
     * Generated from protobuf field <code>repeated .eftypay.domains.Whois whoisLookups = 2;</code>
     * @param array<\Eftypay\Domains\Whois>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWhoisLookups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Eftypay\Domains\Whois::class);
        $this->whoisLookups = $arr;

        return $this;
    }

}

