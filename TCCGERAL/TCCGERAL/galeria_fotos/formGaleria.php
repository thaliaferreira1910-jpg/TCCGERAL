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

<img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png">    


<form method="post" action="insertGaleria.php" enctype="multipart/form-data">
    Galeria de foto:<br>
    <input type="varchar" name="gal_fotos" class="caixa"><br>
      
<br>

<!--Botões de Enviar e Limpar-->
<input type="submit" value="ENVIAR" class="caixa">
<input type="reset" value="CANCELAR" class="caixa">

</form>
<!--Início da tabela de visualização de usuário -->
<table>
    <thead>
        <tr>
            <th>ID da Galeria</th>
            <th>Galeria de Fotos</th>
        </tr>
    </thead>

<!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
    <tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM galeria_fotos";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $gal_id = $row['gal_id'];
                        echo "<tr>      
                                <td>{$row['gal_id']}</td>
                                <td>{$row['gal_fotos']}</td>
                                
                                <td>
                                <a href='editarFormGaleria.php?gal_id=$gal_id'>
                                <img src='../img/lapis.jpg'
                                width='10' height='10'>
                                </a>

                                <a href='deleteGaleria.php?usucli_id=$gal_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                a galeria {$row['gal_id']}?');\"> 
                                
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

