# SayHello

### Basic Hello World composer package

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
        "php": "^5.3.3 || ^7.0",
    },
}
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

