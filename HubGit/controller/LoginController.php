<?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        include_once "../model/database.php";
        $con = conectar();
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = $con->query($sql);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header ('Location: ../view/Login/login.php');
        }

        else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header ('Location: ../view/Sistema/sistema.php');
        }
    }
    else {
        header ('Location: ../view/Login/login.php');
    }
?>