<?php

$width = $argv[1];
$numberOfSpaces = $width/2;
$numberOfAsterisks = 0;


while( $numberOfAsterisks <= $width ) {

   for ($j = 0; $j < $numberOfSpaces; $j++) {
      
      echo " ";
   }

   for ($j = 0; $j < $numberOfAsterisks; $j++) {
      
      echo "*";
   }
   $numberOfAsterisks+= 2;
   $numberOfSpaces--;
   echo"\n";
}

?>

