<!-- Prática inicial - Exemplo 2 -->

<?php

    date_default_timezone_set('America/Sao_Paulo'); // Define a zona de tempo (evita horários incorretos);

    // Tentativa 1: (Site da Alura)
    echo date ('d/m/Y H:i');

    // Tentativa 2: (Documentação PHP)
    $data = date("d/m/Y");
    $hora = date('H:i:s');

    echo "Agora são $hora do dia $data. <br>";
    
?>
