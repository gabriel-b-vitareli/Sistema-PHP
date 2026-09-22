<?php 
// Verifica sessão e/ou cria uma nova:
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

// Limpa a sessão e destrói
$_SESSION = array();
session_destroy();

// Redireciona pro index
header("Location: ../index.php");
exit();
?>