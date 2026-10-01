<?php
include "../conexao.php";
$be_id = $_GET['be_id'];

$sql="SELECT * FROM bebidas
WHERE be_id = $be_id";
$result = $conn->query($sql);
$bebidas = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário de Alteração de bebidas</title>

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

<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</head>
<body>

<div class="container">

<img src="img/logo.png">    

<h2>Edição de Aluno</h2>

<form method="post" action="updateBebidas.php" enctype="multipart/form-data">

<input type="hidden" name="be_id" class="caixa" value="<?= $bebidas['be_id']?>"><br>
    
    Nome:<br>
    <input type="varchar" name="be_nome" class="caixa" value="<?= $bebidas['be_nome']?>"><br>
    
    Tamanho:<br>
    <input type="int" name="be_tamanho" class="caixa" value="<?= $bebidas['be_tamanho']?>"><br>
    
    Preço:<br>
    <input type="int" name="be_preco" class="caixa" value="<?= $bebidas['be_preco']?>"><br>
    
    <br>  
    Foto:<br>
    <input type="file" name="be_foto"  class="caixa" value="<?= $bebidas['be_foto']?>"><br>
    <br>
    <br>
<!--Botões de Enviar e Limpar-->
<input type="submit" value="EDITAR" class="caixa">

</form>