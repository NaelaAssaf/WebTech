<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Fasta Generator</title>
   <style type="text/css">
      label {

         display: block;
         margin: 5px;
         padding: 5px;
      }

      input[type=submit] {

         display: block;
         width: 100%;
         margin: 15px 0;
      }

      .form {

         box-sizing: border-box;
         padding: 0 2em;
         position: fixed;
         left: 0;
         top: 0;
         width: 550px;
      }

      .fasta {

         margin-left: 600px;
         border-left: solid #eee 5px;
         padding-left: 50px;
      }

      .warning {

         color: orange;
      }

   </style>
</head>
<body>

   <div class="form">

      <h2>Generate a random fasta sequence</h2>
      <form action="#" method="get">
         <label>
            Sequence header:
            <input type="text" value="<?= $_GET['header'] ?? '' ?>" name="header">
         </label>

         <label>
            Sequence Alphabet:
            <input type="text" value="<?= $_GET['alphabet'] ?? '' ?>" placeholder=" e.g.: ATCG" name="alphabet">
         </label>

         <label>
            Total number of nucleotides:
            <input type="number" name="tot_nt" value="<?= $_GET['tot_nt'] ?? '' ?>">
         </label>

         <label>
            Number of nucleotides per line:
            <input type="number" name="nt_per_line" value="<?= $_GET['nt_per_line'] ?? '' ?>">
         </label>

         <input type="submit" value="Generate" name="submit">
      </form>
   </div>

<?php

if( isset($_GET['submit'] ) ):

   echo '<div class="fasta">';

   if( isset($_GET['header'] ) and !empty( $_GET['header']) ) {

      $header = $_GET['header'];
   }
   else {

      $header = 'Random sequence #1';
      echo '<p class="warning">';
         echo "No header specified - setting it to: `$header`";
      echo '</p>';
   }

   if( isset($_GET['alphabet'] ) and !empty( $_GET['alphabet']) ) {

      $alphabet = $_GET['alphabet'];
   }
   else {

      $alphabet = 'ATGC';
      echo '<p class="warning">';
         echo "No alphabet specified - setting it to: `$alphabet`";
      echo '</p>';
   }

   if( isset($_GET['tot_nt'] ) and !empty( $_GET['tot_nt']) ) {

      $tot_nt = $_GET['tot_nt'];
   }
   else {

      $tot_nt = 250;
      echo '<p class="warning">';
         echo "No tot_nt specified - setting it to: `$tot_nt`";
      echo '</p>';
   }

   if( isset($_GET['nt_per_line'] ) and !empty( $_GET['nt_per_line']) ) {

      $nt_per_line = $_GET['nt_per_line'];
   }
   else {

      $nt_per_line = 50;
      echo '<p class="warning">';
         echo "No nt_per_line specified - setting it to: `$nt_per_line`";
      echo '</p>';
   }

   # -------------------------------------------------------------------------

   echo "<pre>";
      echo "<h3>>$header</h3>";

      for ($i = 0; $i < $tot_nt; $i++) {

         if( $i % $nt_per_line == 0 and $i !== 0 ) {

            echo "\n";
         }

         echo $alphabet[rand(0, strlen($alphabet) - 1)];

      }

   echo "</pre>";
   echo "</div>";

endif;

?>

</body>
</html>
