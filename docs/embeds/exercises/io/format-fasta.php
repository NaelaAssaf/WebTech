<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
   <style type="text/css">
   form input[type=file], form textarea {

      margin-left: 50px;
   }

   form textarea {

      width: 500px;
      height: 250px;
   }

   form div { margin: 1em 0;}

   h3 { margin-top: 2em; }


   table { border-collapse: collapse; }

   td, th {

      border: solid lightgray 1px;
      padding: 1em;
   }

   </style>
</head>
<body>
   <form action="#" method="post" enctype="multipart/form-data">
      <div>
         <label for="radio-file">
            <input type="radio" value="file" name="upload-type" id="radio-file" checked>
            Select fasta file:
            <br>
            <input type="file" name="file">
         </label>
      </div>

      <div>
         <label for="radio-paste">
            <input type="radio" value="paste" name="upload-type" id="radio-paste">
            Paste fasta
            <br>
            <textarea name="paste"></textarea>
         </label>
      </div>

      <div>
         <input type="submit" name="submit">
      </div>
   </form>

<?php

if( isset($_POST['submit']) ) {

   $lines = [];
   $gc = [];
   $tot_len = [];
   $current_header = '';

   if( $_POST['upload-type'] == "paste" ) {

      if( !isset( $_POST['paste'] ) or empty( $_POST['paste'] ) ) {

         die( "ERROR: Upload method paste paste, but no data was pasted..." );
      }

      $lines = explode("\n", $_POST['paste'] );
   }
   elseif( $_POST['upload-type'] == "file" ) {

      if( !isset( $_FILES['file'] ) or empty( $_FILES['file'] ) ) {

         die( "ERROR: Upload method is file, but no file was selected..." );
      }

      $lines = file( $_FILES['file']['tmp_name'] );
   }
   else {

      die("Invalid fasta upload type, should be 'paste' or 'file'");
   }

   echo "<pre>";

   $fill_line_count = 0;
   foreach( $lines as $line ) {

      $line = trim( $line );
      if( preg_match('/^>/', $line ) ) {

         $fill_line_count = 0;
         echo "<h3>$line</h3>";
         $current_header = $line;
         $gc[$current_header] = 0;
         $tot_len[$current_header] = 0;
      }
      else {

         foreach( str_split($line) as $nt ) {

            if( $fill_line_count == 80 ) {
               echo "\n";
               $fill_line_count = 0;
            }

            if( $nt == 'G' or $nt == 'g' or $nt == 'C' or $nt == 'c' ) {
               $gc[$current_header]++;
            }
            $tot_len[$current_header]++;
            echo $nt;
            $fill_line_count++;
         }
      }
   }

   echo "</pre>";

   echo "<table>";
      echo "<caption> GC content </caption>";
      echo "<th>header</th>";
      echo "<th>%</th>";
      foreach( $gc as $header => $count ) {

         echo "<tr>";
         echo "<th>", $header, "</th>";
         echo "<td>", $count / $tot_len[$header] * 100, "</td>";
         echo "</tr>";
      }
   echo "</table>";
}

?>

</body>
</html>
