<?php
    $idade = 9;
    $ingresso = 20;

    if ( $idade <6 || $idade >65){
        $valoringresso = 0;
        echo "Valor de Ingreso isento " .$valoringresso;
    }
    else if ( $idade >6 && $idade <10){
        $valoringresso = $ingresso * 0.5 ;
        echo "Valor de Ingreso com desconto " .$valoringresso ;
    }
    else if ( $idade >11 && $idade <65){
        $valoringresso = $ingresso * 1 ;
        echo "Valor de Ingreso sem desconto " .$valoringresso ;
    }
    
    ?>