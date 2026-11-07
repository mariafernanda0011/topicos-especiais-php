<?php
    $numero = 13;

    $i = 1;

    while ($i <= 700){
        $tentativa = rand(1, 100);

        if($tentativa == $numero){
            echo "{$i}ª <br>";
        }
        $i++;
    }

?>
