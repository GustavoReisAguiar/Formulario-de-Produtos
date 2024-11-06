<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de produtos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>  
    <div class="container" style="margin-top: 40px;">
    <h3>Lista de Produtos</h3>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nro Produto</th>
                <th scope="col">Nome Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Quantidade</th>  
                <th scope="col">Fornecedor</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
                <?php
                    include 'conexao.php';
                    $sql ="SELECT * FROM `estoque`";
                    $busca = mysqli_query($conexao,$sql);

                    while($array = mysqli_fetch_array($busca)){

                        $id_estoque = $array['id_estoque'];
                        $nroProduto = $array['nro_produto'];
                        $nomeProduto =$array['nome_produto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
                        ?>
            <tr>

                <td><?php echo $nroProduto ?></td>
                <td><?php echo $nomeProduto ?></td>
                <td><?php echo $categoria ?></td>
                <td><?php echo $quantidade ?></td>
                <td><?php echo $fornecedor ?></td>
                <td><a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_produto.php?id= <?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a></td>

            <?php } ?>
            </tr>

    </table>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>