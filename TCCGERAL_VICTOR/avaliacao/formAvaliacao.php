<?php
/*Aqui virá o código de busca 
utilizando o comando SQL*/
include "../conexao.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário Completo</title>

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

<img src="../imagens/logo.jpeg">    

<h2>Avaliação</h2>

<form method="post" action="insertAvaliacao.php" enctype="multipart/form-data">
    Avaliação:<br>
    <input type="text" name="avaliacao" class="caixa"><br>
      
    Estrelas:<br>
    <input type="int" name="estrelas" class="caixa"><br>
    
    <br>

<!--Botões de Enviar e Limpar-->
<input type="submit" value="ENVIAR" class="caixa">
<input type="reset" value="CANCELAR" class="caixa">

</form>

<!--Início da tabela de visualização de usuário -->
<table>
    <thead>
        <tr>
            <th>ID do Cliente</th>
            <th>Avaliação</th>
            <th>Estrelas</th>
        </tr>
    </thead>

<!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
    <tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM avaliacao";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $ava_id = $row['ava_id'];
                        echo "<tr>      
                                <td>{$row['usucli_id']}</td>
                                <td>{$row['avaliacao']}</td>
                                <td>{$row['estrelas']}</td>
                                
                                <td>
                                <a href='editarFormAvaliacao.php?ava_id=$ava_id'>
                                editar
                                </a>

                                <a href='deleteAvaliacao.php?ava_id=$ava_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                a avaliação {$row['usucli_id']}?');\"> 
                                
                                <img src='../img/lixeira.png' width='10' height='10'>  
                                
                                </a>
                                </td>
                             </tr>";
                    }
        ?>
        
    </tbody>
</table>


</div>

</body>
</html>

