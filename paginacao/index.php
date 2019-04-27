<?php

    try{
        $dsn = "mysql:dbname=blog;host=localhost";
        $dbuser = "root";
        $dbpass = "";
        $pdo = new PDO($dsn, $dbuser, $dbpass);
    } 
    catch(PDOException $exception){
        die($exception->getMessage());
    }
    $total = 0;
    $pg = 1;
    if(isset($_GET['p']) && (!empty($_GET['p']))){
        $pg = addslashes($_GET['p']);
    }
    $p = ($pg - 1) * 5;



    $sql = "SELECT COUNT(*) as C FROM posts";
    $sql = $pdo->query($sql);
    $sql = $sql->fetch();
    $total = $sql['C'];
    $paginas = $total / 5;

    $sql = "SELECT * FROM posts LIMIT $p, 5";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        
        foreach($sql->fetchAll() as $item) {
            echo $item['id_post'].' - '.$item['titulo'].'<br/>';
        }
    }

    echo "<br/>";
    for ($q=0; $q<$paginas; $q++) { 
        echo '<a href="./?p='.($q+1).'">[ '.($q+1).' ]</a>'; 
    }

?>