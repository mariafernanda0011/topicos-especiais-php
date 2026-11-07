<?php
    $vendas = [];

    for ($i = 0; $i < 10; $i++){
        $vendas[] = rand(5000, 50000) / 100;
    }

    $somaVendas = array_sum($vendas);

    echo "A maior venda do dia foi: R$ " . number_format(max($vendas), 2, ',') . "<br>";
    echo "A menor venda do dia foi: R$ " . number_format(min($vendas), 2, ',') . "<br>";
    echo "A média de vendas foi: R$ " . number_format($somaVendas / 10, 2, ',') . "<br>";

    echo "<br>";
    
    $otimas = 0;
    $boas = 0;
    $baixas = 0;

    foreach($vendas as $venda){
        if ($venda >= 400){
            $otimas++; 
        }elseif($venda >= 200 && $venda < 400){
            $boas++;
        }else {
            $baixas++;
        }
    }
    
    echo "Classificação de vendas: <br>";
    echo "$otimas - Ótimas <br>";
    echo "$boas - Boas <br>";
    echo "$baixas - Baixas <br>";
    
?>
