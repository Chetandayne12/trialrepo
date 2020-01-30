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
       $i;
       $j;
       echo " star pattern is "."<br>";
       
       for($i=1;$i<=5;$i++)
       {
           for($j=1;$j<=5;$j++)
           {
               if($j<=$i)
               {
                   echo "*";  
               }
               else
               {
                   echo " ";
               }
              
           }
            echo "<br>";
       }
        ?>
    </body>
</html>
