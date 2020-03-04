<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">

    .bold {
    font-weight:bold;
    }
    body {
      background-color: lightblue;
      color: white;
}

h1 {
  text-decoration: overline;
  text-shadow: 15px 14px grey;
  font-size: 150pt;

}


    </style>


  </head>
  <body>
    <?php

    date_default_timezone_set('America/Los_Angeles');

      //This is a PHP script that knows which day of the week it is

      //First we get the week day as an integer using a build-in PHP function
      $dayofweek = date("w");

      //Then we use a switch to give a message depending on the day it is
      switch ($dayofweek) {
        case 1:
          echo "<h1><center>Happy Monday!</center></h1>";
          break;
        case 2:
          echo "<h1><center>Happy Tuesday!</center></h1>";
          break;
        case 3:
          echo "<h1><center>Happy Wednesday!</center></h1>";
          break;
        case 4:
          echo "<h1><center>Happy Thursday!</center></h1>";
          break;
        case 5:
          echo "<h1><center>Happy Friday!</center></h1>";
          break;
        case 6:
          echo "<h1><center>Happy Saturday!</center></h1>";
          break;
        case 0:
          echo "<h1><center>Happy Sunday!</center></h1>";
          break;
        default:
          echo "<h1><center>Error!</center></h1>";
          break;

      }

      //Our YYYY-MM-DD date string.
    echo "</br>";
    echo "</br>";


    echo "<h3><center>The time is " . date("h:i:sa</center></h3>");


    ?>
  </body>
</html>
