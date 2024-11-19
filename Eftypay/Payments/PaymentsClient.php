<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Eftypay\Payments;

/**
 * The Payments service allows for management of Payments (on-boarding, checkout, etc) with Efty Pay's payment partners.
 */
class PaymentsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateSellerOnboardingForMangopay initiates the on-boarding for a seller for Mangopay.
     * @param \Eftypay\Payments\Mangopay\MangopayOnboarding $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateSellerOnboardingForMangopay(\Eftypay\Payments\Mangopay\MangopayOnboarding $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.payments.Payments/CreateSellerOnboardingForMangopay',
        $argument,
        ['\Eftypay\Payments\Mangopay\MangopayOnboarding', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateSellerOnboardingForMangopay updates an existing Mangopay on-boarding application.
     * Note that the whole request object needs to be provided, and all writeable values are overwritten.
     * @param \Eftypay\Payments\Mangopay\MangopayOnboarding $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSellerOnboardingForMangopay(\Eftypay\Payments\Mangopay\MangopayOnboarding $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.payments.Payments/UpdateSellerOnboardingForMangopay',
        $argument,
        ['\Eftypay\Payments\Mangopay\MangopayOnboarding', 'decode'],
        $metadata, $options);
    }

    /**
     * GetOnboardingStatusForMangopay gets details about an existing Mangopay on-boarding application.
     * It requires the ID of the seller user to be passed in.
     * @param \Eftypay\Common\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOnboardingStatusForMangopay(\Eftypay\Common\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.payments.Payments/GetOnboardingStatusForMangopay',
        $argument,
        ['\Eftypay\Payments\Mangopay\MangopayOnboarding', 'decode'],
        $metadata, $options);
    }

    /**
     * GetGenericMagicLink generates a generic magic link for a seller to access the onboarding portal.
     * It requires the ID of the seller user to be passed in.
     * @param \Eftypay\Common\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetGenericMagicLink(\Eftypay\Common\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.payments.Payments/GetGenericMagicLink',
        $argument,
        ['\Eftypay\Common\ReturnString', 'decode'],
        $metadata, $options);
    }

}
