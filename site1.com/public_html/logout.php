<?php

    // Excluindo o cookie
    setcookie(
        'nome_usuario',
        '',
        time() - 3600,
        '/'
    );

    // Redirecionando para a tela de login
    header('Location: login.html');
    exit;

?>