<?php
    $ano = 2004;
    $anobi = $ano / 4;

    if (($ano % 4 == 0 && $ano % 100 != 0 ) || ($ano % 4 == 0 && $ano %100 == 0 && $ano %400 == 0)){
      echo "Ano <b>É</b> bisexto <br>" .$ano;
    }
    else{
        echo "Ano <b>NÃO</b> é bisexto <br> " .$ano;
    }

    ?>
    