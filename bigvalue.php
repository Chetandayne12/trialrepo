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
        $x=200;
        $y=100;
        $z=250;
        if($x>$y)
        {
         if($x>$z)
         {
             echo "x is greater=$x";
         }
         else
         {
             echo "z is greater=$z";
         }
         }
         else{
             if($y>$z)
             {
                 echo "y is greater=$y";
             }
             else
             {
                 echo "z is greater=$z";
             }
         }
        ?>
    </body>
</html>
