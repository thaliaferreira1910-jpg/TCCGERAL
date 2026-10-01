<?php
include "../conexao.php";
$usu_id = $_GET['usu_id'];

$sql="SELECT * FROM usuario_adm
WHERE usu_id = $usu_id";
$result = $conn->query($sql);
$lanches = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro Administrador</title>

<style>
body{
    font-family:Arial;
    background-color:#f2f2f2;
    text-align:center;
}
.container{
    background:white;
    width:600px;
    margin:auto;
    margin-top:30px;
    padding:20px;
    border-radius:10px;
}
.caixa{
    width:80%;
    padding:5px;
    margin:5px;
}
img{
    width:100px;
    margin-bottom:10px;
}
.grupo{
    text-align:left;
    width:80%;
    margin:auto;
}
.grupo label{
    display:block;
    margin:5px 0;
}
</style>

</head>
<body>

<div class="container">

<img src="img/logo.png">    

<h2>Cadastro</h2>

<form method="post" action="updateAdm.php" enctype="multipart/form-data">

<input type="hidden" name="usu_id" class="caixa" value="<?= $lanches['usu_id']?>"><br>

    Nome:<br>
    <input type="text" name="usuAdm_cpf" class="caixa" value="<?= $lanches['usuAdm_cpf']?>"><br>

    Email:<br>
    <input type="email" name="usuAdm_email" class="caixa" value="<?= $lanches['usuAdm_email']?>"><br>
    
    Senha:<br>
    <input type="password" name="usuAdm_senha" class="caixa" value="<?= $lanches['usuAdm_senha']?>"><br>
    
    <br>
    <br>
<!--Botões de Enviar e Limpar-->
<input type="submit" value="EDITAR" class="caixa">

</form>
8