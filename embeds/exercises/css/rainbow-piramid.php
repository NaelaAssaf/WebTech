<?php

$colors = [
   'red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'
];
$nr_colors = count( $colors );

for( $j= 0; $j < $nr_colors; $j++ ) {

   for( $i= 0; $i < $j; $i++ ) {

      echo "<span style=\"color:$colors[$i]\">*</span>";
   }

   echo "<br>";
}
