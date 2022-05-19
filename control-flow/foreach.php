<?php
// indexed array
/*
When PHP encounters a foreach statement,
it assigns the first element of the array to the variable
following the as keyword ($element).
In each iteration, PHP assigns the next array element to the $element variable.
If PHP reaches the last element, the loop ends.
*/

$colors = ['red', 'green', 'blue'];

foreach ($colors as $color) {
	echo $color . '<br>';
}

// associative array
/*
When PHP encounters the foreach statement, it accesses the first element and assigns:

The key of the element to the $key variable.
The value of the element to the $value variable.
In each iteration, PHP assigns the key and value of the next element to the variables 
($key and $value) that follows the as keyword. If the last element is reached,
PHP ends the loop.

*/


$capitals = [
	'Japan' => 'Tokyo',
	'France' => 'Paris',
	'Germany' => 'Berlin',
	'United Kingdom' => 'London',
	'United States' => 'Washington D.C.'
];

foreach ($capitals as $country => $capital) {
	echo "The capital city of {$country} is $capital" . '<br>';
}