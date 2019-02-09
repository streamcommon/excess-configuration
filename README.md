# excess-configuration
[![Build Status](https://travis-ci.org/streamcommon/excess-configuration.svg?branch=master)](https://travis-ci.org/streamcommon/excess-configuration)
[![Coverage Status](https://coveralls.io/repos/github/streamcommon/excess-configuration/badge.svg?branch=master)](https://coveralls.io/github/streamcommon/excess-configuration?branch=master)
[![Latest Stable Version](https://poser.pugx.org/streamcommon/excess-configuration/v/stable)](https://packagist.org/packages/streamcommon/excess-configuration)
[![Total Downloads](https://poser.pugx.org/streamcommon/excess-configuration/downloads)](https://packagist.org/packages/streamcommon/excess-configuration)
[![License](https://poser.pugx.org/streamcommon/excess-configuration/license)](./LICENSE)

This package provide default ~~excess~~ object based configuration.

## Installation
Console run:
```console
    composer require streamcommon/excess-configuration
```
Or add into your `composer.json`:
```json
    "require": {
        "streamcommon/excess-configuration": "*"
    }
```

## Example
```php
    use Streamcommon\Excess\Configuration\{Credential, Connection};

    $credential = new Credential([
        'username' => 'user',
        'password' => 'password',
    ]);
    
    $connection = new Connection([
        'host' => 'localhost',
        'port' => 8080
    ]);
```