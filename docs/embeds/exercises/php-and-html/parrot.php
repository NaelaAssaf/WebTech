<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Parrot</title>
</head>

<?php

if( isset( $_POST['sentence'] ) ) {

   $sentence = $_POST['sentence'] . ' ' . $_POST['word'];
}
else {

   $sentence = '';
}

?>

<body>
   <form action="#" method="post">
      Enter a word:
      <input type="text" value="" name="word">
      <input type="hidden" value="<?=$sentence?>" name="sentence">
      <input type="submit" value="submit" name="submit">
   </form>

<?php

if( isset( $_POST['submit'] ) ) {

   echo "Current word is: <em>$_POST[word]</em>";

   echo "<p>";
      echo "<strong>All words:</strong>: $sentence ";
   echo "</p>";
}

?>

</body>
</html>
