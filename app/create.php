<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <?php 
    require_once './database/connect.php';
    include './includes/header.php'
    ?>

    <form action="" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>

        <label for="turma">Turma: </label>
        <input type="text" name="turma" id="turma"><br>

        <label for="nasc">Nascimento: </label>
        <input type="date" name="nasc" id="nasc"><br>

        <label for="ativo">Ativo: </label>
        <input type="radio" name="sim" id="sim" value="true">
        <label for="sim">SIM</label>
        <input type="radio" name="nao" id="nao" value="false">
        <label for="nao">NÃO</label>

        <br>

        <input type="reset" value="Limpar"><br>
        <input type="submit" value="Cadastrar">
    </form>

    <?php include './includes/footer.php'?>
</body>
</html>