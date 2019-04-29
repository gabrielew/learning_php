<?php 
    include 'equipamento.class.php';
    $equipamento = new Equipamento();

    if(!empty($_GET['id_equipamento'])){
        $id_equipamento = $_GET['id_equipamento'];
        $info = $equipamento->selectById($id_equipamento);

        if(empty($info['caixa'])){
            header("Location: index.php");
            exit;
        }

        if(empty($info['ocupado'])){
            header("Location: index.php");
            exit;
        }
    }
    else{
        header("Location: index.php");
        exit;
    }
?>


<h2> EDITAR: </h2>

<form method = "POST" action = "editarEQP_submit.php"> 
    <input type = "hidden" name = "id_equipamento" value="<?php echo $info['id_equipamento']; ?>"/>
    Nome:<p></p>
    <input autofocus type = "text" name = "nome_equipamento" value="<?php echo $info['nome_equipamento']; ?>"/> <p></p><p></p>
    Caixa:<p></p>
    
    <select name = "caixa">
        <option>  </option>
        <option value = "1 - TELEFONIA" <?php if($info['caixa'] == "1 - TELEFONIA"){ echo 'selected';}  ?>  >1 - TELEFONIA</option>        
        <option value = "2 - TELEFONIA" <?php if($info['caixa'] == "2 - TELEFONIA"){ echo 'selected';}  ?>  >2 - TELEFONIA</option>
        <option value = "3 - ENERGIA" <?php if($info['caixa'] == "3 - ENERGIA"){ echo 'selected';}  ?>  >3 - ENERGIA</option>
        <option value = "4 - TELEFONIA(CABOS)" <?php if($info['caixa'] == "4 - TELEFONIA(CABOS)"){ echo 'selected';}  ?>  >4 - TELEFONIA(CABOS)</option>
        <option value = "5 - INTERNET" <?php if($info['caixa'] == "5 - INTERNET"){ echo 'selected';}  ?>  >5 - INTERNET</option>
        <option value = "6 - CABOS(VGA,HDMI,ETC)" <?php if($info['caixa'] == "6 - CABOS(VGA,HDMI,ETC)"){ echo 'selected';}  ?>  >6 - CABOS(VGA,HDMI,ETC)</option>
        <option value = "7 - TONNER: IMPRESSORA" <?php if($info['caixa'] == "7 - TONNER: IMPRESSORA"){ echo 'selected';}  ?>  >7 - TONNER: IMPRESSORA</option>
        <option value = "8 PENDRIVE E ADPADORES DE TOMADA" <?php if($info['caixa'] == "8 PENDRIVE E ADPADORES DE TOMADA"){ echo 'selected';}  ?>  >8 PENDRIVE E ADPADORES DE TOMADA</option>
        <option value = "9 - EQUIP. DE TOMADAS" <?php if($info['caixa'] == "9 - EQUIP. DE TOMADAS"){ echo 'selected';}  ?>  >9 - EQUIP. DE TOMADAS</option>
        <option value = "10 - MOUSES" <?php if($info['caixa'] == "10 - MOUSES"){ echo 'selected';}  ?>  >10 - MOUSES</option>
    </select><p></p>
    Ocupado:<p></p>
    <select name = "ocupado">
        <option>  </option>
        <option value = "SIM" <?php if($info['ocupado'] == "SIM"){ echo 'selected';}  ?> >SIM</option>
        <option value = "NAO" <?php if($info['ocupado'] == "NAO"){ echo 'selected';}  ?> >NAO</option>
    </select><p></p>
    <input type = "submit" value = "EDITAR" />
    
</form>