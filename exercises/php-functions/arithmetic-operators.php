<?php

# ============================================================================ #
# Normal/Simple
# ============================================================================ #

function plus( $list ) {

   $subtotal = array_shift( $list );
   foreach( $list as $item ) { $subtotal = $subtotal + $item; }
   return $subtotal;
}

# ============================================================================ #

function subtract( $list ) {

   $subtotal = array_shift( $list );
   foreach( $list as $item ) { $subtotal = $subtotal - $item; }
   return $subtotal;
}

# ============================================================================ #

function divide( $list ) {

   $subtotal = array_shift( $list );
   foreach( $list as $item ) { $subtotal = $subtotal / $item; }
   return $subtotal;
}

# ============================================================================ #

function multiply( $list ) {

   $subtotal = array_shift( $list );
   foreach( $list as $item ) { $subtotal = $subtotal * $item; }
   return $subtotal;
}

# ============================================================================ #
# Double arguments
# ============================================================================ #

function plus2( $first, $sec = null ) {

   if( !is_array( $first ) ) {

      return $first + $sec;
   }
   else {

      $subtotal = array_shift( $list );
      foreach( $list as $item ) { $subtotal = $subtotal + $item; }
      return $subtotal;
   }
}

# ============================================================================ #
# Double arguments
# ============================================================================ #


echo plus([1,2,3, 4]) ."\n";
echo subtract([10,5,1]) ."\n";
echo divide([100, 10, 5]) ."\n";
echo multiply([7,9,8,4]) ."\n";
