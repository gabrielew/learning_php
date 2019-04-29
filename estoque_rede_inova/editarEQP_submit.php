<?php

    include 'equipamento.class.php';
    $equipamento = new Equipamento();
    
    if(!empty($_POST['id_equipamento'])) {
        $nome_equipamento = $_POST['nome_equipamento'];
        $caixa = $_POST['caixa'];
        $ocupado = $_POST['ocupado'];
        $id_equipamento = $_POST['id_equipamento'];

        $equipamento->updateAll($nome_equipamento, $caixa, $ocupado, $id_equipamento);
        header("Location: index.php");
        
    }
    else{
        //header("Location: index.php");
    }