<h2> ADICIONAR EQUIPAMENTO: </h2>

    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/style.css') ?>">

<form method = "POST" action = "#"> 
    
    <strong> Nome: </strong><p></p>
    <input class="form-control" autofocus type = "text" name = "nome_equipamento" /> <p></p><p></p>
    <strong> Caixa: </strong><p></p>
    <select  class="form-control" name = "caixa">
        <option>  </option>
        <option value = "1 - TELEFONIA">1 - TELEFONIA</option>
        <option value = "2 - TELEFONIA" >2 - TELEFONIA</option>
        <option value = "3 - ENERGIA">3 - ENERGIA</option>
        <option value = "4 - TELEFONIA(CABOS)">4 - TELEFONIA(CABOS)</option>
        <option value = "5 - INTERNET">5 - INTERNET</option>
        <option value = "6 - CABOS(VGA,HDMI,ETC)">6 - CABOS(VGA,HDMI,ETC)</option>
        <option value = "7 - TONNER: IMPRESSORA" >7 - TONNER: IMPRESSORA</option>
        <option value = "8 PENDRIVE E ADPADORES DE TOMADA">8 PENDRIVE E ADPADORES DE TOMADA</option>
        <option value = "9 - EQUIP. DE TOMADAS">9 - EQUIP. DE TOMADAS</option>
        <option value = "10 - MOUSES">10 - MOUSES</option>
    </select><p></p>
    
    <strong> Ocupado:</strong> <input class="form-control" type ="text" name="ocupado" value ="NAO" readonly/><p></p>
    <input class="btn btn-success" type = "submit" value = "Adicionar" />

</form>