<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Cat</title>
</head>
<body>

   <form action="" method="post" enctype="multipart/form-data">
      <input value="" type="file" name="file">
      <input type="submit" value="submit" name="submit">
   </form>

<?php if( isset($_POST['submit']) ) {

   if( empty($_FILES['file']['error']) ) {

      echo "<h1>";
         echo "File: ". $_FILES['file']['name'] ." has content:";
      echo "</h1>";

      echo "<pre>";
         echo file_get_contents( $_FILES['file']['tmp_name']);
      echo "</pre>";
   }
   print_r( $_FILES );
}

?>

</body>
</html>
