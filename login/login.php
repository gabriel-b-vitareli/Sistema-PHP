<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/sistema-php/style/style.css">
    <title>Login de Usuário</title>
</head>
<body>
    <?php 
    require __DIR__ .'/../includes/header.php';
    require_once __DIR__ .'/../database/connect.php';
    require_once __DIR__ .'/../includes/functions.php';
    session_start();
    ?>

    <h1>Fazer Login</h1>
    <hr>
    <form action="" method="POST">
        <label for="email">E-Mail:</label><br>
        <input type="email" name="email" id="email" required placeholder="Digite seu e-mail"><br><br>
        <label for="senha">Senha:</label><br>
        <input type="password" name="senha" id="senha" required placeholder="Digite sua senha"><br><br>
        <input type="submit" value="Entrar">
    </form>
    
    <br><br><br>
    
    Não tem uma conta? Clique <a href="/sistema-php/login/cadastrar.php">aqui</a> para se cadastrar.
    <?php 
    if(isset($_POST['email']) and isset($_POST['senha'])){
        $usuario = consultarUsuario($conexao,$_POST['email']);
        if($_POST['email'] == $usuario['email'] && $_POST['senha'] == $usuario['senha']){
            $_SESSION['id'] = $usuario['id'];
            echo "<hr>Login aceito. Clique <a href='/sistema-php/index.php'>aqui</a> para voltar a página inicial.";
            // header("Location: ../index.php");
        // } elseif($_POST['senha'] != $usuario['senha']){
        //     echo "<hr>Senha incorreta. Tente novamente.";
        } else{
            echo "<hr>Usuário inexistente. Tente novamente";
        }
    }
    ?>
</body>
</html>