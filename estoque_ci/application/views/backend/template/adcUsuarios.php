<h2> ADICIONAR COLABORADOR: </h2>

    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/style.css') ?>">

<form method = "POST" action = "#"> 

    Nome:<p></p>
    <input class="form-control" autofocus type = "text" name = "nome_usuario" /> <p></p><p></p>
    Setor:<p></p>
    <select class="form-control" name = "setor">
        <option>  </option>
        <option value = "ANJO">ANJO</option>
        <option value = "ADMINISTRATIVO" >ADMINISTRATIVO</option>
        <option value = "COMERCIAL">COMERCIAL</option>
        <option value = "MARKETING">MARKETING</option>
        <option value = "TECNOLOGIA">TECNOLOGIA</option>
    </select><p></p>
    <input class="btn btn-success" type = "submit" value = "Adicionar" />

</form>

