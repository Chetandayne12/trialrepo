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
        $n=5;
        $sum=0;
        echo "sum of first $n even numbers are :-";
        for($i=1;$i<=$n;$i++)
        {
            
            $sum=$sum+($i*2);
         
        }
           echo $sum;
        ?>
    </body>
</html>
