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
?>

<?php 
require_once '../database/connect.php';

$sql = "UPDATE alunos SET nome = :nome WHERE id = :id";

$stmt = $conexao->prepare($sql);
$stmt->bindValue(":nome", "Gabriel Braga");
$stmt->bindValue(":id", 1);
$stmt->execute();

echo "Nome alterado com sucesso.";
?>
</body>
</html>
