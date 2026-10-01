<?php
/*Aqui virá o código de busca 
utilizando o comando SQL*/
include "../conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário Clientes</title>

<link href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">"

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

<img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png">    

<h2>Cadastro de Cliente</h2>

<form method="post" action="insertUsuario_Cliente.php" enctype="multipart/form-data">
    
      
    Nome:<br>
    <input type="varchar" name="usucli_nome" class="caixa"><br>
    
    Email:<br>
    <input type="varchar" name="usucli_email" class="caixa"><br>
    
    CPF:<br>
    <input type="int" name="usucli_cpf" class="caixa"><br>
    
    Endereço:<br>
    <input type="varchar" name="usucli_endereco" class="caixa"><br>
    <br>

    Estado:<br>
    <input type="varchar" name="usucli_estado" class="caixa"><br>
      
    Cidade:<br>
    <input type="varchar" name="usucli_cidade" class="caixa"><br>
    
    Rua:<br>
    <input type="varchar" name="usucli_rua" class="caixa"><br>
    
    Numero:<br>
    <input type="int" name="usucli_numero" class="caixa"><br>
    <br>

    Bairro:<br>
    <input type="varchar" name="usucli_bairro" class="caixa"><br>
    <br>

    CEP:<br>
    <input type="int" name="usucli_cep" class="caixa"><br>
    <br>


<!--Botões de Enviar e Limpar-->
<input type="submit" value="CADASTRAR" class="caixa">
<input type="reset" value="CANCELAR" class="caixa">
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Estado</th>
            <th>Cidade</th>
            <th>Numero</th>
            <th>Rua</th>
            <th>Bairro</th>
            <th>CEP</th>

            <th>Ações</th>
        </tr>
    </thead>

<!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
    <tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM usuario_cliente";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $usucli_id = $row['usucli_id'];
                        echo "<tr>      
                                <td>{$row['usucli_id']}</td>
                                <td>{$row['usucli_nome']}</td>
                                <td>{$row['usucli_email']}</td>
                                <td>{$row['usucli_cpf']}</td>
                                <td>{$row['usucli_endereco']}</td>
                                <td>{$row['usucli_estado']}</td>
                                <td>{$row['usucli_cidade']}</td>
                                <td>{$row['usucli_numero']}</td>
                                <td>{$row['usucli_rua']}</td>
                                <td>{$row['usucli_bairro']}</td>
                                <td>{$row['usucli_cep']}</td>

                                
                                 
                                <td>
                                    <a href='editarformUsuario_Cliente.php?usucli_id=$usucli_id'>
                                    Editar
                                    </a>
    
                                  <a href='deleteUsuario_Cliente.php?usucli_id=$usucli_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                o Cliente? {$row['usucli_id']}?');\"> 
                                
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
