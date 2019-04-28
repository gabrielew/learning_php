<h1> Digite usuário ou e-mail do usuário: </h1>

<form method = "POST">

    <input autofocus type = "text" name = "campo" />
    <input type = "submit" value = "Pesquisar" />
    <hr/>
</form>


<?php
    if(!empty($_POST['campo'])){
        $campo = $_POST['campo'];

        try {
            $pdo = new PDO(
                "mysql:dbname=blog;
                host=localhost",
                "root", 
                "");
        } catch (PDOException $ex) {
            echo "ERRO: ".$ex->getMessage();
            exit;
        }

        $sql = "SELECT * FROM usuarios WHERE (usuario = :usuario) OR (email = :email)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":usuario", $campo);
        $sql->bindValue(":email", $campo);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            echo "Nome: ".$sql['nome'];
        }
        else{
            echo "Nome: Não encontrado";
        }
    }
?>