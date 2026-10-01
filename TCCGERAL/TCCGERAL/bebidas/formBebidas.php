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
    <title>Formulário bebidas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">



    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            text-align: center;
        }

        .containerr {
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
            width: 80%;
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
    <div class="container">

        <img src="https://cdn-icons-png.flaticon.com/128/13671/13671693.png">

        <h2>Cadastro de bebidas</h2>

        <form>

            <div class="row g-3"> <!--g-3 → Espaçamento entre as linhas.-->
                

                <div class="col-md-6 ">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="be_nome">
                </div><br>

                <div class="col-md-6">
                    <label class="form-label">Tamanho</label>
                    <input type="int" class="form-control" name="be_tamanho">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Preço</label>
                    <input type="int" class="form-control" name="be_preco">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Foto</label>
                    <input type="file" class="form-control" name="imagem">
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

        </form>

        <br>

    <h3>Bebidas Cadastradas</h3>

        <div class="row">
      
    <?php
    $sql= "SELECT * FROM bebidas";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
            $be_id = $row['be_id'];
            $imagem = !empty($row['imagem']) ?
            $row['imagem'] : "../icones/semfoto.png"; // Arrumar a imagem semfoto depois !!!
            
            echo "
            <div class='col-md-3'>
                <div class='card mb-3 shadow-sm'>

                <img src='$imagem' class='card-img-top' height='350' style='object-fit:cover;'>

                
                <div class='card-body'>
                    <h5 class='card-title'>
                        {$row['be_nome']}
                    </h5>
                    
                    <p class='card-text'><small>
                    {$row['be_tamanho']} - {$row['be_preco']}  - {$row['cat_id']}
                    </small></p>
                    
                    <a href='editarformBebidas.php?id=$be_id' class='btn btn-sm btn-warning'>Editar</a>

                    <a href='deleteBebidas.php?id=$be_id'
                    class='btn btn-sm btn-danger'
                    onclick=\"return confirm('Deseja excluit o livro {$row['be_nome']}?');\">Excluir</a>
                </div>
            </div>
        </div>
        "; 

        }

    ?>

</div>

</div>

</body>
</html>
                
