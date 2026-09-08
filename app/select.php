<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Alunos</title>
</head>
<body>
    <?php require './includes/header.php';?>
    <div style="width: 50%; margin:auto; text-align:center; border:1px solid black; border-radius:5px;">

    <?php 
        require_once './database/connect.php';

        $sql = "SELECT * FROM alunos";

        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<br><hr>";
        foreach ($alunos as $aluno) {
            echo "ID: {$aluno['id']}<br>";
            echo "Nome: {$aluno['nome']}<br>";
            echo "Data de Nascimento: {$aluno['nasc']}<br>";
            echo "Turma: {$aluno['turma']}<br>";
            echo "Ativo: {$aluno['ativo']}<br><hr>";
        };
    ?>

    </div>

    <?php require './includes/footer.php';?>
</body>
</html>

