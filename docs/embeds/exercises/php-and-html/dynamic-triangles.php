<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Dynamic triangles</title>
</head>
<body>

<?php

if( isset($_GET['base'] ) ) {

   $base_value = $_GET['base'];
}
else {

   $base_value = 10;
}

# ---

if( isset($_GET['char'] ) ) {

   $char_value = $_GET['char'];
}
else {

   $char_value = '*';
}

?>

   <form action="#" method="get">

      Enter base size:
      <input type="text" value="<?= $base_value ?>" name="base">

      <br>

      Enter character:
      <input type="text" value="<?= $char_value ?>" name="char">

      <br>

      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset($_GET['submit']) ) {

   echo "<br>";
   echo "<hr>";

   for( $j=1; $j <= $_GET['base']; $j++ ) {

      for( $i=0; $i < $j; $i++ ) {

         echo $_GET['char'];
      }

      echo "<br>";
   }
}

?>

</body>
</html>
