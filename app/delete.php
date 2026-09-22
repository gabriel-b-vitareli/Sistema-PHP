<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Sistema-PHP/style/style.css">
    <title>Deletar</title>
</head>
<body>
    <?php 
    require_once __DIR__ .'/../login/verifica-login.php'; 
    include __DIR__ .'/../includes/header.php';
    include __DIR__ .'/../database/connect.php';
    include __DIR__ .'/../includes/functions.php';
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
    <a href="<?php echo __DIR__; ?>/select.php"> Consulta DataBase </a>
</body>
</html>


