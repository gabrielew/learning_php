<?php 

    include 'contato.class.php';
    $contato = new Contato();

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $contato->insert($email, $nome);
    header("Location: index.php");

?>