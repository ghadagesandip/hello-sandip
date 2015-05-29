<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Sandip\HelloWord\SayHello;

$obj = new SayHello();
echo $obj->world();exit;