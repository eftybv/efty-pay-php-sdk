# efty-pay-php-sdk
The Efty Pay PHP SDK for Efty Pay; Efty's online transaction service designed to ensure secure and transparent buying and selling of domain names. It acts as a trusted intermediary to safeguard both the buyer and seller's interests during the transaction process.

## Table of Contents

- [Requirements](#requirements)
- [Getting started](#getting-started)
  - [Composer](#composer)
  - [gRPC](#grpc)
  - [Include the SDK](#include-the-sdk)
  - [Install the dependencies](#install-the-dependencies)
  - [Autoloading](#autoloading)
  - [Quickstarts](#quickstarts)
  - [Troubleshooting](#troubleshooting)
- [API resource documentation](#api-resource-documentation)
- [License](#license)

## Requirements
- PHP 7.0 or higher
- PECL
- Composer
- Efty Pay access credentials; please contact [ask@efty.com](ask@efty.com) to obtain early access.

## Getting started

### gRPC
Under the hood the Efty Pay PHP SDK uses gRPC & Protobuf. If not enabled yet, you'll need to install & enable these extensions on your server.

#### Install & enable the gRPC extension

```
sudo pecl install grpc
```

After you install the gRPC extension, make sure to to enable the extension in your `php.ini` file:
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
      "url": "https://github.com/efty-b-v/efty-pay-php-sdk"
    }
  ]
    "require": {
        "efty-b-v/efty-pay-php-sdk": "v1.0.0"
    }
}
```

### Install the dependencies
Once you’ve added the SDK, run the following command to install it and update your dependencies:
```bash
composer update
```

### Autoloading
Composer automatically handles autoloading for you. Make sure to include the Composer autoloader in your PHP script:

```php
require 'vendor/autoload.php';
```

### Quickstarts
You can now use the SDK in your project. For our quickstart and examples, please visit our [Efty Pay PHP Quickstart repository](https://github.com).

### Troubleshooting & Support
 - If you encounter any issues, ensure that the package name is correctly specified.
 - You can also specify a version constraint (e.g., "^1.0" or "dev-main") if you need a specific version of the SDK. It's strongly recommended to always use the latest version.
 - If you run into any other issues, contact us at [ask@efty.com](ask@efty.com).

## API resource documentation
The Efty Pay API resource documentation can be found at [https://docs.eftypay.com](https://docs.eftypay.com)

## License
This project is licensed under the MIT License. See the LICENSE file for details.