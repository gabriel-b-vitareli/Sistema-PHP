<?php 
require_once '../database/connect.php';

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
?>