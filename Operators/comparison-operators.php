<?php
// (==) consideration of value
$x = '20';
$y = 20;
var_dump($x == $y); // bool(true)
// (===) consideration of value and type
var_dump($x === $y); // bool(false)

echo "<br>";
$x = 20;
$y = 10;

var_dump($x != $y); // bool(true)

echo "<br>";

$x = 20;
$y = 20;

var_dump($x <= $y); // bool(true)
var_dump($y <= $x); // bool(true)

var_dump($x >= $y); // bool(true)
var_dump($y >= $x); // bool(true)

