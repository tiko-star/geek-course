<?php
$name='Mariam';
$age=20;
$a=4.2;
$b=null;
$female=true;

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