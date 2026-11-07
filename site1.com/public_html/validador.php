<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idade = $_POST['idade'];
    $genero = $_POST['genero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $termos = $_POST['termos'];

    $erro = false;

    // Verificando se todos os campos estão devidamente preenchidos
    if(empty($nome) || empty($email) ||
        empty($senha) || empty($idade) || 
        empty($genero) || empty($cidade)|| 
        empty($estado) || $termos !== 'aceito'
    ) {
        echo "<h4 style='color: red;'> Por favor, preencha todos os campos do formulário.</h4>";
        $erro = true;    
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        //Validando o formato do email
        echo "<h4 style='color: red;'>E-mail inválido.</h4>";
        $erro = true;
    } 

    if(strlen($senha) < 6){

        //Validando  tamanho da senha
        echo "<h4 style='color: red;'> A senha deve conter no mínimo 6 caracteres.</h4>";
       $erro = true; 
    } 
    
    if($idade < 10 || $idade > 120 || filter_var($idade, FILTER_VALIDATE_INT) === false) {

        //Validando a idade
        echo "<h4 style='color: red;'>Idade inválida para o cadastro. Informe um número inteiro entre 10 e 120.</h4>";
        $erro = true;
    }

    if(!$erro) {

        //Criptografando a senha
        $senha_hash = md5($senha);

        //Armazenando os valores em um array
        $valores_formularios = [
            'nome' => $nome, 
            'email' => $email,
            'senha' => $senha_hash,
            'idade' => (int) $idade,
            'genero' => $genero,
            'cidade' => $cidade,
            'estado' => $estado,
            'termos' => $termos,
        ];

        //Criando o cookie 
        setcookie(
            rawurlencode($nome),
            serialize($valores_formularios),
            time() + 3600,
            '/'
        );

        //Mensagem de sucesso
        echo "<h4 style='color: green;'> Formulário preenchido com sucesso!</h4>";

        print_r("<h4> Dados do cadastro: <h4>");
        
        foreach($valores_formularios as $campo => $valor){
            //Exibindo os dados exceto a senha
            if ($campo != 'senha'){
                echo "<ul>" . 
                    "<li>" . $valor . "</li>" .
                "</ul>";
            }
        }

        if (!empty($_COOKIE)) {
            echo "<pre>";
            print_r($_COOKIE);
            echo "</pre>";
        }
    }

?>