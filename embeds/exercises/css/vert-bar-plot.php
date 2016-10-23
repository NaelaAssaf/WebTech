<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Verticale Barplot</title>
   <style type="text/css">
      .plotwrap {
         display: inline-block;
         position: relative;
         border-left: solid gray 2px;
         border-bottom: solid gray 2px;
         padding: 15px;
         padding-bottom: 10px;
      }
      .bar {
         box-sizing: border-box;
         background: lightblue;
         text-align: center;
         line-height: 1.5em;
         bottom: 0px;
         position: absolute;
         width: 100%;
      }
      .bar-wrap {
         box-sizing: border-box;
         border: solid #ddd 1px;
         height: 250px;
         margin: 5px;
         display: inline-block;
         position: relative;
         width: 3em;
      }
   </style>
</head>
<body>
   
   <h2>Verticale Barplot</h2>

   <div class="plotwrap">
      <div class="bar-wrap">
         <div class="bar" style="height: 75%;">75%</div>
      </div>
      <div class="bar-wrap">
         <div class="bar" style="height: 25%;">25%</div>
      </div>
      <div class="bar-wrap">
         <div class="bar" style="height: 50%;">50%</div>
      </div>
      <div class="bar-wrap">
         <div class="bar" style="height: 100%;">100%</div>
      </div>
   </div>

</body>
</html

