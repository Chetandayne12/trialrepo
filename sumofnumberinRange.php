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
        $a=5;
        $b=10;
        $sum=0;
        for($i=$a;$i<=$b;$i++)
        {
            $sum=$sum+$i;
        }
        echo "sum of numbers in range is =$sum";
        ?>
    </body>
</html>
