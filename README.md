# excess-configuration
[![Latest Stable Version](https://poser.pugx.org/streamcommon/excess-configuration/v/stable)](https://packagist.org/packages/streamcommon/excess-configuration)
[![Total Downloads](https://poser.pugx.org/streamcommon/excess-configuration/downloads)](https://packagist.org/packages/streamcommon/excess-configuration)
[![License](https://poser.pugx.org/streamcommon/excess-configuration/license)](https://packagist.org/packages/streamcommon/excess-configuration)

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