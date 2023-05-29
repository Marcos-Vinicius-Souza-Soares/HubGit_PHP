<?php
    session_start();
    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) ) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: ../login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4db283bd96.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../Style/sistemaStyle.css">
    <title>Sistema</title>
</head>
<body>
<header>
        <div class="menu-content">
            <h1 class="logo">HubGit</h1>
        </div>
    </header>
    <main>
        <div class="main-content">
            <form action="../../controller/VenderController.php" method="POST">
                <div class="btns">
                    <button type="submit" name="" class= "btn-exp"> Vender </button>
                </div>
            </form>
            <form action="../../controller/MercadoriaController.php" method="POST">
                <div class="btns">
                    <button type="submit" name="" class="btn-personal"> Mercadorias </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>