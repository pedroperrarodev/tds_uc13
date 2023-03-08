<?php
    $salario = 3100;

    if($salario <=1500){
        $novosalario = $salario * 1.15;
    }
    else if ($salario >1500 && $salario <=3000){
        $novosalario = $salario * 1.1;
    }
    else if ($salario >3000){
        $novosalario = $salario * 1.05;
    }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento Salario</title>
</head>
<body>
    <?php
     echo "Novo Salario <b>" .number_format($novosalario, 2, ',', '.'). "</i></b>";

        ?>
</body>
</html>
