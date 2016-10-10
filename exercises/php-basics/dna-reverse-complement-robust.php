<?php

$orig = $argv[1];
$chars = str_split( $orig );
$invalid = [];

echo "orig.: $orig\n";
echo 'comp.: ';

foreach( $chars as $nt ) {

   if( $nt == ' ' ) { continue; }
   elseif( $nt == 'A' || $nt == 'a' ) { echo 'T'; }
   elseif( $nt == 'T' || $nt == 't' ) { echo 'A'; }
   elseif( $nt == 'C' || $nt == 'c' ) { echo 'G'; }
   elseif( $nt == 'G' || $nt == 'g' ) { echo 'C'; }
   else{

      if( !array_key_exists( $nt, $invalid ) ) {

         $invalid[$nt] = 0;
      }

      $invalid[$nt]++;
   }
}

echo "\n\n";
echo "Invalid NT characters:\n";

foreach( $invalid as $char => $nr ) {

   echo "$char: $nr occurrences\n";
}

?>
