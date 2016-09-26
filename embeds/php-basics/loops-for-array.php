<?php

$array = [
   1,
   2,
   'three',
   'value'
];

print_r($array);

for( $i = 0; $i < count($array); $i++ ){

   echo "\$array has value: '". $array[$i] . "' at index $i\n";
}
