<?php

require dirname(__FILE__) . '/function.php';

$input = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
$seed = '2017';

$b = defineksort($input, $seed);
var_dump($b);

$seed = '2018';
$c = defineksort($input, $seed);
var_dump($c);