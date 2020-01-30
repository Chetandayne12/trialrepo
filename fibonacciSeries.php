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
        $n=18;
        $a=0; 
        $b=1;
        $c;
        echo ("fibonacci series of $n is :-");
        echo "<br>";
        echo $a;
        echo "<br>";
        echo $b;
        for($i=1;$i<=$n-2;$i++)
        {
            $c=$a+$b;
            echo "<br>";
            $a=$b;       //pehle b ki value pehle  a me 
            $b=$c;       ///bad me c ki value b me 
            echo $c;
        }
        ?>
    </body>
</html>
