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
        $x=array();  //construct karna
        $x[]=20;
        $x[]="chetan";
        $x[]=40;
        $x[]="dayne";
        $x[]=40.2;
        
        
        echo $x[1];
        echo("<br>");
        print_r($x); //human can read
        
        ?>
    </body>
</html>
