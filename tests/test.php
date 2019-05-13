<?php

require_once __DIR__.'/../vendor/autoload.php';

use Say\Hello;

$hello = new Hello();

echo $hello->say("Hello World\n");