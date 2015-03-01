<?php

require_once('vendor/autoload.php');

$reverser = new \Reverser\WordReverser();

$string   = 'hello world';
$reversed = $reverser->reverse($string);

echo PHP_EOL;
echo 'Reversing string: ' . $string . PHP_EOL;
echo 'Result:           ' . $reversed . PHP_EOL;
