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
        echo "factorial file is succesfully included";
        echo"<br>"; 
//require ki jagah include bhi kar sakte
        require "factorial.php";// same source/directory kii files include hogi
      echo "<br>";
      
      // include "lcm.php";
        ?>
    </body>
</html>
