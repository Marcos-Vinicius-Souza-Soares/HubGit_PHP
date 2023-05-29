<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/loginStyle.css">
<title>Login</title> 
</head>
<body>
    <div class="main-login">
        <div class="center-login">
        <h1>Faça Login</h1>
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="../../controller/LoginController.php" method="post">
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="E-mail">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha">
                    <input type="checkbox" onclick="mostrarOcultarSenha()">
                    <script type="text/javascript" src="../../Interaction/HideShowPassword.js"></script>
                </div>
                <button type="submit" class="btn-login" name="submit">Login</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>