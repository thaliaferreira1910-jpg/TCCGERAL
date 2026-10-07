<?php
/*Aqui virá o código de busca 
utilizando o comando SQL*/
include "../conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário dos Lanches</title>

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

<h2>Cadastro dos Lanches</h2>

<form method="post" action="insertLanches.php" enctype="multipart/form-data">
    
      
    <!--Id da Categoria:<br>-->
    <input type="hidden" name="lan_id" class="caixa"><br>
    
    Nome do Lanche:<br>
    <input type="varchar" name="lan_nome" class="caixa"><br>

    Preço:<br>
    <input type="int" name="lan_preco" class="caixa"><br>

    Descrição:<br>
    <input type="varchar" name="lan_descricao" class="caixa"><br>

    Foto do Lanche:<br>
    <input type="varchar" name="lan_foto" class="caixa"><br>

    Categoria:<br>
    <input type="varchar" name="cat_id" class="caixa"><br>

<!--Botões de Enviar e Limpar-->
<input type="submit" value="CADASTRAR" class="caixa">
<input type="reset" value="CANCELAR" class="caixa">
<table>
    <thead>
        <tr>
            <th>Id dos Lanches</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Descrição</th>
            <th>Foto do Lanche</th>
            <th>Categoria</th>
            
        </tr>
    </thead>

<!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
    <tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM lanches";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $lan_id = $row['lan_id'];
                        echo "<tr>      
                                <td>{$row['lan_id']}</td>
                                <td>{$row['lan_nome']}</td>
                                <td>{$row['lan_preco']}</td>
                                <td>{$row['lan_descricao']}</td>
                                <td>{$row['lan_foto']}</td>
                                <td>{$row['cat_id']}</td>
                                

                                
                                 
                                <td>
                                    <a href='EditarFormLanches.php?lan_id=$lan_id'>
                                    Editar
                                    </a>

                                     <a href='deleteLanches.php?lan_id=$lan_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                o lanche {$row['cat_id']}?');\"> 
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