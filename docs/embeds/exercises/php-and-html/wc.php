<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>wc</title>
</head>
<body>
   <form action="#" method="post">

      Please paste text here:<br>
      <textarea name="data" cols="50" rows="5"></textarea>

      <br>

      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset( $_POST['submit'] ) ):

   $nr_lines = 0;
   $nr_words = 0;
   $nr_chars = 0;
   $lines = explode("\n", $_POST['data'] );

   foreach( $lines as $line ) {

      $nr_lines++;

      $words = explode( ' ', $line );

      foreach( $words as $word ) {

         $nr_words++;
         $nr_chars += count( str_split( $word ) );
      }
   }
?>

<table>
   <caption>wc</caption>
   <tr>
      <th>Nr. lines</th>
      <td><?= $nr_lines?></td>
   </tr>
   <tr>
      <th>Nr. words</th>
      <td><?= $nr_words?></td>
   </tr>
   <tr>
      <th>Nr. chars</th>
      <td><?= $nr_chars?></td>
   </tr>
</table>

<?php endif; ?>

</body>
</html>
