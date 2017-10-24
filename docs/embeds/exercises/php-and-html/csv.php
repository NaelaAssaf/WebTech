<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>csv</title>
</head>
<body>
   <form action="#" method="post">

      Please paste <em>CSV</em> here:<br>
      <textarea name="data" cols="50" rows="5"></textarea>

      <br>
      <label>
         <input type="checkbox" name="has_headers" value="1">
         First line are headers.
      </label>

      <br>
      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset( $_POST['submit'] ) ) {

   $count = 0;
   $lines = explode( "\n", $_POST['data'] );

   echo "<table>";
   foreach( $lines as $line ) {

      $fields = explode( ',', $line );
      $count++;

      if( $count == 1 and isset( $_POST['has_headers'] ) ) {

         $tag = 'th';
      }
      else {

         $tag = "td";
      }


      if( !isset( $nr_fields ) ) {

         $nr_fields = count( $fields );
      }

      if( count($fields) != $nr_fields ) {

         die("<caption>Row $count has incorrect number of fields...</caption>");
      }

      echo "<tr>";

         foreach( $fields as $field ) {

            echo "<$tag>";
               echo $field;
            echo "</$tag>";
         }

      echo "</tr>";
   }
   echo "</table>";

}

?>
