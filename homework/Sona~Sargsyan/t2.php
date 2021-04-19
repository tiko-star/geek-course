<?php
$age=20;
$a=5.7;
$name='Sona';
$b=false;
$c=NULL;

 
echo var_dump(is_numeric($age))."\n";
echo is_float($a)."\n";
echo is_int($a)."\n" ;
echo gettype($a)."\n";
echo var_dump(is_int($name))."\n";
echo gettype($name)."\n";
echo is_bool($b)."\n";
echo is_null($c)."\n";
