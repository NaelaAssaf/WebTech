<?php

$array = [
    'position 1' => 'hello',
    'position 2' => 'world',
    3            => 'three',
    'four'       => 4
];

$keys = [];
foreach( $array as $key => $value ) {

   $keys[] = $key;
}

print_r( $keys );
