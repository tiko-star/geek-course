<?php
$name='Mariam';
$age=20;
$a=4.2;
$b=null;
$female=true;

echo("Arajadranq 2"."\n");
echo is_float($a)."\n";
echo var_dump(is_numeric($age))."\n";
echo is_bool($female)."\n";
echo is_int($a)."\n" ;
echo var_dump(is_int($name))."\n";
echo is_null($b)."\n";
echo gettype($a)."\n";
echo gettype($name)."\n";