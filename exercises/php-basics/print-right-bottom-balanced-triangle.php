<?php

$width = $argv[1];


for( $i=1; $i < $width; $i++ ){

   $spaces = $width - $i;

   for ($j = 0; $j < $spaces ; $j++) {
      echo " ";
   }

   for ($j = 0; $j < $i; $j++) {
      echo "*";
   }

   echo "\n";
}

?>
 

