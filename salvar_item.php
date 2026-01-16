<?php
include "conexao.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

$imagem = $_FILES['imagem']['name'];
$tmp = $_FILES['imagem']['tmp_name'];

$pasta = "uploads/";
if (!is_dir($pasta)) {
    mkdir($pasta, 0777, true);
}

$caminho = $pasta . time() . "_" . $imagem;
move_uploaded_file($tmp, $caminho);

$sql = "INSERT INTO itens (categoria, nome, descricao, preco, imagem)
        VALUES (?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssds", $categoria, $nome, $descricao, $preco, $caminho);
$stmt->execute();

echo "Item cadastrado com sucesso!";
