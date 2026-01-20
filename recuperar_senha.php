<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Recuperar Senha</title>

<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:Poppins, sans-serif;
}
body{
    min-height: 100vh;
    background: radial-gradient(circle at top right, #444, #000);
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
}

.box{
    width:100%;
    max-width:360px;
    background:rgba(0,0,0,.65);
    border-radius:15px;
    padding:25px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.8);
}

.box h2 {
    text-align: center;
    margin-bottom: 25px;
}

input,button{
    width:100%;
    padding:12px;
    margin-bottom:12px;
    border:none;
    border-radius:25px;
}

button{
    background:#ff9800;
    color:#fff;
    font-weight:bold;
    cursor:pointer;
}

a { 
    color:#fff; text-decoration:none; 
}
</style>
</head>

<body>

<div class="box">
<h2>Recuperar Senha</h2>

<input id="email" placeholder="Digite seu E-mail">

<button onclick="recuperar()">RECUPERAR</button>

<p style="text-align:center">
<a href="adm.html">Voltar para o Login</a>
</p>
</div>

<script>
function recuperar(){
    const admins = JSON.parse(localStorage.getItem("admins")) || [];
    const user = admins.find(a => a.email === email.value);

    if(!user){
        alert("E-mail não encontrado");
        return;
    }

    const nova = Math.random().toString(36).slice(-8);
    user.senha = nova;
    localStorage.setItem("admins", JSON.stringify(admins));

    alert("Nova senha gerada: " + nova);
    location.href="adm.html";
}
</script>

</body>
</html>
