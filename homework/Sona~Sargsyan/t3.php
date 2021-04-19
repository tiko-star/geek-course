<?php
$age = 20;
$a = 8.75;
$name = 'Sona';
$n = null;
 
if (isset($age)) 
{
	echo "age is set\n"; 
}
if (isset($lastName) == false) 
{
	echo "last name is ";
	echo var_export(isset($lastName)) . "\n";
}
unset($a);
echo empty($a);

