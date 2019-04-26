<?php

    
    include 'contato.class.php';
    $contato = new Contato();
    
    if(!empty($_GET['id_contato'])) {
        $id_contato = $_GET['id_contato'];
        $contato->delete($id_contato);
        header("Location: index.php");
    }
    else{
        header("Location: index.php");
    }