<?php

$array = [ 1, 2, 3 ];

echo count($array) . "\n";

$array[] = "Add item";

echo count($array) . "\n";

array_unshift( $array );
array_unshift( $array );

echo count($array) . "\n";
