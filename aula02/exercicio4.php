<?php
    $idade = 9;
    $ingresso = 20;

    if ( $idade <6 || $idade >=65){
        $valoringresso = 0;
    }
    else if ( $idade >6 && $idade <10){
        $valoringresso = $ingresso * 0.5 ;
    }
    else if ( $idade >11 && $idade <65){
        $valoringresso = $ingresso * 1 ;
    }
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        
        echo "Sua idade é " .$idade ;
        echo "<br>";
        echo "Valor de Ingreso " .$valoringresso ;
        ?>
    </body>
    </html>