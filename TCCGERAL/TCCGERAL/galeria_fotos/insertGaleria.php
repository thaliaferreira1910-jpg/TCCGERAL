<?php
//Importar o arquivo de conexão, fora da pasta
include "../conexao.php";
/*Neste trecho de código está sendo criado uma variável
em PHP $ para receber através do método POST
o name do HTML*/
$Galeria = $_POST['gal_fotos'];

$sql = "INSERT INTO galeria_fotos(gal_fotos) VALUES 
('$Galeria')";

if($conn->query($sql) === TRUE){
    echo 
    "<script>
    alert('Dados cadastrados com sucesso!');
    window.location.href='formAluno.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}

?>