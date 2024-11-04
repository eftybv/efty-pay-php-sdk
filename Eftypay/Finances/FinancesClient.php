<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Eftypay\Finances;

/**
 * The Finances service provides generic finance tools & services.
 */
class FinancesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CalculateVat gets an invoice by invoice ID.
     * @param \Eftypay\Finances\CalculateVatRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CalculateVatPublic(\Eftypay\Finances\CalculateVatRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.finances.Finances/CalculateVatPublic',
        $argument,
        ['\Eftypay\Finances\CalculateVatResponse', 'decode'],
        $metadata, $options);
    }

}
