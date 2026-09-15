<?php 
$host = "XXX.XXX.XX.XX";
$dbname = "nomedadatabase";
$user = "usuario";
$pass = "senha";

try {
    $conexao = new PDO(
        "pgsql:host=$host;
        dbname=$dbname",
        $user,
        $pass
    );
    echo "Conexão com o Postgres realizada com sucesso!<br>";
} catch (PDOException $e) {
    echo "Erro: " .$e->getMessage();
}
?>