# excess-configuration
[![Latest Stable Version](https://poser.pugx.org/streamcommon/excess-configuration/v/stable)](https://packagist.org/packages/streamcommon/excess-configuration)
[![Total Downloads](https://poser.pugx.org/streamcommon/excess-configuration/downloads)](https://packagist.org/packages/streamcommon/excess-configuration)
[![License](https://poser.pugx.org/streamcommon/excess-configuration/license)](./LICENSE)

[Master][Master] | [Develop][Develop]
------------ | -------------
[![Build Status][Master image]][Master] | [![Build Status][Develop image]][Develop]
[![Coverage Status][Master coverage image]][Master coverage] | [![Coverage Status][Develop coverage image]][Develop coverage]

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

[Master image]: https://travis-ci.org/streamcommon/excess-configuration.svg?branch=master
[Master]: https://travis-ci.org/streamcommon/excess-configuration
[Master coverage image]: https://coveralls.io/repos/github/streamcommon/excess-configuration/badge.svg?branch=master
[Master coverage]: https://coveralls.io/github/streamcommon/excess-configuration?branch=master
[Develop image]: https://travis-ci.org/streamcommon/excess-configuration.svg?branch=develop
[Develop]: https://travis-ci.org/streamcommon/excess-configuration
[Develop coverage image]: https://coveralls.io/repos/github/streamcommon/excess-configuration/badge.svg?branch=develop
[Develop coverage]: https://coveralls.io/github/streamcommon/excess-configuration?branch=develop