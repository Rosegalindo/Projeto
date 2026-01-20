<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Painel Administrativo</title>

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap");

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Poppins, sans-serif;
}

body{
    min-height:100vh;
    background: radial-gradient(circle at top right, #444, #000);
    display:flex;
    justify-content:center;
    align-items:center;
    color: #fff;
}

.box{
    width:90%;
    max-width:420px;
    background:rgba(0,0,0,.65);
    border-radius:18px;
    padding:30px;
    color:#fff;
    box-shadow: 0 20px 40px rgba(0,0,0,0.8);
}

h2{
    text-align:center;
    margin-bottom:20px;
}

.input{
    margin-bottom:15px;
}

.input input,
.input textarea,
.input select{
    width:100%;
    padding:12px 15px;
    border-radius:15px;
    border:none;
    outline:none;
}

textarea{
    resize:none;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:25px;
    background:#fff;
    font-weight:bold;
    cursor:pointer;
}
</style>
</head>

<body>

<div class="box">
    <h2>Painel Administrativo</h2>

    <form action="salvar_item.php" method="POST" enctype="multipart/form-data">

        <div class="input">
            <input type="text" name="nome" placeholder="Nome do item" required>
        </div>

        <div class="input">
            <textarea name="descricao" placeholder="Descrição do item" required></textarea>
        </div>

        <div class="input">
            <input type="number" step="0.01" name="preco" placeholder="Preço (ex: 25.90)" required>
        </div>

        <div class="input">
            <select name="categoria" required>
                <option value="">Selecione a categoria</option>
                <option value="porcoes">Porções</option>
                <option value="suco_refrigerante">Sucos / Refrigerantes</option>
                <option value="cerveja">Cervejas</option>
                <option value="drinks_gin">Drinks / Gin</option>
            </select>
        </div>

        <div class="input">
            <input type="file" name="imagem" accept="image/*" required>
        </div>

        <button type="submit">Salvar item</button>

    </form>
</div>

</body>
</html>
