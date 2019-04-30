<?php 

    require '../usuarios/usuario.class.php';
    require '../equipamentos/equipamento.class.php';
    require 'equipamentos_usuarios.class.php';

    $usuario = new Usuario();
    $equipamento = new Equipamento();
    $equipamentoUsuario = new Equipamento_Usuario();
    
    $id_equipamento = $_POST['nome_equipamento'];
    $id_usuario = $_POST['nome_usuario'];
    $data_inicio = $_POST['data_inicio'];
    $equipamentoUsuario->insert($id_equipamento, $id_usuario, $data_inicio);
    $equipamento->updateSIM($id_equipamento);
    header("Location: ../index.php");

?>