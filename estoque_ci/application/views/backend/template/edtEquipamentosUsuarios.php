<h2> FINALIZAR : </h2>

    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/style.css') ?>">

<form method = "POST" action = "#"> 

    <input type = "hidden" name = "id_equipamento_usuario" value="id_equipamento_usuario" />
    <input type = "hidden" name = "id_equipamento" value="id_equipamento"/>
    
    ID_USUARIO:  
    <input class="form-control" type = "text" name = "id_equipamento_usuario" value="id_equipamento_usuario" readonly/> <p></p><p></p>

    Data Início:   
    <input class="form-control" type="text" name="data_inicio" value="data_inicio" readonly/><p></p>
    Data Fim:
    <input class="form-control" type = "date" name="data_fim" /> <p></p>
    <input class="btn btn-warning" type = "submit" value = "EDITAR" />

</form>