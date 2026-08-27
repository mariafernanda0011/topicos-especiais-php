<!-- Prática intermediária - Estruturas de controle -->

<?php

    $produtos = [
        ["nome" => "Mouse Gamer", "preco" => 120, "estoque" => 151],
        ["nome" => "Teclado Mecânico", "preco" => 250, "estoque" => 10],
        ["nome" => "Monitor 24’’", "preco" => 800, "estoque" => 5],
        ["nome" => "Cadeira Gamer", "preco" => 900, "estoque" => 2],
    ];

    // Exibindo as informações
    for ($i = 0; $i < count($produtos); $i++){
        echo "<p>";
        echo "<b>Nome: </b>", $produtos[$i]["nome"], "<br>";
        echo "<b>Preço: </b> R$ ", $produtos[$i]["preco"], ",00 <br>";
        echo "<b>Estoque: </b>", $produtos[$i]["estoque"], "<br>";
    }

    // Somando o estoque
    $qtd_produtos = 0;

    for ($i = 0; $i < count($produtos); $i++){
        $qtd_produtos += $produtos[$i]["estoque"];
    }

    echo "<br>A soma do estoque dos produtos é $qtd_produtos. <br>";

?>
