<?php 

    include 'equipamento.class.php';
    $equipamento = new Equipamento();

    $nome_equipamento = $_POST['nome_equipamento'];
    $caixa = $_POST['caixa'];
    $ocupado = $_POST['ocupado'];
    $equipamento->insert($nome_equipamento, $caixa, $ocupado);
    header("Location: index.php");

?>