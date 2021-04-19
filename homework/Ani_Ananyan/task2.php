<?php
$name='Room';
$height=3;
$area=46.5;
$color=null;
$lighting=true;

// exercise2
echo PHP_EOL;
echo(is_int($height)) .  " " .  gettype($height) .  PHP_EOL;
echo(is_float($area))  . " " . gettype($area) . PHP_EOL;
echo(is_double($area)) . " " . gettype($area) . PHP_EOL;
echo(is_bool($lighting))  . " " . gettype($lighting) . PHP_EOL;
echo(is_null($color))  . " " . gettype($color) . PHP_EOL;
