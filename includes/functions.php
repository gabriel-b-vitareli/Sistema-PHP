<?php 
require_once '../database/connect_postgres.php';

function cadastrar()
{
    $sql = "INSERT INTO alunos (nome, nasc, turma, ativo) VALUES (:nome, :nasc, :turma, :ativo)";

    $stmt = $conexao->prepare($sql);
    $stmt->bindValue(":nome","teste");
    $stmt->bindValue(":nasc", "2009-08-19");
    $stmt->bindValue(":turma", "I1D35");
    $stmt->bindValue(":ativo", "true");

    $stmt->execute();
    echo "Aluno cadastrado com sucesso!";
}
?>