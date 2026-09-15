<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>

<?php 
require '../includes/header.php'; 
include '../includes/functions.php'; 
include '../database/connect.php'; 
?>

<form action="" method="POST"> 
    <label for="id">ID do Aluno para atualizar:</label><br>
    <input type="number" name="id" id="id"><br>

    <!-- CORRIGIDO: alterado name para "nome" e id para "nome" -->
    <label for="nome">Atualizar nome do aluno:</label><br>
    <input type="text" name="nome" id="nome"><br>

    <label for="turma">Atualizar turma do aluno:</label><br>
    <input type="text" name="turma" id="turma"><br>

    <label for="nasc">Atualizar data de nascimento:</label><br>
    <input type="date" name="nasc" id="nasc"><br>

    <label>Atualizar status de ativo do aluno:</label><br>
    <!-- CORRIGIDO: IDs únicos para bater com o "for" das labels -->
    <input type="radio" name="ativo" id="sim" value="true">
    <label for="sim">SIM</label>
    
    <input type="radio" name="ativo" id="nao" value="false">
    <label for="nao">NÃO</label>
    <br><br>

    <input type="reset" value="Limpar">
    <input type="submit" value="Atualizar">
</form>

<?php 
if (isset($_POST['nome'])) { 
    atualizar($conexao, $_POST['id'], $_POST['nome'], $_POST['turma'], $_POST['nasc'], $_POST['ativo']); 
} 
?>

</body>
</html>
