<?php

$name = '';
$email = '';
$title = 'male';
$comment = '';
$post_anonymous = false;

if( isset($_POST['submit']) ) {

   $class = [];
   $has_errors = false;

   if( (!isset($_POST['name']) or empty($_POST['name']) ) and !isset($_POST['anonymous']) ) {

      echo'<p class="error">';
         echo "Please provide a name.";
      echo'</p>';

      $class['name'] = 'error';
      $has_errors = true;
   }
   else {

      $name = $_POST['name'];
      $class['name'] = 'ok';
   }

   # --------------------------------------------------------------------------

   if( (!isset($_POST['email']) or empty($_POST['email']) ) and !isset($_POST['anonymous']) ) {

      echo'<p class="error">';
         echo "Please provide an email address.";
      echo'</p>';

      $class['email'] = 'error';
      $has_errors = true;
   }
   else {

      $email = $_POST['email'];
      $class['email'] = 'ok';
   }

   # --------------------------------------------------------------------------

   if( (!isset($_POST['title']) or empty($_POST['title']) ) and !isset($_POST['anonymous']) ) {

      echo'<p class="error">';
         echo "Please provide your title";
      echo'</p>';

      $class['title'] = 'error';
      $has_errors = true;
   }
   else {

      $title = $_POST['title'];
      $class['title'] = 'ok';
   }

   # --------------------------------------------------------------------------

   if( !isset($_POST['comment']) or empty($_POST['comment']) ) {

      echo'<p class="error">';
         echo "Please provide your comment";
      echo'</p>';

      $class['comment'] = 'error';
      $has_errors = true;
   }
   else {

      if( strlen( $_POST['comment'] ) > 500 ) {

         echo'<p class="error">';
            echo "Comment exceeds 500 character limit";
         echo'</p>';

         $class['comment'] = 'error';
         $has_errors = true;
      }
      else {
         $comment = $_POST['comment'];
         $class['comment'] = 'ok';
      }
   }

   # --------------------------------------------------------------------------

   if( isset($_POST['anonymous']) ) {

      $post_anonymous = true;
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Post Comment</title>
   <style type="text/css">

   .in-wrap {

      padding: 0.5em;
   }

   textarea {

      width: 500px;
      height: 150px;
   }

   .error {
      color: darkred;
   }


   input.error,
   textarea.error {

      color:darkred;
      outline: solid red 2px;
   }

   .comment {

      color: gray;
   }

   </style>
</head>
<body>

   <form action="#" method="post">

      <div class="in-wrap">
         Name:
         <input type="text" value="<?= $name ?>" name="name"
            class="<?=$class['name'] ?>"
         >
      </div>

      <div class="in-wrap">
         Email:
         <input type="email" value="<?= $email ?>" name="email"
            class="<?=$class['email'] ?>"
         >
      </div>

      <div class="in-wrap">
         Title:
         <select name="title">
            <option value="Dr." <?php if($title === 'Dr.' ) echo "selected" ?>>Dr.</option>
            <option value="Ir." <?php if($title === 'Ir.' ) echo "selected" ?>>Ir.</option>
            <option value="Mr." <?php if($title === 'Mr.' ) echo "selected" ?>>Mr.</option>
            <option value="Ms." <?php if($title === 'Ms.' ) echo "selected" ?>>Ms.</option>
         </select>
      </div>

      <div class="in-wrap">
         Comment:<br>
         <textarea name="comment" class="<?=$class['comment'] ?>" ><?= $comment ?></textarea>
      </div>

      <div class="in-wrap">
         <input type="checkbox" value="anonymous" name="anonymous"
            <?php if($post_anonymous === true ) echo "checked" ?>
         >
         Post anonymous
      </div>

      <div class="in-wrap">
         <input type="submit" value="submit" name="submit">
      </div>
   </form>

<?php if( isset($_POST['submit']) and $has_errors === false ):

if( $post_anonymous ) {

   $handle = 'Anonymous';
}
else {

   $handle = $name;
}

?>

<hr>

<em><?= "$title $handle" ?> posted:</em>

<blockquote class="comment"><?=$comment?></blockquote>

<?php endif ?>

</body>
</html>
