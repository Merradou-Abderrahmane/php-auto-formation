<?php
/* 
By default, arguments are passed by value in PHP.
Prepend parameters by an ampersand (&) to pass arguments by reference.
*/
$counter = 1;
function increase( &$value )
{
	$value += 1;
	echo $value . "<br>"; // 2
}

// increase the counter
increase($counter);

echo $counter . "<br>"; // 2