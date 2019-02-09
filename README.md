# excess-configuration
[![Latest Stable Version](https://poser.pugx.org/streamcommon/excess-configuration/v/stable)](https://packagist.org/packages/streamcommon/excess-configuration)
[![Total Downloads](https://poser.pugx.org/streamcommon/excess-configuration/downloads)](https://packagist.org/packages/streamcommon/excess-configuration)
[![License](https://poser.pugx.org/streamcommon/excess-configuration/license)](./LICENSE)

This package provide default ~~excess~~ object based configuration.

# Branches
[![Master][Master branch image]][Master branch] [![Build Status][Master image]][Master] [![Coverage Status][Master coverage image]][Master coverage]

[![Develop][Develop branch image]][Develop branch] [![Build Status][Develop image]][Develop] [![Coverage Status][Develop coverage image]][Develop coverage]

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

[Master branch]: https://github.com/streamcommon/excess-configuration/tree/master
[Master branch image]: https://img.shields.io/badge/branch-master-blue.svg
[Develop branch]: https://github.com/streamcommon/excess-configuration/tree/develop
[Develop branch image]: https://img.shields.io/badge/branch-develop-blue.svg
[Master image]: https://travis-ci.org/streamcommon/excess-configuration.svg?branch=master
[Master]: https://travis-ci.org/streamcommon/excess-configuration
[Master coverage image]: https://coveralls.io/repos/github/streamcommon/excess-configuration/badge.svg?branch=master
[Master coverage]: https://coveralls.io/github/streamcommon/excess-configuration?branch=master
[Develop image]: https://travis-ci.org/streamcommon/excess-configuration.svg?branch=develop
[Develop]: https://travis-ci.org/streamcommon/excess-configuration
[Develop coverage image]: https://coveralls.io/repos/github/streamcommon/excess-configuration/badge.svg?branch=develop
[Develop coverage]: https://coveralls.io/github/streamcommon/excess-configuration?branch=develop