<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Sistema-PHP/style/style.css">
    <title>Consultar</title>
</head>
<body>

<?php 
require_once __DIR__ .'/../login/verifica-login.php'; 
include __DIR__ .'/../includes/header.php';
include __DIR__ .'/../includes/functions.php';
require_once __DIR__ .'/../database/connect.php';
?>
<h1>Consulta de Aluno</h1>
<hr>
<form action="" method="POST">
    <label for="id">ID do aluno: </label>
    <input type="number" name="id" id="id">
    <input type="submit" value="Consultar">
</form>
    
<?php 
if(isset($_POST['id'])){
consultar($conexao,$_POST['id']);
}
?>
</body>
</html>
