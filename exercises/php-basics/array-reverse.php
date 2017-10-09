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

// ---------------------------------------------------------------------------

$array_reverse = [];

for ($i = count($keys) - 1; $i >= 0; $i--) {

   $array_reverse[] = $array[$keys[$i]];
}

print_r( $array_reverse );

// ---------------------------------------------------------------------------

$array_reverse_keys = [];

for ($i = count($keys) - 1; $i >= 0; $i--) {

   $array_reverse_keys[$keys[$i]] = $array[$keys[$i]];
}

print_r( $array_reverse_keys );
