<?php
    include_once "../model/MercadoriaModel.php";
    
    if(isset($_POST['adicionar'])){
        adicionar();
        header('Location: MercadoriaController.php');
    }

    else if (isset($_POST['atualiza'])) 
    {
        editar();
        header("Location: MercadoriaController.php");
    }
    else if (isset($_POST['exclui']))
    {
        $mercadorias= buscar($_POST['id']);
        include_once("../view/Sistema/excluir.php");
    }
    else if(isset($_GET['sim']))
    {
        $id = $_GET['sim'];
        excluir($id);
        header("Location: MercadoriaController.php");
    }
    else if(isset($_GET['id']))
    {
        $mercadorias = buscar($_GET['id']);
        include_once "../view/Sistema/atualizarMercadorias.php";
    }

    else
    {
        index();
    }
    function adicionar()
    {
        $marca = $_POST['marca'];
        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        inserir($marca, $produto, $valor);
    }
    function editar()
    {
        $id = $_POST['id'];
        $marca = $_POST['marca'];
        $produto = $_POST['produto'];
        $valor = $_POST['valor'];
        atualizar($id, $marca, $produto, $valor);
    }

    function index()
    {
        $mercadorias = listar();
        include_once "../view/Sistema/mercadorias.php";
    }
?>