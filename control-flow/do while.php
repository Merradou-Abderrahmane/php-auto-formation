<?php
/* Unlike the while statement,
PHP evaluates the expression at the end of each iteration.
It means that the loop always executes at least once, 
even the expression is false before the loop enters. */

$i = 10;

do {
    echo $i  . '<br>';
    $i--;
} while ($i > 0);
