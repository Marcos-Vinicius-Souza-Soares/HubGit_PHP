<?php
    function  conectar()
    {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "hubgit";

        $con = new mysqli($servidor, $usuario, $senha, $banco);
        return $con;
    }
?>