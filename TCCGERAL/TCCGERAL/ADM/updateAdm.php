<?php
include "../conexao.php";
/*As variáveis criadas do PHP recebem
o name do HTML */
$usu_id = $_POST['usu_id'];
$usuAdm_cpf = $_POST['usuAdm_cpf'];
$usuAdm_email = $_POST['usuAdm_email'];
$usuAdm_senha = $_POST['usuAdm_senha'];


$sql = "UPDATE usuario_adm SET 
usuAdm_cpf = '$usuAdm_cpf', 
usuAdm_email = '$usuAdm_email',
usuAdm_senha = '$usuAdm_senha'
WHERE usu_id =$usu_id";

if($conn->query($sql) === TRUE){
    echo 
    "<script>
    alert('Dados alterados com sucesso!');
    window.location.href='formAdm.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}

?>