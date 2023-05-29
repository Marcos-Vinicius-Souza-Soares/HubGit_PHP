<?php
session_start();
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Adicionar mercadoria
                            <a href="../view/Sistema/sistema.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label>Marca</label>
                                <input type="text" name="marca" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Produto</label>   
                                <input type="text" name="produto" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Valor</label>    
                                <input type="number" name="valor" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="adicionar" class="btn btn-primary">Adicionar</button>
                            </div>
                        </form>
                        <hr>
                            <?php if(isset($mercadorias)) : ?>
                                <?php foreach($mercadorias as $c) : ?>
                                    <p>
                                        <a href="?id=<?=$c['id']?>">
                                            #<?= $c['id']?><br>
                                        </a>
                                        Marca: <?= $c['marca']?><br>
                                        Produto: <?= $c['produto']?><br>
                                        Preço: R$ <?= $c['valor']?><br>
                                    </p>
                                <?php endforeach ?>
                            <?php else : ?>
                                <p> Nenhum contato encontrato </p>
                            <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>