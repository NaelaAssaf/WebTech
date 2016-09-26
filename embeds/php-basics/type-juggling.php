<?php

$string = '1 as a string';

var_dump($string);

# $string to int = 1 the `+` triggers the type juggling
var_dump( $string + 0);

# -----------------------------------------------------------------------------

var_dump( '1' == 1, 1 == true, 'abc' == true );
var_dump( '1' === 1, 1 === true, 'abc' === true );
