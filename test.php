<html>
 <head>
  <title>Hello World Test</title>
  <style type="text/css">
    table, th, td {
      border: thin solid black;
    }
    p.sql {
      font-family: monospace;
    }
  </style>
 </head>
 <body>
   <h1>Hello World Input name</h1>

<?php

$name = $_GET['input'];
echo "Hello " . $name . ". Have a good day.";

?>

  </body>
 </html>