<?php 
    include 'contato.class.php';
    $contato = new Contato();

    if(!empty($_GET['id_contato'])){
        $id_contato = $_GET['id_contato'];
        $info = $contato->selectById($id_contato);

        if(empty($info['email'])){
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

<form method = "POST" action = "editar_submit.php"> 
    <input type = "hidden" name = "id_contato" value="<?php echo $info['id_contato']; ?>"/>
    Nome:<p></p>
    <input autofocus type = "text" name = "nome" value="<?php echo $info['nome']; ?>"/> <p></p><p></p>
    Email:<p></p>
    <input type = "text" name = "email" value="<?php echo $info['email']; ?>"/> <p></p><p></p>
    <input type = "submit" value = "EDITAR" />

</form>