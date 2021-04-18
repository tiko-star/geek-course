<?php

$a = 5;
$b = 0.758;
$c = "hi";
$d = false;
$e = null;

echo is_int($a);
echo is_float($b);
echo is_int($c);
echo is_bool($d);
echo is_null($e);

echo "\n" . gettype($a) . "\n";
echo gettype($b) . "\n";
echo gettype($c) . "\n";
echo gettype($d) . "\n";
echo gettype($e) . "\n";

