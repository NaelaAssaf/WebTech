<?php

$numberOfAsterisks = $height = $argv[1];
$numberOfSpaces = 0;


while( $numberOfAsterisks > 0){

   for ($j = 0; $j < $numberOfSpaces; $j++) {
      
      echo " ";
   }

   for ($j = 0; $j < $numberOfAsterisks; $j++) {
      
      echo "*";
   }
   $numberOfAsterisks -= 2;
   $numberOfSpaces++;
   echo"\n";
}

?>

