<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Deletar</title>
</head>
<body>
    <?php 
    require_once '../login/verifica-login.php'; 
    include '../includes/header.php';
    include '../database/connect.php';
    include '../includes/functions.php';
    ?>

    <h1>Deletar Aluno</h1>
    <hr>
    
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if(isset($_POST['id'])){
        deletar($conexao,$_POST['id']);
    }
    ?>
    <a href="select.php"> Consulta DataBase </a>
</body>
</html>


