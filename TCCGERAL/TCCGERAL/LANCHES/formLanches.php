<?php
/*Aqui virá o código de busca 
utilizando o comando SQL*/
include "../conexao.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulário dos Lanches</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
        }

        .container {
            background: #e64b23;
        }

        .container {
            background: white;
            width: 1000px;
            margin: auto;
            margin-top: 30px;
            padding: 20px;
            border-radius: 10px;
        }

        .caixa {
            width: 50%;
            padding: 5px;
            margin: 5px;
        }

        img {
            width: 100px;
            margin-bottom: 10px;
        }

        .grupo {
            text-align: left;
            width: 80%;
            margin: auto;
        }

        .grupo label {
            display: block;
            margin: 5px 0;
        }

        .header {
            background-color: #e64b23;
            color: white;
            padding: 15px 0;
            text-align: center;
        }

        footer {
            background-color: #e64b23;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
    </style>

</head>

<body>

    <header class="header mb-4">
        <div class="containerr d-flex justify-content-between align-items-center">
            <img src="../imagens/logo.png">
            <a href="../menu.php" class="btn btn-light">Voltar ao Menu</a>
        </div>
    </header>

    <img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png">

    <h2>Cadastro de Lanches</h2>

    <form>
        <div class="container">
            <div class="row g-3"> <!--g-3 → Espaçamento entre as linhas.-->

                <div class="col-md-6 ">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control">
                </div><br>

                <div class="col-md-6">
                    <label class="form-label">Descrição</label>
                    <input type="int" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Preço</label>
                    <input type="int" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Categoria</label>
                    <input type="varchar" class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="foto" class="form-label">Apenas um arquivo:</label>
                    <input type="file" class="form-control" id="foto" 
                    name="foto">
                </div>   

                <div class="col-12 text-center mt-3">
                    <button class="btn btn-primary">
                        Limpar
                    </button>

                    <button class="btn btn-primary">
                        Enviar
                    </button>


                </div>

            </div>
        </div>
    </form>

    <!--Início da tabela de visualização de usuário -->
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Foto</th>

                <th>Ações</th>
            </tr>
        </thead>

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
                while ($row = $result->fetch_assoc()) {
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
        <footer>
            <p class="mb-0">&copy; <?= date('Y') ?> - Sabor na Chapa</p>
        </footer>
</body>

</html>