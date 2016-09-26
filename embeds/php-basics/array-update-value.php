<?php

$array = [
   "value1",
   "value2",
   "value3",
   100 => "hundred",
   'key' => "value",
];

print_r($array);

$array['key'] = "new value for key";

$array[1] = 'index 1 now points here';

print_r($array);
