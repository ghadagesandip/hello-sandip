<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Sandip\HelloWorld\SayHello;
$obj = new SayHello();
echo $obj->world();exit;