<?php
    $nota1 = 80;
    $nota2 = 80;
    $nota3 = 80;
    $nota4 = 80;

    $notamedia = ($nota1 + $nota2 +$nota3 +$nota4)/4;

    if( $notamedia >=70){
        echo "Você foi aprovado. Sua nota é: ".$notamedia; 
    }
    else if( $notamedia >=50 && $notamedia <70){
        echo "Você está em recuperação. Sua nota é: ".$notamedia;
    }
    else{
        echo "Você foi reprovado. Sua média foi de: " .$notamedia;
    }
?>