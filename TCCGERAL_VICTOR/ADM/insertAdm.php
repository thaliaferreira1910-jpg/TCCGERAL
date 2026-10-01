<?php
//Importar o arquivo de conexão, fora da pasta
include "../conexao.php";
/*Neste trecho de código está sendo criado uma variável
em PHP $ para receber através do método POST
o name do HTML*/
$usuAdm_cpf = $_POST['usuAdm_cpf'];
$usuAdm_email = $_POST['usuAdm_email'];
$usuAdm_senha = $_POST['usuAdm_senha'];

$sql = "INSERT INTO usuario_adm (usuAdm_cpf, usuAdm_email, usuAdm_senha) VALUES 
('$usuAdm_cpf','$usuAdm_email','$usuAdm_senha')";

if($conn->query($sql) === TRUE){
    echo 
    "<script>
    alert('Dados cadastrados com sucesso!');
    window.location.href='formAdm.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}

?>