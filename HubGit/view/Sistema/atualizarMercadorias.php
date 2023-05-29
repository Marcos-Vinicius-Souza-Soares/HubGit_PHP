<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>#<?=$mercadorias['id']?> </h2>
<hr>
<form action="" method='post'>
    <input type="hidden" name='id' value='<?=$mercadorias['id']?>'>
    <label>Marca:</label>
    <input type="text" name='marca' value='<?=$mercadorias['marca']?>' required>
    <label>Produto:</label>
    <input type="text" name='produto' value='<?=$mercadorias['produto']?>'required>
    <label>Valor:</label>
    <input type="number" name='valor' value='<?=$mercadorias['valor']?>'required>
    <button type="submit" name='atualiza'>
        atualizar
    </button>  
    <button type="submit" name= 'exclui'>
        Excluir
    </button>
</form>
</body>
</html>