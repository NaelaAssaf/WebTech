<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Horizontale Barplot</title>
   <style type="text/css">
      .plotwrap {

         border-left: solid gray 2px;
         border-bottom: solid gray 2px;
         padding: 15px;
         display: inline-block;
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
   
   <h2>Horizontale Barplot</h2>

   <div class="plotwrap">
      <div class="scale">
         <div class="bar" style="width: 75%;" title="75%">
            75%
         </div>
      </div>
      <div class="scale">
         <div class="bar" style="width: 25%;" title="25%">
            25%
         </div>
      </div>

      <div class="scale">
         <div class="bar" style="width: 50%;" title="50%">
            50%
         </div>
      </div>

      <div class="scale">
         <div class="bar" style="width: 100%;" title="100%">
            100%
         </div>
      </div>
   </div>

</body>
</html>

