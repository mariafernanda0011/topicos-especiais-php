<?php

    // Verificando se o usuário está autenticado
    if (!isset($_COOKIE['nome_usuario'])) {
        header('Location: login.html');
        exit;
    }

    $nome_usuario = $_COOKIE['nome_usuario'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="bg-light">

    <main class="container pt-5">
        <div class="card shadow p-5 text-center">

            <h1 class="text-primary">
                Olá, <?php echo htmlspecialchars($nome_usuario); ?>!
            </h1>

            <p class="lead mt-3">
                Seja bem-vindo(a) ao sistema!
            </p>

            <a href="logout.php" class="btn btn-danger mt-3">
                Sair
            </a>

        </div>
    </main>

</body>
</html>