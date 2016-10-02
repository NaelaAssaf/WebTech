<?php

$width = $argv[1];


for( $i=$width; $i > 0; $i-- ){

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

