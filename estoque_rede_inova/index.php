<?php 

    require 'usuarios/usuario.class.php';
    require 'equipamentos/equipamento.class.php';
    require 'equipamentos_usuarios/equipamentos_usuarios.class.php';

    $usuario = new Usuario();
    $equipamento = new Equipamento();
    $equipamentoUsuario = new Equipamento_Usuario();
?>  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"> 
    
    <div class ="container"> 
    <h1 style="text-align:center"> USUÁRIOS: </h1>    
    <table class="table">

    <thead class="thead-dark">
        <tr>
            <th scope="col"> ID </th>
            <th scope="col"> NOME </th>
            <th scope="col"> SETOR </th>
            <th scope="col"> AÇÕES </th>
        </tr>
    </thead>
    <tbody>
    <p><a class = "btn btn-success" href = "usuarios/adicionar.php"> ADICIONAR </a></p>
        <?php
            $list = $usuario->selectAll();
            foreach ($list as $item):
        ?>
                <tr>
                    <td scope="row"> <?php echo $item['id_usuario']; ?> </td>
                    <td> <?php echo $item['nome_usuario']; ?> </td>
                    <td> <?php echo $item['setor']; ?> </td>
                    <td>
                        
                        <a class = "btn btn-warning" href = "usuarios/editar.php?id_usuario=<?php echo $item['id_usuario']; ?>"> EDITAR </a>
                        <!-- <a class = "btn btn-danger" href = "usuarios/excluir.php?id_usuario=<?php echo $item['id_usuario']; ?>"> EXCLUIR </a> -->
                    </td>
                </tr>
        <?php endforeach; ?>    

    <tbody>
    </table>
    <p></p>

    <h1 style="text-align:center"> EQUIPAMENTOS: </h1>
     <p><a class = "btn btn-success" href = "equipamentos/adicionar_equipamento.php"> ADICIONAR </a></p>
    <table class = "table">
        <tr class="thead-dark">
            <th scope="col"> ID </th>
            <th scope="col"> NOME </th>
            <th scope="col"> CAIXA </th>
            <th scope="col"> OCUPADO </th>
            <th scope="col"> AÇÕES </th>
        </tr>

        <?php
            $list = $equipamento->selectAll();
            foreach ($list as $item):
        ?>
                <tr scope="row">
                    <td> <?php echo $item['id_equipamento']; ?> </td>
                    <td> <?php echo $item['nome_equipamento']; ?> </td>
                    <td> <?php echo $item['caixa']; ?> </td>
                    <td> <?php echo $item['ocupado']; ?> </td>
                    <td>                        
                        <a class = "btn btn-warning" href = "equipamentos/editar_equipamento.php?id_equipamento=<?php echo $item['id_equipamento']; ?>"> EDITAR </a>
                        <!-- <a class = "btn btn-danger" href = "equipamentos/excluir_equipamento.php?id_equipamento=<?php echo $item['id_equipamento']; ?>"> EXCLUIR </a> -->
                    </td>
                </tr>
        <?php endforeach; ?>        

    </table>

    <h1 style="text-align:center"> OCUPADOS POR: </h1>
    <a class = "btn btn-success" href = "equipamentos_usuarios/adicionarEquipamentoUsuario.php"> ADICIONAR </a> <p></p>
    <table class = "table">
        <tr class="thead-dark">
            <th scope="col"> ID </th>
            <th scope="col"> NOME </th>
            <th scope="col"> SETOR </th>
            <th scope="col"> EQUIPAMENTO </th>
            <th scope="col"> DATA INÍCIO </th>
            <th scope="col"> DATA FIM </th>
            <th scope="col"> AÇÕES </th>
        </tr>

        <?php
            $list = $equipamentoUsuario->selectAll();
            foreach ($list as $item) {
        ?>
                <tr scope="row">
                    <td> <?php echo $item['id_equipamento_usuario']; ?> </td>
                    <td> <?php echo $item['nome_usuario']; ?> </td>
                    <td> <?php echo $item['setor']; ?> </td>
                    <td> <?php echo $item['nome_equipamento']; ?> </td>
                    <td> <?php echo $item['data_inicio']; ?> </td>
                    <td> <?php echo $item['data_fim']; ?> </td>
                    <td>
                        <a class = "btn btn-warning" href = "equipamentos_usuarios/editarEquipUsuario.php?id_equipamento_usuario=<?php echo $item['id_equipamento_usuario']; ?>"> EDITAR </a>
                        <!-- <a class = "btn btn-danger" href = "equipamentos_usuarios/excluirEquipUsuario.php?id_equipamento_usuario=<?php echo $item['id_equipamento_usuario']; ?>"> EXCLUIR </a> -->
                    </td>
                </tr>
        <?php } ?>        

    </table>
    <p></p>
    </div>
