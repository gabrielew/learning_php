<?php 

    include 'usuario.class.php';
    $usuario = new Usuario();

    $nome_usuario = $_POST['nome_usuario'];
    $setor = $_POST['setor'];

    $usuario->insert($nome_usuario, $setor);
    header("Location: ../index.php");

?>