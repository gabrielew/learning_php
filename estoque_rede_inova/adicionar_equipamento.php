<h2> ADICIONAR EQUIPAMENTO: </h2>

<form method = "POST" action = "adicionarEQP_submit.php"> 

    Nome:<p></p>
    <input autofocus type = "text" name = "nome_equipamento" /> <p></p><p></p>
    Caixa:<p></p>
    <select name = "caixa">
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
    
    Ocupado:<p></p>
    <select name = "ocupado">
        <option>  </option>
        <option value = "SIM">SIM</option>
        <option value = "NAO">NAO</option>
    </select><p></p>
    <input type = "submit" value = "Adicionar" />

</form>