<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Show - Snippets</title>

   <style type="text/css">
      pre {
         border-left: solid lightgray 10px;
         margin: 15px 50px;
         padding: 15px;
      }
   </style>

</head>
<body>

<a href="index.php"><< Back to index</a>

<?php
$errors = [];
$file_path = null;

if( !isset( $_GET['file']) or empty( $_GET['file'] ) ) {

   $errors[] = "ERROR: No snippet name provided in URL. <small>Use format: http://some.url.com/show.php?file=THE-FILE-NAME.EXT</small>";
}
elseif( !file_exists( "store/$_GET[file]" ) ) {

   $errors[] = "Snippet `$_GET[file]` not found!";
}

if( !empty($errors) ): ?>

<ul>
<?php foreach( $errors as $error ) {

   echo "<li>$error</liu>";
} ?>
</ul>


<form action="#" method="get">

   Enter filename:
   <input type="text" value="" name="file">
   <input type="submit" value="submit" name="Go">

</form>

<?php else: ?>

   <h2>
      <small>Contents of snippet</small>
      `<?=$_GET['file']?>`:
   </h2>
   <pre><?= file_get_contents( "store/$_GET[file]" ); ?></pre>

<?php endif; ?>

</body>
</html>
