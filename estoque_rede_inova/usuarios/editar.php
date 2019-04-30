<?php 
    include 'usuario.class.php';
    $usuario = new Usuario();

    if(!empty($_GET['id_usuario'])){
        $id_usuario = $_GET['id_usuario'];
        $info = $usuario->selectById($id_usuario);

        if(empty($info['setor'])){
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

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css"> 

<form method = "POST" action = "editar_submit.php"> 
    <input type = "hidden" name = "id_usuario" value="<?php echo $info['id_usuario']; ?>"/>
    Nome:<p></p>
    <input class = "form-control" autofocus type = "text" name = "nome_usuario" value="<?php echo $info['nome_usuario']; ?>"/> <p></p><p></p>
    Setor:<p></p>
    <select class = "form-control" name = "setor">
        <option>  </option>
        <option value = "ANJO" <?php if($info['setor'] == ""){ echo 'selected';}  ?>  >ANJO</option>
        <option value = "ADMINISTRATIVO" <?php if($info['setor'] == "ADMINISTRATIVO"){ echo 'selected';}  ?>  >ADMINISTRATIVO</option>
        <option value = "COMERCIAL" <?php if($info['setor'] == "COMERCIAL"){ echo 'selected';}  ?>  >COMERCIAL</option>
        <option value = "MARKETING" <?php if($info['setor'] == "MARKETING"){ echo 'selected';}  ?>  >MARKETING</option>
        <option value = "TECNOLOGIA" <?php if($info['setor'] == "TECNOLOGIA"){ echo 'selected';}  ?>  >TECNOLOGIA</option>
    </select><p></p>
    <input class = "btn btn-success" type = "submit" value = "EDITAR" />

</form>