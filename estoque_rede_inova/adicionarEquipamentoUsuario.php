<?php
    require 'usuario.class.php';
    require 'equipamento.class.php';
    require 'equipamentos_usuarios.class.php';

    $usuario = new Usuario();
    $equipamento = new Equipamento();
    $equipamentoUsuario = new Equipamento_Usuario();
?>

<h2> EMPRESTAR EQUIPAMENTO: </h2>

<form method = "POST" action = "adicionarequiUsuario_submit.php"> 

    EQUIPAMENTO:<p></p>
    <select autofocus name = "nome_equipamento">
        <option>  </option>
    <?php
    
            $list = $equipamento->selectAll();
            foreach ($list as $item){ ?>
            <option value = "  <?php echo $item['id_equipamento']; ?> "> 
                <?php echo $item['nome_equipamento'];
                    $item['id_equipamento']; ?> 
            </option>

    <?php }; ?>
</select> <p></p>


    COLABORADOR:<p></p>
    <select name = "nome_usuario">
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
    <input type = "date" name = "data_inicio" /><p></p>
    <input type = "submit" value = "Adicionar" />

</form>

