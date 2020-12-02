<?php

echo "We want to match a leading > symbol:\n";
//       Pattern  Find pattern in this
var_dump( preg_match("/^>/",  ">MultiFasta Sequence Header") );

var_dump( preg_match("/^>/",  "Hello World") );
