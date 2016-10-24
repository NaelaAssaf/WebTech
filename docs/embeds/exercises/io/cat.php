<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Cat</title>

   <style type="text/css">

   em { text-decoration: underline; }
   </style>
</head>
<body>

   <form action="" method="post" enctype="multipart/form-data">
      <input value="" type="file" name="file">
      <input type="submit" value="submit" name="submit">
   </form>

<?php if( isset($_POST['submit']) ) {

   if( empty($_FILES['file']['error']) ) {

      echo "<h1>";
         echo "File: <em>". $_FILES['file']['name'] ."</em> has content:";
      echo "</h1>";

      echo "<pre>";
         echo file_get_contents( $_FILES['file']['tmp_name']);
      echo "</pre>";
   }
   else {

      echo "Error occurred during file upload. Errorcode: " . $_FILES['file']['error'];
   }
}

?>

</body>
</html>
