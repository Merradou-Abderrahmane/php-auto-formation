<?php

function concat($str1, $str2, $delimiter = ' ')
{
    return $str1 . $delimiter . $str2;
}

$message = concat('Hi', 'there!');

echo $message;
