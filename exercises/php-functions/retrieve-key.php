<?php

$array = [
   'key1' => "value1",
   'key2' => "value2",
   'key3' => "value3",
   'abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz',
   123
];

echo get_default( $array, 'key1', 'default value' ) . "\n";
echo get_default( $array, 'keyx' , 'default value') . "\n";
echo get_default( $array, 0 , 'default value') . "\n";
echo get( $array, 'key1' ) . "\n";
echo get( $array, 'keyx' ) . "\n";
echo get( $array, 0 ) . "\n";

# ============================================================================ #

function get( $array, $key ) {

   $return;

   if( !array_key_exists($key, $array) ) {

      die("`$key` not found in array\n");
   }
   else {

      $return = $array[$key];
   }

   if( strlen($return) > 50 ) {

      die("value for `$key` is longer than 50 chararcters");
   }

   return $return;
}
# ============================================================================ #

function get_default( $array, $key, $default = null ) {

   $return = null;

   if( array_key_exists($key, $array) ) {

      $return = $array[$key];
   }

   if( strlen($return) > 50 or empty($return) ) {

      $return = $default;
   }

   return $return;
}
