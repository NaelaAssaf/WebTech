<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>My hobby's and favourite dishes</title>
</head>
<body>
<?php
$hobbys = ['basketball', 'music', 'games'];
$dishes = ['fries', 'spaghetti', 'pizza'];

echo "<ol>";
   foreach( $dishes as $dish ) {

      echo "<li>$dish</li>";
   }
echo "</ol>";

echo "<ul>";
   foreach( $hobbys as $hobby ) {

      echo "<li>$hobby</li>";
   }
echo "</ul>";
?>
</body>
</html>
