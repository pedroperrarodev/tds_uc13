<?php
    $dados[] = array("Nome" => "Maria", "data_nasc" => "10/10/1985", "salario" => 2500, "cod_cargo" => 3);
    $dados[] = array("Nome" => "João", "data_nasc" => "1/1/1983", "salario" => 1500, "cod_cargo" => 1);
    $dados[] = array("Nome" => "Pedro", "data_nasc" => "15/11/1984", "salario" => 4500, "cod_cargo" => 4);
    $dados[] = array("Nome" => "Carla", "data_nasc" => "25/03/1994", "salario" => 1500, "cod_cargo" => 1);

    for ($i = 0; $i<sizeof($dados); $i++){
        echo "Nome: " .$dados[$i]["Nome"]. "<br>";
    }
    ?>