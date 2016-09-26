<?php

$array = [ 1, 2, 'three', 'value' ];

print_r($array);

foreach( $array as $value ) {

   echo "The obtained value is: `$value`\n";
}

# ---------------------------------------------------------------------------- #

$array = [
   1 , 2, 3,
   'key1' => 'value1',
   100 => 'hello'
];

print_r($array);

foreach( $array as $key => $value ) {

   echo "Key: `$key` has value: `$value`\n";
}

