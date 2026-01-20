<?php
include "conexao.php";

/* ===== VALIDAÇÃO BÁSICA ===== */
if (
    empty($_POST['nome']) ||
    empty($_POST['descricao']) ||
    empty($_POST['preco']) ||
    empty($_POST['categoria']) ||
    empty($_FILES['imagem']['name'])
) {
    die("Erro: todos os campos são obrigatórios.");
}

/* ===== DADOS ===== */
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = floatval($_POST['preco']);
$categoria = $_POST['categoria'];

/* ===== UPLOAD ===== */
$pasta = "uploads/";
if (!is_dir($pasta)) {
    mkdir($pasta, 0777, true);
}

$imagemNome = time() . "_" . basename($_FILES['imagem']['name']);
$caminho = $pasta . $imagemNome;

if (!move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho)) {
    die("Erro ao fazer upload da imagem.");
}

/* ===== INSERT ===== */
$sql = "INSERT INTO itens (categoria, nome, descricao, preco, imagem)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssds", $categoria, $nome, $descricao, $preco, $caminho);

if ($stmt->execute()) {
    header("Location: adm.php?sucesso=1");
    exit;
} else {
    echo "Erro ao salvar item.";
}
?>
