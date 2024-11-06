<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        #tamanhoContainer{
            width: 500px;
        }
        #botao{
            background-color: #FF1168;
            color: #fff;
            font-weight: bold ;
        }
    </style>
</head>
<body>
    
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4>Formulario de Cadastro</h4> 
        <form action="_inserir_produto.php" method="POST" style="margin-top: 20px;">
            <div class="form-group">
                <label>Nro Produto</label>
                <input type="number" name="nroproduto" class="form-control" placeholder="Insira o numero do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome Produto</label>
                <input type="text" name="nomeproduto" class="form-control"  placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="categoria" autocomplete="off" required>
                    <option>Perifericos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>    
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" name="quantidade" class="form-control"  placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" autocomplete="off" required>
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor C</option>
                    <option>Fornecedor D</option>
                </select>
            </div> 
            <div style="text-align: right;">  
                <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
            </div> 
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>