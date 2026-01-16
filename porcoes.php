<?php
include "conexao.php";

$sql = "SELECT * FROM itens WHERE categoria='porcoes'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porções</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

</head>
<body class="pagina-cardapio">

    <div class="titulo-pagina">
        <h1>QUIOSQUE DO MAZINHO</h1>
        <h2>PORÇÕES</h2>
    </div>
 
<div class="lista-itens">

<?php while($item = $result->fetch_assoc()): ?>
    <div class="item-card">
        <div class="item-img">
            <img src="<?= $item['imagem'] ?>" alt="<?= $item['nome'] ?>">
        </div>

        <div class="item-info">
            <h3><?= $item['nome'] ?></h3>

            <span class="preco">
                R$ <?= number_format($item['preco'], 2, ',', '.') ?>
            </span>

            <p><?= $item['descricao'] ?></p>

            <div class="item-acoes">
                <button class="btn-icon">
                    <i class='bx bxs-heart'></i>
                </button>
                <button class="btn-icon">
                    <i class='bx bx-message-rounded'></i>
                </button>
            </div>
        </div>
    </div>
<?php endwhile; ?>

</div>

</body>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      /* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* FUNDO + OVERLAY */
body.pagina-cardapio {
    min-height: 100vh;
    font-family: "Poppins", sans-serif;

    background-image: url("img/tela_fundo_botoes.jpg");
    background-size:cover;
    background-position: center;
    background-repeat: no-repeat;
    background-color: #e6eef3;

    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    
}

/* Overlay escuro profissional */
body.pagina-cardapio::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.45);
    z-index: -1;
}

/* TÍTULO */
.titulo-pagina h1 {
    margin-top: 20px;
    margin-bottom: 25px;
    font-size: 12px;
    font-weight: bold;
    text-align: center;
    letter-spacing: 2px;
    color: white;    
    text-shadow: 2px 2px 5px black;
}

.titulo-pagina h2 { 
    font-size: 14px;
    margin-top: 20px;
    margin-bottom: 25px;
    letter-spacing: 3px;
    text-align: center;
    color: white;
    text-shadow: 1px 1px 4px black;
}

/* CARD HORIZONTAL*/
.item-card {
    display: flex;
    gap: 8px;
    margin: 8px 15px;
    align-items: stretch;
}

/* QUADRO IMAGENS */
.item-img {
    width: 140px;
    min-width: 140px;
    max-width: 150px;

    border: 2px solid #000;
    border-radius: 12px;
    overflow: hidden;
    background: #fff;

    display: flex;
}

.item-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* QUADRADO DAS INFORMAÇÕES */
.item-info {
    flex: 1;
    padding: 10px;

    border: 2px solid #000;
    border-radius: 12px;
    background: transparent;

    display: flex;
    flex-direction: column;
}

/* TEXTO */
.item-info h3 {
    font-size: 14px;
    margin-bottom: 4px;
    color: #000;
}

.preco {
    font-weight: bold;
    font-size: 13px;
    color: #000;
}

.item-info p {
    font-size: 11px;
    margin: 6px 0;
    color: #000;
    line-height: 1.3;
}

/* AÇÕES */
.item-acoes {
    margin-top: auto;
    display: flex;
    justify-content: center;
    gap: 55px;
}

.btn-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: none;
    font-size: 20px;
    cursor: pointer;
}

.btn-icon .bxs-heart {
    color: #e53935;
}

.btn-icon .bx-message-rounded {
    color: #fbc02d;
}

.lista-itens {
    position: relative;
    flex: 1;
    padding-top: 80px;
}


/* 📱 Celular */
@media (max-width: 600px) {

}

/* 📱 Tablet */
@media (min-width: 601px) and (max-width: 1024px) {
    .item-card {
        margin: 10px 20px;
        bottom: 25px;
    }
}
    </style>
</html>
