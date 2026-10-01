<?php
//Importar o arquivo de conexão, fora da pasta
include "../conexao.php";
/*Neste trecho de código está sendo criado uma variável
em PHP $ para receber através do método POST
o name do HTML*/
$lan_id = $_POST['lan_id'];
$lan_nome = $_POST['lan_nome'];
$lan_preco = $_POST['lan_preco'];
$lan_descricao = $_POST['lan_descricao'];
//$lan_foto = $_POST['lan_foto'];
$cat_id = $_POST['cat_id'];

// Upload da imagem
$imagem = "";
if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
    $pasta = "../uploads/";
    if(!is_dir($pasta)){
        mkdir($pasta, 0777, true);
    }
    $nomeArquivo = time() . "_" . basename($_FILES["imagem"]["name"]);
    $caminho = $pasta . $nomeArquivo;
    if(move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho)){
        $imagem = $caminho;
    }
}

$sql = "INSERT INTO lanches(lan_id,lan_nome,lan_preco,lan_descricao,imagem, cat_id) 
VALUES ('$lan_id','$lan_nome','$lan_preco','$lan_descricao','$imagem', '$cat_id' )";

if($conn->query($sql) === TRUE){
    echo "<script>
    alert('Dados Cadastrados com Sucesso!');
    window.location.href='formLanches.php';
    </script>";
}else{
    echo 'Erro ao inserir:'.$conn->error;
}

?>