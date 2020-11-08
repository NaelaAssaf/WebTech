<?php

$string = "This is the first section of a semicolon separated string;This is the second section;And this the third!";

$array_of_sections = explode(";", $string);

print_r( $array_of_sections );
