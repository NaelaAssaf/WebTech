<?php

$width = $argv[1];


for( $i=$width; $i >= 0; $i-- ){

   for ($j = 0; $j < $i; $j++) {
      echo "*";
   }

   echo "\n";
}

?>

