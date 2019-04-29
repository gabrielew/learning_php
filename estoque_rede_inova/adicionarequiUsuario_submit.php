<?php 

    require 'usuario.class.php';
    require 'equipamento.class.php';
    require 'equipamentos_usuarios.class.php';

    $usuario = new Usuario();
    $equipamento = new Equipamento();
    $equipamentoUsuario = new Equipamento_Usuario();

    $id_f_equipamento = $_POST['id_equipamento'];
    $id_f_usuario = $_POST['id_usuario'];
    $nome_equipamento = $_POST['nome_equipamento'];
    $nome_usuario = $_POST['nome_usuario'];
    $data_inicio = $_POST['data_inicio'];
    echo $id_equipamento;
    echo "<br/>";
    echo $id_usuario;
    echo "<br/>";
    echo $nome_equipamento;
    echo "<br/>";
    echo $nome_usuario;
    echo "<br/>";
    echo $data_inicio;

    $equipamentoUsuario->insert($id_f_equipamento, $id_f_usuario, $data_inicio);
    #header("Location: index.php");

?>