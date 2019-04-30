<?php 

    require 'usuario.class.php';
    require 'equipamento.class.php';
    require 'equipamentos_usuarios.class.php';

    $usuario = new Usuario();
    $equipamento = new Equipamento();
    $equipamentoUsuario = new Equipamento_Usuario();
?>  

    <h1 style="text-align:center"> USUÁRIOS: </h1>
    <a href = "adicionar.php"> [ADICIONAR] </a> <p></p>
    <table border ='1' width = "100%" >
        <tr>
            <th> ID </th>
            <th> NOME </th>
            <th> SETOR </th>
            <th> AÇÕES </th>
        </tr>

        <?php
            $list = $usuario->selectAll();
            foreach ($list as $item):
        ?>
                <tr>
                    <td> <?php echo $item['id_usuario']; ?> </td>
                    <td> <?php echo $item['nome_usuario']; ?> </td>
                    <td> <?php echo $item['setor']; ?> </td>
                    <td>
                        <a href = "editar.php?id_usuario=<?php echo $item['id_usuario']; ?>"> [EDITAR] </a>
                        <a href = "excluir.php?id_usuario=<?php echo $item['id_usuario']; ?>"> [EXCLUIR] </a>
                    </td>
                </tr>
        <?php endforeach; ?>        

    </table>
    <p></p>

    <h1 style="text-align:center"> EQUIPAMENTOS: </h1>
    <a href = "adicionar_equipamento.php"> [ADICIONAR] </a> <p></p>
    <table border ='1' width = "100%" >
        <tr>
            <th> ID </th>
            <th> NOME </th>
            <th> CAIXA </th>
            <th> OCUPADO </th>
            <th> AÇÕES </th>
        </tr>

        <?php
            $list = $equipamento->selectAll();
            foreach ($list as $item):
        ?>
                <tr>
                    <td> <?php echo $item['id_equipamento']; ?> </td>
                    <td> <?php echo $item['nome_equipamento']; ?> </td>
                    <td> <?php echo $item['caixa']; ?> </td>
                    <td> <?php echo $item['ocupado']; ?> </td>
                    <td>
                        <a href = "editar_equipamento.php?id_equipamento=<?php echo $item['id_equipamento']; ?>"> [EDITAR] </a>
                        <a href = "excluir_equipamento.php?id_equipamento=<?php echo $item['id_equipamento']; ?>"> [EXCLUIR] </a>
                    </td>
                </tr>
        <?php endforeach; ?>        

    </table>

    <h1 style="text-align:center"> OCUPADOS POR: </h1>
    <a href = "adicionarEquipamentoUsuario.php"> [ADICIONAR] </a> <p></p>
    <table border ='1' width = "100%" >
        <tr>
            <th> ID </th>
            <th> NOME </th>
            <th> SETOR </th>
            <th> EQUIPAMENTO </th>
            <th> DATA INÍCIO </th>
            <th> DATA FIM </th>
            <th> AÇÕES </th>
        </tr>

        <?php
            $list = $equipamentoUsuario->selectAll();
            foreach ($list as $item) {
        ?>
                <tr>
                    <td> <?php echo $item['id_equipamento_usuario']; ?> </td>
                    <td> <?php echo $item['nome_usuario']; ?> </td>
                    <td> <?php echo $item['setor']; ?> </td>
                    <td> <?php echo $item['nome_equipamento']; ?> </td>
                    <td> <?php echo $item['data_inicio']; ?> </td>
                    <td> <?php echo $item['data_fim']; ?> </td>
                    <td>
                        <a href = "editarEquipUsuario.php?id_equipamento_usuario=<?php echo $item['id_equipamento_usuario']; ?>"> [EDITAR] </a>
                        <a href = "excluirEquipUsuario.php?id_equipamento_usuario=<?php echo $item['id_equipamento_usuario']; ?>"> [EXCLUIR] </a>
                    </td>
                </tr>
        <?php } ?>        

    </table>
    <p></p>
