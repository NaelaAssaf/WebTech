<?php

echo "Loop start.\n";

for( $count = 0 ; $count < 10 ; $count++ ) {


   if( $count == 3 ) {

      echo "Count is 3: stop this loop...\n";
      break;
   }

   echo "Current count == $count\n";
}

echo "Loop end.\n";
