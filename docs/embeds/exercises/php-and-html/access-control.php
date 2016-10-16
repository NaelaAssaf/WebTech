<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Access Control</title>
</head>
<body>
   <form action="#" method="get">
      Name:
      <input type="text" value="" name="name">
      <br>
      Age:
      <input type="text" value="" name="age">
      <br>
      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset( $_GET['submit'] ) ) {

   echo "<hr>";
   echo "<br>";

   if( $_GET['age'] > 21 ) {

      echo "Hello $_GET[name]; ACCESS GRANTED...";
   }
   else {

      echo "I'm sorry $_GET[name]; ACCESS DENIED...";

      echo "<br>";
      echo "<small>";
         echo "Try again in " . ( 21 - $_GET['age'] ) . " years...";
      echo "</small>";
   }
}

?>

</body>
</html>
