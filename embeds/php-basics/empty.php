<?php

echo "test undeclared variable\n";
var_dump( empty($some_variable) );
echo "\n";

echo "test declared variable\n";
$some_variable = "hello world";
var_dump( empty($some_variable) );
echo "\n";

echo "test empty variables\n";
$some_variable = "";
var_dump( empty($some_variable) );
$some_variable = 0;
var_dump( empty($some_variable) );
$some_variable = null;
var_dump( empty($some_variable) );
