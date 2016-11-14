<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
   <style type="text/css">
   form textarea {

      width: 500px;
      height: 250px;
   }

   form div { margin: 1em 0;}
   </style>
</head>
<body>
   <form action="#" method="post" enctype="multipart/form-data">
      <div>
         Select file:
         <br>
         <input type="file" name="file">
      </div>

      <div>
         Paste words to highlight
         <br>
         <textarea name="words"></textarea>
      </div>

      <div>
         <input type="submit" name="submit">
      </div>
   </form>

<?php

if( isset($_POST['submit']) ) {

   if( !isset( $_FILES['file']) or $_FILES['file']['error'] != 0 ) {

      die("Error while uploading file...");
   }

   if( !isset($_POST['words']) or empty( $_POST['words']) ) {

      die("No highlight words pasted");
   }

   # -------------------------------------------------------------------------

   $lines = file($_FILES['file']['tmp_name']);
   $raw_words = explode("\n", $_POST['words']);
   $words = [];

   foreach( $raw_words as $word ) {

      $word = trim($word); // strip new line
      $word_to_color = explode('|', $word);
      $words[ $word_to_color[0] ] = 'yellow';

      if( isset( $word_to_color[1] )) {
         $words[$word_to_color[0]] = $word_to_color[1];
      }
   }

   echo "<pre>";
   foreach( $lines as $line ) {

      foreach( explode(' ', $line) as $line_word ) {

         $highlight = false;
         foreach( $words as $word => $color ) {

            $word = trim($word);
            if( $word == $line_word ) {
               $highlight = $color;
               break;
            }
         }

         if( $highlight ) {

            echo "<span style=\"background: $highlight\">$line_word</span>";
         }
         else {

            echo $line_word;
         }
         echo ' ';
      }
      echo "\n";
   }
}

?>

</body>
</html>
