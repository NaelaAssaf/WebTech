<?php

echo "test undeclared variable\n";
var_dump( isset($some_variable) );
echo "\n";

echo "test declared variable\n";
$some_variable = "hello world";
var_dump( isset($some_variable) );
echo "\n";

echo "test null variable\n";
$some_variable = null;
var_dump( isset($some_variable) );
