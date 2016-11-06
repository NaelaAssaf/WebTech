<?php

function factorial( $nr ) {

   if( $nr <= 1 ) {

      return 1;
   }

   return $nr * factorial( $nr -1 );
}

echo factorial( $argv[1] );
