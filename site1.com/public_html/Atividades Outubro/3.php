<?php
    $produtos = [
        ['nome' => 'Capinhas', 'preco' => 15, 'estoque' => 86, 'situacao' => 'Estoque alto'],
        ['nome' => 'Fones de ouvido (Bluetooth)', 'preco' => 45, 'estoque' => 25, 'situacao' => 'Estoque alto'],
        ['nome' => 'Carregadores', 'preco' => 30, 'estoque' => 50, 'situacao' => 'Estoque médio'],
        ['nome' => 'Películas', 'preco' => 10, 'estoque' => 0, 'situacao' => 'Estoque baixo']
    ];

    echo "<table border=1>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Situação</th>
                </tr>
            </thead>
        <tbody>";

        foreach($produtos as $produto){
            echo"
                <tr>
                    <td>{$produto['nome']}</td>
                    <td>{$produto['preco']}</td>
                    <td>{$produto['estoque']}</td>
                    <td>{$produto['situacao']}</td>
                </tr>
            ";
        }

    echo "</tbody>
    </table>";

    for ($i = 0; $i <= 20; $i++){
        echo "<ul>";

        if ($i % 5 == 0){
            echo "<li><b>$i</b></li>";
        } else{
            echo "<li>$i</li>";
        }
        echo "</ul>";
    }

?>
