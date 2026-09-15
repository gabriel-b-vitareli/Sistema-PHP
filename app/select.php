<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Alunos</title>
</head>
<body>

    <?php 
        require '../includes/header.php';
        require '../includes/functions.php';
        require_once '../database/connect.php';
    ?>

    <h1>Lista completa de alunos:</h1>
    <?php 
    listar($conexao);
    require '../includes/footer.php';?>
</body>
</html>

