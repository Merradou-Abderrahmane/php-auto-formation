<?php
// in a for loop

for ($i = 0; $i < 10; $i++) {
	if ($i === 5) {
		break;
	}
	echo $i;
}

echo '<br>';

// in a while loop

$i = 0;

while ($i < 10) {
	if ($i === 5) {
		break;
	}
	echo $i;
	$i++;
}

echo '<br>';

// in a do-while loop

$i = 0;

do {
	if ($i === 5) {
		break;
	}
	echo $i;
	$i++;
} while ($i < 10);

echo '<br>';

// in a foreach loop

$fruits = array('apple', 'orange', 'banana', 'strawberry');

foreach ($fruits as $fruit) {
	if ($fruit === 'banana') {
		break;
	}
	echo $fruit;
}

echo '<br>';