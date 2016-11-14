<?php

function validate_nr( $nr ) {

	if( $nr >= 0 and $nr % 2 == 0 and $nr < 100 ) {

		return true;
	}
	else {

		return false;
	}
}

$nr = $argv[1];

if( validate_nr( $nr ) ) { echo "number ($nr) passed tests\n"; }
else { echo "number ($nr) failed tests\n"; }
