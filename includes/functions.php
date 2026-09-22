<?php 
require_once __DIR__ .'/../database/connect.php';

function cadastrar($conexao, $nome, $nasc, $turma, $ativo)
{
    $sql = "INSERT INTO alunos (nome, nasc, turma, ativo) VALUES (:nome, :nasc, :turma, :ativo)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":nome",$nome);
    $stmt->bindParam(":nasc", $nasc);
    $stmt->bindParam(":turma", $turma);
    $stmt->bindParam(":ativo", $ativo);

    $stmt->execute();
    echo "Aluno cadastrado com sucesso!";
}

function cadastrarUsuario($conexao, $email, $senha){
    $sql = "INSERT INTO usuarios (email, senha) VALUES (:email, :senha)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email",$email);
    $stmt->bindParam(":senha",$senha);

    $stmt->execute();
    echo "Usuário cadastrado com sucesso!";
}

function deletar($conexao, $id){
    $sql = "DELETE FROM alunos WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    echo "Registro $id deletado.";
}

function listar($conexao){
    $sql = "SELECT * FROM alunos";

        $stmt = $conexao->prepare($sql);
        $stmt->execute();

        $alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo "<hr>";
        foreach ($alunos as $aluno) {
            echo "ID: {$aluno['id']}<br>";
            echo "Nome: {$aluno['nome']}<br>";
            echo "Data de Nascimento: {$aluno['nasc']}<br>";
            echo "Turma: {$aluno['turma']}<br>";
            echo "Ativo: {$aluno['ativo']}<br><hr>";
        };
}

function consultar($conexao,$id){
    $sql = "SELECT nome,turma,nasc,ativo FROM alunos WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<hr>Aluno: {$aluno['nome']}<br>Turma: {$aluno['turma']}<br>Nascimento: {$aluno['nasc']}<br>Ativo: {$aluno['ativo']}";
}

function consultarUsuario($conexao,$email){
    $sql = "SELECT id, email, senha FROM usuarios WHERE email = :email";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    return $usuario;
}

function atualizar($conexao,$id,$nome,$turma,$nasc,$ativo){
    $sql = "UPDATE alunos SET nome = :nome, turma = :turma, nasc = :nasc, ativo = :ativo WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":turma", $turma);
    $stmt->bindValue(":nasc", $nasc);
    $stmt->bindValue(":ativo", $ativo);
    $stmt->bindValue(":id", $id);
    $stmt->execute();

    echo "Nome alterado com sucesso.";
}

?>