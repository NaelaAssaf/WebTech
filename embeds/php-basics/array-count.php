<?php

$array = [ 1, 2, 3 ];

echo count($array) . "\n";

$array[] = "Add item";

echo count($array) . "\n";

array_shift( $array );
array_shift( $array );

echo count($array) . "\n";
