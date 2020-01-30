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
        echo $_SERVER['REQUEST_METHOD'];    //ye server pr aai requ.get h ya post h batata h
        echo "<br>";
        echo $_SERVER['PHP_SELF'];     // ye jo fiile uss kr rhe h uskaa nam, batata h
        
        ?>
    </body>
</html>
