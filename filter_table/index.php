<?php 
    try {
        $pdo = new PDO(
            "mysql:dbname=blog;
            host=localhost",
            "root",
            ""
        );
    } catch (PDOException $ex) {
        echo "ERRO: ".$ex->getMessage();
    }

    /* isset e && != '' :para ignorar campos com 0 e 1 */
        if(isset($_POST['sexo']) && $_POST['sexo'] != '') {
            $sexo = $_POST['sexo'];
            $sql = "SELECT * FROM usuarios WHERE sexo = :sexo";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":sexo", $sexo);
            $sql->execute();
        } else {
            $sexo = '';
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);
        }  
?>

<form method = "POST"> 
    <select autofocus name = "sexo">
        <option>  </option>
        <option value = "M" <?php echo ($sexo=='M')?'selected="selected"':''; ?> > Masculino </option>
        <option value = "F" <?php echo ($sexo=='F')?'selected="selected"':''; ?> > Feminino </option>
    </select>
    <input type = "submit" value = "Filtrar" />
</form>

<table border = "1" width = "100%">
    <tr>
        <th> Usuário </th>
        <th> Nome </th>
        <th> E-mail </th>
        <th> Sexo </th>
    </tr>
    <?php 

    $sexos = array(
        'M' => 'Masculino',
        'F' => 'Feminino'
    );            

        if($sql->RowCount() > 0){
            foreach ($sql->fetchAll() as $usuario) { ?>
                <tr>
                    <td> <?php echo $usuario['usuario'] ?> </td>
                    <td> <?php echo $usuario['nome'] ?> </td>
                    <td> <?php echo $usuario['email'] ?> </td>
                    <td> <?php echo $sexos[$usuario['sexo']] ?> </td>
                </tr>
    <?php            
            }
        }
    ?>
</table>