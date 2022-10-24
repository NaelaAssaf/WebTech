<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Home</title>
   <link rel="stylesheet" href="styles.css">
   <style type="text/css">

      .submit-btn {

         background: deeppink;
         padding: 0.5em 1em;
         color: white;
         font-weight: bold;;
         text-decoration: none;;
      }
      .submit-btn:hover {
         color: pink;
      }
   </style>
   
</head>
<body>

<?php include('navbar.html') ?>

<h1>Coloring web app</h1>

<p>
This is an more elaborate example / exercise, combining and intertwining HTML, CSS and PHP into a complete and working web applications.
</p>

<p>
   We have a:
   <ul>
      <li>Landing page </small>(<a href="index.php">index.php</a>)</small></li>
      <li>Form submit page </small>(<a href="submit.php">submit.php</a>)</small></li>
      <li>Processing page </small>(<a href="color.php">color.php</a>)</small></li>
   </ul>
</p>

<p>
   The navigation and styles shared between the pages are not repeated but extracted and included where required
</p>

<a class="submit-btn" href="submit.php">Submit a new coloring job</a>

</body>
</html>
