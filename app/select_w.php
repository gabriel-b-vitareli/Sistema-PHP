<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Aluno</title>
</head>
<body>

<?php 
include '../includes/header.php';
?>

<form action="" method="POST">
    <label for="id">ID do usuário para consultar: </label>
    <input type="number" name="id" id="id">
    <input type="submit" value="Consultar">
</form>
    
<?php 
require_once '../database/connect.php';

if(isset($_POST['id'])){
$id = $_POST['id'];
}

$sql = "SELECT nome,turma FROM alunos WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($id)){
echo "<hr>Aluno: {$aluno['nome']}<br>Turma: {$aluno['turma']}";
}
?>
</body>
</html>
