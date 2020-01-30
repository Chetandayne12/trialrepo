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
        $a=2;
        $b=6;
        $l=1;
        
        
        for($i=2;$a>1||$b>1;$i++)
        {
            while($a%$i==0||$b%$i==0)
            {
                if($a%$i==0)
                {
                    $a=$a/$i;
                }
                    if($b%$i==0)
                {
                    $b=$b/$i;
                }
              
            }
            
        }
          $l=$l*$i;
          echo $l;
        ?>
    </body>
</html>
