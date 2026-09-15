<?php 
require '../includes/header.php';
require_once '../database/connect.php'; 
require_once '../includes/functions.php'; 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $ativo = isset($_POST['ativo']) ? $_POST['ativo'] : 'false';
    
    cadastrar($conexao, $_POST['nome'], $_POST['nasc'], $_POST['turma'], $ativo);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Aluno</h1>
    <hr>
    <form action="" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>
        
        <label for="turma">Turma: </label>
        <input type="text" name="turma" id="turma"><br>
        
        <label for="nasc">Nascimento: </label>
        <input type="date" name="nasc" id="nasc"><br>
        
        <label>Ativo: </label>
        <!-- CORREÇÃO: Ambos os inputs agora possuem o name="ativo" -->
        <input type="radio" name="ativo" id="sim" value="true">
        <label for="sim">SIM</label>
        
        <input type="radio" name="ativo" id="nao" value="false">
        <label for="nao">NÃO</label>
        <br><br>
        
        <input type="reset" value="Limpar">
        <input type="submit" value="Cadastrar">
    </form>

<?php include '../includes/footer.php'; ?>
</body>
</html>
