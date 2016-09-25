<?php

echo "<h1>This is an embed example</h1>";

if( array_key_exists( 'KEY', $_POST ) ) {

	unset($_POST['KEY']);
}

?>

<p>
   Markup is interpreted by the browser and formatted accordingly..
</p>
