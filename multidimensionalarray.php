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
        $x=[[1,2,3],[4,5,6],[8,9,6]];
        for($i=0;$i<sizeof($x);$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $x[$i][$j]." "." ";
               
            }
             echo "<br>";
        }
        ?>
    </body>
</html>
