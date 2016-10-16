<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Validate Passwords</title>
</head>
<body>
<?php

$errors = [];

if( isset($_POST['submit'] ) ) {

   $p1 = $_POST['pass1'];
   $p2 = $_POST['pass2'];

   if( $p1 !== $p2 ) {

      $errors[] = "Passwords are not equal...";
   }

   if( strlen( $p1 ) < 8 ) {

      $errors[] = "Password is shorter then 8 characters";
   }

   # if( !preg_match('/\w/', $p1) or !preg_match('/\d/', $p1) ) {
   if( !preg_match('/[a-zA-Z]+/', $p1) or !preg_match('/\d+/', $p1)) {

      $errors[] = "Password must have a leaste one number and letter...";
   }

   if( !empty($errors) ) {

      echo "<ol>";
      foreach( $errors as $error ) {

         echo "<li> $error </li>";
      }
      echo "</ol>";
   }
   else {

      echo "Password passed the tests...";
   }
}

?>

   <form action="" method="post">
      Password 1 :
      <input type="password" value="" name="pass1">
      <br>
      Password 2 :
      <input type="password" value="" name="pass2">
      <br>
      <input type="submit" value="Validate passwords" name="submit">
   </form>

</body>
</html>
