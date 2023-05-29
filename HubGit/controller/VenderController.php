<?php
    include_once "../model/MercadoriaModel.php";
        if(isset($_GET['id']))
        {
            $mercadorias = buscar($_GET['id']);
            $id = $_GET['id'];
            excluir($id);
            include_once "../view/Sistema/certezaDaVenda.php";
        }

        else
        {
            index();
        }
        function index()
        {
            $mercadorias = listar();
            include_once "../view/Sistema/vender.php";
        }
?>