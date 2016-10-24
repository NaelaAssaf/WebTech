<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Cat</title>

   <style type="text/css">

   em { text-decoration: underline; }

   table {

      border-collapse: collapse;
   }

   th, td {

      border: solid gray 1px;
      padding: 1em 2em;
   }

   ul {
      font-style: italic;
   }
   li {
      display: inline-block;
      border-right: solid gray 1px;
      padding: 0 0.5em;
   }

   li:last-child {
      border: none;
   }

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
         echo "File: <em>". $_FILES['file']['name'] ."</em> has:";
      echo "</h1>";

      $lines = file( $_FILES['file']['tmp_name']);
      $nr_lines = 0;
      $nr_words = 0;
      $nr_chars = 0;
      $words_store = [];

      foreach( $lines as $line ) {

         $nr_lines++;

         $words = split( ' ', $line );

         foreach ($words as $word ) {

            $nr_words++;
            $nr_chars += strlen( $word );

            if( !isset( $words_store[$word ]) ) { $words_store[$words] = 0; }
            $words_store[$word]++;
         }
      }

      krsort( $words_store );

      echo "<table>";
         echo "<tr>";
            echo "<th>Nr. lines</th>";
            echo "<td>$nr_lines</td>";
         echo "<tr>";
         echo "<tr>";
            echo "<th>Nr. words</th>";
            echo "<td>$nr_words</td>";
         echo "<tr>";
         echo "<tr>";
            echo "<th>Nr. chars</th>";
            echo "<td>$nr_chars</td>";
         echo "<tr>";
      echo "</table>";

      echo "Top ten most frequent words:";

      echo "<ul>";
         $counter = 1;
         foreach( $words_store as $word => $freq ) {

            echo "<li>$word</li>";

            $counter++;
            if( $counter >= 10 ) { break ;}
         }
      echo "</ul>";
   }
   else {

      echo "Error occurred during file upload. Errorcode: " . $_FILES['file']['error'];
   }
}

?>

</body>
</html>
