<?php
    include 'conexao.php';

    $nroProduto = $_POST['nroproduto']; //Recebe o valor do atributo
    $nomeProduto =$_POST['nomeproduto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO `estoque`( `nro_produto`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroProduto,'
    $nomeProduto','$categoria', $quantidade ,'$fornecedor')";

    $inserir = mysqli_query($conexao,$sql);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="container" style="width: 300px; " margin-top="20px">
    <center>
        <h4>Produto Adicionado com sucesso</h4>
    </center>    
<div style="padding-top: 20px;">
    <center>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Item</a>
    </center>
</div>
</div>