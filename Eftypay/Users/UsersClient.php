<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Eftypay\Users;

/**
 * The Users service allows for management of buyer & sellers within the Efty Pay backend.
 * User methods are only available to integrators.
 */
class UsersClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * GetUserProfile returns the User data for the logged in user.
     * @param \Google\Protobuf\GPBEmpty $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserProfile(\Google\Protobuf\GPBEmpty $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.users.Users/GetUserProfile',
        $argument,
        ['\Eftypay\Users\User', 'decode'],
        $metadata, $options);
    }

    /**
     * CreateUser creates a new user and returns the User object.
     * @param \Eftypay\Users\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateUser(\Eftypay\Users\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.users.Users/CreateUser',
        $argument,
        ['\Eftypay\Users\User', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateUser updates an existing user and returns the User object.
     * Note that the whole user object needs to be provided, and all writeable values are overwritten.
     * @param \Eftypay\Users\UserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateUser(\Eftypay\Users\UserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.users.Users/UpdateUser',
        $argument,
        ['\Eftypay\Users\User', 'decode'],
        $metadata, $options);
    }

    /**
     * ListUsers lists all the users for the integrator.
     * @param \Eftypay\Users\ListUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function ListUsers(\Eftypay\Users\ListUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/eftypay.users.Users/ListUsers',
        $argument,
        ['\Eftypay\Users\User', 'decode'],
        $metadata, $options);
    }

    /**
     * GetUserById gets an existing user by ID.
     * @param \Eftypay\Common\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserById(\Eftypay\Common\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.users.Users/GetUserById',
        $argument,
        ['\Eftypay\Users\User', 'decode'],
        $metadata, $options);
    }

    /**
     * GetUserByEmail gets an existing user by email address.
     * @param \Eftypay\Common\GetObjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserByEmail(\Eftypay\Common\GetObjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.users.Users/GetUserByEmail',
        $argument,
        ['\Eftypay\Users\User', 'decode'],
        $metadata, $options);
    }

    /**
     * GetApiCredentials gets the API credentials for a user.
     * @param \Eftypay\Common\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetApiCredentials(\Eftypay\Common\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.users.Users/GetApiCredentials',
        $argument,
        ['\Eftypay\Users\ApiCredentials', 'decode'],
        $metadata, $options);
    }

    /**
     * RegenerateApiCredentials regenerates API credentials for a user.
     * @param \Eftypay\Common\Id $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegenerateApiCredentials(\Eftypay\Common\Id $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/eftypay.users.Users/RegenerateApiCredentials',
        $argument,
        ['\Eftypay\Users\ApiCredentials', 'decode'],
        $metadata, $options);
    }

}
