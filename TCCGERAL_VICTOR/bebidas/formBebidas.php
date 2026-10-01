
<?php
/*Aqui virá o código de busca 
utilizando o comando SQL*/
include "../conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário bebidas</title>

<link href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">"


<style>
body{
    font-family:Arial;
    background-color:#f2f2f2;
    text-align:center;
}
.container{
    background:white;
    width:1000px;
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

<h2>Cadastro de bebidas</h2>

<form method="post" action="insertBebidas.php" enctype="multipart/form-data">
    
    Nome:<br>
    <input type="varchar" name="be_nome" class="caixa"><br>
    
    Tamanho:<br>
    <input type="int" name="be_tamanho" class="caixa"><br>
    
    Preco:<br>
    <input type="int" name="be_preco" class="caixa"><br>
    
    Foto:<br>
    <input type="varchar" name="be_foto" class="caixa"><br>
    <br>


<!--Botões de Enviar e Limpar-->
<input type="submit" value="CADASTRAR" class="caixa">
<input type="reset" value="CANCELAR" class="caixa">

</form>
<!--Início da tabela de visualização de usuário -->
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Tamanho</th>
            <th>Preço</th>
            <th>Foto</th>

            <th>Ações</th>
        </tr>
    </thead>

<!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
    <tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM bebidas";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $be_id = $row['be_id'];
                        echo "<tr>      
                                
                                <td>{$row['be_nome']}</td>
                                <td>{$row['be_tamanho']}</td>
                                <td>{$row['be_preco']}</td>
                                <td>{$row['be_foto']}</td>
                                
                                <td>
                                <a href='editarFormBebidas.php?be_id=$be_id'>
                                Editar
                                </a>

                                   <a href='deleteBebidas.php?be_id=$be_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                a bebida? {$row['be_id']}?');\"> 
                                
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