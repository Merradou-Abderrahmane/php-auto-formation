<?php

$expired = true;
$purged = false;

$clear_cache = $expired || $purged;

var_dump($clear_cache);
// Short-circuiting applies to the OR operator as well.
