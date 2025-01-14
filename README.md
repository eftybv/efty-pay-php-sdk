# efty-pay-php-sdk
The Efty Pay PHP SDK for Efty Pay; Efty's online transaction service designed to ensure secure and transparent buying and selling of domain names. It acts as a trusted intermediary to safeguard both the buyer and seller's interests during the transaction process.

The Efty Pay production URLs:

- SDK use (over gRPC): *api.eftypay.com:443*
- API use (over REST): *https://api.eftypay.com*

## Table of Contents

- [Efty Pay PHP SDK](#efty-pay-php-sdk)
- [Requirements](#requirements)
- [Getting started](#getting-started)
  - [Composer](#composer)
  - [gRPC](#grpc)
  - [Include the SDK](#include-the-sdk)
  - [Install the dependencies](#install-the-dependencies)
  - [Auto loading](#auto-loading)
  - [Authentication](#authentication)
  - [Quickstarts](#quickstarts)
  - [Troubleshooting](#troubleshooting-support)
- [API resource documentation](#api-resource-documentation)
- [License](#license)

## Requirements
- PHP 7.0 or higher
- PECL
- Composer
- Efty Pay API access credentials; please fill out the [access request form](https://forms.gle/fk85K45eThgepi1Q8) to obtain early access.

## Getting started

### gRPC
Under the hood the Efty Pay PHP SDK uses gRPC & Protobuf. If not enabled yet, you'll need to install & enable these extensions on your server.

#### Install & enable the gRPC extension

```
sudo pecl install grpc
```

After you install the gRPC extension, make sure to enable the extension in your `php.ini` file:
```
extension=grpc.so
```

For detailed instructions, visit the official [gRPC PHP readme](https://github.com/grpc/grpc/blob/v1.66.0/src/php/README.md).

### Include the SDK

You can include the SDK from our public GitHub repository by adding it to your `composer.json`.

Open your `composer.json` file in your preferred text editor and add in the below:
```json
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/eftybv/efty-pay-php-sdk"
    }
  ],
  "require": {
    "eftybv/efty-pay-php-sdk": "v1.0.0"
  }
}
```

### Install the dependencies
Once you’ve added the SDK, run the following command to install it and update your dependencies:
```bash
composer update
```

### Auto loading
Composer automatically handles autoloading for you. Make sure to include the Composer autoloader in your PHP script:

```php
require 'vendor/autoload.php';
```

### Authentication
The methods in the SDK require you to pass an auth token in that contains a JWT. Our [Efty Pay PHP Quickstart repository](https://github.com/eftybv/efty-pay-php-quickstart) contains
sample code for howto generate the token and pass it into the request. In summary the following is required (this uses an [external library](https://github.com/firebase/php-jwt) for JWT generation):

Token generation:
```php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function generateToken()
{
    $apiKey = "YOUR_API_KEY";
    $apiSecret = "YOUR_API_SECRET";
    $integratorId = "YOUR_INTEGRATOR_ID";

    $payload = [
        "iat" => time(),
        "sub" => $apiKey,
        "exp" => time() + 600,
        "type" => 2,
        "iid" => $integratorId
    ];

    $token = JWT::encode($payload, $apiSecret, 'HS256');
    return $token;
}
```

Injecting the token in the function context:
```php
  $opts = [
      "credentials" => \Grpc\ChannelCredentials::createSsl(),
      "update_metadata" => function($metaData){
         $token = generateToken();
         $metaData['authorization'] = [$token];
         return $metaData;
      },
  ];

  // Define the client for the transactions API, and pass in the options with auth token.
  $client = new \Eftypay\Transactions\TransactionsClient("api.eftypay.com:443", $opts);
```

### Quickstarts
You can now use the SDK in your project. For our quickstart and examples, please visit our [Efty Pay PHP Quickstart repository](https://github.com/eftybv/efty-pay-php-quickstart).

### Troubleshooting & Support
- If you encounter any issues, ensure that the package name is correctly specified.
- You can also specify a version constraint (e.g., "^1.0" or "dev-main") if you need a specific version of the SDK. It's strongly recommended to always use the latest version.
- If you run into any other issues, contact us at [api@efty.com](api@efty.com).

## API resource documentation
The Efty Pay API resource documentation can be found at [https://docs.eftypay.com](https://docs.eftypay.com)

## License
This project is licensed under the MIT License. See the LICENSE file for details.