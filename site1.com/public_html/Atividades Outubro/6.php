<?php

    $soma = 0;

    for ($i = 1; $i <= 50; $i++){
        if($i % 4 == 0){
            $soma += $i;
            echo "$i <br>";
        }
    }
    echo "A soma dos divisores é $soma";

?>
