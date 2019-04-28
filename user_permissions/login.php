<?php
    session_start();
    require 'config.php';
    require 'classes/usuarios.class.php';

    if(!empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = md5($_POST['senha']);

        $usuarios = new Usuarios($pdo);

        if($usuarios->fazerLogin($email, $senha)) {
            header("Location: index.php");
            exit;
        } else {
            echo "Login Failed";
        }
    }
?>
<h1> LOGIN: </h1>
<form method = "POST"> 
    EMAIL:<br/>
    <input type = "email" name = "email" /> <p></p>
    SENHA:<br/>
    <input type = "password" name = "senha" /> <p></p>

    <input type = "submit" value = "Logar" /> <p></p>
</form>