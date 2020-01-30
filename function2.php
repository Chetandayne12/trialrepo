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
        // Takes nothing return something
        function hello()
        {
            echo "hello world from function in php";
            echo "<br>";
            echo "hii";
            echo "<br>";
            return 10;
            
        }
        $x=hello();
        echo $x;
        ?>
    </body>
</html>
