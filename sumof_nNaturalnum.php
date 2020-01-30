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
        $n=100;
        $sum=0;
        for($i=1;$i<=$n;$i++)
        {
            $sum=$sum+$i;
        }
        echo "sum of $n natural number is = $sum";
        ?>
    </body>
</html>
