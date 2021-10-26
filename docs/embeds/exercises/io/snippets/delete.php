<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Show - Snippets</title>

   <style type="text/css">
      textarea {
         border-left: solid lightgray 10px;
         padding: 15px;
		 width: 90%;
		 height: 50vh;
      }
   </style>

</head>
<body>

<a href="index.php"><< Back to index</a>

<?php
$errors = [];
$file_path = null;

$file = $_GET['file'] ?? $_POST['file'] ?? null;

if(empty( $file )){

   $errors[] = "ERROR: No snippet name provided in URL. <small>Use format: http://some.url.com/show.php?file=THE-FILE-NAME.EXT</small>";
}
elseif( !file_exists( "store/$file" ) ) {

   $errors[] = "Snippet `$file` not found!";
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

   <?php unlink("store/$file"); ?>

   <h3>
      <small>Deleted: </small> `<?=$file?>`...
   </h3>
   

<?php endif; ?>

</body>
</html>
