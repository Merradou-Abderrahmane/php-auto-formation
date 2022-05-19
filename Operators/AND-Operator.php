<?php

$price = 100;
$qty = 2;

$discounted = $qty > 3 && $price > 99;


var_dump($discounted);
// short-circuiting
/* When the value of the first operand is false, 
the logical AND operator knows that the result must be also false. 
In this case, it doesn’t evaluate the second operand.
This process is called short-circuiting.
*/