<head> 
    <title> <?php echo $titulo?> </title>
</head>
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">
    
    <div class ="container"> 
    <h1 style="text-align:center"> USUÁRIOS: </h1>    
    <table class="table">

    <thead class="thead-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col"> NOME </th>
            <th scope="col"> SETOR </th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"> AÇÕES </th>
        </tr>
    </thead>
    <tbody>
    <p><a class = "btn btn-success" href = "<?php echo base_url('adcUsuarios.php')?>"> ADICIONAR </a></p>

    <?php

        foreach ($usuarios as $usuario) { ?>
            <tr>
                <td scope="row">  </td>
                <td> <?php echo $usuario->nome_usuario ?> </td>
                <td> <?php echo $usuario->setor ?> </td>
                <td></td>
                <td></td>
                <td></td><td></td>
                <td>
                    
                    <a class = "btn btn-warning" href = "<?php echo base_url('colaborador/'.$usuario->id_usuario.'/'.limpar($usuario->nome_usuario)) ?>"> EDITAR </a>
                    <a class = "btn btn-danger" href = "#"> EXCLUIR </a>
                </td>
            </tr>   

        <?php } ?>

    <tbody>
    </table>
    <p></p>

    <h1 style="text-align:center"> EQUIPAMENTOS: </h1>
     <p><a class = "btn btn-success" href = "#"> ADICIONAR </a></p>
    <table class = "table">
        <tr class="thead-dark">
            <th scope="col"></th>
            <th scope="col"> EQUIPAMENTO </th>
            <th scope="col"> CAIXA </th>
            <th scope="col"> OCUPADO </th>
            <th scope="col"> AÇÕES </th>
        </tr>

        <?php

            foreach ($equipamentos as $equipamento) { ?>
                <tr>
                    <td scope="row">  </td>
                    <td> <?php echo $equipamento->nome_equipamento?> </td>
                    <td> <?php echo $equipamento->caixa ?> </td>
                    <td> <?php echo $equipamento->ocupado ?> </td>
                    <td>
                        
                        <a class = "btn btn-warning" href = " <?php echo base_url('equipamento/'.$equipamento->id_equipamento.'/'.limpar($equipamento->nome_equipamento)) ?> "> EDITAR </a>
                        <a class = "btn btn-danger" href = "#"> EXCLUIR </a>
                    </td>
                </tr>   

            <?php } ?>      

    </table>

    <h1 style="text-align:center"> OCUPADOS POR: </h1>
    <a class = "btn btn-success" href = "#"> ADICIONAR </a> <p></p>
    <table class = "table">
        <tr class="thead-dark">
            <th scope="col"> NOME </th>
            <th scope="col"> EQUIPAMENTO </th>
            <th scope="col"> DATA INÍCIO </th>
            <th scope="col"> DATA FIM </th>
            <th scope="col"> AÇÕES </th>
        </tr>

        <?php

            foreach ($equipamentosusuarios as $equipUsuario) { ?>
                <tr scope="row">
                    <td> <?php echo $equipUsuario->nome_usuario?></td>
                    <td> <?php echo $equipUsuario->nome_equipamento?></td>
                    <td> <?php echo $equipUsuario->data_inicio?></td>
                    <td> <?php echo $equipUsuario->data_fim?></td>
                    <td>
                        <a class = "btn btn-warning" href = " <?php echo base_url('emprestimo/'.$equipUsuario->id_equipamento_usuario.'/'.limpar($equipUsuario->nome_equipamento)) ?> "> EDITAR </a>
                        <a class = "btn btn-danger" href = "#"> EXCLUIR </a>
                    </td>
                </tr>
            <?php } ?>   

    </table>
    <p></p>
    </div>
