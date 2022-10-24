<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
   <link rel="stylesheet" href="styles.css">
   
   <style type="text/css">
   h3 { margin-top: 2em; }

   .error {

      background: darkred;
      color: white;
      padding: 0.5em 1em;
      margin: 0.5em 1em;
   }

   table { border-collapse: collapse; }

   td, th {

      border: solid lightgray 1px;
      padding: 1em;
   }

   .A, .a { color: red; }
   .T, .t { color: orange; }
   .C, .c { color: green; }
   .G, .g { color: blue; }

   .plotwrap {

      border-left: solid gray 2px;
      border-bottom: solid gray 2px;
      padding: 15px;
      margin: 50px;
      display: inline-block;
      position: relative;
   }
   .bar {
      box-sizing: border-box;
      background: lightblue;
      border: solid gray 1px;
      text-align: right;
      line-height: 1.5em;
   }
   .scale {
      box-sizing: border-box;
      border: solid #ddd 1px;
      width: 500px;
      margin: 5px;
   }
   </style>
</head>
<body>

<?php include('navbar.html') ?>

<?php

$errors = [];

if( !isset($_POST['submit']) ) {

   $errors[] = "No data received. You have to submit the form...";
}

$lines = [];
$freq = [];
$fasta_output = [];
$tot_len = [];
$current_header = '';

$group_nts = isset( $_POST['group_nts'] );

$upload_type = $_POST['upload-type'] ?? null;

if( $upload_type == "paste" ) {

   if( !isset( $_POST['paste'] ) or empty( $_POST['paste'] ) ) {

      $errors[] = "ERROR: Upload method paste paste, but no data was pasted...";
   }

   $lines = explode("\n", $_POST['paste'] );
}
elseif( $upload_type == "file" ) {

   if( !isset( $_FILES['file'] ) or empty( $_FILES['file'] ) ) {

      $errors[] = "ERROR: Upload method is file, but no file was selected...";
   }

   $lines = file( $_FILES['file']['tmp_name'] );
}
else {

   $errors[] = "Invalid fasta upload type, should be 'paste' or 'file'";
}

$colors = [];

if( isset($_POST['color-a']) ) {
   $colors['A'] = $_POST['color-a'];
   $colors['a'] = $_POST['color-a'];
}
else {
   $errors[] = "Please color pick an option for A";
}

if( isset($_POST['color-t']) ) {
   $colors['T'] = $_POST['color-t'];
   $colors['t'] = $_POST['color-t'];
}
else {
   $errors[] = "Please color pick an option for T";
}

if( isset($_POST['color-c']) ) {
   $colors['C'] = $_POST['color-c'];
   $colors['c'] = $_POST['color-c'];
}
else {
   $errors[] = "Please color pick an option for C";
}

if( isset($_POST['color-g']) ) {
   $colors['G'] = $_POST['color-g'];
   $colors['g'] = $_POST['color-g'];
}
else {
   $errors[] = "Please color pick an option for G";
}


if( count($errors) > 0) {

   foreach( $errors as $error ) {
      echo '<div class="error">';
	 echo $error;
      echo '</div>';
   }

   exit;
}

# ------------------------------------------------------------------------- #
# Parse fasta

$fill_line_count = 0;
foreach( $lines as $line ) {

   $line = trim( $line );
   if( preg_match('/^>/', $line ) ) {

      $fill_line_count = 0;
      $current_header = $line;
      $fasta_output[$current_header] = '';
      $freq[$current_header] = [];
      $tot_len[$current_header] = 0;
   }
   else {

      foreach( str_split($line) as $nt ) {

	 if( $fill_line_count == 80 ) {
	    $fasta_output[$current_header] .= "\n";
	    $fill_line_count = 0;
	 }
	 elseif( $group_nts && $fill_line_count % 10 == 0 && $fill_line_count != 0 ) {

	    $fasta_output[$current_header] .= " ";
	 }

	 if( !isset( $freq[$current_header][$nt] ) ) {
	    $freq[$current_header][$nt] = 0;
	 }

	 $color = "";
	 if( isset($colors[$nt]) ) {
	    $color = $colors[$nt];
	 }
	 elseif( $_POST['err_handling'] == 'highlight' ) {
	    $color = "red";
	 }
	 elseif( $_POST['err_handling'] == 'remove' ) {
	    continue;
	 }
	 $freq[$current_header][$nt]++;
	 $tot_len[$current_header]++;
	 $fasta_output[$current_header] .= "<span style=\"background: $color;\">$nt</span>";
	 $fill_line_count++;
      }
   }
}

# ------------------------------------------------------------------------- #
# Print links

echo "<ul>";
$headcount = 1;
foreach( $fasta_output as $header => $fasta ) {

   echo "<li><a href=\"#fasta$headcount\">$header</a></li>";
   $headcount++;
}
echo "</ul>";

# ------------------------------------------------------------------------- #
# Print fasta + bargraph

$headcount = 1;
foreach( $fasta_output as $header => $fasta ) {

   echo "<pre>";
   echo "<h3 id=\"fasta$headcount\">$header</h3>";
   echo $fasta;
   $headcount++;
   echo "</pre>";

   echo '<div class="plotwrap">';
   ksort( $freq[$header] );
   foreach( $freq[$header] as $nt => $nr ) {
      $p = round( $nr / $tot_len[$header] * 100 );
      bar( "$p%", "$nt: $p% " );
   }
   echo '</div>';

}

?>

</body>
</html>


<?php

# ============================================================================ #
# Functions

function bar( $width, $text = null ) {

   if( is_null( $text ) ) {

      $text = $width;
   }
	echo '<div class="scale">';
   	echo '<div class="bar" style="width: '.$width.';">';
            echo $text;
      echo '</div>';
   echo '</div>';
}

?>
