<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $_SESSION['usuario'] = $usuario;
        header('location: index.php');
    } else {
        $error = "Usuário ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body style="width: 100vw; height: 100vh;">
    <div class="container">
        <form method="post" action="">
            <h2>Login</h2>
            <label for="usuario"><p>Usuário:</p></label>
            <input type="text" name="usuario" required>
            <label for="senha"><p>Senha:</p></label>
            <input type="password" name="senha" required>
            <button type="submit" style="margin-bottom: 30px;">Entrar</button>
            <?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>
        </form>
    </div>
</body>
</html>