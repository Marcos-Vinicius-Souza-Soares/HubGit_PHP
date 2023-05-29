<?php
    include_once 'database.php';

    function listar()
    {
        $con = conectar();
        $sql = "SELECT * FROM mercadoria";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc())
        {
            $dados[] = $d;
        }
        return $dados;
    }

    function inserir($marca, $produto, $valor)
    {
        $con = conectar();
        $sql = "INSERT INTO mercadoria (marca,produto,valor) VALUES('$marca','$produto','$valor')";
        $con->query($sql);
    }

    function buscar($id)
    {
        $con = conectar();
        $sql = "SELECT * FROM mercadoria WHERE id='$id'";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc())
        {
            $dados[] = $d;
        }
        return $dados[0];
    }

    function atualizar($id,$marca, $produto, $valor)
    {
        $con = conectar();
        $sql = "UPDATE mercadoria SET marca='$marca', produto='$produto', valor= '$valor' WHERE id='$id'";
        $con->query($sql);
    }

    function excluir($id)
    {
        $con = conectar();
        $sql = "DELETE FROM mercadoria WHERE id='$id'";
        $con->query($sql);
    }
?>