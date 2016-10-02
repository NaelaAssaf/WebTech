<?php

$number = $argv[1];

echo "Count up from 0 to $number: \n";

for( $i=0; $i <= $number; $i++ ) {

   echo $i."\n";
}

# ----------------------------------------------------------------------------

echo "Count down from $number to 0: \n";

for( $i=$number; $i >= 0; $i-- ) {

   echo $i."\n";
}

# ----------------------------------------------------------------------------

echo "Count up from 0 to $number in steps of 3: \n";

for( $i=0; $i <= $number; $i+=3 ) {

   echo $i."\n";
}
