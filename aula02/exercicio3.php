<?php
    $salario = 3100;

    if($salario <=1500){
        $novosalario = $salario * 1.15;
        echo "Novo salario " .$novosalario;
    }
    else if ($salario >1500 && $salario <=3000){
        $novosalario = $salario * 1.1;
        echo "Novo salario " .$novosalario;
    }
    else if ($salario >3000){
        $novosalario = $salario * 1.05;
        echo "Novo salario " .$novosalario;
    }

    ?>