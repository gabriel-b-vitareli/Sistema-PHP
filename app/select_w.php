<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>

<?php 
include '../includes/header.php';
include '../includes/functions.php';
require_once '../database/connect.php';
?>
<h1>Consulta de Aluno</h1>
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
