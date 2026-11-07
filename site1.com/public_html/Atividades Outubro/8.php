<?php
    $nota = rand(1, 10); 

    if($nota >= 7){
        echo "Aprovado! Nota $nota";
    } elseif($nota >= 5 && $nota < 7){
        echo "Recuperação. Nota $nota";
    } else {
        echo "Reprovado. Nota $nota";
    }

?>
