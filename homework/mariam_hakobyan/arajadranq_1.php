<?php
$name='Mariam';
$age=20;
$a=4.2;
$b=null;
$female=true;

echo("Arajadranq 1"."\n");
echo var_dump($name).var_export($name)."\n";
echo var_dump($age).var_export($age)."\n";
echo var_dump($a).var_export($a)."\n";
echo var_dump($b).var_export($b)."\n";
echo var_dump($female).var_export($female)."\n";


echo("Arajadranq 2"."\n");
echo is_float($a)."\n";
echo var_dump(is_numeric($age))."\n";
echo is_bool($female)."\n";
echo is_int($a)."\n" ;
echo var_dump(is_int($name))."\n";
echo is_null($b)."\n";
echo gettype($a)."\n";
echo gettype($name)."\n";


echo("Arajadranq 3"."\n");
*if (isset($age)){
	echo var_export("age"); 
}
unset($a);
echo var_dump(empty($a));
if (isset($name)==true){
	echo "name-> ";
echo var_export($name)."\n" ;
}
else{
    echo "no name"."\n";
}