<?php

$width = $argv[1];
if( array_key_exists(2, $argv) ) {

   $height = $argv[2];
}
else{

   $height = $width;
}

for ($i = 0; $i < $height; $i++) {

   for ($j = 0; $j < $width; $j++) {

      echo "*";
   }
   echo"\n";
}

?>

