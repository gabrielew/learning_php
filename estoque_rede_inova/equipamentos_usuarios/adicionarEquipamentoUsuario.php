<?php
    require '../usuarios/usuario.class.php';
    require '../equipamentos/equipamento.class.php';
    require 'equipamentos_usuarios.class.php';

    $usuario = new Usuario();
    $equipamento = new Equipamento();
    $equipamentoUsuario = new Equipamento_Usuario();
?>

<h2> EMPRESTAR EQUIPAMENTO: </h2>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

<form method = "POST" action = "adicionarequiUsuario_submit.php"> 

    EQUIPAMENTO:<p></p>
    <select class="form-control" autofocus name = "nome_equipamento">
        <option>  </option>
    <?php
    
            $list = $equipamento->selectNao();
            foreach ($list as $item){ ?>
            <option value = "  <?php echo $item['id_equipamento']; ?> "> 
                <?php echo $item['nome_equipamento'];
                    $item['id_equipamento']; ?> 
            </option>

    <?php }; ?>
</select> <p></p>


    COLABORADOR:<p></p>
    <select class="form-control" name = "nome_usuario">
        <option>  </option>
    <?php

        $list = $usuario->selectAll();
        foreach ($list as $item){ ?>

        <option value = "  <?php echo $item['id_usuario']; ?> ">
            <?php echo $item['nome_usuario']; 
                $item['id_usuario']; ?> 
        </option>

    <?php }; ?>

    </select><p></p>

    DATA INÍCIO:<p></p>
    <input class="form-control" type = "date" name = "data_inicio" /><p></p>
    <input class ="btn btn-success" type = "submit" value = "Adicionar" />

</form>

