<?php

$array_of_sections = [
   "section 1",
   "section 2",
   "section 3",
   "section 4",
];

echo "Create a new string delimited by semicolons: \n";
echo implode(";", $array_of_sections);

echo "\n";
echo "Create a new string delimited by newlines: \n";
echo implode("\n", $array_of_sections);
