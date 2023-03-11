<?php


    for ($n= 0; $n <=10; $n++){
        echo "<h4>Tabuada do : " .$n. "</h4>";
        for ($i = 0; $i<=10; $i++){
            $conta = $n * $i;
    
            echo "==> " .$n. " X " .$i. " = " .$conta;
            echo "<br>";
        };
    }
    

    ?>