<?php

$orig = $argv[1];
$chars = str_split( $orig );

echo "input: $orig\n";

$stats = [
   'A' => 0,
   'T' => 0,
   'G' => 0,
   'C' => 0,
];

$nr_of_nt = 0;

foreach( $chars as $nt ) {

   if( $nt == ' ' ) { continue; }
   elseif( $nt == 'A' || $nt == 'a' ) { $stats['A']++; }
   elseif( $nt == 'T' || $nt == 't' ) { $stats['T']++; }
   elseif( $nt == 'C' || $nt == 'c' ) { $stats['C']++; }
   elseif( $nt == 'G' || $nt == 'g' ) { $stats['G']++; }
   else{ die( "unknown nucleotide: $nt\n" ); }

   $nr_of_nt++;
}

echo"
   STATS:
      A: $stats[A] nts -> ". ($stats['A']/$nr_of_nt)*100 . " %
      T: $stats[T] nts -> ". ($stats['T']/$nr_of_nt)*100 . " %
      G: $stats[G] nts -> ". ($stats['G']/$nr_of_nt)*100 . " %
      C: $stats[C] nts -> ". ($stats['C']/$nr_of_nt)*100 . " %
";

echo"
   GRAPH:
";

foreach( $stats as $nt => $count ) {

   echo "      $nt: ";
   for( $i=0; $i < ($count/$nr_of_nt)*100; $i++) {

      echo '=';
   }
   echo "\n";
}

?>

