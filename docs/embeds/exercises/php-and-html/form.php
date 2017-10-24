<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Simple Form</title>

   <style type="text/css">
      .form-item {

         padding: 0.5em 1em;
      }

      b { display: inline-block; width: 6em; text-align: right; padding-right: 5px; }
   </style>
</head>
<body>

   <!-- Create a webpage with a login form:

       first name field
       last name field
       gender radio button
       age field
       email address
       password field
       "I want to receive updates" checkbox
   -->

<?php
if( isset( $_REQUEST['submit'] ) ) {

   echo "<h2>The following data was submitted:</h2>";
   echo "<ul>";
   foreach( $_REQUEST as $name => $value ) {

      echo "<li>";
         echo "<b>$name:</b> ";
         echo "<code>$value</code>";
      echo "</li>";
   }
   echo "</ul>";

   echo "<a href=\"form.php\">Refill form</a>";
   exit;
}
?>

   <h2>Fill in the form to subscribe to the service</h2>

   <form action="#" method="post">
      <div class="form-item">
         <label>
            First name:
            <input type="text" value="" name="fname">
         </label>
      </div>

      <div class="form-item">
         <label>
            Last name:
            <input type="text" value="" name="lname">
         </label>
      </div>

      <div class="form-item">
         <label>
            Male:
            <input type="radio" value="male" name="gender">
         </label>
         <label>
            Female:
            <input type="radio" value="female" name="gender">
         </label>
      </div>

      <div class="form-item">
         <label>
            E-mail address:
            <input type="email" name="email">
         </label>
      </div>

      <div class="form-item">
         <label>
            Enter/Choose a password:
            <input type="password" name="password">
         </label>
      </div>

      <div class="form-item">
         <label>
            I want to receive newsletter updates
            <input type="checkbox" name="updates">
         </label>
      </div>

      <div class="form-item">
         <input type="submit" value="Submit" name="submit">
      </div>
   </form>

</body>
</html>
