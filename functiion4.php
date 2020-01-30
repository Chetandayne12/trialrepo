<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Takes Something Return Nothing
         function hello($x)
         {
             echo $x;
             echo "<br>";
             return $x."Dayne"; //string concatenation
         }
         $name=hello("chetan");
          echo $name;
         ?>
    </body>
</html>
