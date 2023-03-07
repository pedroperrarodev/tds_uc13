<?php
    $num1 = 10;
    $num2 = 5;

    $soma = $num1 + $num2;

    if ($soma >20 ){
        $soma = $soma +8;
        //Forma simplificada
        //$soma += 8;
    }
    else{
        $soma = $soma - 5;
        //Forma simplificada
        //$soma += 8;
    }

?>
<html>
    <head>
    <title>Exercicio</title>
    </head>

    <body>
        <?php 
            echo "O resultado é :" .$resultado;
        ?>
    </body>
    </html>

