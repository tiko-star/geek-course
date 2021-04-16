<?php

$a = 137647546; //int
$b = 0.97; //float.double
$c = "Hello!"; //string
$d = true; //bool
$e = NULL;
$f = '1'; 

//N1

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo PHP_EOL;

echo var_export($a) . PHP_EOL;
echo var_export($b) . PHP_EOL;
echo var_export($c) . PHP_EOL;
echo var_export($d) . PHP_EOL;
echo var_export($e) . PHP_EOL;
echo var_export($f) . PHP_EOL;

echo PHP_EOL;

//N2

var_dump(is_int($a));
var_dump(is_float($b));
var_dump(is_double($b));
var_dump(is_bool($c));
var_dump(is_string($c));
var_dump(is_null($d));
var_dump(is_numeric($f));
var_dump(is_string($f));

echo PHP_EOL;

echo gettype($a), PHP_EOL;
echo gettype($b), PHP_EOL;
echo gettype($c), PHP_EOL;
echo gettype($d), PHP_EOL;
echo gettype($e), PHP_EOL;
echo gettype($f), PHP_EOL;

echo PHP_EOL;

//N3
$k='';

var_dump(isset($a));
var_dump(empty($k));


