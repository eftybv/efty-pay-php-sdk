<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Eftypay\Messages;

/**
 * The Messages service allows for sending / adding messages to transactions.
 * Message methods are only available to integrators.
 */
class MessagesClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * SendMessage adds / sends a message for a transaction.
     * @param \Eftypay\Messages\SendMessageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendMessage(\Eftypay\Messages\SendMessageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.messages.Messages/SendMessage',
        $argument,
        ['\Eftypay\Messages\Message', 'decode'],
        $metadata, $options);
    }

    /**
     * ListMessages lists all the messages for a transaction.
     * @param \Eftypay\Messages\ListMessagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListMessages(\Eftypay\Messages\ListMessagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/eftypay.messages.Messages/ListMessages',
        $argument,
        ['\Eftypay\Messages\Message', 'decode'],
        $metadata, $options);
    }

}
