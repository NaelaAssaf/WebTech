<?php
function format( $name, $sentence ) {

   echo "$name -> $sentence\n";
}

format( 'john', '@jane: Hello' );
format( 'jane', 'Hello john' );
format( 'john', 'Nice weather...' );
format( 'jane', 'Yep is is' );


?>
