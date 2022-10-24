<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Format fasta</title>
   <link rel="stylesheet" href="styles.css">
   <style type="text/css">
   form input[type=file], form textarea {

      margin-left: 50px;
   }

   form textarea {

      width: 500px;
      height: 250px;
   }

   form div {
      margin: 1em 0;
      margin-left: 1em;
      padding-left: 1em;
      border-left : solid deeppink 1px;
   }

   textarea {border: solid deeppink 1px;}

   h3 { margin-top: 2em; }
   </style>
</head>
<body>

   <?php include('navbar.html'); ?>

   <h1>Submit new coloring job</h1>
   

   <form action="color.php" method="post" enctype="multipart/form-data">
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
         <label>
			Pick the color for <b>A</b>
			<select name="color-a">
			   <option value="white">None</option>
			   <option value="pink">Red</option>
			   <option value="orange">Orange</option>
			   <option value="lightgreen">Green</option>
			   <option value="yellow">Yellow</option>
			   <option value="lightblue">Blue</option>
			</select>
         </label>
      </div>

      <div>
         <label>
			Pick the color for <b>T</b>
			<select name="color-t">
			   <option value="white">None</option>
			   <option value="pink">Red</option>
			   <option value="orange">Orange</option>
			   <option value="lightgreen">Green</option>
			   <option value="yellow">Yellow</option>
			   <option value="lightblue">Blue</option>
			</select>
         </label>
      </div>

      <div>
         <label>
			Pick the color for <b>G</b>
			<select name="color-g">
			   <option value="white">None</option>
			   <option value="pink">Red</option>
			   <option value="orange">Orange</option>
			   <option value="lightgreen">Green</option>
			   <option value="yellow">Yellow</option>
			   <option value="lightblue">Blue</option>
			</select>
         </label>
      </div>

      <div>
         <label>
			Pick the color for <b>C</b>
			<select name="color-c">
			   <option value="white">None</option>
			   <option value="pink">Red</option>
			   <option value="orange">Orange</option>
			   <option value="lightgreen">Green</option>
			   <option value="yellow">Yellow</option>
			   <option value="lightblue">Blue</option>
			</select>
         </label>
      </div>

      <div>
         <label>
			<input type="checkbox" name="group_nts" value="10">
			Group nucleotides in groups of 10.
			
         </label>
      </div>

      <div>
         <label>
		<input type="radio" name="err_handling" value="ignore" checked>
		Ignore invalid NTs
         </label>
         <label>
		<input type="radio" name="err_handling" value="remove">
		Remove invalid NTs
         </label>
         <label>
		<input type="radio" name="err_handling" value="highlight">
		Highlight invalid NTs
         </label>
      </div>

      <div>
         <input type="submit" name="submit">
      </div>
   </form>

</body>
</html>

