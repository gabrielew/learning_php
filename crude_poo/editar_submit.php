<?php 

    include 'contato.class.php';
    $contato = new Contato();

    $id_contato = $_POST['id_contato'];
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    

    $contato->updateAll($id_contato, $email, $nome);
    header("Location: index.php");

?>