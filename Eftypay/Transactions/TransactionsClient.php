<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Eftypay\Transactions;

/**
 * The Transactions service allows for management of transactions within the Efty Pay backend.
 * Transaction methods are only available to integrators.
 */
class TransactionsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateTransaction creates a new transaction and returns the Transaction object.
     * The initial status of the transaction is set to TRANSACTION_STATUS_INITIATED.
     * @param \Eftypay\Transactions\TransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateTransaction(\Eftypay\Transactions\TransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/CreateTransaction',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateTransaction updates an existing transaction and returns the Transaction object.
     * Note that the whole transaction object needs to be provided, and all writeable values are overwritten.
     * Every update to a transaction results in a TransactionActivity record being created for this transaction, so all changes are record and accessible in the audit log for the transaction.
     * @param \Eftypay\Transactions\TransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTransaction(\Eftypay\Transactions\TransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/UpdateTransaction',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * PushTransactionToNextAvailableStatus pushes the status of a transaction into its next available status & sub-status, and allows for adding additional messaging / details.
     * The method returns the whole transaction object.
     * @param \Eftypay\Transactions\PushTransactionToNextAvailableStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PushTransactionToNextAvailableStatus(\Eftypay\Transactions\PushTransactionToNextAvailableStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/PushTransactionToNextAvailableStatus',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * ListTransactions lists all the transactions for the integrator.
     * In addition, the ListTransactionsRequest object can be used to list transactions for a specific buyer, seller, status, amount, etc.
     * @param \Eftypay\Transactions\ListTransactionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListTransactions(\Eftypay\Transactions\ListTransactionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/eftypay.transactions.Transactions/ListTransactions',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * GetTransactionById gets an existing transaction by ID.
     * @param \Eftypay\Common\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTransactionById(\Eftypay\Common\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/GetTransactionById',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * CancelTransaction cancels an existing transaction, by setting the status to TRANSACTION_STATUS_CANCELLED.
     * @param \Eftypay\Transactions\TransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelTransaction(\Eftypay\Transactions\TransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/CancelTransaction',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * DeleteTransaction deletes an existing transaction. Please note that this method is irreversible, and can only be executed for transactions with status TRANSACTION_STATUS_INITIATED.
     * @param \Eftypay\Transactions\TransactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteTransaction(\Eftypay\Transactions\TransactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/DeleteTransaction',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * SendTransactionMagicLinkEmail sends an email with an encrypted magic email to the buyer and/or seller of a transaction.
     * Clicking this link will grant the user access to certain transaction details in the Efty Pay portal.
     * @param \Eftypay\Transactions\TransactionMagicLinkPayload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendTransactionMagicLinkEmail(\Eftypay\Transactions\TransactionMagicLinkPayload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/SendTransactionMagicLinkEmail',
        $argument,
        ['\Eftypay\Transactions\TransactionMagicLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * VerifyEncryptedMagicLinkAndSendOtpEmailPublic takes the encrypted payload from a magic link, validates it in the backend. And sends an OTP email if valid.
     * This endpoint is a public endpoint.
     * @param \Eftypay\Transactions\TransactionMagicLinkEncryptedPayload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function VerifyEncryptedMagicLinkAndSendOtpEmailPublic(\Eftypay\Transactions\TransactionMagicLinkEncryptedPayload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/VerifyEncryptedMagicLinkAndSendOtpEmailPublic',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * AuthenticateWithOtpPublic takes the encrypted payload from a magic link, and OTP, and if valid will return a temporary JWT to access certain protected API resources.
     * This endpoint is a public endpoint.
     * @param \Eftypay\Transactions\TransactionMagicLinkEncryptedPayload $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AuthenticateWithOtpPublic(\Eftypay\Transactions\TransactionMagicLinkEncryptedPayload $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/AuthenticateWithOtpPublic',
        $argument,
        ['\Eftypay\Common\ReturnString', 'decode'],
        $metadata, $options);
    }

    /**
     * GetStatusChangeConfiguration returns an overview of which status & sub-status can be set by which user type.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStatusChangeConfiguration(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/GetStatusChangeConfiguration',
        $argument,
        ['\Eftypay\Transactions\Activity\GetStatusChangeConfigurationResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * GetNextPossibleStatusAndSubStatus returns the next possible status for a transaction.
     * @param \Eftypay\Transactions\GetNextPossibleStatusAndSubStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetNextPossibleStatusAndSubStatus(\Eftypay\Transactions\GetNextPossibleStatusAndSubStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/GetNextPossibleStatusAndSubStatus',
        $argument,
        ['\Eftypay\Transactions\Activity\TransactionActivity', 'decode'],
        $metadata, $options);
    }

    /**
     * ReRunWhoisForDomainTransaction reruns the WHOIS query for a domain in a transaction, and returns the updated transaction record with new WHOIS entry.
     * @param \Eftypay\Common\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReRunWhoisForDomainTransaction(\Eftypay\Common\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/ReRunWhoisForDomainTransaction',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * GetTransactionWithEncryptPublic gets an existing transaction by ID (provided in encrypted URL parameters, in the format of ?d=xx&i=xx&k=xx).
     * This is a public endpoint used by the Efty Pay checkout widget.
     * The endpoint returns limited transaction data, based on the sanitizePublic tag in the Transaction model.
     * @param \Eftypay\Common\EncryptedLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTransactionWithEncryptPublic(\Eftypay\Common\EncryptedLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/GetTransactionWithEncryptPublic',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateTransactionWithEncryptPublic updates an existing transaction by ID (provided in encrypted URL parameters, in the format of ?d=xx&i=xx&k=xx).
     * This is a public endpoint used by the Efty Pay checkout widget, and only allows for updating of limited fields & data.
     * The endpoint returns limited transaction data, based on the sanitizePublic tag in the Transaction model.
     * @param \Eftypay\Transactions\UpdateTransactionWithEncryptPublicRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTransactionWithEncryptPublic(\Eftypay\Transactions\UpdateTransactionWithEncryptPublicRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/UpdateTransactionWithEncryptPublic',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

    /**
     * SendTransactionMagicLinkEmailBuyerPublic sends an email with an encrypted magic email to the buyer of a transaction.
     * Clicking this link will grant the user access to certain transaction details in the Efty Pay portal.
     * @param \Eftypay\Common\EncryptedLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SendTransactionMagicLinkEmailBuyerPublic(\Eftypay\Common\EncryptedLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/SendTransactionMagicLinkEmailBuyerPublic',
        $argument,
        ['\Eftypay\Transactions\TransactionMagicLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateTransactionMetaData updates the meta-data for an existing transaction and returns the Transaction object.
     * The whole meta-data object is overriden with this transaction.
     * @param \Eftypay\Transactions\UpdateTransactionMetaDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateTransactionMetaData(\Eftypay\Transactions\UpdateTransactionMetaDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.transactions.Transactions/UpdateTransactionMetaData',
        $argument,
        ['\Eftypay\Transactions\Transaction', 'decode'],
        $metadata, $options);
    }

}
