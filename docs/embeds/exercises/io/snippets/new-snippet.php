<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>New - Snippets</title>
   <style type="text/css">
      textarea {

         width: 500px;
         height: 250px
      }

      form div { margin: 15px 0; }
   </style>
</head>
<body>

<?php

$name = '';
$content = '';

if( isset($_POST['submit']) ) {

   $errors = [];

   # ------------------------------------------------------------------------- #
   # Validate name

   $file_path = filename2path( $_POST['name']);
   if( !isset($_POST['name']) or empty($_POST['name']) ) {

      $errors[] = "No name provided!";
   }
   elseif( file_exists( $file_path ) ) {

      $errors[] = "Snippet with name `$_POST[name]` already exists";
   }
   else {

      $name = $_POST['name'];
   }

   # ------------------------------------------------------------------------- #
   # Validate snippet

   if( !isset($_POST['content']) or empty($_POST['content']) ) {

      $errors[] = "No content provided.";
   }
   else {

      $content = $_POST['content'];
   }

   # ------------------------------------------------------------------------- #

   if( empty($errors) ) {

      file_put_contents( $file_path, $content );

      echo "Snippet saved! - <a href=\"index.php\">return to index</a>";

   }
   else {

      echo "<h4>Please fix the following errors:</h4>";
      echo "<ul>";
      foreach( $errors as $error ) {
         echo "<li>$error</li>";
      }
      echo "</ul>";

   }
}

?>

   <form action="#" method="post">

      <div>
         Snippet name:<br>
         <input type="text" value="<?=$name?>" name="name">
      </div>

      <div>
         Content:<br>
         <textarea name="content"><?=$content?></textarea>
      </div>

      <div>
         <input type="submit" name="submit" value="submit snippet">
      </div>

   </form>
</body>
</html>

<?php

# ============================================================================ #
# Functions

function filename2path( $name ) {

   return "store/$name";
}

?>
