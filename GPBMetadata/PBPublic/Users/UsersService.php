<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: public/users/users_service.proto

namespace GPBMetadata\PBPublic\Users;

class UsersService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\Common::initOnce();
        \GPBMetadata\PBPublic\Users\User::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Includes\ProtocGenOpenapiv2\Openapiv2Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
 public/users/users_service.protoeftypay.userspublic/users/user.protogoogle/api/annotations.protogoogle/protobuf/empty.proto9includes/protoc-gen-openapiv2/openapiv2-annotations.proto2�
Users�
GetUserProfile.google.protobuf.Empty.eftypay.users.User"k���/users/profile�ARGet user profile>Get user profile returns the User data for the logged in user.�

CreateUser.eftypay.users.UserRequest.eftypay.users.User"����"/users:*�AsCreate userdCreate user creates a new user and returns the User object. The user can be of type buyer or seller.�

UpdateUser.eftypay.users.UserRequest.eftypay.users.User"����/users:*�A�Update user�Update user updates an existing user and returns the User object. Note that the whole user object needs to be provided, and all writeable values are overwritten.�
	ListUsers.eftypay.users.ListUserRequest.eftypay.users.User"W���"/users/list:*�A>	List user1List user lists all the users for the integrator.0�
GetUserById.eftypay.common.Id.eftypay.users.User"]���/users/id/{id}�ADGet user by ID2GetUserById gets an existing user by it\'s user ID.�
GetUserByEmail .eftypay.common.GetObjectRequest.eftypay.users.User"o���/users/email/{fieldValue}�AKGet user by email6GetUserByEmail gets an existing user by email address.g
GetApiCredentials.eftypay.common.Id.eftypay.users.ApiCredentials"���/users/credentials/{id}q
RegenerateApiCredentials.eftypay.common.Id.eftypay.users.ApiCredentials""���"/users/credentials/{id}:*��A��The Users service allows for management of buyer & sellers within the Efty Pay backend. User methods are only available to integrators.B�Z9bitbucket.org/eftypay/efty-pay-models/sdk/go/public/users�AMK
Efty Pay - Users API".
Efty Payhttps://efty.comsupport@efty.com21.0bproto3'
        , true);

        static::$is_initialized = true;
    }
}

