# SayHello

### This is a test composer

### Installation

Require this package with composer. It is recommended to only require the package.
```
composer require tomyue/say-hello
```

### Usage
```php
use Say\Hello;

$hello = new Hello();
echo $hello->say("Hello World\n");
```


## Initialize package
```
composer init
```
This will run you through a bunch of questions: name, description, license, etc.

## Write some code
Start coding by creating the file src/Hello.php.
```php
<?php

namespace Say;

class Hello
{
    public function say($toSay = 'Nothing given')
    {
        return $toSay;
    }
}
```

### Edit composer.json
```json
{
    "name": "tomyue/say-hello",
    "type": "library",
    "description": "This is a test composer",
    "license": "MIT",
    "authors": [
        {
            "name": "tomyue",
            "email": "yue.kun.ting@gmail.com"
        }
    ],
    "minimum-stability": "dev",
    "autoload": {
        "psr-4": {
            "Say\\": "src/"
        }
    },
    "require": {
        "php": "^5.3.3 || ^7.0"
    }
}

```
## validate your composer.json
```
composer validate
```

## Add .gitignore
```
vendor
composer.lock
```

## Install dependencies
```
composer install
```

## Testing
Create a tests/test.php to it with the following contents.
```php
<?php

require_once __DIR__.'/../vendor/autoload.php';

use Say\Hello;

$hello = new Hello();

echo $hello->say("Hello World\n");
```

Run test.php
```
php tests/test.php
```
## Publish to github & create a new release

## Submit package to Packagist(The PHP Package Repository)

