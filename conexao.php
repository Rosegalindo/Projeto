<?php

$host = "sql107.infinityfree.com";
$usuario = "if0_4094339";
$senha = "S5yftY0mNJGljaM"; // mesma senha do InfinityFree
$banco = "if0_4094339_quiosque";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
