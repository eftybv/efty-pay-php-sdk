<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/encrypt.proto

namespace GPBMetadata\Common;

class Encrypt
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
common/encrypt.protoeftypay.common"H
EncryptedLinkRequest
encryptedData (	

iv (	
keyId (	B5Z3bitbucket.org/eftypay/efty-pay-models/sdk/go/commonbproto3'
        , true);

        static::$is_initialized = true;
    }
}

