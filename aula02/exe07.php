<?php
    $jogo = [
        array(1, "Zé", 11),
        array(2, "José", 4),
        array(3, "Zeca", 22)
    ];

    echo $jogo [1][2];
    echo "<br>";
    echo "Os pontos do " .$jogo[1][1]. " são: ".$jogo [1][2];
    $jogo [1][2] = 30;
    echo "<br>";
    echo "Os pontos do " .$jogo[1][1]. " são: ".$jogo [1][2];

    ?>