<?php

$a = 13; //int
$b = 0.97; //float.double
$c = "Hello!"; //string
$d = true; //bool
$e = NULL;
$f = ''; 

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

echo gettype($a) . ' ' . gettype($c) . ' ' . gettype($e);
echo isset($a);
echo empty($f);