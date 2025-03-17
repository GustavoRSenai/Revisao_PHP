<?php include('valida_sessao.php'); ?>
<!-- Inclui o arquivo 'valida_sessao.php' para garantir que o usuário esteja autenticado -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Entrou</title>
</head>
<body style="width: 100vw; height: 100vh;">
    <div class="container">
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?></h2>
    <a href="logout.php">Sair</a>
    </div>
</body>
</html>