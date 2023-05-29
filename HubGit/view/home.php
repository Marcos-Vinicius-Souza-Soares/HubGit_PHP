<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4db283bd96.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Style/indexStyle.css">
    <title>Sistema</title>
</head>
<body>
    <header>
        <div class="menu-content">
            <h1 class="logo">HubGit</h1>
            <nav class="header-menu">
                <ul class="list-itens">
                    <li><a href="">Home</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Código de Ética</a></li>
                    <li><a href="">Agenda</a></li>
                    <li><a href="">Contatos</a></li>
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="main-content">
            <h1 class="primary-text">O segredo da venda é o foco no cliente e TRABALHO DURO!</h1>
            <h2 class="second-text">HubGit é o limite do sucesso</h2>
            <form action="../controller/LoginController.php" method="POST">
                <div class="btns">
                    <button type="submit" name="logar" class= "btn-exp"> Login </button>
                </div>
            </form>
            <form action="../controller/RegisterController.php" method="POST">
                <div class="btns">
                    <button type="submit" name="criar" class="btn-personal"> Cadastro </button>
                </div>
            </form>
    </main>
</body>
</html>