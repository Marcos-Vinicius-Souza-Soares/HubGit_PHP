<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../view/Sistema/sistema.php">VOLTAR</a>
    <h1>Mercadorias:</h1>
</body>
</html>
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
    <p> Sem mercadorias no estoque </p>
<?php endif ?>