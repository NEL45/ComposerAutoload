<?php
require_once '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk();
echo PHP_EOL;
echo SayHello::world();