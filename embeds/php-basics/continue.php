<?php

echo "Loop start\n";

for( $count = 0 ; $count < 10 ; $count++ ) {


   if( $count == 3 or $count == 6 ) {

      echo "Count is 3 or 6; start next iteration...\n";
      continue;
   }

   echo "Current count == $count\n";
}

echo "Loop end\n";
