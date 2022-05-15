<?php 

require_once __DIR__ . '/vendor/autoload.php';

use BelajarComposer\Data\People;

$people = new People('Kuzon');

echo "$people->sayHello('dhan')";

?>