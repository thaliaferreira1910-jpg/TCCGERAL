<?php
/*Aqui virá o código de busca 
utilizando o comando SQL*/
include "../conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário da Categoria</title>

<style>
body{
    font-family: Arial;
    background-color: #f2f2f2;
    text-align: center;
}

.container{
    background: white;
    width: 1000px;
    margin: auto;
    margin-top: 30px;
    padding: 20px;
    border-radius: 10px;
}

.caixa{
    width: 80%;
    padding: 5px;
    margin: 5px;
}

img{
    width: 100px;
    margin-bottom: 10px;
}

.grupo{
    text-align: left;
    width: 80%;
    margin: auto;
}

.grupo label{
    display: block;
    margin: 5px 0;
}
 
</style>

</head>
<body>

<div class="container">

<img src="../imagens/LOGO TCC.jpeg">    

<h2>Cadastro da Categoria</h2>

<form method="post" action="insertCategoria.php" enctype="multipart/form-data">
    
      
    <!--Id da Categoria:<br>-->
    <input type="hidden" name="cat_id" class="caixa"><br>
    
    Nome da Categoria:<br>
    <input type="varchar" name="cat_nome" class="caixa"><br>

<!--Botões de Enviar e Limpar-->
<input type="submit" value="CADASTRAR" class="caixa">
<input type="reset" value="CANCELAR" class="caixa">
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            
        </tr>
    </thead>

<!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
    <tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM categoria";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $cat_id = $row['cat_id'];
                        echo "<tr>      
                                <td>{$row['cat_id']}</td>
                                <td>{$row['cat_nome']}</td>
                                

                                
                                 
                                <td>
                                    <a href='EditarFormCategoria.php?cat_id=$cat_id'>
                                    Editar
                                    </a>

                                     <a href='deleteCategoria.php?cat_id=$cat_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                a Categoria {$row['cat_id']}?');\"> 
                                   Excluir
                                
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