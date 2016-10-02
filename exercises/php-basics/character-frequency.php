<?php

$orig = $argv[1];
$chars = str_split( $orig );

echo "input: $orig\n";

$stats = [];

$nr_of_chars = 0;

foreach( $chars as $char ) {

   if( !isset( $stats[$char]) ) {

      $stats[$char] = 0;
   }

   $stats[$char]++;
   $nr_of_chars++;
}

# ----------------------------------------------------------------------------

echo"
STATS:
";

foreach( $stats as $char => $count ) {

   echo "'$char': $count occurences -> ". ($count/$nr_of_chars)*100 . " %\n";
}

# ----------------------------------------------------------------------------

echo "\nOrder by frequentie:\n";

asort( $stats );
foreach( $stats as $char => $count ) {

   echo "'$char': $count occurences -> ". ($count/$nr_of_chars)*100 . " %\n";
}

# ----------------------------------------------------------------------------

# ----------------------------------------------------------------------------

echo "\nOrder by character:\n";

ksort( $stats );
foreach( $stats as $char => $count ) {

   echo "'$char': $count occurences -> ". ($count/$nr_of_chars)*100 . " %\n";
}

# ----------------------------------------------------------------------------

# ----------------------------------------------------------------------------

?>

