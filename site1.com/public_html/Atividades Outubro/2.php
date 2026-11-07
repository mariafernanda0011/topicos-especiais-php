<?php
    $produtos = [
        ['nome' => 'Capinhas', 'preco' => 15, 'estoque' => 86, 'situacao' => ''],
        ['nome' => 'Fones de ouvido (Bluetooth)', 'preco' => 45, 'estoque' => 25, 'situacao' => ''],
        ['nome' => 'Carregadores', 'preco' => 30, 'estoque' => 10, 'situacao' => ''],
        ['nome' => 'Películas', 'preco' => 10, 'estoque' => 0, 'situacao' => '']
    ];

    echo "
        <table border=1>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Situação</th>
                </tr>
            </thead>
        <tbody>
    ";

    foreach($produtos as $produto){
        echo "
            <tr>
                <td>{$produto['nome']}</td>
                <td>{$produto['preco']}</td>
                <td>{$produto['estoque']}</td>";
                
        if ($produto['estoque'] > 10){
            echo "<td>Estoque alto</td>";
        }elseif($produto['estoque'] >= 5 && $produto['estoque'] <= 10){
            echo "<td>Estoque médio</td>";
        }else{
            echo "<td>Estoque baixo</td>";    
        }

        echo "</tr>";
    };

    echo "</tbody>
    </table>";

?>
