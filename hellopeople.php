<?php 
require_once __DIR__ . '/vendor/autoload.php';

use BelajarComposer\Data\People;

$people = new People('Kuzon');

$people->coba = 'dhan';
echo $people->coba . PHP_EOL;



echo $people->sayHello('dhan');
?>