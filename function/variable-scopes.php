<?php
// Local variable
function say()
{
	$message = 'Hi';
	echo $message;
}
say();
echo "<br>";

// Global variable

$message = 'Hello';

function greet()
{
	$message = 'Hi';
	echo $message;
}

echo $message; // Hello
echo "<br>";

// access global variable from inside a function using global keyword
// Note It’s important to note that it’s not a good practice to use global variables.
$message = 'Hello';

function hello()
{
	global $message;
	echo $message; // Hello
}

hello();


// Superglobals
/* 
 $GLOBALS Returns an array that contains global variables.
The variable names are used to select which part of the array to access.
 $_SERVER Returns data about the webserver environment.
 $_GET	Return data from GET requests.
 $_POST	Return data from POST requests.
 $_COOKIE	Return data from HTTP cookies
 $_FILES	Return data from POST file uploads.
 $_ENV	Return information about the script’s environment.
 $_REQUEST	Return data from the HTTP request
 $_SESSION	Return variables registered in a session
*/


// Function parameters
/* Function parameters are local to the function. 
Therefore, function parameters can only be accessible inside the function */



