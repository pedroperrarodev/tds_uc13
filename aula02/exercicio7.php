<?php
    $dados = ["Pedro"," João", "Vinicius", "Roberto", "Clésio", "Amanda", "Roberta", "Fernanda", "Rafaela", "Joana"];

    for ($i=0; $i<=sizeof($dados)-1; $i++){
        echo "Nome " .$dados[$i]. "<br>";

    }
    echo "<br>";
    for ($i=sizeof($dados)-1; $i>=0 ; $i--){
        echo "Nome " .$dados[$i]. "<br>";

    }


    ?>