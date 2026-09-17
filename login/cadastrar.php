<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <?php 
    require '../includes/header.php';
    require_once '../database/connect.php';
    require_once '../includes/functions.php';
    ?>

    <h1>Cadastrar Usuário</h1>
    <hr>
    <form action="" method="POST">
        <label for="email">E-Mail:</label><br>
        <input type="email" name="email" id="email" require placeholder="Digite seu e-mail"><br><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" require placeholder="Digite sua senha"><br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php 
    if(isset($_POST['email']) and isset($_POST['senha'])){
        echo "<hr>";
        cadastrarUsuario($conexao, $_POST['email'], $_POST['senha']);
    }
    ?>
</body>
</html>