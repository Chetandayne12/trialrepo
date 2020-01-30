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
        $x=90;
        $y=80;
        function hello()
        {
            echo $GLOBALS['x'];
            echo "<br>";
            echo $GLOBALS['y'];   
        }
           hello();
        
       /* $x=90;
        function hello()
        {
            $x=10;
            echo $x;
        }
        hello(); */
        ?>
    </body>
</html>
