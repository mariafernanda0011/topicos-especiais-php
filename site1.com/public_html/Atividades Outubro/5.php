<?php

    $categoria = "informatica";

    switch($categoria) {
        case "informatica": 
            echo "Sessão de Informática";
            break;
        case "games": 
            echo "Sessão de Games";
            break;
        case "moveis":
            echo "Sessão de Móveis";
            break;
        default:
        echo "Sessão não encontrada";
    }

?>
