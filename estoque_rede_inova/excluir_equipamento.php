<?php

    
    include 'equipamento.class.php';
    $equipamento = new Equipamento();
    
    if(!empty($_GET['id_equipamento'])) {
        $id_equipamento = $_GET['id_equipamento'];
        $equipamento->delete($id_equipamento);
        header("Location: index.php");
    }
    else{
        header("Location: index.php");
    }