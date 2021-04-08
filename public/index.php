<?php 

require_once '../vendor/autoload.php';

use App\Wcs\Hello;

$hello = new Hello;
$hello->talk();


use HelloWorld\SayHello;

echo SayHello::world();