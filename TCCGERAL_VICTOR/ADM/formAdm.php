<?php 
include "../conexao.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário Completo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">
   


</head>
<body>


<form method="post" action="insertAdm.php" enctype="multipart/form-data">


<div class="container col-6 mb-4">
        <h2>Cadastre-se preechendo o formulário</h2>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="nome" class="form-label">CPF</label>
                <input type="text" class="form-control" id="email"
                name="usuAdm_cpf" placeholder="Digite seu CPF">
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email"
                name="usuAdm_email" placeholder="Digite seu e-mail">
            </div>

            <div class="col-md-6">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha"
                name="usuAdm_senha" placeholder="Digite sua senha">
            </div>

            <br>
    
    <div class="col-12">
                <button type="reset" class="btn btn-danger">
                Limpar</button>
                <button typr="submit" class="btn btn-primary">
                Cadastrar </button>

             </div>
            
        </form>
</div>

<table>
    <thead>
        <tr>
            <th>id</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>
    </thead>

<!--A partir da segunda linha da tabela os 
dados serão em PHP e virão do banco de dados-->    
    <tbody>
        <?php
            //Verifica se há registros retornados
                    $sql = "SELECT * FROM usuario_adm";
                    
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        $usu_id = $row['usu_id'];
                        echo "<tr>      
                                <td>{$row['usu_id']}</td>
                                <td>{$row['usuAdm_cpf']}</td>
                                <td>{$row['usuAdm_email']}</td>
                                <td>{$row['usuAdm_senha']}</td>

                                
                                 
                                <td>
                                    <a href='editarAdm.php?usu_id=$usu_id'>
                                    Editar
                                    </a>
    
                                  <a href='deleteAdm.php?usu_id=$usu_id'
                                onclick=\"return confirm('Deseja realmente excluir
                                o Adm? {$row['usu_id']}?');\"> 
                                
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