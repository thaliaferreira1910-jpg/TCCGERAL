<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
     body{
        font-family:Arial;
        text-align:center;
        background-color:#f2f2f2;
    }
    .container{
        background:white;
        width:600px;
        margin:auto;
        margin-top:30px;
        padding:20px;
        border-radius:10px;
    }
    .menu{
        display:grid;
        grid-template-columns:1fr 1fr;
    }
    img{
        width: 150px;
        height: 150px;
    }
    p{
        font-size:18px;
        font-weight:bold;
    }
</style>
</head>
<body>
<div class="container">
    <img src="imagens/LOGO TCC.jpeg">
    </a>
    <h1>MENU ADM</h1>
    
    <div class="menu">
    
    
    <a href="ADM/formAdm.php">
        <img src="imagem/adm.png">
        <p>Login ADM</p>
    </a>

    <a href="Usuario_Cliente/formUsuario_Cliente.php">
        <img src="imagem/user.png">
        <p>Login Usuário</p>
    </a>

    <a href="LANCHES/formLanches.php">
        <img src="imagem/hamburguer.png">
        <p>Lanches</p>
    </a>


    <a href="bebidas/formBebidas.php">
        <img src="imag/bebida.png">
        <p>bebidas</p>
    </a>

    <a href="CATEGORIA/formCategoria.php">
        <img src="img/categoria.png">
        <p>categoria</p>
    </a>

    <a href="avaliacao/formAvaliacao.php">
        <img src="img/avaliacao.png">
        <p>avaliação</p>
    </a>
  <!--------------------------------------------------------------------------------------------------------------->
    <a href="#">
        <img src="img/logout.png">
        <p>Sair do Sistema</p>
    </a>
    </div>
</div>
</body>
</html>