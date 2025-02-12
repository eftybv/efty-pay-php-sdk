<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/payments/payments_service.proto

namespace GPBMetadata\PBPublic\Payments;

class PaymentsService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\Common::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Includes\ProtocGenOpenapiv2\Openapiv2Annotations::initOnce();
        \GPBMetadata\PBPublic\Payments\Mangopay\Onboarding::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&public/payments/payments_service.protoeftypay.paymentsgoogle/api/annotations.proto9includes/protoc-gen-openapiv2/openapiv2-annotations.proto)public/payments/mangopay/onboarding.proto2�

Payments�
!CreateSellerOnboardingForMangopay-.eftypay.payments.mangopay.MangopayOnboarding-.eftypay.payments.mangopay.MangopayOnboarding"����"/payments/mangopay/onboard:*�A�&Create seller on-boarding for MangoPay�Create seller on-boarding for MangoPay initiates the on-boarding for a seller for Mangopay. Note that this endpoint does not create / update the UBOs.�
!UpdateSellerOnboardingForMangopay-.eftypay.payments.mangopay.MangopayOnboarding-.eftypay.payments.mangopay.MangopayOnboarding"����/payments/mangopay/onboard:*�A�&Update seller on-boarding for MangoPay�Update seller on-boarding information updates an existing Mangopay on-boarding application. Note that this endpoint does not create / update the UBOs.�
GetOnboardingStatusForMangopay.eftypay.common.Id-.eftypay.payments.mangopay.MangopayOnboarding"����!/payments/mangopay/onboard/{id}�A�"Get onboarding status for MangopaycGet onboarding status for Mangopay gets details about an existing Mangopay on-boarding application.�
GetGenericMagicLink.eftypay.common.Id.eftypay.common.ReturnString"����#!/payments/mangopay/magiclink/{id}�A}Get generic magic linkcGet generic magic link generates a generic magic link for a seller to access the onboarding portal.v�AsqThe Payments service allows for managements of Payments (on-boarding, checkout) with Efty Pay\'s payment partners.B�Z<bitbucket.org/eftypay/efty-pay-models/sdk/go/public/payments�APN
Efty Pay - Payments API".
Efty Payhttps://efty.comsupport@efty.com21.0bproto3'
        , true);

        static::$is_initialized = true;
    }
}

