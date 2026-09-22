<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Sistema-PHP/style/style.css">
    <title>Painel de Alunos</title>
</head>
<body>

    <?php 
        require_once __DIR__ .'/../login/verifica-login.php'; 
        require __DIR__ .'/../includes/header.php';
        require __DIR__ .'/../includes/functions.php';
        require_once __DIR__ .'/../database/connect.php';
    ?>

    <h1>Lista completa de alunos:</h1>
    <?php 
    listar($conexao);
    require __DIR__ .'/../includes/footer.php';?>
</body>
</html>

