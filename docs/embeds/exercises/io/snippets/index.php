<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Welcome - Snippets</title>
</head>
<body>
   <h1>Welcome to snippets</h1>

   <h2>
      <a href="new-snippet.php"> + Create new snippet</a>
   </h2>

   <h2>All snippets</h2>

   <ul>
   <?php foreach( glob('store/*') as $file ) {

      $file = basename( $file ); // strip directory part
      echo "<li>";
         echo "<a href=\"show.php?file=$file\"> $file </a>";
      echo "</li>";
   } ?>
   </ul>

</body>
</html>
