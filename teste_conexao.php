<?php
$host = "sql107.infinityfree.com"; // igual ao painel
$usuario = "if0_4094339";          // igual ao painel
$senha = "Progresso41";  // ❗ NÃO é a senha do painel
$banco = "if0_4094339_quiosque";   // nome exato do banco

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>