<html>

<?php
$integer=13;
$float=66.6;
$string="the type of this text is string";
$boolean=true;
$NULL=null;

//Exercise 1

var_dump($integer); var_export($integer); echo " "; 
var_dump($float); var_export($float); echo " ";
var_dump($string); var_export($string); echo " "; 
var_dump($boolean); var_export($boolean); echo " ";
var_dump($NULL); var_export($NULL); echo " "; 

//Exercise 2

var_dump(is_int($integer));
var_dump(is_double($string));
var_dump(is_numeric($float));
var_dump(is_null($NULL));
echo gettype($float);

//Exercise 3

echo isset($integer);
unset($string);
echo empty($boolean);
?>
