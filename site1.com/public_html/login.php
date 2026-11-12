<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $erro = false;
    const meu_hash = '08d73df56eabed0bb5dec9346fd8570b'; 

    if (empty($email) || empty($senha)){
        echo "<h4> Preencha todos os campos obrigatórios. </h4>";
    } else {

        //Criptografando a senha
        $senha_hash = md5($senha);

        if ($senha_hash === meu_hash){
            //Criando o cookie 
            setcookie(
                'nome_usuario',
                $email,
                time() + 3600,
                '/'
            );

            header ('Location: home.php');
            exit;
        } else {
            echo "<h4>Email ou senha incorretos.</h4>";
        }

        if (!empty($_COOKIE)) {
            echo "<pre>";
            print_r($_COOKIE);
            echo "</pre>";
        }
    }
?>
